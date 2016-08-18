<?php
	$fonts_dir = __DIR__ . '/fonts';
	$fonts_url = dirname($_SERVER['SCRIPT_NAME']) . '/fonts';

	$dir = new DirectoryIterator($fonts_dir);
	
	foreach ($dir as $fileinfo) {
		if($fileinfo->isFile())
		{
			?>
@font-face { 
    font-family: <?php echo $fileinfo->getBasename('.' . $fileinfo->getExtension()); ?>;
    src: url(<?php echo $fonts_url . '/' . $fileinfo->getBasename(); ?>);
   } 
   
<?php
		}
	}
?>
