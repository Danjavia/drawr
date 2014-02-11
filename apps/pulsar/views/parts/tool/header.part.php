<?php

	/**
	 * The Header for our theme.
	 *
	 * Displays all of the <head> section and everything
	 * @package Pulsar
	 * @since Pulsar 0.1
	 */

?>

<?php 
	
	$app = new PulsarApplication();

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
		<title>Designer tool</title>
		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
		<link rel="icon" href="<?php echo $app->assetUrl; ?>img/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo $app->assetUrl; ?>img/favicon.ico">
		<![endif]-->
		<!-- styles -->
		<?php echo Html::css( 'normalize' ); ?>
		<?php echo Html::css( 'foundation' ); ?>
		<?php echo Html::css( 'colorpicker' ); ?>
		<?php echo Html::css( 'designer' ); ?>
		<?php echo Html::css( 'context.standalone' ); ?>
		<?php echo Html::css( 'base' ); ?>
		<?php echo Html::css( 'font-awesome/css/font-awesome' ); ?>
		<?php echo Html::css( 'iview' ); ?>
		<!-- scripts -->
		<?php echo Html::js( 'jquery' ); ?>
		<?php Part::draw( 'parts/analytics' ); ?>
	</head>
	<body>
		<!-- Including foundation into the project -->
		<?php echo Html::js( 'foundation.min' ); ?>

		<div class="main-panel">
			<section class="navbar-top">
				<div class="logo">
					<a href=""><?php echo Html::img( 'favicon.png' ); ?></a>
				</div>
				<nav class="application-nav">
					<ul class="application-menu">
						<li>Draw
							<ul class="submenu">
								<li class="newDraw">New</li>
								<li>Load</li>
								<li>Save</li>
							</ul>
						</li>
						<li>Edit
							<ul class="submenu">
								<li>Transform</li>
								<li>Animation</li>
								<li>Perspective</li>
							</ul>
						</li>
						<li>Profile
							<ul class="submenu">
								<li>View</li>
								<li>Logout</li>
							</ul>
						</li>
						<li></li>
						<li></li>
					</ul>
					<div class="profile">
						<div class="avatar"></div>
						<span class="username inline"> Danjavia <span class="dropdown icon-caret-down"></span></span>
					</div>
				</nav>
			</section>