<?php
/*
Template Name: Moodle Online Course
*/

$button_text_1 = 'Start Learning';

$coa_logo = $template_dir.'img/ecourse/logo_coa.png';
$pdfk_logo = $template_dir.'img/ecourse/logo_pdfk.png';
$circle_img_1 = $template_dir.'img/ecourse/circle_image_1.png';
$circle_img_2 = $template_dir.'img/ecourse/circle_image_2.png';

$icon_check = $template_dir.'img/ecourse/icon_1.png';
$icon_pen = $template_dir.'img/ecourse/icon_2.png';
$icon_stars = $template_dir.'img/ecourse/icon_3.png';

$img_quote = $template_dir.'img/ecourse/img_quote.png';
$signature = $template_dir.'img/ecourse/signature.png';
$hero_img = $template_dir.'img/ecourse/img_hero.png';

$page_title = 'Ecourse Learning Portal';
?>
<html>
<head>
    <meta charset="utf-8">
	<title><?=$page_title?></title>
    <!-- CSS -->
    <link href="online-course.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Work+Sans&display=swap" rel="stylesheet" />
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>

<div class="container">

<div class="ecourse_top_bar">
	<div class="ecourse_top_logos">
		<img src="<?=$coa_logo?>" alt="COA Logo" id="coa_logo" />
		<img src="<?=$pdfk_logo?>" alt="PDFK Logo" id="pdfk_logo" />
	</div>

	<div class="ecourse_top_buttons">
		<a href="<?=$button_url_1 ?>"><button class="button_purple" id="button_1"><?=$button_text_1 ?></button></a>
	</div>

	<div class="clear"></div>
</div>


<div class="ecourse_yellow_bg" title="ecourse_yellow_bg">
	<div class="yellow_bg_text purple_text">A Skill Building Course Addressing Teen Substance Use </div>
</div>
<img src="<?=$hero_img?>" alt="<?=$page_title?>" id="hero_img" />
<div class="clear"></div>



<div class="ecourse_white_bg_1">
	<div id="circle_img_1"><img src="<?=$circle_img_1?>" alt="<?=$page_title?>" /> </div>

	<div class="ecourse_purple_text purple_text">
		<p>If you suspect or know your child is engaging in substance use or other unhealthy behaviors, all you want to do is get them back on track. More effective communication and proven ways to change challenging behaviors are key to healthier outcomes. </p>
	
		<p>Through a series of nine online lessons, you can learn simple techniques to start applying right away. Throughout the course, you will also have easy access to our Helpline Specialists for more personalized guidance at any time.</p>
	</div>

	<div class="clear"></div>

	<div class="icon_container">
		<div class="icon_check_div">
			<img src="<?=$icon_check ?>" alt="<?=$page_title ?>" />
			<p>Proven tools to reduce or eliminate substance use and other unhealthy behaviors</p></div>

		<div class="icon_pen_div">
			<img src="<?=$icon_pen ?>" alt="<?=$page_title ?>" /><p>Ability to practice the skills with access to help just a click away</p></div>

		<div class="icon_stars_div">
			<img src="<?=$icon_stars ?>" alt="<?=$page_title ?>" /><p>More confidence in helping your child get to a healthier place</p></div>
	</div>

	<div class="clear"></div>
</div>


<img src="<?=$img_quote?>" alt="<?=$page_title?>" id="img_quote" />

<div class="ecourse_purple_bg">

	<p class="quote">After learning about the "conversation traps," I realized that my questions must sound like an interrogation with my daughter. I tried using an open-ended question asking about her plans for the weekend and we had a nice conversation. I know we have a long way to go, but it made me hopeful that we can have a more open relationship.</p>

	<p class="author">George T., father of 15-year-old daughter.</p>
</div>


<div class="ecourse_white_bg_2">

	<div class="start_learning_text">

		<h2> More About Skill Building for Parents & Caregivers </h2>
		<p>This course is designed to take at your own pace. There are nine lessons in total, which take about 15 to 20 minutes each to complete. You can start, pause or stop at any point along the way. After registering and answering a few initial questions, you can begin the course. </p>
		<a href="<?=$button_url_2 ?>"><button class="button_purple"><?=$button_text_1?></button></a>
	 </div>
	 
	 <div id="circle_img_2"><img src="<?=$circle_img_2 ?>" alt="<?=$page_title?>" /> </div>
	
	<div class="clear"></div>
	
	</div>
</div>


<div class="">
	<div class="ecourse_bullet_list purple_bg">
	<p> You Will Learn How to.. </p>

	<ul>
		<li> Respond when your child pushes your buttons </li>
		<li> Have a conversation rather than a confrontation </li>
		<li>Encourage healthier behaviors </li> 
		<li>Set reasonable limits </li>
		<li> Use consequences effectively</li>
	</ul>

</div>

<div class="triangle"></div>
<div class="clear">
 </div>

<div class="ecourse_final_bg">
	<div class="img_signature_div">
		<img src="<?=$signature?>" alt="<?=$page_title?>" class="img_signature" />
	</div>

	<div class="signature_text">Created with the generous funding of the Conrad N. Hilton Foundation</div>
	<div class="clear"></div>
</div>

<div class="ecourse_footer_div">
	<div class="ecourse_footer_left purple_text">
		<p>Center on Addiction</p>
		<p>Partnership for Drugfree Kids</p>
	</div>
	
	<div class="ecourse_footer_right">
	<p>This site and all materials contained herein are property of Center on Addiction &copy; 2020</p>
	<a target="_BLANK" href="">Privacy Policy</a> | <a target="_BLANK" href="">Terms of Use</a>
	</div>
</div>

</div>