<?php get_header(); ?>


<?php 
if( have_posts() ):
	while(have_posts() ) :  the_post(); ?>
		<div class="container">
			<?php the_post_thumbnail(); ?>
			<h1><?php the_title(); ?></h1>
			<small>Posted on: <?php the_time('F j, Y');?>  <?php the_category(); ?></small>

			<img src="<?php get_the_post_thumbnail('thumbnail'); ?>">
			<p><?php the_excerpt(); ?></p>
			<p><?php the_content(); ?></p>
			
		</div>
		

		<?php		
	endwhile;
endif;
?>



<?php get_footer(); ?>