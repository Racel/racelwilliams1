<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything untill Primary Navigation
 *
 * @package Sampression-Lite
 * @since Sampression Lite 1.0
 */

?>
<!doctype html>
<!--[if IE 6 ]> <html <?php language_attributes(); ?> class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]> <html <?php language_attributes(); ?> class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]> <html <?php language_attributes(); ?> class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]> <html <?php language_attributes(); ?> class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html <?php language_attributes(); ?> class="no-js"> <!--<![endif]--><head>

	<meta charset="<?php bloginfo('charset'); ?>">
	<!-- Mobile Specific Metas
  	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2">

	<title>
	<?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	?>
    </title>
    
    <!-- Favicons
    ================================================== -->
	<?php sampression_favicon(); ?>
	
    <!-- CSS
    ================================================== -->
    <?php wp_enqueue_style('sampression-style', get_stylesheet_uri(), false, '1.3');?>
    
     <!-- Getting Google Fonts
    ================================================== -->
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:700,400,400italic,700italic' rel='stylesheet' type='text/css'>
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<?php wp_head(); ?>
<script type="text/javascript" src="/js/scripts.js"></script>
</head>

<body <?php body_class('top'); ?>>
<header id="header">
  <div class="container">
	<div class="columns two">
		<div id="logo-wrapper">
			 <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" id="logo-area">
				<?php
					if(!get_option('opt_sam_use_logo') || get_option('opt_sam_use_logo') == 'no') {
				?>
				<div class="logo-img"><?php sampression_logo(); ?></div>
				<?php
					}
				?>
			</a>
		</div>
	</div>
	<div class="columns eleven">
		<nav id="top-nav">
        <?php
		//Check if the Custom Navigation is available
		 if ( has_nav_menu('top-menu') ) {
			wp_nav_menu( array (
				'theme_location'    => 'top-menu',
				'container'         => '',
				'menu_class'           => 'top-menu clearfix',
				'depth'             => 0, // set to 1 to disable dropdowns
				'fallback_cb'       => false
			));
		} else {
			// Otherwise list the Pages
			 ?>
			<ul class="top-menu clearfix">
				<?php wp_list_pages('title_li=&depth=0'); ?>
			</ul>
			<?php
		} ?>
      </nav>
      <!-- #top-nav -->
	</div>
	<div class="columns three">
		<div id="interaction-sec">
        <?php get_search_form(); ?>
	  </div>
	</div>
  </div>
</header>
<!-- #header -->
<!-- front page only section -->
<?php if(is_home()): ?>
<div id="frontname">
	<div class="container">
		<div class="columns sixteen">
			 <div class="logo-txt">
				  <h1 id="site-title">B.S. Marketing  |  M.Architecture  |  M.S.Human-Computer Interaction </h1><br/>
				  <img style="max-width:90%" src="http://localhost/racelwilliams1/wp-content/uploads/2012/12/logo3.png">
				  <h1 id="site-title"><?php bloginfo( 'name' ); ?></h1>
				  <h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
			</div>
		</div>
	</div>
</div>

<?php endif; ?>

<!-- Filter the Post by Category: We are using Isotop (http://isotope.metafizzy.co/) for Filtering: An exquisite jQuery plugin for magical layouts -->
<?php/* if(is_home()): */?>
<!--<nav id="primary-nav">
  <div class="container">
  <a href="#" id="btn-nav-opt">show/hide</a>
   <div class="columns sixteen">
    <div class="nav-label"><?php/* _e('Filter:','sampression'); */?></div>
    
    <ul class="nav-listing clearfix">
        <li><a href="#" data-filter="*" class="selected"><span></span><?php/* _e('Show All','sampression'); */?></a></li>
        <?php/*
        $categories = get_categories();
        foreach($categories as $category):
        */?>
        <li><a href="javascript:void(0);" data-filter=".<?php/* echo $category->slug; */?>" id="<?php/* echo $category->slug; */?>" class="filter-data"><span></span><?php/* echo $category->name; */?></a></li>
        <?php/*
        endforeach;
        */?>
    </ul>-->
    
    <!-- Check Viewport: If the normal design couldn't fit with viewport, the Categories will appear via CSS with Select Menu form -->
    <!--<select name="get-cats" id="get-cats">
        <option value="*">Show all</option>
        <?php/*
        foreach($categories as $category):
        */?>
        <option value=".<?php/* echo $category->slug; */?>"><?php/* echo $category->name; */?></option>
        <?php/*
        endforeach;
        */?>
    </select>
    
    </div>
  </div>
</nav>-->
<!-- #primary-nav -->
<?php/* endif; */?>
<div id="content-wrapper">
<div class="container">