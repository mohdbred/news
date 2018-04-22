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
        //load the database  
        $this->load->database();
       //echo "Running...";
      //  $this->load->view('news');


        if (!file_exists(APPPATH . '/views/news.php')) {
            //Whoops, we don't have a page for that!
            show_404();
        }
        $data['title'] = ucfirst('news');
        $this->load->view('templates/header', $data);
        $this->load->view('news.php', $data);
        $this->load->view('templates/footer', $data);
    }

    public function news_api() {
        //load the model  
        $this->load->model('News_model');
        $results = $this->News_model->get_records();
        $i = 0;
        foreach ($results as $result) {

           $books[$i] = base64_decode($result['data']); 
           $test = str_replace("\'", "'", $books[$i]);
           $books[$i] = unserialize( $test);
           $i++;
        }

        echo json_encode($books);
    }

    public function category() {

        $key = $_POST['key'];
        $this->load->model('News_model');
        $results = $this->News_model->get_catg($key);
       $i = 0;
        foreach ($results as $result) {
           $books[$i] = base64_decode($result['data']); 
           $books[$i] = unserialize($books[$i]);
             
            $i++;
        }
        echo json_encode($books);
    }

    public function trending() {

        $key = $_POST['key'];
        $this->load->model('News_model');
        $results = $this->News_model->get_trending();
       $i = 0;
        foreach ($results as $result) {
           $books[$i] = base64_decode($result['data']); 
           $books[$i] = unserialize($books[$i]);
             
            $i++;
        }
        echo json_encode($books);
    }


    public function technology() {
        if (!file_exists(APPPATH . '/views/technology.php')) {
            //Whoops, we don't have a page for that!
            show_404();
        }
        $data['title'] = ucfirst('technology');
         $this->load->view('templates/header', $data);
        $this->load->view('technology.php', $data);
        $this->load->view('templates/footer', $data);

       // $this->load->view('comingsoon.php', $data);
    }

    public function politics() {
        if (!file_exists(APPPATH . '/views/politics.php')) {
            //Whoops, we don't have a page for that!
            show_404();
        }
        $data['title'] = ucfirst('politics');
         $this->load->view('templates/header', $data);
        $this->load->view('politics.php', $data);
        $this->load->view('templates/footer', $data);

       // $this->load->view('comingsoon.php', $data);
    }

    public function education() {
        if (!file_exists(APPPATH . '/views/education.php')) {
            //Whoops, we don't have a page for that!
            show_404();
        }
        $data['title'] = ucfirst('education');
         $this->load->view('templates/header', $data);
        $this->load->view('education.php', $data);
        $this->load->view('templates/footer', $data);

       // $this->load->view('comingsoon.php', $data);
    }

   public function art() {
        if (!file_exists(APPPATH . '/views/art.php')) {
            //Whoops, we don't have a page for that!
            show_404();
        }
        $data['title'] = ucfirst('education');
         $this->load->view('templates/header', $data);
        $this->load->view('education.php', $data);
        $this->load->view('templates/footer', $data);

       // $this->load->view('comingsoon.php', $data);
    }

    public function bussiness() {
        if (!file_exists(APPPATH . '/views/bussiness.php')) {
            //Whoops, we don't have a page for that!
            show_404();
        }
        $data['title'] = ucfirst('business');
         $this->load->view('templates/header', $data);
        $this->load->view('bussiness.php', $data);
        $this->load->view('templates/footer', $data);

      //  $this->load->view('comingsoon.php', $data);
    }

    public function entertainment() {
        if (!file_exists(APPPATH . '/views/entertainment.php')) {
            //Whoops, we don't have a page for that!
            show_404();
        }
        $data['title'] = ucfirst('entertainment');
         $this->load->view('templates/header', $data);
        $this->load->view('entertainment.php', $data);
        $this->load->view('templates/footer', $data);

       // $this->load->view('comingsoon.php', $data);
    }

    public function sports() {
        if (!file_exists(APPPATH . '/views/sports.php')) {
            //Whoops, we don't have a page for that!
            show_404();
        }
        $data['title'] = ucfirst('sports');
         $this->load->view('templates/header', $data);
        $this->load->view('sports.php', $data);
        $this->load->view('templates/footer', $data);

       // $this->load->view('comingsoon.php', $data);
    }

    public function about_us() {
        if (!file_exists(APPPATH . '/views/pages/about_us.php')) {
            //Whoops, we don't have a page for that!
            show_404();
        }
        $data['title'] = ucfirst('about us');
        $this->load->view('templates/header', $data);
        // $this->load->view('pages/about_us.php', $data);
        // $this->load->view('templates/footer', $data);
         $this->load->view('comingsoon.php', $data);
    }

    public function contact() {
        if (!file_exists(APPPATH . '/views/pages/contact.php')) {
            //Whoops, we don't have a page for that!
            show_404();
        }
        $data['title'] = ucfirst('contact');
        $this->load->view('templates/header', $data);
        // $this->load->view('pages/contact.php', $data);
        // $this->load->view('templates/footer', $data);
         $this->load->view('comingsoon.php', $data);
    }
    public function privacy() {
        if (!file_exists(APPPATH . '/views/pages/privacy.php')) {
            //Whoops, we don't have a page for that!
            show_404();
        }
        $data['title'] = ucfirst('privacy');
        $this->load->view('templates/header', $data);
        $this->load->view('pages/privacy.php', $data);
        $this->load->view('templates/footer', $data);
    }

}
