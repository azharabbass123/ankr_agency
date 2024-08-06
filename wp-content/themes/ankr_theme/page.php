<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ankr_theme
 */

get_header();
?>

<main id="primary" class="site-main">

	<?php
	// Custom query to fetch all published posts
	$args = array(
		'post_type' => 'post',          // Fetch posts
		'posts_per_page' => 10,         // Number of posts to display
		'post_status' => 'publish',     // Only fetch published posts
	);

	$query = new WP_Query($args);

	// Check if there are posts
	if ($query->have_posts()) :
		// Loop through the posts
		while ($query->have_posts()) : $query->the_post();

			// Display the content for each post
			get_template_part('template-parts/content', get_post_format());

		endwhile;

		// Pagination if needed
		the_posts_pagination();

	else :
		echo '<p>No posts found</p>';
	endif;

	// Restore original Post Data
	wp_reset_postdata();
	?>

</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
