<?php 

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

	$con = new Mongo("localhost:27017");

   	$db = $con->selectCollection('news',"top-headlines");

   	$insertOptions = array(
    'safe'    => true,
    'fsync'   => true,
    'timeout' => 10000
	);

	$db->remove();

    foreach ($res as $key => $value) {
      
      if(!empty($value['title']) && !empty($value['description']) && !empty($value['url']) && !empty($value['urlToImage'])){
      	$db->insert($value,$insertOptions);
      }
    }
  
}

?>