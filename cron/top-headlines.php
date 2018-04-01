<?php

require('database.php');
require('email.php');


$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://newsapi.org/v2/top-headlines?country=us&pageSize=100&apiKey=20f81b719fad40058a5428ade7215931",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache",
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    $res = json_decode($response, true)['articles'];

    $last_inserted_id = 0;
    $i = 0;

    //Getting last inserted ID of this table
    $sql_last_inserted_id = "SELECT `id` FROM `top-headlines` ORDER BY `id` desc LIMIT 1";
    $result = $conn->query($sql_last_inserted_id);
    if ($result->num_rows > 0) {
        // Done successfully
        $last_inserted_id = $result->fetch_assoc()['id'];
    } else {
        $subject_insert = "Top-headlines Table Fetching last ID error ->  " . date("Y-m-d H:i:s");
        $body_insert = "Issue in getting last inserted id from table: <br>" . $sql_last_inserted_id;
        sendmail($subject_insert, "belal@newspulses.com", "raheem@newspulses.com", "", $body_insert);
        //exit();
    }
    

    // check if size of array is > 15 , then do the process else leave
    if (sizeof($res) > 5) {

        // Now inseting each row values in table

        foreach ($res as $key => $value) {

            if (!empty($value['title']) && !empty($value['description']) && !empty($value['url']) && !empty($value['urlToImage'])) {

                $t = stripslashes(serialize($value));
                $test = str_replace("'", "\'", $t);

                $sql = "INSERT INTO `top-headlines` (data) VALUES ('" . $test . "')";
                if ($conn->query($sql) === TRUE) {
                    // Done successfully
                    $i++;
                } else {
                    $subject_insert = "top-headlines Table Insertion error " . date("Y-m-d H:i:s");
                    $body_insert = "Following is the detail for sql query: <br>" . $sql;
                    sendmail($subject_insert, "belal@newspulses.com", "raheem@newspulses.com", "", $body_insert);
                    //exit();
                }
            }
        }
        // Now deleting the previous data if no of insertion in > 15
        if ($i >= 15) {
            $sql_truncate = "Delete from `top-headlines` where id <= " . $last_inserted_id;

            if ($conn->query($sql_truncate) === TRUE) {
                // Done successfully
            } else {
                $subject = "Top-headlines Table truncation error " . date("Y-m-d H:i:s");
                $body = "Truncate SQL command got error while executing  : <br>" . $sql_truncate;
                sendmail($subject, "belal@newspulses.com", "raheem@newspulses.com", "", $body);
                //exit();
            }
        }
    } else {
        // Catching error 
        $subject_count = "Data from top-headlines API is below 15 ->  " . date("Y-m-d H:i:s");
        $body_count = "Top-headlines API is not giving enough data: " . sizeof($res);
        sendmail($subject_count, "belal@newspulses.com", "raheem@newspulses.com", "", $body_count);
        //exit();
    }
}
?>
