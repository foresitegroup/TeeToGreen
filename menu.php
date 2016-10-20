<?php include_once "inc/dbconfig.php"; ?>
<ul>
  <li>
    <a href="<?php echo $TopDir; ?>tee-to-green.php" class="drop">SUPPORTING</a>
    <ul>
      <li><a href="<?php echo $TopDir; ?>tee-to-green.php">THE FIRST TEE OF SOUTHEAST WISCONSIN</a></li>
    </ul>
  </li>
  <li>
    <a href="<?php echo $TopDir; ?>events.php" class="drop">EVENTS</a>
    <ul>
      <?php
      $result = $mysqli->query("SELECT * FROM events WHERE embargo = '' ORDER BY date ASC");
      while($row = $result->fetch_array(MYSQLI_ASSOC)) {?>
      <li><a href="<?php echo $TopDir; ?>event.php?<?php echo $row['id']; ?>" style="text-transform: uppercase;"><?php echo $row['title']; ?></a></li>
      <?php } ?>
    </ul>
  </li>
  <li>
    <a href="<?php echo $TopDir; ?>partners.php" class="drop">PARTNERS</a>
    <ul>
      <li><a href="<?php echo $TopDir; ?>partners.php#become">BECOME A PARTNER</a></li>
      <li><a href="<?php echo $TopDir; ?>ambassadors-club.php">AMBASSADORS CLUB</a></li>
    </ul>
  </li>
  <li><a href="<?php echo $TopDir; ?>news">NEWS</a></li>
  <li>
    <a href="<?php echo $TopDir; ?>contact.php" class="drop">CONTACT</a>
    <ul>
      <li><a href="<?php echo $TopDir; ?>committee.php">COMMITTEE</a></li>
    </ul>
  </li>
</ul>