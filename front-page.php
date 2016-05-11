<?php get_header();  ?>

<!-- SITE WRAPPER -->
<div class="sitewrapper">
	<div class="main">
	<!-- HEADER SECTION -->
	<!-- 	<header style="background-image: url('<?php the_field('hero_image'); ?>');"> -->
			<header>
	 		<div class="container">
	 			<div class="content2">
			    	<div class="heroInfo">
						<div class="logo"><img src="<?php the_field('logo', 'option'); ?>" alt="logo">
						</div>
						<!-- <p class="hiddenMenu">Menu</p> -->
					     <h1><?php bloginfo( 'name' ); ?></h1>
					</div>
						 <h2><?php bloginfo('description'); ?> I Enjoy <span class="rotate"> Coding, Learning, Traveling, Exploring, Designing, Challenges, Projects, New Ideas,  New Experiences,  Laughing,  Eating,  Collaborating, Sharing Ideas </span></h2>
					<div class="navContainer">
					    <?php wp_nav_menu( array(
					      'container' => false,
					      'theme_location' => 'primary'
					    )); ?>
					</div>
				</div>
			</div> <!--container -->
		</header>


	      <?php // Start the loop ?>
	      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	      <?php endwhile; // end the loop?>
	<!-- ABOUT SECTION -->
	    <section class="aboutSection" id="about">
			<div class="leftTriangle">
				<div id="left-triangle"></div>
		    </div>
	      	<div class="container">
		      	<div class="content aboutContent">
			        <h2><?php the_title(); ?></h2>
			      	<div class="about">
			      		<div class="aboutInfo">
			       			<?php the_content(); ?>
			       		</div>
			        	<div class="aboutImage">
			        		<img src="<?php the_post_thumbnail_url('full')?>" alt="">
			        	</div>
			        </div>
		    	</div>
			</div>
		</section>
	<!-- SKILLS AND SERVICE SECTION -->
		<section class="skills" id="skills">
			<div class="container">
				<h2>
					<?php the_field('skills_title');?>
				</h2>
			<div class="content skillSection">
				<div class="skillsContainer">
					<div class="skillIcons">
						<?php if( have_rows('skill-icons')): ?>
						<?php while( have_rows('skill-icons')): the_row(); ?>
						<div class="icons">
							<i class="<?php the_sub_field('icon')?>"></i>
							<p class="caption">
								<?php the_sub_field('caption')?>
							</p>
						</div>
						<?php endwhile; ?>
						<?php endif; ?>
					</div>	
				</div> <!-- skllls container-->
			</div> <!--container-->
			</section>
			<!-- SERVICE SECTION -->
			<section class="service" id="services">
				<div class="container">
					<div class="content">
							<h2><?php the_field('service_title') ?></h2>
						<div class="serviceFlex">
							<?php if( have_rows('service_icons')): ?>
							<?php while( have_rows('service_icons')): the_row(); ?>
							<div class="serviceInfo">
								<?php the_sub_field('service_pic')?>
								<p class="serviceCaption">
									<?php the_sub_field('service_description')?>
								</p>
							</div>
							<?php endwhile; ?>
							<?php endif; ?>
						</div> <!-- serviceFlex-->
					</div>
				</div> <!--container-->
			</section>
	<!-- PORTFOLIO SECTION -->
		<section class="portfolioSection" id="portfolio">
			<div class="container">
				<div class="content portfolioContent">
				<h2><?php the_field('port_title');?></h2>
				<?php $portfolioQuery = new WP_Query(array(
					 'posts_per_page' => 4,
					 'post_type' => 'portfolio' )); ?>

				<?php if($portfolioQuery-> have_posts()): ?>
				<?php while($portfolioQuery-> have_posts()): ?>
				<?php $portfolioQuery-> the_post(); ?>
				<!-- what we want to show goes here -->
				<div class="portfolioDescription">
					<div class="portImage">
						<img src="<?php echo hackeryou_get_thumbnail_url($post) ?>" alt="">
					</div>
					<div class="portfolioInfo">
						<h3><?php the_title(); ?></h3>
						<?php the_content();?>
						<div class="button">
							 <a href="<?php the_field('live_link') ?>"><button>View Live</button></a>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php  endif; ?>
				</div>
			<div id="right-triangle"></div>
			</div>
		</section>
	<!-- CONTACT SECTION -->
		<section class="contact" id="contact">
			<div class="container">
				<div class="content contactContainer">
					<h2><?php the_field('contact_title') ?></h2>
					<div class="contactIcons">
						<?php if( have_rows('contact_icons')): ?>
						<?php while( have_rows('contact_icons')): the_row(); ?>
						<div class="contactCaption">
							<p><?php the_sub_field('info') ?></p>
							<p class="contactLinks">
								<?php the_sub_field('icon') ?> 
								<a href="<?php the_sub_field('contact_link')?>" target="_blank"><?php the_sub_field('caption')?></a>
							</p>
						</div>
						<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>
	<!-- FOOTER SECTION -->
		<?php get_footer(); ?>
	</div> <!--main site-->
</div> <!-- /.site wrapper -->


