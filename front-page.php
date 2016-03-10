<?php get_header();  ?>

<div class="main">
  <div class="container">
	<section class="hero" style="background-image: url('<?php the_field('hero_image'); ?>');">
	     <h1><?php bloginfo( 'name' ); ?></h1>
	     <h2><h2><?php bloginfo('description'); ?></h2></h2>
	</section>

    <div class="content">
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <section class="aboutSection">
      	<div class="aboutContent">
      	<div id="left-triangle"></div>
	        	<h2><?php the_title(); ?></h2>
	      	<div class="about">
       			<?php the_content(); ?>
	        	<img src="<?php the_post_thumbnail_url('full')?>" alt="">
	        </div>
       	 </div>
		</section>


		<section class="skills">
			<h2><?php the_field('skills_title');?></h2>
			
			<div class="skillIcons">
				<?php if( have_rows('skill-icons')): ?>
				<?php while( have_rows('skill-icons')): the_row(); ?>
				<i class="fa <?php the_sub_field('icon')?>"></i>
				<p class="caption">
					<?php get_sub_field('caption')?>
				</p>
				<?php endwhile; ?>
			<?php endif; ?>
			</div>
			<p>
				<?php the_field('service_description');?>
			</p>
		</section>
		
		<section class="portfolioSection">
			<?php $portfolioQuery = new WP_Query(array(
			  'posts_per_page' => 2,
			  'post_type' => 'portfolio' 
			)); ?>

			<?php if($portfolioQuery-> have_posts()): ?>
			  <?php while($portfolioQuery-> have_posts()): ?>
			    <?php $portfolioQuery-> the_post(); ?>
			    <!-- what we want to show goes here -->
			    <h3><?php the_title(); ?></h3>
			 <?php while(has_sub_field('skill-icon')): ?>
			  
			    <?php endwhile; ?>
			  <?php endwhile; ?>
			  <?php wp_reset_postdata(); ?>
			<?php  endif; ?>
		</section>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>