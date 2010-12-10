<?php

	$this->Html->loadConfig('tags');

?><!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<!--[if IE ]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> <![endif]-->
<title><?php echo $title_for_layout; ?></title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="/favicon.ico">
<link rel="apple-touch-icon" href="/apple-touch-icon.png">
<?php
	echo $this->Html->css(array('setup','cake.generic','styles'));
	echo $this->Html->script('libs/modernizr-1.6.min.js');
?>
</head>
<body>
<header> </header>
<div id="main"><?php echo $content_for_layout; ?></div>
<footer> </footer>
<!-- end of #container -->
<?php
	echo $this->Html->script('libs/jquery-1.4.4.min.js');
	echo $this->Html->script('plugins.js');
	echo $scripts_for_layout;
	echo $this->Html->script('script.js');
?>
<!-- end concatenated and minified scripts-->
<!--[if lt IE 7 ]>
    <?php
		echo $this->Html->script('libs/dd_belatedpng.js');
	?>
    <script> DD_belatedPNG.fix('img, .png_bg'); </script>
  <![endif]-->
</body>
</html>