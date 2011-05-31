<?php
//Set your email address below (the email address that all correspondence should be set there)
//-------------------------------
$your_email = "sara@mascaradesign.it";
//-------------------------------

if (isset($_POST['contact_form'])) {
	$email      	= $_POST['email'];
	$subject    	= $_POST['name'];
} else {
	$email      	= "";
	$subject    	= "";
}

$response   	= '';
$form_submitted = isset($_POST['contact_form']);
$form_success   = TRUE;

if(!eregi("^[a-z0-9]+([_\\.-][a-z0-9]+)*" ."@"."([a-z0-9]+([\.-][a-z0-9]+)*)+"."\\.[a-z]{2,}"."$",$email ))
{
	$response="Hai inserito un indirizzo e-mail non valido";
	$form_success   = FALSE;
}
else
{
	$values = array ('name','email','phone','message');
	$required = array('name','email','message');
		
	$email_subject = "Contatto dal sito: ".$subject;
	$email_content = "Hai ricevuto il seguente messaggio dal modulo contatti presente nel tuo sito:\n";
	
	foreach($values as $value)
	{		
		if( empty($_POST[$value]) && in_array($value, $required)) 
		{ 
			$response = 'Per favore, riempi i campi richiesti'; 					
			$form_success = FALSE;
			break;
		}		
		
		$email_content .= $value.': '.$_POST[$value]."\n";					
	}				
}

if($form_success)
	$response = ((@mail($your_email,$email_subject,$email_content)) ? 'Messaggio inviato con successo. Grazie!' : 'ATTENZIONE! Si è verificato un errore. Riprova di nuovo.');			
		
$responseMarkup = '<div class="responseMessage">'.$response.'</div>';
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>YIW Minimal | A clean &amp; professional free template</title>
 
    <meta name="author" content="Sara [mascaradesign.it] for Your Inspiration Web [yourinspirationweb.com]" />
    <meta name="keywords" content=""
    />
 	<meta name="description" content=""
	/>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    
    <!-- [template css] begin -->
	<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen, projection" />
	<link rel="stylesheet" href="css/960.css" type="text/css" media="screen, projection" />
    <link rel="stylesheet" href="css/print.css" type="text/css" media="print" /> 
    <!--[if IE]>
        <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen, projection" />
    <![endif]-->
    <!-- [template css] end -->
    
	<script type="text/javascript" src="js/jquery-1.3.1.min.js"></script>
	<script type="text/javascript" src="js/functions.js"></script>

</head>

<body class="body">

	<!-- START TOP SECTION -->
	<div class="container_12">
	
		<!-- START LOGO -->
		<div class="grid_4 header">
			<a href="index.htm"><img src="images/logo.gif" alt="YIW minimal" /></a>
		</div>
		<!-- END LOGO -->
   	 
		<!-- START NAVIGATION -->
   	  	<div class="grid_8 header">
   	  		<div id="navigation">
				<ul id="nav">
					<li id="home"><a href="index.htm" title="Home page">Home</a></li>
					<li id="about"><a href="about.htm" title="About">About</a></li>
					<li id="portfolio"><a href="portfolio.htm" title="Portfolio">Portfolio</a></li>
					<li id="contact"><a href="contact.php" title="Contact" class="currentPage">Contact</a></li>
				</ul>
			</div>
		</div>
		<!-- END NAVIGATION -->
		
		<div class="clear"></div>
	</div>
	<!-- END TOP SECTION -->
   
	<!-- START MEDIUM SECTION -->
	<div class="container_12 medium">
	
		<!-- START GET IN TOUCH TEXT -->
   		<div class="grid_6">
	   		<div class="getTouch">
	   			<h2>Get in <span class="orange">touch with me</span></h2>
	   			<p>
	   				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consequat mi sit 
	   				amet mauris feugiat eu imperdiet augue interdum. Aliquam nisl orci, aliquam eget 
	   				vehicula non, faucibus at odio. Ut sit amet elit nunc, a gravida justo. Lorem ipsum 
	   				dolor sit amet, consectetur adipiscing elit. Integer rhoncus porttitor nisi, a dapibus 
	   				nulla lacinia non.
	   			</p>
	   			
	   		</div>
   		</div>
   		<!-- END GET IN TOUCH TEXT -->
   	
   		<!-- START MASCOTTE -->
	   	<div class="grid_6 mascotte">
   			<img src="images/contact/mascotte.gif" alt="Mascotte" />		
	   	</div>
	   	<!-- END MASCOTTE -->
   	  
		<div class="clear"></div>
		
	</div>
	<!-- END MEDIUM SECTION -->
 
	<!-- START BOTTOM SECTION -->
	<div class="container_12">
	
		<!-- START CONTACT FORM -->
		<div class="grid_6">
			<div class="contactForm">
	   			<h2>Send me a <span class="orange">message</span></h2>
	   			
	   			<?php echo (($form_submitted) ? $responseMarkup : ''); ?>
					
				<form id="contactForm" action="" method="post">					
					<div class="formContent">
						<label for="name">Your name<span class="name">required*</span></label>					
						<input type="text" name="name" id="name" class="input required" value="" />			
						<label for="email">Your email.<span class="email">required*</span></label>
						<input type="text" name="email" id="email" class="input required" value="" />
												
						<fieldset>	
							<label class="optional">Your phone</label>
							<input type="text" name="phone" id="phone" class="input" value="" />					
						</fieldset>					
				
						<textarea class="textarea" name="message" rows="10" cols="10"></textarea>
						<input type="hidden" name="contact_form" value="1" />
						<input type="submit" class="submit" value="send message" />									
					</div>
				</form>				
	   		</div>
		</div>
		<!-- END CONTACT FORM -->
	   	
		<!-- START CONTACT -->
	   	<div class="grid_6">
	   		<div class="skype">
	   			<h2>You can <span class="orange">contact me</span> also by:</h2>
	   			<a href="#"><img src="images/contact/contact.gif" alt="Call me or contact me on skype" /></a>	
	   		</div>
	   		
	   		<!-- START SOCIAL -->
	   		<div id="social">
		   		<a href="#"><img src="images/icons/delicious.png" alt="My delicious account" /></a>	
	   			<a href="#"><img src="images/icons/linkedin.png" alt="My flickr account" /></a>
	   			<a href="#"><img src="images/icons/facebook.png" alt="My facebook account" /></a>
	   			<a href="#"><img src="images/icons/twitter.png" alt="My twitter account" /></a>
	   			<a href="#"><img src="images/icons/feed.png" alt="My feed" /></a>
   			</div>	
   			<!-- END SOCIAL -->
   			
	   	</div>
	   	<!-- END CONTACT -->
	   	
	   	<div class="clear"></div>
	</div>
	<!-- END BOTTOM SECTION -->
	
   	<div class="clear"></div>
   	
	<!-- START FOOTER -->
   	<div class="container_12">
	   	<p class="footer">
	   		Copyright 2009 by <strong>Your Inspiration Web</strong> <br/>
	   		YIWMinimal - clean &amp; cool portfolio template - download it for free!
		</p>
	</div>
	<!-- END FOOTER -->
	
<!-- contact form validation -->
<script type="text/javascript">	
  $(document).ready(function(){	
    $("#contactForm").validate({
		errorClass: "inputError",
		messages: {
			name: {
				required: ""				
			},
			email: {
				required: ""				
			}
		}
	})
  });
</script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>

</body>
</html>