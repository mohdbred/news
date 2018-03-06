<?php 
/**
* @author  Mohammad
* @date    24th Feb, 2018
*/

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');
 
class News extends CI_Controller {
     
    public function index() {
  
 // echo "Running...";
  
     $this->load->view('news');
    }

  public function news_api(){

  //  $curl = curl_init();

// curl_setopt_array($curl, array(
//   CURLOPT_URL => "https://newsapi.org/v2/top-headlines?country=us&apiKey=20f81b719fad40058a5428ade7215931",
//   CURLOPT_RETURNTRANSFER => true,
//   CURLOPT_ENCODING => "",
//   CURLOPT_MAXREDIRS => 10,
//   CURLOPT_TIMEOUT => 30,
//   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
//   CURLOPT_CUSTOMREQUEST => "GET",
//   CURLOPT_HTTPHEADER => array(
//     "cache-control: no-cache",
//     "postman-token: 41e6e79d-2ca1-447f-2a7d-181c3517b547"
//   ),
// ));

// $response = curl_exec($curl);
// $err = curl_error($curl);

// curl_close($curl);

  
//echo json_encode($response);


// if ($err) {
//   echo "cURL Error #:" . $err;
// } else {
//   echo json_encode($response);
// }
     
       // echo $data;


      $this->load->library('mongo_db', array('activate'=>'default'),'mongo_db');
     $res = $this->mongo_db->get('top_headlines');
     echo json_encode($res);

    }

}

