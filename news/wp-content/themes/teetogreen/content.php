<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<?php if ( !is_single() ) : ?>
<div class="blog-entry">
<?php endif; ?>

	<div class="entry-header">
		<?php twentyfifteen_post_thumbnail(); ?>
		<?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
		<?php the_date(); ?>
	</div><!-- .entry-header -->

	<div class="entry-content">
		<?php
		  if ( is_single() ) :
				/* translators: %s: Name of current post */
				the_content( sprintf(
					__( 'Continue reading %s', 'twentyfifteen' ),
					the_title( '<span class="screen-reader-text">', '</span>', false )
				) );

				the_tags( '<span class="tags-links">Tags: ', ', ', '</span>' );
			else :
				the_excerpt();
			  echo "<a href=\"" . get_permalink() . "\">READ MORE</a>";
			endif;

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->

<?php if ( !is_single() ) : ?>
</div>
<?php endif; ?>