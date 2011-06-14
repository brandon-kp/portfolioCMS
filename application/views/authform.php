<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Portfolio of Brandon Probst :: <?=$pageTitle;?></title>
    <style type="text/css">
        body{
        background:#eee;
        }
        
        #form{
        background:#fff;
        border:1px solid #000;
        padding:20px;
        margin:0 auto;
        -moz-border-radius:40px;
        }
        
        .clear{
        clear:both;
        }
        
        h1{
        font-family:Helvetica;
        font-weight:normal;
        letter-spacing:1px;
        margin:0;
        }
        ul,li{
        list-style-type:none;
        padding:0;
        }
        
        #form{
        width:500px;
        }
        
        #labels{
        float:left;
        }
        #fields{
        float:right;
        }
        #fields li, #labels li{
        margin:5px 0;
        }
        
        textarea{
        font-family:sans-serif;
        width:350px;
        }
        
        input[type=text], input[type=password]{
        width:350px;
        height:30px;
        border:1px solid #999;
        font-size:18px;
        font-family:'segoe ui', helvetica;
        color:#555;
        padding:2px;
        }
        
        input[type=text]:focus{
        border:1px solid #333;
        background:#fafafa;
        color:#000;
        }
        
        label{
        height:38px;
        display:block;
        }
        h2.err{
        font-size:12px;
        padding:5px;
        text-align:center;
        background:#ff3333;
        border:1px solid #aa0000;
        }
    </style>
</head>
<body>
<div id="form">
<h1>Authorization</h1>

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
<div class="clear"></div>
</div>
</body>
</html>