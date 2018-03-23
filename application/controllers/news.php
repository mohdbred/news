<?php

/**
 * @author  Mohammad
 * @date    24th Feb, 2018
 */
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class News extends CI_Controller {

    public function index() {

        // echo "Running...";
       $this->load->view('news');
    }

    public function news_api() {
        $this->load->library('mongo_db', array('activate' => 'default'), 'mongo_db');
        $res = $this->mongo_db->get('top_headlines');
        echo json_encode($res);
    }

    public function category() {

        $key = $_POST['key'];
        $this->load->library('mongo_db', array('activate' => 'default'), 'mongo_db');
        $res = $this->mongo_db->get($key);
        echo json_encode($res);
    }



     public function technology() {
    if ( ! file_exists(APPPATH.'/views/technology.php')) {
      //Whoops, we don't have a page for that!
      show_404();
    }       
    $data['title'] = ucfirst('technology'); 
    $this->load->view('templates/header', $data);
    $this->load->view('technology.php', $data);
    $this->load->view('templates/footer', $data);
    }
    public function politics() {
    if ( ! file_exists(APPPATH.'/views/politics.php')) {
      //Whoops, we don't have a page for that!
      show_404();
    }       
    $data['title'] = ucfirst('politics'); 
    $this->load->view('templates/header', $data);
    $this->load->view('politics.php', $data);
    $this->load->view('templates/footer', $data);
  }

  public function education() {
    if ( ! file_exists(APPPATH.'/views/education.php')) {
      //Whoops, we don't have a page for that!
      show_404();
    }       
    $data['title'] = ucfirst('education'); 
    $this->load->view('templates/header', $data);
    $this->load->view('education.php', $data);
    $this->load->view('templates/footer', $data);
  }
public function bussiness() {
    if ( ! file_exists(APPPATH.'/views/bussiness.php')) {
      //Whoops, we don't have a page for that!
      show_404();
    }       
    $data['title'] = ucfirst('bussiness'); 
    $this->load->view('templates/header', $data);
    $this->load->view('bussiness.php', $data);
    $this->load->view('templates/footer', $data);
  }
  public function entertainment() {
    if ( ! file_exists(APPPATH.'/views/entertainment.php')) {
      //Whoops, we don't have a page for that!
      show_404();
    }       
    $data['title'] = ucfirst('entertainment'); 
    $this->load->view('templates/header', $data);
    $this->load->view('entertainment.php', $data);
    $this->load->view('templates/footer', $data);
  }
    public function sports() {
    if ( ! file_exists(APPPATH.'/views/sports.php')) {
      //Whoops, we don't have a page for that!
      show_404();
    }       
    $data['title'] = ucfirst('sports'); 
    $this->load->view('templates/header', $data);
    $this->load->view('sports.php', $data);
    $this->load->view('templates/footer', $data);
  }


  public function about_us() {
    if ( ! file_exists(APPPATH.'/views/pages/about_us.php')) {
      //Whoops, we don't have a page for that!
      show_404();
    }       
    $data['title'] = ucfirst('about us'); 
    $this->load->view('templates/header', $data);
    $this->load->view('pages/about_us.php', $data);
    $this->load->view('templates/footer', $data);
  }
  public function contact() {
    if ( ! file_exists(APPPATH.'/views/pages/contact.php')) {
      //Whoops, we don't have a page for that!
      show_404();
    }       
    $data['title'] = ucfirst('contact'); 
    $this->load->view('templates/header', $data);
    $this->load->view('pages/contact.php', $data);
    $this->load->view('templates/footer', $data);
  }


}
