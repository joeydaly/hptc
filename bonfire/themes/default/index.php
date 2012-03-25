<?php
	// Setup our default assets to load.
	Assets::add_js( array(
		base_url() .'assets/js/jquery-1.7.1.min.js',
		base_url() .'assets/js/ckeditor.js',
		base_url() .'assets/js/sample.js'
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

<div id="header">
	<h1>Hampton Park Tennis Club</h1>
	<p id="layoutdims">&nbsp;</p>
</div>
<div class="colmask threecol">
	<div class="colmid">
		<div class="colleft">
			<div class="col1">
				<!-- Column 1 start -->
				<div class="main">

			<?php echo Template::message(); ?>
			<?php echo isset($content) ? $content : Template::yield(); ?>

				</div>	<!-- /main -->
				<!-- Column 1 end -->
			</div>
			<div class="col2">
				<!-- Column 2 start -->
								<? echo Modules::run('pages/render_menu'); ?>
				
				<!-- Column 2 end -->
			</div>
			<div class="col3">
				<!-- Column 3 start -->
				ads & stuff
				<?			
					//echo Modules::run('service/renderlist');
				?>
				
				<!-- Column 3 end -->
			</div>
		</div>
	</div>
</div>
<div id="footer">
<?php if (ENVIRONMENT == 'development') :?>
<p style="float: right;">Page rendered in {elapsed_time} seconds, using {memory_usage}.</p>
<?php endif; ?>

<p><?php echo VALIDUSCMS . VALIDUSCMS_VERSION ?></a></p>
</div>
<div id="debug"></div>
<script>
	head.js(<?php echo Assets::external_js(null, true) ?>);
	head.js(<?php echo Assets::module_js(true) ?>);
</script>
<?php echo Assets::inline_js(); ?>
</body>
</html>
