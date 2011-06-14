<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="Brandon Probst" />

	<title>PortfolioCMS Control Panel</title>
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/style_admin.css" />
</head>

<body>

<div id="header">
    <p><b>portfolioCMS</b> Control Panel</p>
</div>

<div id="content">
    <div id="rightcol">
        <h1 class="colhead">Options</h1>
    </div>

    <div id="leftcol">
        <h1 class="rcolhead">Dashboard</h1>
        
        <div class="icon">
            <a href="./settings/">
                <img src="<?=base_url();?>assets/images/icons/HP-Control-Dock-512.png" />
                Portfolio Settings
            </a>
        </div>
        
        <div class="icon">
            <a href="./additem">
                <img src="<?=base_url();?>assets/images/icons/HP-HDD-Dock-512.png" />
                Add Portfolio Item
            </a>
        </div>
        
        <div class="icon">
            <a href="./delete/">
                <img src="<?=base_url();?>assets/images/icons/HP-Recycle-Empty-Dock-512.png" />
                Delete Portfolio Item
            </a>
        </div>
        
        
    </div>
</div>

</body>
</html>