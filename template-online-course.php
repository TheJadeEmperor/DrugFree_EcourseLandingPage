<?php
/*
Template Name: Moodle Online Course
*/

$template_dir = '/wp-content/themes/PDFK/';

//CoA logo
$coa_logo = get_field("coa_logo");


$button_text_1 = get_field("button_text_1");
$button_text_2 = get_field("button_text_2");


$button_url_1 = get_field("button_url_1");
$button_url_2 = get_field("button_url_2");


$bg_yellow_grad_h1 = get_field("bg_yellow_grad_h1");
$bg_yellow_grad_paragraph = get_field("bg_yellow_grad_paragraph");


$bg_white_1_h1 = get_field("bg_white_1_h1");
$bg_white_1_paragraph = get_field("bg_white_1_paragraph");
$bg_white_1_img = get_field("bg_white_1_img");


$bg_yellow_h1 = get_field("bg_yellow_h1");
$bg_yellow_paragraph = get_field("bg_yellow_paragraph");
$bg_yellow_img = get_field("bg_yellow_img");


$bg_white_2_h1 = get_field("bg_white_2_h1");
$bg_white_2_paragraph = get_field("bg_white_2_paragraph");
$bg_white_2_img = get_field("bg_white_2_img");


$bg_purple_h1 = get_field("bg_purple_h1");
$bg_purple_paragraph = get_field("bg_purple_paragraph");
//$bg_purple_img = get_field("bg_purple_img");


$bg_white_3_h1 = get_field("bg_white_3_h1");
$bg_white_3_paragraph = get_field("bg_white_3_paragraph");
$bg_white_3_img = get_field("bg_white_3_img");


$bg_purple_grad_h1 = get_field("bg_purple_grad_h1");
$bg_purple_grad_paragraph = get_field("bg_purple_grad_paragraph");


?>
<html>
<head>

    <meta charset="utf-8">
	
    <!-- CSS -->
    <link rel="stylesheet" href="<?=$template_dir?>sass/online-course.css">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

</head>
<body>

<div class="container">



<div class="bg_yellow_gradient" title="bg_yellow_gradient">

	
	<div><img src="<?=$coa_logo?>" alt="COA Logo" class="coa_logo" /></div>

	<div class="top_bar">
		<div id="button_sign_up"><a href="<?=$button_url_1 ?>">Sign Up</a></div>
		<div id="button_login"><a href="<?=$button_url_2 ?>">Login</a></div>
	</div>
	
	<div class="clear"></div>

	
	<div class="bg_yellow_grad_text_box" title="bg_yellow_text_box">
	
		<h1 class="bg_yellow_grad_h1"><?=$bg_yellow_grad_h1?></h1>
		<div class="bg_yellow_grad_paragraph"><?=$bg_yellow_grad_paragraph?></div>
	</div>
	
	<a href="<?=$button_url_2 ?>"><button class="button_purple"><?=$button_text_1?></button></a>
</div>


<div class="bg_white_1">
	<div class="bg_white_text_box_1" title="bg_white_text_box_1">
	
		<h1 class="bg_white_1_h1"><?=$bg_white_1_h1?></h1>
		<div class="bg_white_1_paragraph"><?=$bg_white_1_paragraph?></div>
	</div>
	
	<img src="<?=$bg_white_1_img ?>" class="bg_white_1_img" />
	<div class="clear"></div>
</div>


<div class="bg_yellow" title="bg_yellow">
	<div class="bg_yellow_text_box" title="bg_yellow_text_box">
	
		<h1 class="bg_yellow_h1"><?=$bg_yellow_h1?></h1>
		<div class="bg_yellow_paragraph"><?=$bg_yellow_paragraph?></div>
		
	</div>
	
	<img src="<?=$bg_yellow_img ?>" class="bg_yellow_img" /> 
	<div class="clear"></div>
</div>


<div class="bg_white_2">
	<div class="bg_white_text_box_2" title="bg_white_text_box_2">
	
		<h1 class="bg_white_2_h1"><?=$bg_white_2_h1?></h1>
		<div class="bg_white_2_paragraph"><?=$bg_white_2_paragraph?></div>
		
	</div>
	<img src="<?=$bg_white_2_img ?>" class="bg_white_2_img"/> 
	<div class="clear"></div>
</div>


<div class="bg_purple" title="bg_purple">
	<div class="bg_purple_text_box" title="bg_purple_text_box">
	
		<div class="bg_purple_h1"><?=$bg_purple_h1?></div>
		<div class="bg_purple_paragraph"><?=$bg_purple_paragraph?></div>
	</div>
	 
</div>


<div class="bg_white_3">
	<div class="bg_white_text_box_3" title="bg_white_text_box_3">
	
		<h1 class="bg_white_3_h1"><?=$bg_white_3_h1?></h1>
		<div class="bg_yellow_grad_paragraph"><?=$bg_white_3_paragraph?></div>
	</div>
	
	<img src="<?=$bg_white_3_img ?>" class="bg_white_3_img"/> 
	<div class="clear"></div>
</div>


<div class="bg_purple_gradient" title="bg_purple_gradient">

	<div class="bg_purple_grad_text_box">
	
		<h1 class="bg_purple_grad_h1"><?=$bg_purple_grad_h1?></h1>
		<div class="bg_purple_grad_paragraph"><?=$bg_purple_grad_paragraph?></div>
	</div>

	<a href="<?=$button_url_2 ?>"><button class="button_purple"><?=$button_text_1?></button></a>
</div>
	

</div>