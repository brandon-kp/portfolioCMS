<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Edit Portfolio Items</title>
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
 td{border:1px solid #111; padding:2px;}
td a{color:#444; display:block; text-decoration:none; border-bottom:1px solid;}
    </style>
</head>
<body>
<div id="form">
<h1>Edit Portfolio Items</h1>

<?php
echo form_open('admin/perfEdit');?>
<table>
<?php foreach($result as $row):?>
    <tr>
        <td><a href="./edit/<?=$row->id;?>"><img src="/phpmyadmin/themes/original/img/b_edit.png" /></a></td>
        <td><a href="#" title=""><?=$row->title;?></a> [<?=character_limiter(form_prep($row->description), 65);?>]</td>
    </tr>
<? endforeach;?>
</table>
<input type="submit" name="submit" value="Delete Checked" />
</form>
<div class="clear"></div>
</div>
</body>
</html>