<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php wp_title( ' | ', true, 'right' ); ?></title>
	<link href='http://fonts.googleapis.com/css?family=Press+Start+2P' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/foundation.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />

	<style type="text/css">

		<?php 

		if ( has_post_thumbnail() ) {
			$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
			?>
			#header{
				background: #FFF url('<?php echo $url ?>') no-repeat fixed center center;
				background-size: cover;
			}
			/*h1{
				color: white;
				background: blue;
			}*/
			#site-title{
				color: white;
				background: rgba(0, 140, 186, .8);
			}
			#site-title a{
				color: white;
			}
			<?php 
		} 

		?>
	</style>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="wrapper" class="hfeed">
		<header id="header" role="banner">
		<?php //if ( ! is_singular() ) { ?>
			<section id="branding">
				<div id="site-title">
					<h1 id="myTitle">
					<?php if (! is_singular() ) { ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ), 'blankslate' ); ?>" rel="home">
							<?php //echo esc_html( get_bloginfo( 'name' ) ); ?>
							<?php 
							$randTitles = array("Blodizzle", "Blizzle", "OHMABLG", "Blizzelle?","Bloz","Blots");
							echo $randTitles[array_rand($randTitles)]; 
							?>
						</a>
					<?php } else {?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ), 'blankslate' ); ?>" rel="home">
							<?php echo the_title(); ?>
						</a>
					<?php }?>
					</h1>
					<?php if (! is_singular() ) { ?>
				<div id="site-description" class="row">
					<h3><em>
						<?php bloginfo( 'description' ); ?>
					</em></h3>
				</div>
				<?php }?>
				</div>
			</section>
		<?php //} ?>

			<nav id="menu" role="navigation" class="top-bar">
				<section class="top-bar-section">
					<!--<div id="search">
						<?php get_search_form(); ?>
					</div>-->
					<?php wp_nav_menu( array( 'theme_location' => 'main-menu') ); ?>	
				</section>
			</nav>
		</header>
	<div id="container">