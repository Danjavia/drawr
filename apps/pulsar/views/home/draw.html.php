<?php 

	$app = new PulsarApplication();

?>

<?php Part::draw( 'parts/tool/header' ); ?>

	<!-- tool panel -->
	<section class="tool-panel">
		<ul class="panel-menu">
			<li class="box-tool handler-selected">
				<span class="icon-location-arrow"></span>
			</li>
			<li class="box-tool new-elements" title="Create new element">
				<span class="icon-pencil"></span>
				<ul class="sub-tools">
					<li class="draw-container"><span class="icon-check-empty" title="New Block"></span></li>
					<li class="draw-image"><span class="icon-picture" title="New Image"></span></li>
					<li class="draw-film"><span class="icon-film" title="New Video Box"></span></li>
					<li class="draw-youtube"><span class="icon-youtube-play" title="New youtube Box"></span></li>
					<li class="draw-text"><span class="icon-font" title="New text"></span></li>
				</ul>
			</li><!-- 
			<li class="box-tool colors" title="Box style">
				<span class="icon-magic"></span>
				<ul class="sub-tools">
					<li><span class="icon-check-empty" title="New Block"></span></li>
					<li><span class="icon-picture" title="New Image"></span></li>
					<li><span class="icon-search" title="New Search Box"></span></li>
				</ul>
			</li> -->
			<li class="box-tool exports" title="Export this theme">
				<span class="icon-signout"></span>
			</li>
		</ul>
	</section>
	
	<!-- Draw Zone Container -->
	<div class="draw-zone-box">
		<!-- Draw Zone -->
		<div class="draw-zone" id="draw-zone">
			
		</div>
	</div>

	<!-- Layout Manager -->
	<div class="layout-manager">
		<div class="layouts" modal="newDraw">
			
		</div>
	</div>

	<!-- Viewer Tool -->
	<div class="viewer-manager">
		<div class="zoom large-3 columns">
			<input type="number" name="" id="" class="">
		</div>
	</div>

	<!-- loader -->
	<div id="loading">
		<div></div>
	</div>

<?php Part::draw( 'parts/tool/footer' ); ?>