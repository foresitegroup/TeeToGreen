<?php
$PageTitle = "2016 Tee To Green";
$Description = "";
$Keywords = "";

include "header.php";
?>


  <div class="subheader site-width">
    <?php echo $PageTitle; ?>
  </div>
</div>

<div class="site-width gallery">
  <link rel="stylesheet" href="inc/swipebox/swipebox.css">
  <script src="inc/jquery.swipebox.min.js"></script>
  <script type="text/javascript">$(document).ready(function() { $('.swipebox').swipebox(); });</script>
  <?php
  $main_dir = "images/gallery2016";

  $files = scandir($main_dir);
  foreach($files as $file) {
    // Ignore non-files
    if ($file == "." || $file == "..") continue;

    // Put results into an array
    $results[] = $main_dir . "/" . $file;
  }

  natcasesort($results);

  foreach($results as $result) {
    ?>
    <a href="<?php echo $result; ?>" class="swipebox" style="background-image: url(<?php echo $result; ?>)"></a>
    <?php
  }
  ?>
</div>

<?php include "footer.php"; ?>