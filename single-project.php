<?php get_header(); the_post(); ?>
<?php 
$id = get_the_ID();
$banner_image = get_field('project_image', $id);
$project_link = get_field('project_link', $id);
?>

<!-- Single banner -->

<div class="single-page-banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">				
				<h1><?php the_title() ?></h1>
				<?php the_excerpt() ?>
				<a class="button primary-btn" target="_blank" href="<?php echo $project_link  ?>">Live Site!</a>
			</div>
		</div>
	</div>

</div>	

<?php 
$part_one_image = get_field('part_one_image', $id);
$part_one_image_two = get_field('part_one_image_two', $id);
$part_one_image_three = get_field('part_one_image_three', $id);
$part_one_image_four = get_field('part_one_image_four', $id);
$part_one_content = get_field('part_one_content', $id);

$part_two_image = get_field('part_two_image', $id);
$part_two_image_two = get_field('part_two_image_two', $id);
$part_two_image_three = get_field('part_two_image_three', $id);
$part_two_image_four = get_field('part_two_image_four', $id);
$part_two_image_five = get_field('part_two_image_five', $id);
$part_two_image_six = get_field('part_two_image_six', $id);
$part_two_content = get_field('part_two_content', $id);

$part_three_image = get_field('part_three_image', $id);
$part_three_image_two = get_field('part_three_image_two', $id);
$part_three_image_three = get_field('part_three_image_three', $id);
$part_three_image_four = get_field('part_three_image_four', $id);
$part_three_content = get_field('part_three_content', $id);
?>


<div class="single-content">
	<section class="single-section-one">
		<div class="container content-image">
			<div class="row justify-content-center">
				<div id="box" class="col-lg-5 image-slider img-magnifier-container">
					<img src="<?php echo $part_one_image ?>">
					<?php if($part_one_image_two) { ?>
						<img src="<?php echo $part_one_image_two ?>">
					<?php } ?>
					<?php if($part_one_image_three) { ?>
						<img src="<?php echo $part_one_image_three ?>">
					<?php } ?>					
				</div>
				<div class="col-lg-5 content-col">
					<?php echo $part_one_content ?>
				</div>
			</div>
		</div>
	</section>

	<section class="single-section-two">
		<div class="container content-image right">
			<div class="row justify-content-center">
				<div id="box" class="col-lg-5 image-slider">
					<img src="<?php echo $part_two_image ?>">
					<?php if($part_two_image_two) { ?>
						<img src="<?php echo $part_two_image_two ?>">
					<?php } ?>
					<?php if($part_two_image_three) { ?>
						<img src="<?php echo $part_two_image_three ?>">
					<?php } ?>	
					<?php if($part_two_image_four) { ?>
						<img src="<?php echo $part_two_image_four ?>">
					<?php } ?>	
					<?php if($part_two_image_five) { ?>
						<img src="<?php echo $part_two_image_five ?>">
					<?php } ?>
					<?php if($part_two_image_six) { ?>
						<img src="<?php echo $part_two_image_six ?>">
					<?php } ?>					
				</div>
				<div class="col-lg-5 content-col">
					<?php echo $part_two_content ?>
				</div>
			</div>
		</div>
	</section>

	<section class="single-section-three">
		<div class="container content-image ">
			<div class="row justify-content-center">
				<div id="box" class="col-lg-5 image-slider">
					<img src="<?php echo $part_three_image ?>">
					<?php if($part_three_image_two) { ?>
						<img src="<?php echo $part_three_image_two ?>">
					<?php } ?>
					<?php if($part_three_image_three) { ?>
						<img src="<?php echo $part_three_image_three ?>">
					<?php } ?>		
					<?php if($part_three_image_four) { ?>
						<img src="<?php echo $part_three_image_four ?>">
					<?php } ?>							
				</div>
				<div class="col-lg-5 content-col">
					<?php echo $part_three_content ?>

				</div>
			</div>
		</div>
	</section>
</div>
<?php get_footer();?>