
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
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Edit Portfolio Item: <?=$title2;?></title>
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
    </style>
</head>
<body>
<div id="form">
<h1>Edit Portfolio Item</h1>

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
</body>
</html>