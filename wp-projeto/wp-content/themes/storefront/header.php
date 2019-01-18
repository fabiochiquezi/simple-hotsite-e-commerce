<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <title>Document</title>

  <?php wp_head(); ?>
</head>
<body class="<?php echo the_title(); ?>">
<div class="onload d-flex align-items-center align-content-center justify-content-center">
  <img src="<?php echo get_template_directory_uri(); ?>/img/loader.gif" alt="">
</div>