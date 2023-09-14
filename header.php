<!doctype html>
	<html  <?php language_attributes(); ?>>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>GSD Portfolio</title>
		<link rel="icon" type="image/x-icon" href="/images/quote.png">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300&family=Roboto:ital,wght@0,400;0,500;0,700;1,300;1,400&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<script src="https://kit.fontawesome.com/ba20903a0f.js" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>	
		<?php wp_head(); ?>
	</head>

	<?php 
	if(is_front_page() ) :
		$playgroud_classes = array('homepage-class');

	else :
		$playgroud_classes = array('not-homepageclass');
	endif;

	?>


	<?php 
	$resume_download = get_field('resume_download');
	?>

	<body <?php body_class($playgroud_classes); ?>>

		<header id="masthead" class="site-header">

			<div class="container-xl">
				<div class="row">
					<nav id="site-navigation" class="main-navigation justify-content-between">						
						<div class="main-logo">
							<a id="inner-text" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">								
							</a>
						</div>

						<?php if(is_front_page()) { ?>
							<div class="desktop-menu">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'primary',
										'menu_id'        => 'primary-menu',
									)
								);
								?>
								<a href="<?php echo $resume_download ?>" download>Resume</a>
							</div>


							<div class="mobile-menu">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'primary',
										'menu_id'        => 'primary-menu',
									)
								);
								?>

								<a href="<?php echo $resume_download ?>" download>Resume</a>
							</div>

						<?php } else { ?>
							<div class="desktop-menu">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'sub-pages',
										'menu_id'        => 'sub-pages-menu',
									)
								);
								?>
								<a href="<?php echo $resume_download ?>" download>Resume</a>
							</div>


							<div class="mobile-menu">
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'sub-pages',
										'menu_id'        => 'sub-pages-menu',
									)
								);
								?>

								<a href="<?php echo $resume_download ?>" download>Resume</a>
							</div>

						<?php } ?>

						<div class="burger">
							<div class="line1"></div>
							<div class="line2"></div>
							<div class="line3"></div>
						</div>

					</nav>
				</div>
			</div>



		</header>



