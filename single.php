<?php

get_header();
?>

	<section class="project-content">

			<?php

			while ( have_posts() ) {
				the_post();

				the_content();

            }
			?>

	</section><!-- #primary -->

<?php
get_footer();
