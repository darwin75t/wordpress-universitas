<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Advance Training Academy
 */

get_header(); ?>


<main role="main" id="maincontent">
	<?php
    $advance_training_academy_left_right = get_theme_mod( 'advance_training_academy_single_post_sidebar_layout','Right Sidebar');
    if($advance_training_academy_left_right == 'Left Sidebar'){ ?>
    	<div class="container">
	        <div class="row">
		    	<div id="sidebar" class="col-lg-4 col-md-4 mt-3">
					<?php get_sidebar();?>
				</div>
				<div class="col-lg-8 col-md-8 content-ts mt-3">
					<div class="bradcrumbs">
                		<?php advance_training_academy_the_breadcrumb(); ?>
              		</div>
					<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content-single' );

						endwhile; // End of the loop.
					?>
		       	</div>
		    </div>
		</div>
    <?php }else if($advance_training_academy_left_right == 'Right Sidebar'){ ?>
    	<div class="container">
	    	<div class="row">
		       	<div class="col-lg-8 col-md-8 content-ts mt-3">
		       		<?php if (get_theme_mod('advance_training_academy_single_post_breadcrumb',false) != ''){ ?>
			       		<div class="bradcrumbs">
	                		<?php advance_training_academy_the_breadcrumb(); ?>
	              		</div>
	              	<?php }?>
					<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content-single' );

						endwhile; // End of the loop.
					?>
		       	</div>
				<div id="sidebar" class="col-lg-4 col-md-4 mt-3">
					<?php get_sidebar();?>
				</div>
			</div>
		</div>
	<?php }else if($advance_training_academy_left_right == 'One Column'){ ?>
		<div class="content-ts">
			<?php if (get_theme_mod('advance_training_academy_single_post_breadcrumb',false) != ''){ ?>
				<div class="bradcrumbs">
	         		<?php advance_training_academy_the_breadcrumb(); ?>
	            </div>
	        <?php }?>
			<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content-single' );
				
				endwhile; // End of the loop.
			?>
       	</div>
	<?php } else { ?>
		<div class="row">
	       	<div class="col-lg-8 col-md-8" class="content-ts">
	       		<?php if (get_theme_mod('advance_training_academy_single_post_breadcrumb',false) != ''){ ?>
		       		<div class="bradcrumbs">
	                	<?php advance_training_academy_the_breadcrumb(); ?>
	              	</div>
	            <?php }?>
				<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content-single' );

					endwhile; // End of the loop.
				?>
	       	</div>
			<div id="sidebar" class="col-lg-4 col-md-4 mt-3">
				<?php dynamic_sidebar('sidebar-1'); ?>
			</div>
		</div>
	<?php }?>
    <div class="clearfix"></div>
</main>

<?php get_footer(); ?>