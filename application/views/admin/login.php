<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="MWH Team 1" />

	<title>Authorization - PortfolioCMS Control Panel</title>
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/style_admin.css" />
</head>

<body>

<h1 class="rcolhead">Authorization</h1>
<div id="authform">
<ul id="labels">
	<li><label for="login_username">Username::.</label></li>
    <li><label for="login_password">Password::.</label></li>
</ul>
<?php
echo form_open(site_url('/admin/login/'));

$username = form_input(array('name' => 'login_username', 'placeholder' => 'Username...'));

$title 	  = form_password(array('name' => 'login_password', 'placeholder' => 'Password...'));

$submit	  = form_submit(array('name' => 'login', 'value' => 'Submit'));

$form = array($username, $title, $submit);

echo '<ul id="fields">';

foreach($form as $field)
{
    echo '<li>';
    echo $field ."\r\n";
    echo '</li>';    
}

echo '</ul>';
?>
</form>
</div>

</body>
</html>