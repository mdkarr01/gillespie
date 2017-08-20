<?php
$page_specific = 'Promotional Pics';
$page_general  = 'Steve Gillespie';
$page_title    = $page_specific.' - '.$page_general;
include ('includes/header.php');
error_reporting(E_ERROR);
/* function:  generates thumbnail */
function make_thumb($src, $dest, $desired_width) {
	/* read the source image */
	$source_image = imagecreatefromjpeg($src);
	$width        = imagesx($source_image);
	$height       = imagesy($source_image);
	/* find the "desired height" of this thumbnail, relative to the desired width  */
	$desired_height = floor($height*($desired_width/$width));
	/* create a new, "virtual" image */
	$virtual_image = imagecreatetruecolor($desired_width, $desired_height);
	/* copy source image at a resized size */
	imagecopyresized($virtual_image, $source_image, 0, 0, 0, 0, $desired_width, $desired_height, $width, $height);
	/* create the physical thumbnail image to its destination */
	imagejpeg($virtual_image, $dest);
}

/* function:  returns files from dir */
function get_files($images_dir, $exts = array('jpg')) {
	$files = array();
	if ($handle = opendir($images_dir)) {
		while (false !== ($file = readdir($handle))) {
			$extension = strtolower(get_file_extension($file));
			if ($extension && in_array($extension, $exts)) {
				$files[] = $file;
			}
		}
		closedir($handle);
	}
	return $files;
}

/* function:  returns a file's extension */
function get_file_extension($file_name) {
	return substr(strrchr($file_name, '.'), 1);
}
?>
<?php include ('includes/hero.php');?>
<div class="row align-center">
  <div class="product-image-gallery small-12 large-8 large-centered columns">
  <h2 class="title">Promotional Photos</h2>
  <h5><a href="./images/gillespie_images.zip" download="steve_gillespie_promo_pics">Download a .zip file of these images (5.1 MB)</a></h5><br>
  <h5>Click to view the full image</h5>
<?php
/** settings **/
$images_dir     = './images/preload-images/';
$thumbs_dir     = './images/preload-images-thumbs/';
$images_per_row = 3;

/** generate photo gallery **/
$image_files = get_files($images_dir);
if (count($image_files)) {
	$index = 0;
	foreach ($image_files as $index => $file) {
		$index++;
		$thumbnail_image = $thumbs_dir.$file;
		if (!file_exists($thumbnail_image)) {
			$extension = get_file_extension($thumbnail_image);
			if ($extension) {
				make_thumb($images_dir.$file, $thumbnail_image, $thumbs_width);
			}
		}
		echo '<a href="', $images_dir.$file, '" class="photo-link smoothbox" rel="gallery"><img src="', $thumbnail_image, '" /></a>';
		if ($index%$images_per_row == 0) {echo '<div class="clear"></div>';}
	}
	echo '<div class="clear"></div>';
} else {
	echo '<p>There are no images in this gallery.</p>';
}
?>
</div>
</div>

<?php

include ('includes/footer.inc.php');

include ('includes/jscript.inc.php');

?>
<script>
  $('.sim-thumb').on('click', function() {
  $('#main-product-image').attr('src', $(this).data('image'));
})
</script>
</body>
</html>
