<?php /*
	
@package sunsettheme

*/

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">


		<div class="container sunset-posts-container">

			<?php

			if (have_posts()) :

				while (have_posts()) : the_post();

					/*
							$class = 'reveal';
							set_query_var( 'post-class', $class );
							*/
					get_template_part('template-parts/content', get_post_format());

				endwhile;

				echo '</div>';

			endif;

			?>

		</div><!-- .container -->
		<?php
		/*
	
		@package ankr-theme
		
		*/
		get_template_part('template-parts/content-services');
		get_template_part('template-parts/content-video-gallery');
		get_template_part('template-parts/content-testimonials');
		get_template_part('template-parts/content-our-team');
		get_template_part('template-parts/content-contact-form');
		?>
	</main>
</div><!-- #primary -->

<?php get_footer(); ?>