<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/compiled/styles.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="<?php bloginfo('template_url'); ?>/scripts/custom-scripts.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js" integrity="sha256-G7A4JrJjJlFqP0yamznwPjAApIKPkadeHfyIwiaa9e0=" crossorigin="anonymous"></script>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
			// conditionizr.com
			// configure environment tests
			conditionizr.config({
				assets: '<?php echo get_template_directory_uri(); ?>',
				tests: {}
			});
    </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<!-- <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo" class="logo-img"> -->
							<svg version="1.1"
									 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
									 x="0px" y="0px" width="249px" height="249px" viewBox="0 0 249 249" style="enable-background:new 0 0 249 249;"
									 xml:space="preserve">
								<style type="text/css">
									.st0{fill:none;stroke:#00ADEE;stroke-width:3;stroke-miterlimit:10;}
									.st1{fill:none;stroke:#FFFFFF;stroke-width:4;stroke-miterlimit:10;}
								</style>
								<defs>
								</defs>
								<path class="st0 stroke" d="M124.5,1.5c-67.9,0-123,55.1-123,123s55.1,123,123,123s123-55.1,123-123S192.4,1.5,124.5,1.5z M124.5,222.4
									c-54.1,0-97.9-43.8-97.9-97.9s43.8-97.9,97.9-97.9s97.9,43.8,97.9,97.9S178.6,222.4,124.5,222.4z"/>
								<g>
									<g>
										<g>
											<path class="st1 stroke" d="M226.9,186.2c-8.3,0-16.6,0-25,0c-1.8,0-3.7,0-5.5,0c-0.8,0-1.2-0.2-1.7-0.8c-10.8-12.6-21.7-25.2-32.5-37.8
												c-5.4-6.2-10.7-12.5-16-18.8c-2.1-2.5-4.5-4.7-8-5.2c-0.8-0.1-1.6-0.1-2.5-0.1c0,0.6-0.1,1-0.1,1.4c0,12.8,0,25.5,0,38.3
												c0,2.6,0.2,5.3,0.6,7.9c0.7,5.1,3,7.4,8,8.4c3.1,0.6,6.2,0.9,9.4,1.4c0,1.7,0,3.4,0,5.3c-17.5,0-34.9,0-52.4,0c0-1.8,0-3.5,0-5.3
												c3-0.4,6-0.8,9.3-1.2C89.2,148,68,116.6,46.8,85.2c-0.1,0-0.2,0-0.3,0c0,0.4-0.1,0.8-0.1,1.2c0,17.4-0.1,34.8,0,52.2
												c0.1,9.1,0.5,18.3,0.8,27.4c0,0.8,0.2,1.7,0.3,2.5c0.8,5,3.9,7.8,8.7,8.9c2.2,0.5,4.5,0.9,6.7,1.3c0,1.7,0,3.5,0,5.3
												c-12.9,0-25.8,0-38.7,0c0-1.8,0-3.5,0-5.3c1.4-0.2,2.8-0.4,4.2-0.7c6.2-1.2,9.4-4.6,9.9-10.9c0.4-5,0.7-10,0.8-15
												c0.1-23.4,0.2-46.7,0.2-70.1c0-4.6-1.2-8.8-3.9-12.6c-2.4-3.2-5.7-4.6-9.5-5.2c-1.3-0.2-2.5-0.4-3.9-0.6c0-1.8,0-3.6,0-5.5
												c0.5,0,0.9,0,1.3,0c7.1,0,14.2,0,21.4,0c0.9,0,1.4,0.3,1.9,1c22,31.7,44,63.4,66,95c0.2,0.3,0.4,0.6,0.8,1.1
												c0-0.5,0.1-0.9,0.1-1.2c0-17.8,0.1-35.5,0-53.3c-0.1-8.3-0.5-16.6-0.8-24.9c0-0.9-0.2-1.8-0.3-2.6c-0.7-4.2-3.1-7-7.2-8
												c-3-0.8-6.1-1.2-9.3-1.8c0-1.6,0-3.3,0-5.3c19.2,0.1,38.3,0.3,57.5,0.4c0,1.8,0,3.6,0,5.5c-2,0.2-3.9,0.4-5.9,0.7
												c-1.9,0.3-3.8,0.7-5.6,1.3c-3.8,1.3-5.4,4.5-5.9,8.2c-0.4,2.7-0.6,5.4-0.6,8.1c-0.1,11.4,0,22.8,0,34.2c0,0.4,0,0.9,0,1.7
												c1.9-0.8,3.6-1.2,5-2.2c3.1-2.2,6.2-4.5,8.9-7.1c11.5-10.8,22.6-22,33.1-33.9c1.3-1.5,2.6-3.2,3.6-4.9c1.2-2.1,0.6-3.8-1.7-4.4
												c-2.7-0.8-5.6-1.1-8.4-1.6c-0.6-0.1-1.2-0.1-1.8-0.2c0-1.9,0-3.6,0-5.5c15.9,0,31.8,0,47.7,0c0,1.8,0,3.6,0,5.5
												c-1.7,0.2-3.5,0.5-5.3,0.7c-7,0.8-13.4,2.9-18.9,7.5c-2.1,1.8-4.2,3.6-6.2,5.5c-12,11.7-24,23.5-36,35.2
												c-0.1,0.1-0.2,0.2-0.4,0.4c1.8,2.1,3.5,4.2,5.4,6.3c13.1,15,26.2,30,39.4,44.9c2.7,3.1,5.7,6,8.7,9c3.9,3.9,8.8,6,14.3,6.6
												c1.3,0.2,2.6,0.3,3.9,0.5C226.9,182.5,226.9,184.4,226.9,186.2z"/>
										</g>
									</g>
								</g>
								</svg>
						</a>
					</div>
					<!-- /logo -->

					<!-- nav -->
					<nav class="nav" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
					</nav>
					<!-- /nav -->

			</header>
			<!-- /header -->
