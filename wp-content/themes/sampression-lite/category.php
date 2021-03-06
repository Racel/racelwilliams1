<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * The template for displaying Category Archive pages.
 *
 * @package Sampression-Lite
 * @since Sampression Lite 1.0
 */

get_header(); ?>

<section id="content"  class="clearfix">
  <?php if (have_posts()) : ?>

<header class="page-header columns sixteen">
    <h2 class="page-title quick-note"><?php
        printf( __( 'Category Archives: %s', 'sampression' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?>
    </h2>

    <?php
        $category_description = category_description();
        if ( ! empty( $category_description ) )
         echo apply_filters( 'category_archive_meta', '<div class="category-archive-meta">' . $category_description . '</div>' );
    ?>
</header>
<!-- .page-header -->
  
<div id="post-listing" class="clearfix">
  <!-- Corner Stamp: It will always remaing to the right top of the page -->
  <section class="corner-stamp post columns four">
  <header><h3><?php _e('Categories', 'sampression'); ?></h3></header>
  <div class="entry">
    <ul class="categories">
    	<?php wp_list_categories('title_li'); ?> 
    </ul>
  </div>
  
  <header><h3><?php _e('Archive', 'sampression'); ?></h3></header>
  <div class="entry">
    <ul class="categories archives">
    	<?php wp_get_archives( '' ); ?>  
    </ul>
  </div>
  </section>
  <!-- .corner-stamp -->
  
 <?php
  	while (have_posts()) : the_post(); 
    get_template_part( 'loop', 'category' );
    endwhile;
	?>
    
</div>
<!-- #post-listing --> 
<?php
	// Getting Pagination
	sampression_content_nav( 'nav-below' );
 ?>
<?php  else: ?>
<article id="post-0" class="no-results not-found">
    <header class="entry-header">
        <h2 class="entry-title"><?php _e( 'Nothing Found', 'sampression' ); ?></h2>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'sampression' ); ?></p>
    </div><!-- .entry-content -->
</article><!-- .no-results -->
<?php endif; ?>

</section>
<!-- #content -->
<?php
// Getting Bottom Sidebar
 get_sidebar(); ?>

<?php get_footer(); ?>