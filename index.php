<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Galleria Classic Theme</title>
		<link rel="stylesheet" href="css/style.css" />
		<!-- load jQuery -->
		<script src="js/jquery-1.6.2.min.js"></script>
		<!-- load Galleria -->
		<script src="js/galleria-1.2.6.min.js"></script>
		<script src="js/custom.js"></script>
	</head>
<body>
	<audio></audio>
		<div id="top">
			<ul class="options">
				<li id="galleria_toggle_slideshow" class="galleria_pause">&nbsp;</li>
				<li id="music" class="play">&nbsp;</li>
			</ul>
		</div><!-- end head_options -->
	<div class="content">
		<!-- Adding gallery images. We use resized thumbnails here for better performance, but it�s not necessary -->
		<div id="galleria">
			<?php $directory = "gallery/";
			$images = glob($directory . "*.jpg");
			foreach($images as $image)
			{
			?>
			<a href="<?php echo $image;?>">
				<img src="<?php echo $image;?>" height="90%" width="90%" />
			</a>
			<?php } ?>
			
		</div>
	</div>
	<script>
	// Load the classic theme
	Galleria.loadTheme('fullscreen/galleria.fullscreen.js');
	// Initialize Galleria
	$('#galleria').galleria({
		 autoplay: 5000
	});
	</script>
	</body>
</html>