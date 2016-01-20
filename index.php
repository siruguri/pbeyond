<?php $mts_options = get_option('clock'); ?>
<?php get_header(); ?>
<div id="page">
  <div class="content">
    <article class="article">
      <div id="content_box">
	<?php if (!is_paged()) { ?>
	  <?php if($mts_options['mts_featured_slider'] == '1') { ?>
	    <div id="sliderBox" class="slider-container loading">
              <section class="slider">
                <div class="flexslider">
                  <ul class="slides">
		    <?php $slider_cat = implode(",", $mts_options['mts_featured_slider_cat']);
		    $my_query = new WP_Query('cat='.$slider_cat.'&posts_per_page=5');
		    if ($my_query->have_posts()) {
		     while ($my_query->have_posts()) {
			$my_query->the_post(); 
			$image_id = get_post_thumbnail_id(); 
			$image_url = wp_get_attachment_image_src($image_id,'slider_thumb'); 
			$image_url = $image_url[0]; ?>
		    <li class='sliderholder' data-thumb="<?php echo $image_url; ?>">
		      <a href="<?php the_permalink() ?>">
			<?php the_post_thumbnail('slider',array('title' => '')); ?>
			<div class="flex-caption">
			  <h2 class="slidertitle"><?php the_title(); ?></h2>
			  <span class="slidertext"><?php echo excerpt(32); ?></span>
			</div>
		      </a>
		    </li>
		    <?php }; wp_reset_query(); }; ?>
		  </ul>
		</div>
	      </section>
	    </div>
	<?php } ?>
      <?php } ?>
      <?php if (!is_paged()) { ?>
	<div id="home_post_cont">
	</div>
      <?php } ?>
    </article>
    <?php get_sidebar(); ?>

<?php get_footer(); ?>