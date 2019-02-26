<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CableraOnline
 */

?>

<?php
	$full_img = get_post_meta( get_the_ID(), '_strappress_full_featured', true );
	//echo $full_img;
?>
	<article id="post-<?php the_ID(); ?>" class="card mb-3 card shadow-sm">
		<div class="card-body">
			<div class="row">
				<?php if ( has_post_thumbnail() && !is_single() ) : ?>
				<div class="col-12 col-md-9">
				<?php else : ?>
				<div class="col-12">
				<?php endif; ?>
				<?php
				$id = get_the_ID();
				$categories = wp_get_object_terms( $id, 'category' , array( 'orderby' => 'id' ) );
				if (! empty( $categories )) :
					foreach ($categories as $category) {
						if ($category->term_id == 1)
							break;
				?>
				<strong class="mb-2 text-primary"><?php echo $category->name; ?></strong>
				<?php
				}
				endif; ?>
				
				<?php
				if ( is_single() ) :
					the_title( sprintf( '<h1 class="entry-title"><a href="%s" target="blank">', esc_url( cableraonline_get_link_url() ) ), '</a></h1>' );
				else :
					the_title( sprintf( '<h3 class="mb-2 h4"><a href="%s" class="text-dark" target="blank">', esc_url( cableraonline_get_link_url() ) ), '</a></h3>' );
				endif; ?>
				<?php
				$terms = get_the_terms( $post->ID, 'source' );
				if ( $terms && ! is_wp_error( $terms ) ) : 
	
					$draught_links = array();
				
					foreach ( $terms as $term ) {
						$draught_links[] = $term->name;
					}
										
					$on_draught = join( ", ", $draught_links );
					?>
					<small class="card-subtitle mb-2 text-muted">
					<?php printf( esc_html__( '%s', 'textdomain' ), esc_html( $on_draught ) ); ?>
					 - <time class="timeago" datetime="<?php echo $post->post_date; ?>" title="<?php echo $post->post_date; ?>"></time>
					</small>
				<?php endif; ?>
				</div><!-- col-9 -->
				<?php if ( has_post_thumbnail() && !is_single() ) :
				$img = get_the_post_thumbnail_url( get_the_ID(), 'medium' );	
				?>
				<div class="col-12 col-md-3 mt-3 mt-md-0">
				<a href="<?php echo esc_url( cableraonline_get_link_url() ); ?>" target="_blank">
					<img class="card-img-top" src="<?php echo $img; ?>">
				</a>
				</div>
				<?php endif; ?>
			</div><!-- .row -->
		</div><!-- .card-body -->
	</article><!-- #post-## -->
