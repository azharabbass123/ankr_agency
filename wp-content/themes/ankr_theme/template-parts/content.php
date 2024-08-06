<?php

/*
	
@package senset-theme
-- Standard Post Format

*/

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header text-center">

		<?php the_title('<h1 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h1>'); ?>



	</header>

	<div class="entry-content">

		<?php if (sunset_get_attachment()) : ?>

			<a class="standard-featured-link" href="<?php the_permalink(); ?>">
				<div class="standard-featured background-image" style="background-image: url(<?php echo sunset_get_attachment(); ?>);"></div>
			</a>

		<?php endif; ?>

		<div class="entry-content">
			<?php the_content(); ?>
		</div>


	</div><!-- .entry-content -->



</article>