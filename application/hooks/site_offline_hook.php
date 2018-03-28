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
<html>
<head>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<title>Performing Maintenance</title>
<style type="text/css">
      body { text-align: center; padding: 150px; }
      h1 { font-size: 40px; }
      body { font: 20px Helvetica, sans-serif; color: #333; }
      #article { display: block; text-align: left; width: 650px; margin: 0 auto; }
      a { color: #dc8100; text-decoration: none; }
      a:hover { color: #333; text-decoration: none; }
    </style>
</head>
<body>
<div id="article">
<h1>Our site is getting a little tune up and some love.</h1>
<div>
<p>We apologize for the inconvenience, but we are performing some maintenance. You can still contact us at <a href="mailto:info@newspulses.com"><span class="__cf_email__" data-cfemail="5a3f373b33361a3e35373b333474393537">[email&#160;protected]</span></a>. We will be back up soon!</p>
<p> - Newspulses</p>
</div>
</div>
<script data-cfasync="false" src="/cdn-cgi/scripts/d07b1474/cloudflare-static/email-decode.min.js"></script></body>
</html>';
		
    echo $html;
    }

}
/* Location: ./system/application/hooks/site_offline_hook.php */