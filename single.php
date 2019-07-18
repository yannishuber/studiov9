<?php
get_header();
?>
	<section class="content">
			<?php
			while ( have_posts() ) {
				the_post();
				the_content();
            }
			?>
	</section>

<?php
get_footer();
