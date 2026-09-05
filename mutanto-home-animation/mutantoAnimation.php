<style>
	@media (max-min : 1200px) {
		#animation_container {
			width: 1334px;
			height: auto;
			max-width: 1334px;
			display: flex;
			justify-content: space-between;
			margin-top: 50px;
		}

		@media (max-width : 1199px) and (min-width: 577px) {
			#animation_container {
				margin-top: -28px;
			}
		}

		@media (max-width: 577px) { 
			#animation_container, #canvas, #dom_overlay_container  {
				width: 100vw !important;
				height: auto !important;
				padding-top: 152px;
			}
		}
</style>
<?php
	require_once (realpath($_SERVER['DOCUMENT_ROOT'] ."/vendor/autoload.php"));
	use Detection\MobileDetect;
	$detect = new MobileDetect();

	if (!$detect->isMobile()) {
?>

	<?php include(realpath($_SERVER['DOCUMENT_ROOT'] .   "/includes/mutation-aimation-home.php")) ?>
	<script>
		window.addEventListener("load", function() {
			init();
		})
	</script>
	<div id="animation_container">
		<canvas id="canvas"></canvas>
		<div id="dom_overlay_container"></div>
	</div>
<?php } else { ?>

	<?php include(realpath($_SERVER['DOCUMENT_ROOT'] .   "/includes/mutanto-animation-mobile.php")) ?>
	<script>
		window.addEventListener("load", function() {
			init();
		})
	</script>
	<div id="animation_container">
		<canvas id="canvas"></canvas>
		<div id="dom_overlay_container"></div>
	</div>
<?php } ?>