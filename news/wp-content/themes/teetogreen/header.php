<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

$TopDir = ($_SERVER['DOCUMENT_ROOT'] != dirname(__FILE__)) ? "http://" . $_SERVER['HTTP_HOST'] . "/" : "";
if ($_SERVER['SERVER_NAME'] == "localhost") { $parts = explode("/", $_SERVER['REQUEST_URI']); $TopDir .= $parts[1] . "/"; }

// $HeaderClass = "blog";
// $PageTitle = "T2G News & Blog";
if ( !is_single() ) :
  $HeaderClass = "blog";
  $PageTitle = "T2G News & Blog";
else :
  $HeaderClass = "blog-single";
  $HeaderBackground = wp_get_attachment_url(get_post_thumbnail_id());
  $PageTitle = get_the_title();
endif;

include "../header.php";
?>

  <div class="subheader site-width">
    <?php echo $PageTitle; ?>
    <?php if ( is_single() ) : echo "<h5>" . get_the_date() . "</h5>"; endif; ?>
    <?php if ( !is_single() ) : wp_nav_menu( array( 'theme_location' => 'blog-menu' ) ); endif; ?>
  </div>
  <?php if ($HeaderBackground != "") { ?></div><?php } ?>
</div>

<?php if ( is_single() ) : ?>
<div class="site-width">
<?php endif; ?>
