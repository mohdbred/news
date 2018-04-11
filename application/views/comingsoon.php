<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>


      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/maintenance/default.css">
         <link rel="stylesheet" href="<?php echo base_url(); ?>assets/maintenance/layout.css">

  <div class="main-content">
      
   <!-- Intro Section
   ================================================== -->
   <section id="intro">

    <header class="row">   

      <div id="logo" >
        <a href="#" >
                 <img src="./../assets/maintenance/img/logo.png" alt="Zoon">                  
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
           <p>T3 Supreme Tower<br>
            14th Floor,sector 99<br>
             Noida,India
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
  </div>




  <script type="text/javascript">

    (function (window, $, undefined) {

    $("#counter")
  .countdown("2018/04/25", function(event) {
  var $this = $(this).html(event.strftime(''
    + '<span>%d <em>days</em></span> '
    + '<span>%H <em>hours</em></span> '
    + '<span>%M <em>minutes</em></span> '
    + '<span>%S <em>seconds</em></span>'));
 });
    })(window, jQuery);
</script>