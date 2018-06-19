<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<title><?php print get_the_title( $post->ID ); ?> || <?php bloginfo( 'description' ); ?> - <?php bloginfo( 'name' ); ?> Civil Air Patrol</title>
		<?php wp_head(); ?>
		<link media="screen" type="text/css" href="<?php print get_template_directory_uri(); ?>/css/screen.css" rel="stylesheet">
		<link media="all" type="text/css" href="<?php print get_template_directory_uri(); ?>/css/all.css" rel="stylesheet">
		<link media="print" type="text/css" href="<?php print get_template_directory_uri(); ?>/css/print.css" rel="stylesheet">
		<link rel="icon" type="image/ico" href="<?php print get_template_directory_uri(); ?>/favicon.ico">
		<link media="all" type="text/css" href="<?php print get_template_directory_uri(); ?>/style.css" rel="stylesheet">
	</head>

	<body>

		<div id="printHeader">
			<img src="<?php print get_template_directory_uri(); ?>/images/404.jpg" width="640" height="130" style="border:0px" alt="Civil Air Patrol" />
		</div>

		<div id="bodyContainer">

			<div class="page">

				<div id="header">
					<div id="logo">
						<a href="/" name="top"><img src="<?php print get_template_directory_uri(); ?>/images/logo.png"  width="362" height="127" alt="Civil Air Patrol"></a>
					</div>
					<div class="headerDivider"></div>
					<div class="bloginfo">
						<div style="font-size: 42px"><?php bloginfo( 'name' ); ?></div>
						<div style="font-size: 28px"><?php bloginfo( 'description' ); ?></div>
					</div>
					<div class="servings">
						<span class="servingsTitle">Citizens Serving <br/> Communities</span>
						<?php
							wp_nav_menu( array(
								'link_after' => '</span>',
								'link_before' => '<span class="arrow"></span><span>',
								'container' => false,
								'theme_location' => 'header-links'
							) );
						?>
					</div>
					<div id="mainNavigation">
						<?php
							wp_nav_menu( array(
								'container' => false,
								'theme_location' => 'main-navigation'
							) );
						?>
						<div class="search">
							<form action="/" method="get">
								<input type="text" id="s" name="s" class="searchInput" placeholder="Search..." value="<?php the_search_query(); ?>" />
								<input type="submit" class="submitBt" value="" />
							</form>
						</div>
					</div>
				</div>

				<div id="pageContent">
					<div class="contentBorder"></div>
					<div id="content">
<?php
/* AKWG - clean up all this code below once we decide to keep it */
	if(get_post_meta($post->ID, 'header-slider-id', true)!="") {
?>
						<div class="slideshowTop"></div>
						<div class="slideshow">
<?php /* AKWG - remove static slide. Add MetaSlider plugin. Need to un-hardcode the slider number and add per-page function
							<img src="<?php print get_template_directory_uri(); ?>/images/sliedshow.jpg" alt="slideshow image" width="1024" height="342" />
*/ ?>

<?php echo "<!-- get_post_meta(header-slider-id) = " . get_post_meta($post->ID, 'header-slider-id', true) . " -->"; ?>

<?php echo do_shortcode('[metaslider id=' . get_post_meta($post->ID, 'header-slider-id', true) . ']'); ?>
							<?php /* echo do_shortcode('[metaslider id="20"]'); */ ?>
						</div>
						<div class="slideshowBottom"></div>
<?php
}
?>
						<div class="mainContent">
							<div class="leftColumn">
								<?php
									wp_nav_menu( array(
										'container' => false,
										'theme_location' => 'sidebar-navigation'
									) );
								?>
							</div>
							<div class="mainColumn">
								<div class="breadcrumbs">
									<ul>

										<?php if ( ! is_front_page() ) : ?>
											<li><a href="/">Home</a></li>
											<li class="divider">/</li>
										<?php endif; ?>

										<?php if ( is_page() ) : ?>
											<?php if ( $post->post_parent ) : ?>
												<li><a href="<?php print get_the_permalink( $post->post_parent ); ?>"><?php print get_the_title( $post->post_parent ); ?></a></li>
												<li class="divider">/</li>
											<?php endif; ?>
											<li><a href="<?php print get_the_permalink( $post->ID ); ?>" class="selected"><?php print get_the_title( $post->ID ); ?></a></li>
										<?php endif; ?>

										<?php if ( is_search() ) : ?>
											<li><a href="#" class="selected">Search Results</a></li>
										<?php endif; ?>

									</ul>
								</div>
								<div class="mainText">
