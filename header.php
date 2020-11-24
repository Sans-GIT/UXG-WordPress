<!doctype html>
<html lang="en">
<head>
	<title>Global experience design company  | UXGURUS</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="application-name" content="UXGURUS">
	<meta name="msapplication-TileColor" content="#2e2e2e">
	<meta name="msapplication-TileImage" content="/images/mstile-144x144.png">
	<meta name="msapplication-square70x70logo" content="/images/mstile-70x70.png">
	<meta name="msapplication-square150x150logo" content="/images/mstile-150x150.png">
	<meta name="msapplication-wide310x150logo" content="/images/mstile-310x150.png">
	<meta name="msapplication-square310x310logo" content="/images/mstile-310x310.png">
	<meta name="theme-color" content="#2e2e2e">
	<meta data-hid="description" name="description" content="UXGURUS is a global experience design company specialising in end-to-end B2B and B2C product and service design for the world&#x27;s biggest brands. ">
	<!-- <meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@Foolproof_UX">
	<meta name="twitter:title" content="Global experience design company  | UXGURUS">
	<meta name="twitter:description" content="UXGURUS is a global experience design company specialising in end-to-end B2B and B2C product and service design for the world&#x27;s biggest brands. ">
	<meta name="twitter:creator" content="@Foolproof_UX">
	<meta name="twitter:image:src" content="https://assets.uxgurus.co.uk/public/About/13bc77fcb0/e7b7174b-d39b-491f-bbe8-b204356b5547__ScaleMaxWidthWzIwMDBd.jpg"> -->
	<meta property="og:title" content="Global experience design company  | UXGURUS">
	<meta property="og:type" content="website">
	<meta property="og:url" content="https://www.uxgurus.co/">
	<meta property="og:image" content="https://assets.uxgurus.co/public/About/13bc77fcb0/e7b7174b-d39b-491f-bbe8-b204356b5547__ScaleMaxWidthWzIwMDBd.jpg">
	<meta property="og:description" content="UXGURUS is a global experience design company specialising in end-to-end B2B and B2C product and service design for the world&#x27;s biggest brands. ">
	<meta property="og:site_name" content="UXGURUS">
	<!-- <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="/images/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/images/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/images/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="60x60" href="/images/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="/images/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon-precomposed" sizes="76x76" href="/images/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="/images/apple-touch-icon-152x152.png">
	<link rel="icon" type="image/png" href="/images/favicon-196x196.png" sizes="196x196">
	<link rel="icon" type="image/png" href="/images/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="/images/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="/images/favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="/images/favicon-128.png" sizes="128x128">
	<link rel="mask-icon" href="/images/safari-pinned-tab.svg" color="#2e2e2e"> -->
	<link rel="manifest" href="/site.webmanifest">
	<link rel="canonical" href="https://www.uxgurus.co/">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" as="style"/>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" as="style"/>
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/style.css?v=3.5" as="style"/>
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css?v=3.5" as="style"/>
</head>
<body>
	<div class="uxgskip" id="uxgskiplink-container">
		<div class="uxgskip__inner">
			<a class="uxgskip__link" href="#uxg-content">Skip to main content</a>
		</div>
	</div>
	<?php 
		$header_modifier_class_name = get_field('header_modifier_class_name');
	?>
	<header class="uxgheader <?php echo $header_modifier_class_name ;?>">
	<?php
	?>
		<div class="uxgheader__inner">
			<h1 class="uxgheader__logo">
				<?php 
					$logo_label = get_field('logo_label');
					$logo_link_path = get_field('logo_link_path');
					$logo_image_1x_path = get_field('logo_image_1x_path');
					$logo_image_2x_path = get_field('logo_image_2x_path');
					$logo_image_3x_path = get_field('logo_image_3x_path');
				?>
				<a class="uxgheader__logolink" href="<?php echo $logo_link_path ;?>" title="<?php echo $logo_label ;?>">
					<picture>
						<source media="(min-width: 1200px)" srcset="<?php echo $logo_image_1x_path ;?>">
						<source media="(min-width: 960px)" srcset="<?php echo $logo_image_2x_path ;?>">
						<source media="(min-width: 560px)" srcset="<?php echo $logo_image_3x_path ;?>">
						<img class="uxgheader__logoimg" src="<?php echo $logo_image_1x_path ;?>" alt="<?php echo $logo_label ;?>" />
					</picture>
				</a>
				<?php
				?>
			</h1>
			<a class="uxgheader__menuicon" href="javascript:void(0);" title="Menu"></a>
			<nav class="uxgheader__nav">
				<?php
          			$defaults = array(
						'theme_location'  => 'primary',
						'container'       => 'ul',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'uxgheader__navlistcont',
						'menu_id'         => '',
					);
  					wp_nav_menu( $defaults );
				?>
				<?php 
					$header_button_label = get_field('header_button_label');
					$header_button_link_path = get_field('header_button_link_path');
					if ($header_button_label) {
				?>
				<li class="uxgheader__navlist">
					<button class="btn uxgheader__navbtn"><?php echo $header_button_label ;?></button>
				</li>
				<?php
					}
				?>
			</nav>
		</div>
	</header>
