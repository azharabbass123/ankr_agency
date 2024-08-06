<?php

/*
	
@package senset-theme
-- Quote Post Format

*/

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('sunset-format-quote'); ?>>
	<section class="about__note" id="about_us_section"> <!-- Start a new section with a CSS class 'about__note' -->
		<div class="container"> <!-- Create a container div -->
			<div class="inner"> <!-- Create an inner div -->
				<div class="sec__head"> <!-- Create a section header div -->
					<div class="sec__head--title"> <!-- Create a div for the section title -->
						<h2>

						</h2> <!-- Output the 'about_note_title' within an h2 element -->
						<span class="sec__head--title-arc"></span> <!-- Create a decorative span element -->
					</div>
					<div class="sec__head--headline"> <!-- Create a div for the section headline -->
						<p>At ANKR, our goal is simple: <strong>drive ROI</strong> for our clients. For years, we&#8217;ve meticulously crafted strategies that translate into tangible business outcomes. Every digital campaign, every web page, is designed to turn visitors into <strong>loyal customers</strong>.</p>
						<!-- Output the 'about_note_headline' -->
					</div>
				</div>
			</div>
		</div>
	</section>
</article>