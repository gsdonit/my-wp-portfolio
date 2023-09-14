
<?php 
/*
	Template Name: Homepage
*/
	get_header(); ?>

	<?php 
	$header = get_field('banner_heading');
	$image = get_field('banner_image');
	$content = get_field('banner_content');
	?>

	<section id="profile">
		<div class="page-banner">
			<div class="container">
				<div class="row justify-content-left">
					<div class="profile col-12 col-lg-5">

						<img src="<?php echo $image ?>" alt=""> <!-- // profile img -->
						<h2>Gabriel Sciacca Dias</h2>
						<h5> Front End Developer <br> WordPress custom theme developer</h5>
						<div class="social-icons">
							<a href="https://www.linkedin.com/in/gsd-init/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
							<a href=""><i class="fab fa-github"></i></a>	
							<a href="mailto:gsdias22@gmail.com"><i class="far fa-envelope"></i></a>				
						</div>
					</div>			

					<div class="biography col-12 col-lg-7">
						<?php echo $content ?>

						<div class="interests">
							<h3>Interests</h3>
							<ul>
								<li>WordPress Custom Theme</li>
								<li>Javascript</li>
								<li>JQuery</li>
								<li>HTML</li>
								<li>SCSS</li>
								<li>Bootstrap</li>					
							</ul>
						</div>

						<div class="education">
							<h3>Education</h3>
							<div class="grad-item">
								<i class="fas fa-graduation-cap"></i>
								<div class="edu-wrapper">
									<p class="course">Web Development Diploma, 19 - 21</p>
									<p class="school">Cornerstone International Community College of Canada</p>
								</div> 			
							</div>
							<div class="grad-item">
								<i class="fas fa-graduation-cap"></i>
								<div class="edu-wrapper"> 
									<p class="course">Bachelor of Business, 2013 - 2016</p>
									<p class="school">Troy University, Troy AL</p>
								</div>						
							</div>
						</div>

					</div>

				</div>		
			</div>
		</div>
	</section>

	<?php $skills = get_field('post_skills') ?: ''; ?>
	<section id="skills" class="skills-section">
		<div class="container">
			<div class="row justify-content-evenly">
				<div class="col-10 text-center">
					<h2>Skills</h2>
				</div>
				<div class="skills-bar col-md-5">
					<div id="talk-bubble">
						<h5>Hard-Skills</h5>
					</div>
					<div class="bar">
						<div class="info">
							<span>HTML <img src="https://img.icons8.com/color/48/null/html-5--v1.png"/></span>
						</div>
						<div class="progress-line html">
							<span></span>
						</div>					
					</div>
					<div class="bar">
						<div class="info">
							<span>WordPress <img src="https://img.icons8.com/color/48/null/wordpress.png"/></span>
						</div>
						<div class="progress-line wordpress">
							<span></span>
						</div>					
					</div>
					<div class="bar">
						<div class="info">
							<span>CSS3 <img src="https://img.icons8.com/color/48/null/css3.png"/> </span>
						</div>
						<div class="progress-line sass">
							<span></span>
						</div>					
					</div>
					<div class="bar">
						<div class="info">
							<span>SASS <img src="https://img.icons8.com/color/48/null/sass.png"/></span>
						</div>
						<div class="progress-line sass">
							<span></span>
						</div>					
					</div>
					<div class="bar">
						<div class="info">
							<span>Javascript/Jquery <img src="https://img.icons8.com/color/48/null/javascript--v1.png"/></span>
						</div>
						<div class="progress-line js">
							<span></span>
						</div>					
					</div>
					<div class="bar">
						<div class="info">
							<span>PHP<img src="https://img.icons8.com/color/48/null/php.png"/></span>
						</div>
						<div class="progress-line php">
							<span></span>
						</div>					
					</div>
					<div class="bar">
						<div class="info">
							<span>Git<img src="https://img.icons8.com/color/48/null/git.png"/></span>
						</div>
						<div class="progress-line git">
							<span></span>
						</div>					
					</div>
					<div class="bar">
						<div class="info">
							<span>Bootstrap <img src="https://img.icons8.com/color/48/null/bootstrap.png"/></span>
						</div>
						<div class="progress-line bootstrap">
							<span></span>
						</div>					
					</div>

				</div>
				<div class="skills-bar col-md-5 soft-skills">
					<div id="talk-bubble">
						<h5>Soft-Skills</h5>
					</div>
					<div class="bar">
						<div class="info">
							<span>Team player<img src="/wp-content/themes/my-wp-portfolio/images/group-task.png"></span>
						</div>
						<div class="progress-line team-player">
							<span></span>
						</div>					
					</div>
					<div class="bar">
						<div class="info">
							<span>Communication<img src="/wp-content/themes/my-wp-portfolio/images/communication.png"></span>
						</div>
						<div class="progress-line communication">
							<span></span>
						</div>					
					</div>
					<div class="bar">
						<div class="info">
							<span>Attention to detail<img src="/wp-content/themes/my-wp-portfolio/images/attention.png"></span>
						</div>
						<div class="progress-line attention-to-detail">
							<span></span>
						</div>					
					</div>
					<div class="bar">
						<div class="info">
							<span>Creativity<img src="/wp-content/themes/my-wp-portfolio/images/light-on.png"></span>
						</div>
						<div class="progress-line creativity">
							<span></span>
						</div>					
					</div>
					<div class="bar">
						<div class="info">
							<span>Problem-solving<img src="/wp-content/themes/my-wp-portfolio/images/problem-solving.png"></span>
						</div>
						<div class="progress-line 80--">
							<span></span>
						</div>					
					</div>
					<div class="bar">
						<div class="info">
							<span>Adaptability<img src="/wp-content/themes/my-wp-portfolio/images/swap.png"></span>
						</div>
						<div class="progress-line adaptability">
							<span></span>
						</div>					
					</div>			
					<div class="bar">
						<div class="info">
							<span class="tennis-ball">Tennis <img src="https://img.icons8.com/color/48/null/tennis.png"/></span>
						</div>
						<div class="progress-line tennis">
							<span></span>
						</div>					
					</div>
				</div>				
			</div>
		</div>
	</section>

	<?php $projects = get_field('images_slider') ?: []; ?>
	<section id="projects" class="projects-slider slider-section">
		<div class="container-xl">
			<div class="row justify-content-center">
				<div class="col-md-10">
					<h1 class="section-heading">Live Projects</h1>
					<div id="hidden-message">
						<p>I developed, designers designed.</p>
					</div>
				</div>
				<div class="col-md-10 my-slider">
					<?php
					$args = [
						'post_type'      => 'project',				
						'post__in'       => $projects,
						'orderby'        => 'post__in',
					];
					$query = new WP_Query($args); ?>
					<?php while ($query->have_posts()) : $query->the_post();?>
						<div class="projects-wrapper">		
							<h4><?php the_title() ?></h4>	

							<?php 
							$id = get_the_ID();
							$project_link = get_field('project_link', $id);
							?>
							
							<?php if(get_field('no_permalink', get_the_ID())) { ?>							
								<a href="<?php echo $project_link ?>" target="_blank">
								<img src="<?php echo get_field('project_image', get_the_ID())  ?>" alt="">
							</a>

							<?php } else { ?>
								<a href=" <?php the_permalink() ?> ">
									<img src="<?php echo get_field('project_image', get_the_ID())  ?>" alt="">
								</a>	
							<?php } ?>
						</div>
					<?php endwhile; ?>
					<?php wp_reset_query(); ?>
				</div>
			</div>
		</div>
	</section>

	<?php $testimonials = get_field('testimonials') ?: []; 	?>
	<section id="testimonial" class="slider-section">
		<div class="container-xl">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<h1 class="section-heading">Testimonials</h1>				
				</div>
				<div class="col-lg-8 testimonial-slider">
					<?php
					$args = [
						'post_type'      => 'testimonial',				
						'post__in'       => $testimonials,
						// 'orderby'        => 'post__in',
					];
					$query = new WP_Query($args); ?>
					<?php while ($query->have_posts()) : $query->the_post();?>
						<article>
							<div class=" testimonial-wrapper">		
								<div class="quote">
									<?php the_excerpt() ?>
								</div>							
								<div class="position">
									<h5><?php the_title() ?>, <?php echo get_field('position', get_the_ID())  ?></h5>								
								</div>

							</div>
						</article>

					<?php endwhile; ?>
					<?php wp_reset_query(); ?>
				</div>
			</div>
		</div>
	</section>

	<?php 
	$about_content = get_field('about_content');
	$about_image = get_field('about_image');
	?>
	<section id="about" class="about-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 d-flex justify-content-center">			
					<div class="col-md-6">
						<?php echo $about_content ?>
					</div>	

				</div>
			</div>
		</div>
	</section>

	<?php 
	$id = get_the_ID();
	$contact_form = get_field('contact_form', $id);
	?>
	<section id="contact" class="contact-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8 col-md-10 col-sm-12 d-flex justify-content-center">	
					<h2>Contact Me</h2>			
					<?php echo do_shortcode($contact_form); ?>					
				</div>
			</div>
		</div>
	</section>
	<?php get_footer(); ?>