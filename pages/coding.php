				
<div class="col-md-8">			 
	<?php
	$args = [

		'post_type'      => 'skills',
		'post__in'       => $skills,
		'orderby'        => 'post__in',
	];
	$query = new WP_Query($args); ?>

	<?php while ($query->have_posts()) : $query->the_post();?>

		<div class="projects-wrapper col-sm-4">	

			<?php echo get_field('font_awesome_icon') ?>	
			<h4><?php the_title() ?></h4>
		</div> 

	<?php endwhile; ?>

	<?php wp_reset_query(); ?>


</div>