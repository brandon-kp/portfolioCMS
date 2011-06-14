<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="Brandon Probst" />

	<title>PortfolioCMS Control Panel - Delete Item</title>
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/style_admin.css" />
</head>

<body>

<div id="header">
    <p><b>portfolioCMS</b> Control Panel</p>
</div>

<div id="content">
<? include('sidebar.php'); ?>

    <div id="leftcol">
        <? if($submitted === 1):?>
        <div class="notifications">
            <p><?=$notifications;?></p>
        </div>
        <? endif; ?>
        
        <h1 class="rcolhead">Delete Portfolio item</h1>
        <?=form_open('admin/delete');?>
        <table>
        <? foreach($result as $row):?>
            <tr>
                <td><input type="checkbox" name="id[]" value="<?=$row->id;?>" /></td>
                <td><a href="#" title=""><?=$row->title;?></a> [<?=character_limiter(form_prep($row->description), 65);?>]</td>
            </tr>
        <? endforeach;?>
        </table>
        <input type="submit" name="submit" value="Delete Checked" />
        </form>
        <div class="clear"></div>     
    </div>
</div>

</body>
</html>