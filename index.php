<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package StrapPress
 */

get_header(); ?>

      <div class="row">
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
					* Include the Post-Format-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Format name) and that will be used instead.
					*/
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_pagination( array(
				'prev_text' => '<i class="fa fa-arrow-left" aria-hidden="true"></i><span class="screen-reader-text">' . __( 'Previous Page', 'pool' ) . '</span>',
				'next_text' => '<span class="screen-reader-text">' . __( 'Next Page', 'pool' ) . '</span><i class="fa fa-arrow-right" aria-hidden="true"></i>',
			) ); 

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

      </div><!-- .row -->

<?php
get_footer();
