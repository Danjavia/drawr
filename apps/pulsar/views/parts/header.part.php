<?php

	/**
	 * The Header for our theme.
	 *
	 * Displays all of the <head> section and everything
	 * @package Pulsar
	 * @since Pulsar 0.1
	 */

?>

<!doctype html>
<!--[if lt IE 7]><html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html lang="en" class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html lang="en" class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> 
<html lang="en">
	<head>
		<meta charset="utf-8">
		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Welcome to Pulsar</title>
		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
		<link rel="icon" href="img/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="img/favicon.ico">
		<![endif]-->
		<!-- styles -->
		<?php echo Html::css( 'style' ); ?>
		<?php echo Html::css( 'main' ); ?>
		<!-- scripts -->
		<?php Part::draw( 'parts/loadScripts' ); ?>
		<?php Part::draw( 'parts/analytics' ); ?>
	</head>
	<body>
		<div class="wrapper-content">
			<section class="content-block">