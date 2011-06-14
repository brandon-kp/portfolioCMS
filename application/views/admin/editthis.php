<?php

foreach($result as $row)
{
    $title2       = $row->title;
    $category2    = $row->category;
    $image2       = $row->image;
    $thumb2       = $row->thumbnail;
    $description2 = $row->description;
    $id2          = $row->id;   
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="Brandon Probst" />

	<title>PortfolioCMS Control Panel - Portfolio Settings</title>
    
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
        <ul id="labels">
            <li><label for="title">Title::.</label></li>
            <li><label for="category">Category::.</label></li>
            <li><label for="image">Image::.</label></li>
            <li><label for="thumb">Thumbnail::.</label></li>
            <li><label for="description">Description::.</label></li>
        </ul>
        <?php
        echo form_open('admin/perfEdit/'.$id);
        
        $title = form_input(
                array(
                    'value' => form_prep($title2), 
                    'name' => 'title', 
                    'maxlength' => '140', 
                    'placeholder' => 'Title...'
                )
        );
        
        $category = form_input(
                array(
                    'value' => form_prep($category2), 
                    'name' => 'category', 
                    'placeholder' => 'Category...'
                )
        );
        
        $image = form_input(
                array(
                    'value' => form_prep($image2), 
                    'name' => 'image', 
                    'placeholder' => 'Image URL...'
                )
        );
        
        $thumb = form_input(
                array(
                    'value' => form_prep($thumb2), 
                    'name' => 'thumb', 
                    'placeholder' => 'Thumbnail URL...'
                )
        );
        
        $description = form_textarea(
                array(
                    'value' => form_prep($description2), 
                    'name' => 'description', 
                    'placeholder' => 'Description...'
                )
        );
        
        $submit = form_submit(
                array(
                    'name' => 'submit', 
                    'value' => 'Submit'
                )
        );
        
        $form = array($title, $category, $image, $thumb, $description, $submit);
        
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
</div>

</body>
</html>