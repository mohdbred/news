<?php

require('database.php');

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



    $i = 1;
    foreach ($res as $key => $value) {

        if (!empty($value['multimedia'])) {

            $t = stripslashes(json_encode($value));
            $test = serialize($t);
            $sql = "INSERT INTO technology (data) VALUES ('" . $test . "')";
            if ($conn->query($sql) === TRUE) {
                echo $i++;
                echo "New record created successfully  ----   <br>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error . "<br>";
            }
        }
    }
}
?>


