<?php

require('database.php');
require('email.php');


$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.nytimes.com/svc/topstories/v2/world.json?country=us&pageSize=100&apiKey=20f81b719fad40058a5428ade7215931",
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

    $i = 1;

    // check if size of array is > 15 , then do the process else leave
    if (sizeof($res) > 15) {

        // Deleting the contents of database first
        $sql_truncate = "TRUNCATE `world`";

        if ($conn->query($sql_truncate) === TRUE) {
            // Done successfully
        } else {
            $subject = "World Table truncation error " . date("Y-m-d H:i:s");
            $body = "Truncate SQL command got error while executing";
            sendmail($subject, "belal@newspulses.com", "raheem@newspulses.com", "", $body);
            exit();
        }

        // Now inseting each row values in table

        foreach ($res as $key => $value) {

            if (!empty($value['title']) && !empty($value['description']) && !empty($value['url']) && !empty($value['urlToImage'])) {

                $t = stripslashes(serialize($value));
                $test = str_replace("'", "\'", $t);

                $sql = "INSERT INTO world (data) VALUES ('" . $test . "')";
                if ($conn->query($sql) === TRUE) {
                    // Done successfully
                } else {
                    $subject_insert = "World Table Insertion error " . date("Y-m-d H:i:s");
                    $body_insert = "Following is the detail for sql query: <br>" . $sql;
                    sendmail($subject_insert, "belal@newspulses.com", "raheem@newspulses.com", "", $body_insert);
                    exit();
                }
            }
        }
    } else {
        // Catching error 
        $subject_count = "Data from world API is below 15 ->  " . date("Y-m-d H:i:s");
        $body_count = "World API is not giving enough data: " . sizeof($res);
        sendmail($subject_count, "belal@newspulses.com", "raheem@newspulses.com", "", $body_count);
        exit();
    }
}
?>
