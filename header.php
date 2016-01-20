<!DOCTYPE html>
<?php $mts_options = get_option('clock'); ?>
<html class="no-js" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<!--[if IE ]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<![endif]-->
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<?php mts_meta(); ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Mate' rel='stylesheet' type='text/css'>
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
</head>
<body id ="blog" <?php body_class('main'); ?> itemscope itemtype="http://schema.org/WebPage">
	<div class="main-container">
	<header class="main-header">
	<?php mts_cart(); ?>
		<div class="container">
			<div id="header">
				<div class="logo-wrap">
					<?php if ($mts_options['mts_logo'] != '') { ?>
						<?php if( is_front_page() || is_home() || is_404() ) { ?>
								<p id="logo" class="image-logo">
									<a href="<?php echo home_url(); ?>"><img style='max-width: 500px;' src="<?php echo $mts_options['mts_logo']; ?>" alt="<?php bloginfo( 'name' ); ?>"></a>
								</p><!-- END #logo -->
						<?php } else { ?>
							  <p id="logo" class="image-logo">
									<a href="<?php echo home_url(); ?>"><img style='max-width: 500px;' src="<?php echo $mts_options['mts_logo']; ?>" alt="<?php bloginfo( 'name' ); ?>"></a>
								</p><!-- END #logo -->
						<?php } ?>
					<?php } else { ?>
						<?php if( is_front_page() || is_home() || is_404() ) { ?>
								<h1 id="logo" class="text-logo">
									<a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
								</h1><!-- END #logo -->
						<?php } else { ?>
							  <h2 id="logo" class="text-logo">
									<a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
								</h2><!-- END #logo -->
						<?php } ?>
						<div class="site-description">
							<?php bloginfo( 'description' ); ?>
						</div>
					<?php } ?>
					<div class="social-media-icon"> 
					  <div class=textwidget style='float: right ' ><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					    <input type="hidden" name="cmd" value="_s-xclick">
					    <input type="hidden" name="hosted_button_id" value="6YBDARGUPP67Y">
					    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					  </form>
					  </div>

					  <?php if ($mts_options['header_social_buttons'] == '1') { ?>
					    <?php mts_social_media(); ?>
					  <?php } ?>

					</div>
				</div>
				<?php if($mts_options['mts_sticky_nav'] == '1') { ?>
					<div class="clear" id="catcher"></div>
					<div id="sticky" class="secondary-navigation">
				<?php } else { ?>
				<div class="secondary-navigation">
				<?php } ?>
					<nav id="navigation" class="clearfix">
						<?php if ( has_nav_menu( 'primary-menu' ) ) { ?>
							<?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'menu_class' => 'menu clearfix', 'container' => '' ) ); ?>
						<?php } else { ?>
							<ul class="menu clearfix">
								<?php wp_list_categories('title_li='); ?>
							</ul>
						<?php } ?>
						<a href="#" id="pull">Menu</a>  
					</nav>
				</div>              
			</div><!--#header-->
		</div><!--.container-->        
	</header>