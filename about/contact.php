<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
/* The purpose of this pages is to get client information and send an email to you */
$target = 'info@chtglobal.com'; // WHO is getting this email? , info@chtglobal.com
?>

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">


<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="cache-control" content="no-cache" />
  <meta name="revisit-after" content="15 days" />
  <meta name="robots" content="index,follow" />
  <meta name="publisher" content="CHT Global" />
  <meta name="copyright" content="CHT Global" />
  <meta name="author" content="CHT Global" />
  <meta name="distribution" content="global" />
  <meta name="description" content="CHT Global offers many enterprise, residential, and carrier solutions to bridge the gap around the world; reducing complexity and cost, while bringing up efficiency, effectiveness, and value" />
  <meta name="keywords" content="CHT Global, Chunghwa Telecom, Taiwan, China, Asia-Pacific, Transpacific, global network, IP solutions, voice wholesale, data wholesale, carrier to carrier, submarine cables, private lines, ipl, iplc, network, backbone, infrastructure, high bandwidth, mpls vpn, ez vpn, direct internet access, idc, dia, internet data center, cloud computing, virtual private data center, toll free conferencing, long distance voice, calling card, international private lines, global ethernet, integrated voice and data solutions, contact, contact us, about cht global" />
  <link rel="stylesheet" type="text/css" media="screen,projection,print" href="/css/about_setup.css" />
  <link rel="stylesheet" type="text/css" media="screen,projection,print" href="/css/about_text.css" />
  <link rel="icon" type="image/x-icon" href="/img/favicon.ico" />
  <title>CHT Global | Contact Us</title>
  
<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.min.js"></script>
<script type="text/javascript" src="scripts/jquery.metadata.js"></script>

<script>
$(document).ready(function(){ 	
	//$("#form").validate();
	
	$.metadata.setType("attr", "validate");

	$("#form").validate({
	    rules:
		{
			name:
			{
				required: true,
				minlength: 2,

				//url: true
				//email:true
				//date:true
				//number:true
			},
			email:
			{
				required: true,
				minlength: 2,
				email:true
			},
			comment:
			{
				required: true,
				minlength: 2
			}
			

		}

	});
	
});
</script>

<style type="text/css">
label { width: 10em; float: left; }
label.field { float:none; font-size:10px}
label.error { float: none; color: red; padding-left: .5em; vertical-align: top; }
span.required { color:red; }
.irobot { visibility:hidden; }
#contact_form { text-align:center;  }
#content { margin:0 auto; text-align:left; width:700px; }
</style>
  
  <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-19606990-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<!-- Global IE fix to avoid layout crash when single word size wider than column width -->
<!--[if IE]><style type="text/css"> body {word-wrap: break-word;}</style><![endif]-->

<body>
  <!-- Main Page Container -->
  <div class="page-container">

   <!--  START COPY here -->

    <!-- A. HEADER -->      
    <div class="header">
      
      <!-- A.1 HEADER TOP -->
      <div class="header-top">
    
        
        <!-- Sitelogo and sitename -->
        <a class="sitelogo" href="/" title="Home"><img src="/img/cht_global_logo.jpg" alt="CHT Global Logo" /></a>
        
    
		   <div class="nav0">
			<h1>&nbsp;</h1>
			<h2>"Driving the 'Global' Agenda in Telecommunications"</h2>
		   </div>
      </div>
            
        <!-- A.3 HEADER BOTTOM -->
      <div class="header-bottom"><!-- Navigation Level 2 (Drop-down menus) -->
        <div class="top-nav">
	
          <!-- Navigation item -->
          <ul>
            <li><a href="/">Home</a></li>
          </ul>
          
          <!-- Navigation item -->
          <ul>
            <li><a href="/enterprise/">Enterprise<!--[if IE 7]><!--></a><!--<![endif]-->
              <!--[if lte IE 6]><table><tr><td><![endif]-->
                <ul>
                  <li><a href="/enterprise/intl-private-lines/">Intl Private Lines</a></li>
                  <li><a href="/enterprise/global-ethernet/">Global Ethernet</a></li>
                  <li><a href="/enterprise/global-mpls-vpn/">Global MPLS-VPN</a></li>
                  <li><a href="/enterprise/global-ez-vpn/">Global EZ-VPN</a></li>
                  <li><a href="/enterprise/dedicated-internet/">Dedicated Internet</a></li>
                  <li><a href="/enterprise/integrated-voice-data/">Integrated Voice & Data</a></li>
                  <li><a href="/enterprise/toll-free-conferencing/">Toll Free Conferencing</a></li>
              	  <li><a href="/enterprise/long-distance-voice/">Long Distance Voice</a></li>
              	  <li><a href="/enterprise/idc-hosting/">IDC Hosting</a></li>
               	  <li><a href="/enterprise/cloud-computing/">Cloud Computing</a></li>
                  <li><a href="/enterprise/net2mail-email-hosting/">Net2Mail Email Hosting</a></li><li><a href="/enterprise/domain-registration/">Domain Hosting Registration</a></li>                </ul>
              <!--[if lte IE 6]></td></tr></table></a><![endif]-->
            </li>
          </ul>
          <!-- Navigation item -->
           <ul>
            <li><a href="/residential/">Residential<!--[if IE 7]><!--></a><!--<![endif]-->
              <!--[if lte IE 6]><table><tr><td><![endif]-->
                <ul>
                  <li><a href="/residential/net-calling-card/">Net Calling Card</a></li>
              </ul>
			  <!--[if lte IE 6]></td></tr></table></a><![endif]-->
            </li>
          </ul>
		  <!-- Navigation item -->
          <ul>
            <li><a href="/carrier/">Carrier<!--[if IE 7]><!--></a><!--<![endif]-->
              <!--[if lte IE 6]><table><tr><td><![endif]-->
                <ul>
                  <li><a href="/carrier/voice-wholesale/">Voice WholeSale</a></li>
                  <li><a href="/carrier/data-wholesale/">Data WholeSale</a></li>
              </ul> 
			  <!--[if lte IE 6]></td></tr></table></a><![endif]-->
            </li>
          </ul>
          <ul>
            <li><a href="/about/">About Us<!--[if IE 7]><!--></a><!--<![endif]-->
              <!--[if lte IE 6]><table><tr><td><![endif]-->
			  
                <ul>
                  <li><a href="/about/vision.html">Vision</a></li>
                  <li><a href="/about/history.html">History</a></li>
                  <li><a href="/about/careers.html">Careers</a></li>
                  <li><a href="/about/news/">News</a></li>
                  <li><a href="/about/contact.html">Contact</a></li>
                </ul>
				<!--[if lte IE 6]></td></tr></table></a><![endif]-->
			</li>
		   </ul>
		   <!-- Navigation item -->
               <ul>
            	<li><a href="/about/contact.html">Contact</a></li>
          	   </ul>
			    <!-- Navigation item -->
             <ul>
            <li><a href=" ">Blog</a></li>
        	 </ul>
                              
        </div>
	  </div>

      <!-- A.4 HEADER BREADCRUMBS -->

      <!-- Breadcrumbs -->
      <div class="gap"></div>
    </div>
   <!--  END COPY here -->

    <!-- B. MAIN -->
    <div class="main">
    
 
      <!-- B.1 MAIN NAVIGATION -->
      <div class="main-navigation">
		<div class="map"><a href="/cht-global-infrastructure.pdf" title="CHT Global Network Infrastructure Backbone Map" id="cht-global-network"></a>
        </div>
        
        <!-- Navigation Level 3 -->
        <h1 class="first">About Us</h1>

        <!-- Navigation with grid style -->
        <dl class="left-nav">
           
          <dt><a href="vision.html">Vision</a></dt>
          <dt><a href="history.html">History</a></dt>	
          <dt><a href="careers.html">Careers</a></dt>
          <dt><a href="news/">News</a></dt>
          <dt><a href="contact.html">Contact</a></dt>
        </dl>                        

      </div>
 
      <!-- B.1 MAIN CONTENT -->
      <div class="main-content">
        <!-- Content unit - One column -->
           <div class="breadcrumbs">
            <ul>
              <li><a href="/"> Home</a></li>
              <li><a href="/about/"> About Us</a></li>
              <li>Contact Us</li></ul>
        </div>
        <h1 class="block">Contact</h1>
        
        <div class="main-image">
           <img src="contact.jpg" />
        </div>
         
        
            
       
        <div class="column1-unit">
       
          <h2>Global Headquarters</h2>


<p>
2107 N. First St, Suite 580<br>
San Jose, CA 95131<br>
Tel: 1-877-998-1898<br>
Tel: 1-408-988-1898<br>
Fax: 1-408-573-7168<br>
</p>
<p>&nbsp; </p>


<table style="width:200px; border="0">
<tbody>
<tr>
<td width="35"><a href="http://www.linkedin.com/companies/cht-global" alt="CHT Global Linkedin Page" target="_blank"><img src="/img/linkedin_48.png" alt="CHT Global Linkedin Page" title="CHT Global Linkedin Page" width="35" height="35" border="0"></a></td>
<td width="35"><a href="http://www.facebook.com/pages/CHT-Global/164246300252484" alt="CHT Global Facebook Page" target="_blank"><img src="/img/facebook_48.png" alt="CHT Global Facebook Page" title="CHT Global Facebook Page" width="35" height="35" border="0"></a></td>
<td width="35"><a href="http://www.twitter.com/chtglobal" alt="CHT Global Twitter Page" target="_blank"><img src="/img/twitter_48.png" alt="CHT Global Twitter Page" title="CHT Global Twitter Page" width="35" height="35" border="0"></a></td>
<td width="35"><a href="http://www.youtube.com/CHTGLOBAL" alt="CHT Global YouTube Page" target="_blank"><img src="/img/youtube_48.png" alt="CHT Global Youtube Page" title="CHT Global YouTube Page" width="35" height="35" border="0"></a></td>
</tr>
</tbody>
</table>

<p>&nbsp;</p>

<?php

$nameError = ""; // set global vars to be empty
$levelError = "";
$typeError = "";

function validate($fname, $lname, $cname, $email, $phone, $comment)  // returns true if no field is empty
{
   global $nameError, $levelError, $typeError;   // use global vars, not local
   $valid = true;

   $fname = trim($fname); // delete excess spaces with trim(), save into $name
   $lname = trim($lname);
   $lname = trim($cname);
   $email = trim($email);
   $phone = trim($phone);
   $comment = trim($comment);
   
   $fname = htmlspecialchars(strip_tags($fname));
   $lname = htmlspecialchars(strip_tags($lname));
   $cname = htmlspecialchars(strip_tags($cname));
   $email = htmlspecialchars(strip_tags($email, '<p><a><br /><br /><br>'));
   $comment = htmlspecialchars(strip_tags($comment, '<p><a><br /><br /><br>'));

   if(empty($fname))
   {
      $valid = false;
      $nameError = 'First Name';
   }
   elseif(!ctype_alpha($fname))
   {
      $valid = false;
      $nameError = 'Please only enter letters for your first name';
   }
   elseif(strlen($fname) < 2 || strlen($fname) > 24)
   {
      $valid = false;
      $nameError = 'Please enter a name between 2 and 24 letters long.';
   }
   
   if(empty($lname))
   {
      $valid = false;
      $nameError = 'Last Name';
   }
   elseif(!ctype_alpha($lname))
   {
      $valid = false;
      $nameError = 'Please only enter letters for your last name';
   }
   elseif(strlen($lname) < 2 || strlen($lname) > 24)
   {
      $valid = false;
      $nameError = 'Please enter a name between 2 and 24 letters long.';
   }
   
   
      if(empty($cname))
   {
      $valid = false;
      $nameError = 'Company Name';
   }
   elseif(!ctype_alpha($cname))
   {
      $valid = false;
      $nameError = 'Please only enter letters for your company name';
   }
   elseif(strlen($cname) < 2 || strlen($cname) > 24)
   {
      $valid = false;
      $nameError = 'Please enter a name between 2 and 24 letters long.';
   }
   
   
   
   
   
   if(empty($email))
   {
      $valid = false;
      $nameError = 'Please enter your email';
   }
   elseif(strlen($email) < 3 || strlen($email) > 36)
   {
      $valid = false;
      $nameError = 'Please enter a name between 3 and 36 characters long.';
   }
   
      if(empty($phone))
   {
      $valid = false;
      $nameError = 'Phone Number';
   }
   elseif(!ctype_digit($phone))
   {
      $valid = false;
      $nameError = 'Please only enter numbers, ie: 415XXX1234';
   }
   elseif(strlen($phone) < 10 || strlen($phone) > 24)
   {
      $valid = false;
      $nameError = 'Please enter a number between 10 and 24 digits long.';
   }
   
   
   if(empty($comment))
   {
      $valid = false;
      $nameError = 'Please enter your inquiry';
   }
   elseif(strlen($comment) < 3 || strlen($comment) > 1000)
   {
      $valid = false;
      $nameError = 'Please enter a comment or question of more than 3 characters but less than 1000 characters.';
   }

   return $valid;
}

function show_form($fname="", $lname="", $email="", $phone="", $comment="")  // default values are empty
{
   global $nameError, $levelError, $typeError; // use global vars, not local ones
   
// Jump out of php to create form
?>

<div id="contact-form">
<div id="content">

<h1>Contact Form</h2>

<p>All fields are required</p>

<p>Please only enter alphabetical characters for your name<br />
(no spaces, periods, symbols, entities, or foreign characters)</p>

<form id="form" class="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<span class="required">*</span> <label class="field" for="name">First Name:</label> <input type="text" name="fname" value="<?php echo addslashes($_POST['fname']); ?>" id="fname" class="required" minlength="2" maxlength="24" /><br />
<span class="required">*</span> <label class="field" for="name">Last Name:</label> <input type="text" name="lname" value="<?php echo addslashes($_POST['lname']); ?>" id="lname" class="required" minlength="2" maxlength="24" /><br />
<span class="required">*</span> <label class="field" for="name">Company Name:</label> <input type="text" name="cname" value="<?php echo addslashes($_POST['cname']); ?>" id="cname" class="required" minlength="2" maxlength="24" /><br />
<span class="required">*</span> <label class="field" for="email">Email Address:</label> <input type="text" name="email" value="<?php echo addslashes($_POST['email']); ?>" id="email" class="required" minlength="3" maxlength="36" /><br />
<span class="required">*</span> <label class="field" for="phone">Phone Number:</label> <input type="text" name="phone" value="<?php echo addslashes($_POST['phone']); ?>" id="phone" class="required" minlength="10" maxlength="24" /><br />
<span class="required">* </span> <label class="field" for="comment">Inquiry Message to CHT Global:</label><br />
<textarea name="comment" class="comment" id="comment" rows="10" cols="40" maxlength="1000"><?php echo addslashes($_POST['comment']); ?></textarea>
<input type="text" name="irobot" class="irobot" id="irobot" />
<br />
<input type="submit" class="submit" id="submit" value="Send Email" />
</form>
<?php

} 
// end show_form()

if($_SERVER['REQUEST_METHOD'] == 'POST'){  // has form data been entered yet? if yes, validate data
	   $fname = $_POST['fname'];
	   $lname = $_POST['lname'];
	   $cname = $_POST['cname'];
	   $email = $_POST['email'];
	   $phone = $_POST['phone'];
	   $comment = $_POST['comment'];
	   $irobot = $_POST['irobot']; // No human should see or enter anything in here, if it's filled out that means you got spam mail

	   /*
	   echo $fname.'<br />';
	   echo $lname.'<br />';
	   echo $cname.'<br />';
	   echo $email.'<br />';
	   echo $phone.'<br />';
	   echo $comment.'<br />';
	   */
		
   if(validate( $_POST['fname'], $_POST['lname'], $_POST['cname'], $_POST['email'], $_POST['phone'], $_POST['comment'] ) && empty($irobot)){ // validate() is a custom function

		// all checks passed, send email and redirect to thank you page
		
		//error_reporting(0);  // turns off error reporting
		//$target = 'info@chtglobal.com'; // WHO is getting this email? , info@chtglobal.com
		//$subject = stripslashes($_POST['subject']);
		if(empty($target)){ $target = 'info@chtglobal.com'; }
		$subject = 'Comment from the Contact Form!';
		$email = stripslashes($_POST['email']);
		$phone = stripslashes($_POST['phone']);
		$company = stripslashes($_POST['cname']);
		$from = stripslashes($_POST['fname']) . " " .
			 stripslashes($_POST['lname']);
		$msg = "Message from: $from\n" . "Company: $company\n" . "Email: $email\n" . "Phone: $phone\n" . "Subject: $subject\n" . stripslashes($_POST['comment']);
		
		if(mail($target, $subject, $msg)){  // If mail sent successfully, redirect to thank you page
			
			echo '<script type="text/javascript">';
			echo 'location.replace("thankyou.html");';
			echo '</script>';
			echo '<noscript>';
			echo '<meta http-equiv="Refresh" content="0; URL=thankyou.html">';
			echo '</noscript>';
			echo '<a href="thankyou.html">Thank You</a>';
		}
		else{  // Failure to send mail
			echo "We are sorry for the technical difficulties we are \n";
			echo 'experiencing at the moment. <a href="contact.php">Please try again later</a>.';
			
			exit();
		}	
   }
   else{   // fields are empty or incorrect, so we show the errors

		echo '<div id="contact-form"><div id="content">';
		echo '<span class="required">';
		echo $nameError;
		echo '</span>';
		echo '<br /><br />';
		echo '</div></div>';
		
		show_form(htmlentities($name), htmlentities($level), htmlentities($type));
   }
}
else{  // no request yet, therefore, show the form

   echo '<br /><br />';
   show_form(); // show_form() is a custom function
}
?>
</div><!-- end content div -->
</div><!-- end containing div -->












        </div>

      <!-- Content unit - Two columns --></div>
                
      <!-- B.3 SUBCONTENT -->
      <div class="main-subcontent">

        <!-- Subcontent unit -->
        <div class="subcontent-unit-border">
          
          <h1>Customer Service</h1>
          <p><strong>Toll Free Number: 1-877-998-1898</strong></p>

        </div>

        <!-- Subcontent unit --><!-- Subcontent unit --><!-- Subcontent unit --><!-- Subcontent unit --><!-- Subcontent unit -->
      <div class="subcontent-unit-border">
        
          <h3>Our Mission: <br /> The Global Agenda</h3>
          <p>Your global success is CHT Global's success. That's why we've made it our mission to provide the world's leading global network solution service...</p>
        </div>

      
      </div>        
    </div>
      
    <!-- C. FOOTER AREA -->      

    <div class="footer">
      <p class="navigation"><a href="/" title="CHT Global Homepage">Home</a> | <a href="/sitemap.html" title="CHT Global Site Map">Site Map</a> | <a href="/about/" title="About CHT Global">About Us</a> | <a href="/about/contact.html" title="Contact CHT Global">Contact Us</a> | Copyright &copy; CHT Global Corporation, All Rights Reserved</p>
    </div>      
  </div> 
  
</body>
</html>



