<?php
/*
Template Name: Moodle Online Course
*/

$template_dir = '/wp-content/themes/PDFK/';

//CoA logo
$coa_logo = get_field("coa_logo");


$button_text_1 = get_field("button_text_1");
$button_text_2 = get_field("button_text_2");


$bg_yellow_grad_h1 = get_field("bg_yellow_grad_h1");
$bg_yellow_grad_paragraph = get_field("bg_yellow_grad_paragraph");


$bg_white_1_h1 = get_field("bg_white_1_h1");
$bg_white_1_paragraph = get_field("bg_white_1_paragraph");


$bg_yellow_h1 = get_field("bg_yellow_h1");
$bg_yellow_paragraph = get_field("bg_yellow_paragraph");


$bg_white_2_h1 = get_field("bg_white_2_h1");
$bg_white_2_paragraph = get_field("bg_white_2_paragraph");


$bg_purple_h1 = get_field("bg_purple_h1");
$bg_purple_paragraph = get_field("bg_purple_paragraph");


$bg_white_3_h1 = get_field("bg_white_3_h1");
$bg_white_3_paragraph = get_field("bg_white_3_paragraph");


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


<div class="bg_yellow_gradient">
	<div class="coa_logo"><img src="<?=$coa_logo?>" alt="COA Logo" /></div>

	<div id="button_sign_up">Sign Up</div>
	<div id="button_login">Login</div>
	bg_yellow_gradient
	
	<div class="bg_yellow_grad_text_box">bg_yellow_text_box
	
		<h1 class="bg_yellow_grad_h1"><?=$bg_yellow_grad_h1?></h1>
		<div class="bg_yellow_grad_paragraph"><?=$bg_yellow_grad_paragraph?></div>
	</div>
	
	<div class="button_purple">button_purple</div>
</div>


<div class="bg_white_1">
	<div class="bg_white_text_box_1">bg_white_text_box_1
	
		<h1 class="bg_white_1_h1"><?=$bg_white_1_h1?></h1>
		<div class="bg_white_1_paragraph"><?=$bg_white_1_paragraph?></div>
	</div>
</div>


<div class="bg_yellow">bg_yellow
	<div class="bg_yellow_text_box">bg_yellow_text_box
	
		<h1 class="bg_yellow_h1"><?=$bg_yellow_h1?></h1>
		<div class="bg_yellow_paragraph"><?=$bg_yellow_paragraph?></div>
	</div>
</div>


<div class="bg_white_2">
	<div class="bg_white_text_box_2">bg_white_text_box_2
	
		<h1 class="bg_white_2_h1"><?=$bg_white_2_h1?></h1>
		<div class="bg_white_2_paragraph"><?=$bg_white_2_paragraph?></div>
	</div>
</div>


<div class="bg_purple">bg_purple
	<div class="bg_purple_text_box">bg_purple_text_box
	
		<div class="bg_purple_h1"><?=$bg_purple_h1?></div>
		<div class="bg_purple_paragraph"><?=$bg_purple_paragraph?></div>
	</div>

</div>


<div class="bg_white_3">
	<div class="bg_white_text_box_3">bg_white_text_box_3 
	
		<h1 class="bg_white_3_h1"><?=$bg_white_3_h1?></h1>
		<div class="bg_yellow_grad_paragraph"><?=$bg_white_3_paragraph?></div>
	</div>
</div>


<div class="bg_purple_gradient">
bg_purple_gradient

	<div class="bg_purple_grad_text_box">bg_purple_grad_text_box
	
		<h1 class="bg_purple_grad_h1"><?=$bg_purple_grad_h1?></h1>
		<div class="bg_purple_grad_paragraph"><?=$bg_purple_grad_paragraph?></div>
	</div>

</div>