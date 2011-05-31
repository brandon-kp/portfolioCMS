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
	<link rel="stylesheet" href="/portfoliocms/assets/css/screen.css" type="text/css" media="screen, projection" />
	<link rel="stylesheet" href="/portfoliocms/assets/css/960.css" type="text/css" media="screen, projection" />
    <link rel="stylesheet" href="/portfoliocms/assets/css/print.css" type="text/css" media="print" /> 
    <!--[if IE]>
        <link rel="stylesheet" href="/portfoliocms/assets/css/ie.css" type="text/css" media="screen, projection" />
    <![endif]-->
    <!-- [template css] end -->
    
    <!-- [template css javascript] begin -->
    <link rel="stylesheet" href="/portfoliocms/assets/css/project.css" type="text/css" media="screen, projection" />
    <!-- [template css javascript] end -->
	
	<!-- [JS] begin -->
    <script  type="text/javascript" src="/portfoliocms/assets/js/jquery-1.3.1.min.js"></script> 
    <script  type="text/javascript" src="/portfoliocms/assets/js/scripts.js"></script>
    <script  type="text/javascript" src="/portfoliocms/assets/js/coda-slider.1.1.1.js"></script>
    <script  type="text/javascript" src="/portfoliocms/assets/js/jquery-easing-compatibility.1.2.pack.js"></script>
    <script  type="text/javascript" src="/portfoliocms/assets/js/jquery-easing.1.2.pack.js"></script>
    <!-- [JS] end -->
  
</head>
<body>
	
	<!-- START TOP SECTION -->
	<div class="container_12">
	
		<!-- START LOGO -->
		<div class="grid_4 header">
			<a href="index.htm"><img src="/portfoliocms/assets/images/logo.gif" alt="YIW minimal" /></a>
		</div>
		<!-- END LOGO -->
   	 
		<!-- START NAVIGATION -->
   	  	<div class="grid_8 header">
   	  		<div id="navigation">
				<ul id="nav">
					<li id="home"><a href="index.htm" title="Home page"class="currentPage">Home</a></li>
					<li id="about"><a href="about.htm" title="About">About</a></li>
					<li id="portfolio"><a href="portfolio.htm" title="Portfolio">Portfolio</a></li>
					<li id="contact"><a href="contact.php" title="Contact">Contact</a></li>
				</ul>
			</div>
		</div>
		<!-- END NAVIGATION -->
		
		<div class="clear"></div>
	</div>
	<!-- END TOP SECTION -->
   
	<!-- START MEDIUM SECTION -->
	<div class="container_12 medium">
   
		<div id="featured">
			<!-- Left Arrow for Previous projects -->
			<div class="featured-arrow" id="stripNavL0">
				<a href="#"><img src="/portfoliocms/assets/images/featured-arrow-left.png" alt="" /></a>  
			</div>
			<!-- End Left Arrow -->
       		
			
			<!-- The slider -->
	        <div id="slider">
	            <div id="sliderc" class="csw">
	                <div class="panelContainer">
	
	        			<!-- START PROJECT 1 --><?php foreach($result as $row):?>
	    				<div class="panel">
	    					<div class="projectImage">
	                   			<img src="<?=$row->image;?>" alt="<?=$row->title;?>" style="width:391px; height:239px;"/>                     
	                    	</div>
	                        	
	                    	<div class="projectDescription">
	                    		<h1><?=$row->title;?></h1>
	                            <p>
	                            	<?=$row->description;?> 
	                            </p>
	                            <p class="Desc">
									<span class="project">Vedi Progetto</span>&nbsp;<span class="site"><a href="http://www.yourinspirationweb.com/en/yiw-minimal-a-free-clean-template-for-a-simple-yet-professional-website/" title="Download this theme for free">Vedi sito</a></span>
								</p>
	                    	</div>
	        			</div>
	            		<?php endforeach;?><!-- END PROJECT 1 -->    
	                    
        			</div><!-- .panelContainer -->
        		</div><!-- #slider1 -->
	  		</div> <!--end slider -->
          
	        <!-- Right Arrow for Next products -->
			<div class="featured-arrow" id="stripNavR0">
				<a href="#" title="" ><img src="/portfoliocms/assets/images/featured-arrow-right.png" alt=""/></a>
			</div>
			<!-- End Right Arrow -->
		</div>
		<!-- End featured -->
		
	</div>
	<!-- END MEDIUM SECTION -->
   
	<!-- START BOTTOM SECTION -->
	<div class="container_12 bottom">
	
		<!-- START TWITTER SECTION -->
		<div class="grid_4">
		
			<h2>My last <span class="orange">tweets</span></h2>
			
			<ul id="twitter_update_list">
				<li></li>
			</ul>
	        <!-- START EMBED TWITTER -->
	        <script src="/portfoliocms/assets/js/twitter.js" type="text/javascript"></script>
	        <script src="http://twitter.com/statuses/user_timeline/<?php foreach ($settings as $setting) echo $setting->twitter;?>.json?callback=twitterCallback&amp;count=2" type="text/javascript"></script>
	        <!-- END EMBED TWITTER -->
	        
	   	</div>
	   	<!-- END TWITTER SECTION -->


   		<!-- START TESTIMONIAL SECTION -->
   		<div class="grid_4">
   		
	   		<h2>Listen my <span class="orange">testimonials</span></h2>
	   		
	   		<p>
	   			<img src="/portfoliocms/assets/images/bg/quote.gif" alt=""/>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
	   			Lorem Ipsum has been the industry's standard dummy text ever since the 1500s. Lorem Ipsum has been the 
	   			industry's standard dummy text  I’m very happy! <span class="greyRight">[Annette Lewis]</span>
	   		</p>
	   		
   		</div>
		<!-- END TESTIMONIAL SECTION -->		
   	
		<!-- START CONTACT SECTION -->
	   	<div class="grid_4">
	   		<h2>Do you like my work?<span class="orange"> Hire me</span></h2>
	   		<img src="/portfoliocms/assets/images/contact/phone.gif" alt="" />
	   		<a href="#"><img src="/portfoliocms/assets/images/contact/email.gif" alt="" /></a>
	   	</div>
	   	<!-- END CONTACT SECTION -->
	   	
	   	<div class="clear"></div>
   	</div>
   	<!-- END BOTTOM SECTION -->
   
   	<!-- START FOOTER -->
   	<div class="container_12">
	   	<p class="footer">
	   		Copyright 2009 by <strong>Your Inspiration Web</strong> <br/>
	   		YIWMinimal - clean &amp; cool portfolio template - <a href="http://www.yourinspirationweb.com/en/yiw-minimal-a-free-clean-template-for-a-simple-yet-professional-website/" title="Download this theme for free">Download this theme for free!</a>                     
		</p>
	</div>
	<!-- END FOOTER -->

   
</body>
</html>