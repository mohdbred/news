<?php

require('database.php');
require('email.php');


$curl = curl_init();

$curl = curl_init();
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$query = array(
  "api-key" => "d112fdf251c34b9e89f0b717c5567078"
);
curl_setopt($curl, CURLOPT_URL,
  "https://api.nytimes.com/svc/topstories/v2/arts.json" . "?" . http_build_query($query)
);


$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    $res = json_decode($response, true)['results'];

    $i = 1;

    // check if size of array is > 15 , then do the process else leave
    if (sizeof($res) > 15) {

        // Deleting the contents of database first
        $sql_truncate = "TRUNCATE `arts`";

        if ($conn->query($sql_truncate) === TRUE) {
            // Done successfully
        } else {
            $subject = "Arts Table truncation error " . date("Y-m-d H:i:s");
            $body = "Truncate SQL command got error while executing";
            sendmail($subject, "belal@newspulses.com", "raheem@newspulses.com", "", $body);
            exit();
        }

        // Now inseting each row values in table

        foreach ($res as $key => $value) {

            if (!empty($value['title']) && !empty($value['description']) && !empty($value['url']) && !empty($value['urlToImage'])) {

                $t = stripslashes(json_encode($value));
                $test =  serialize($t);

                $sql = "INSERT INTO arts (data) VALUES ('" . $test . "')";
                if ($conn->query($sql) === TRUE) {
                    // Done successfully
                } else {
                    $subject_insert = "Arts Table Insertion error " . date("Y-m-d H:i:s");
                    $body_insert = "Following is the detail for sql query: <br>" . $sql;
                    sendmail($subject_insert, "belal@newspulses.com", "raheem@newspulses.com", "", $body_insert);
                    exit();
                }
            }
        }
    } else {
        // Catching error 
        $subject_count = "Data from Arts API is below 15 ->  " . date("Y-m-d H:i:s");
        $body_count = "Arts API is not giving enough data: " . sizeof($res);
        sendmail($subject_count, "belal@newspulses.com", "raheem@newspulses.com", "", $body_count);
        exit();
    }
}
?>