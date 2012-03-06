<?php
	// Setup our default assets to load.
	Assets::add_js( array(
		base_url() .'assets/js/jquery-1.7.1.min.js',
	));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-GB">
<head>
	<title><?php echo config_item('site.title'); ?></title>
	<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
	<meta name="description" content="The Perfect 3 Column Liquid Layout: No CSS hacks. SEO friendly. iPhone compatible." />
	<meta name="keywords" content="The Perfect 3 Column Liquid Layout: No CSS hacks. SEO friendly. iPhone compatible." />
	<meta name="robots" content="index, follow" />
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<?php echo Assets::css(); ?>
	<?php echo Assets::external_js('head.min.js'); ?>
</head>
<body>

<div id="header">
	<p><a href="">seo links up here</a></p>
	<h1>Hampton Park Tennis Club</h1>
	<p id="layoutdims">something small like a ticker go here</p>
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
				navigation?

			<ul>
				<li><a href="<?php echo site_url();?>">Home</a></li>
				<li><a href="<?php echo site_url('users/profile');?>">Edit Profile</a></li>
			<?php
				// acessing our userdata cookie
				$cookie = unserialize($this->input->cookie($this->config->item('sess_cookie_name')));
				$logged_in = isset ($cookie['logged_in']);
				unset ($cookie);
			?>
			<li>
			<? if ($logged_in) { ?>
				<a href="<?php echo site_url('logout');?>">Logout</a>
			<? } else { echo anchor('/login', 'Login'); } ?>
			</li>

			</ul>
				
				
				<!-- Column 2 end -->
			</div>
			<div class="col3">
				<!-- Column 3 start -->
				ads n stuff
				<!-- Column 3 end -->
			</div>
		</div>
	</div>
</div>
<div id="footer">
<?php if (ENVIRONMENT == 'development') :?>
<p style="float: right;">Page rendered in {elapsed_time} seconds, using {memory_usage}.</p>
<?php endif; ?>

<p>Powered by <a href="http://cibonfire.com" target="_blank">Bonfire <?php echo BONFIRE_VERSION ?></a></p>
</div>
<div id="debug"></div>
<script>
	head.js(<?php echo Assets::external_js(null, true) ?>);
	head.js(<?php echo Assets::module_js(true) ?>);
</script>
<?php echo Assets::inline_js(); ?>
</body>
</html>
