<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');
 
class Hello_world extends CI_Controller {
     
    public function index() {
        $this->load->view('hello_world');
    }

    public function do_search(){


  $data = array(
    'title'     =>   'Hello World!',
    'content'   =>   'This is the content',
    'posts'     =>   array('Post 1', 'Post 2', 'Post 3')
 
      );
     echo json_encode($data);
       // echo $data;

    }

}

