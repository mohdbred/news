<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Check whether the site is offline or not.
 *
 */
class site_offline_hook {

    public function __construct()
    {
    log_message('debug','Accessing site_offline hook!');
    }
    
    public function is_offline()
    {
    if(file_exists(APPPATH.'config/config.php'))
    {
        include(APPPATH.'config/config.php');
        
        if(isset($config['is_offline']) && $config['is_offline']===TRUE)
        {
        $this->show_site_offline();
        exit;
        }
    }
    }

    private function show_site_offline()
    {
		$html = '
<!DOCTYPE html>
<html lang="en"> 
<head>

   <!--- Basic Page Needs
   ================================================== -->
   <meta charset="utf-8">
  <title>NewsPulses</title>
  <meta name="description" content="">
  <meta name="author" content="">

   <!-- Mobile Specific Metas
   ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- CSS
    ================================================== -->
   <link rel="stylesheet" href="./assets/maintenance/default.css">
  <link rel="stylesheet" href="./assets/maintenance/layout.css">
 <!--   <link rel="stylesheet" href="css/media-queries.css">   -->  

 

</head>

<body>


   <!-- Intro Section
   ================================================== -->
   <section id="intro">

    <header class="row">   

      <div id="logo" >
        <a href="#" >
                 <img src="./assets/maintenance/img/logo.png" alt="Zoon">                  
              </a>          
      </div>        

    </header> <!-- Header End -->     

    <div  id="main" class="row">

      <div class="twelve columns">
          
        <h1>We are currently working on something awesome. Stay tuned!</h1>

        <h5>Time Left Until Launching</h5>

        <div id="counter" class="cf">
          <span>4 <em>days</em></span> 
          <span>12 <em>hours</em></span>
          <span>50 <em>minutes</em></span>
          <span>33 <em>seconds</em></span> 
        </div>          

      

           <ul class="social">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a href="#"><i class="fa fa-skype"></i></a></li>
            </ul>

         </div> 
          <!-- Begin MailChimp Signup Form -->
           <div id="mc_embed_signup">
         
          Coming Soon       
          
          
           </div>

      </div> <!-- main end -->      

   </section> <!-- end intro section -->
  


  <!-- Location Section
   ================================================== -->
  <section id="location">

    <div class="contacts">    
      
      <div class="row contact-details">                          

         <div class="columns">

           <h3><i class="fa fa-home"></i>Address.</h3>
           <p>New Delhi
          </p>

         </div> 

         <div class="columns">

           <h3><i class="fa fa-phone"></i>Phone Numbers.</h3>
           <p>Phone: (000) 777 1515<br>
            Mobile: (000) 777 0100<br>
            Fax: (000) 777 0101
           </p>

         </div>  

         <div class="columns end">

           <h3><i class="fa fa-envelope"></i>Emails.</h3>
           <p>mohammad@newspulses.com <br>
            belal@newspulses.com<br>
            info@newspulses.com
           </p>

         </div>           

      </div> <!-- end contact-details -->     

    </div> <!-- end contacts -->

  </section> <!-- end location section -->

  

   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>



  <!--  <script src="js/gmaps.js"></script>
   <script src="js/waypoints.js"></script> -->
   <script src="./assets/maintenance/jquery.countdown.js"></script>
<!--    <script src="js/jquery.placeholder.js"></script> -->
   <script src="./assets/maintenance/backstretch.js"></script> 
    <script src="./assets/maintenance/counter.js"></script>   
 <!--   <script src="js/init.js"></script> -->

</body>

</html>
';
		
    echo $html;
    }

}
/* Location: ./system/application/hooks/site_offline_hook.php */