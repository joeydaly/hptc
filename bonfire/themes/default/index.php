<?php
	// Setup our default assets to load.
	Assets::add_js( array(
		base_url() .'assets/js/jquery-1.7.1.min.js',
		base_url() .'assets/js/ckeditor.js',
		base_url() .'assets/js/sample.js',
		base_url() .'assets/js/jquery.innerfade.min.js'
	));
	//Assets::add_css('sample.css');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title><?php echo config_item('site.title'); ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="robots" content="index, follow" />
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<?php echo Assets::css(); ?>
	<?php echo Assets::external_js('head.min.js'); ?>
</head>
<body>

	<div class="header">
		<h1>Hampton Park Tennis Club</h1>
	</div>

	<div class="column-wrap">

		<div class="column-1-wrapper">
			<div class="column-1">
				<div class="column-1-padding">
				<? 
				echo Template::message(); 
				
				if(isset($content)) 
				{
					echo $content;	
				} else {
						
					echo Modules::run('rotating_images/index'); 
					
					echo Template::yield();
					//Template::block('midsection', 'home/index');
				}  
				?>
	
				</div>
			</div>
		</div>
	
		<div class="column-2-wrapper">
			<div class="column-2">
				<div class="column-2-padding">
	
				<? echo Modules::run('pages/render_menu'); ?>
	
				</div>
			</div>
		</div>
	
		<div class="column-3-wrapper">
			<div class="column-3">
				<div class="column-3-padding">
					<?php Template::block('sidebar', 'partials/sidebar'); ?>
				</div>
			</div>
		</div>

	</div><!-- close column-wrap -->

	<div class="footer">
		<h6>
		<?php if (ENVIRONMENT == 'development') :?>
			<p style="float: right;">Page rendered in {elapsed_time} seconds, using {memory_usage}.</p>
		<?php endif; ?>
	
		<p><?php echo VALIDUSCMS . VALIDUSCMS_VERSION ?></a></p>
		</h6>
	</div>

	<div id="debug"></div>
	<script>
		head.js(<?php echo Assets::external_js(null, true) ?>);
		head.js(<?php echo Assets::module_js(true) ?>);
	</script>
	<?php echo Assets::inline_js(); ?>
</body>
</html>
