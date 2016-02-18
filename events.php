<?php
$PageTitle = "Events";

include "header.php";

include_once "inc/dbconfig.php";
$now = time();
?>
  
  <div class="subheader countdown site-width">
    <?php
    $result = $mysqli->query("SELECT * FROM events WHERE date >= $now ORDER BY date LIMIT 1");
    if ($result->num_rows === 0) {
      $title = "No event scheduled";
      $date = $now;
    } else {
      $row = $result->fetch_array(MYSQLI_ASSOC);
      $title = $row['title'];
      $date = date("n/j/Y G:i:s", $row['date']);
    }
    ?>
    <div class="countdown-text">
      <div class="flex-width">
        <h2>NEXT EVENT</h2><br>
        <?php echo $title; ?>
      </div>
    </div>

    <div id="countdown"></div>
    <script type="text/javascript" src="inc/jquery.countdown.min.js"></script>
    <script type="text/javascript">
      $('#countdown').countdown('<?php echo $date; ?>', function(event) {
        $(this).html(event.strftime('<div>%D<div>Days</div></div> <div class="sep">:</div> <div>%H<div>Hours</div></div> <div class="sep">:</div> <div>%M<div>Minutes</div></div> <div class="sep">:</div> <div>%S<div>Seconds</div></div>'));
      });
    </script>
    <?php mysqli_free_result($result); ?>
  </div>
</div>

<?php
$count = 1;
$result = $mysqli->query("SELECT * FROM events WHERE date >= $now ORDER BY date ASC");
while($row = $result->fetch_array(MYSQLI_ASSOC)) {
  if ($count > 1) echo "<hr class=\"event\">";
  $image = ($row['image'] != "") ? $row['image'] : "event-generic.jpg";
  ?>

  <div class="site-width event">
    <div class="image">
      <img src="images/<?php echo $image; ?>" alt="">
    </div>

    <div class="info">
      <h2><?php echo date("F j, Y", $row['date']); ?></h2>
      <h3><?php echo $row['title']; ?></h3>
      <?php echo $row['blurb']; ?>
      <a href="#" class="ttg-button">View Event Details</a>
    </div>
  </div>

  <?php
  $count++;
}
mysqli_free_result($result);
?>

<?php $mysqli->close(); include "footer.php"; ?>