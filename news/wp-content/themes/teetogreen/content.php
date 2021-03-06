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
<div class="site-width">
<div class="blog-entry">
<?php endif; ?>
  
  <?php if ( !is_single() ) : ?>
	<div class="entry-header">
		<?php //twentyfifteen_post_thumbnail(); ?>
		<?php the_title( '<h3 class="entry-title">', '</h3>' ); ?>
		<h4><?php the_date(); ?></h4>
	</div><!-- .entry-header -->
	<?php endif; ?>

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
			  echo "<a href=\"" . get_permalink() . "\" class=\"ttg-button\">READ FULL STORY</a>";
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
</div> <!-- END blog-entry -->
</div> <!-- END site-width -->
<?php endif; ?>