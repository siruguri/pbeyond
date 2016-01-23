<?php
/**
 * Template Name: All Posts
 *
 * A custom page template for displaying all posts.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 */

get_header(); ?>

  <div id="container">
     <div id="content" role="main">
     <h2>Archive of All Posts</h2>
       <ul>
           <?php wp_get_archives('type=yearly'); ?>
	     </ul>


   </div><!-- #content -->
     </div><!-- #container -->

<?php get_footer(); ?>