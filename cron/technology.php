<?php

require('database.php');
require('email.php');


$curl = curl_init();

curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$query = array(
    "api-key" => "d112fdf251c34b9e89f0b717c5567078"
);
curl_setopt($curl, CURLOPT_URL, "https://api.nytimes.com/svc/topstories/v2/technology.json" . "?" . http_build_query($query)
);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    $res = json_decode($response, true)['results'];
    $last_inserted_id = 0;
    $i = 0;

    //Getting last inserted ID of this table
    $sql_last_inserted_id = "SELECT `id` FROM `technology` ORDER BY `id` desc LIMIT 1";
    $result = $conn->query($sql_last_inserted_id);
    if ($result->num_rows > 0) {
        // Done successfully
        $last_inserted_id = $result->fetch_assoc()['id'];
    } else {
        $subject_insert = "Technology Table Fetching last ID error ->  " . date("Y-m-d H:i:s");
        $body_insert = "Issue in getting last inserted id from table: <br>" . $sql_last_inserted_id;
        sendmail($subject_insert, "belal@newspulses.com", "raheem@newspulses.com", "", $body_insert);
        //exit();
    }

    // check if size of array is > 15 , then do the process else leave
    if (sizeof($res) > 15) {

        // Now inseting each row values in table);
        foreach ($res as $key => $value) {

            if (!empty($value['title']) && !empty($value['abstract']) && !empty($value['url']) && !empty($value['multimedia'])) {

                $t = json_encode($value);
                $test = serialize($t);

                $sql = "INSERT INTO technology (data) VALUES ('" . $test . "')";
                if ($conn->query($sql) === TRUE) {
                    // Done successfully
                    $i++;
                } else {
                    $subject_insert = "Technology Table Insertion error " . date("Y-m-d H:i:s");
                    $body_insert = "Following is the detail for sql query: <br>" . $sql;
                    sendmail($subject_insert, "belal@newspulses.com", "raheem@newspulses.com", "", $body_insert);
                    //exit();
                }
            }
        }

        // Now deleting the previous data if no of insertion in > 15
        if ($i >= 15) {
            $sql_truncate = "Delete from technology where id <= " . $last_inserted_id;

            if ($conn->query($sql_truncate) === TRUE) {
                // Done successfully
            } else {
                $subject = "Technology Table truncation error " . date("Y-m-d H:i:s");
                $body = "Truncate SQL command got error while executing  : <br>" . $sql_truncate;
                sendmail($subject, "belal@newspulses.com", "raheem@newspulses.com", "", $body);
                //exit();
            }
        }
    } else {
        // Catching error 
        $subject_count = "Data from technology API is below 15 ->  " . date("Y-m-d H:i:s");
        $body_count = "Technology API is not giving enough data: " . sizeof($res);
        sendmail($subject_count, "belal@newspulses.com", "raheem@newspulses.com", "", $body_count);
        //exit();
    }
}
?>

