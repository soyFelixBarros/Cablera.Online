<?php
/**
 * Página principal.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package StrapPress
 */

get_header(); ?>

    <div class="row justify-content-center">
        <div class="col-12 col-md-7">
		<?php
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
					* Include the Post-Format-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Format name) and that will be used instead.
					*/
				get_template_part( 'template-parts/content', get_post_format() );

            endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
        </div><!-- .col-* -->
    </div><!-- .row -->

<?php
get_footer();
