<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
echo base_url();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Hello World!</title>
    </head>
     <script src="<?php echo base_url();?>assets/js/jquery-1.7.1.min.js"></script>
    <body>
        <p>
        
          Hello world
        </p>
        <div id="resultdiv"></div>
    </body>
</html>
<script type="text/javascript">
$(document).ready(function() {
 
 //var daat = <?php echo site_url('hello_world/do_search');?>;
//console.log(daat);

  $.ajax({
                type:'GET',
                url:'<?php echo site_url('hello_world/do_search');?>',
                dataType:'json',
                cache : false
                
            }).done(function(data){


            	$('#resultdiv').html(data);
            })
});
</script>