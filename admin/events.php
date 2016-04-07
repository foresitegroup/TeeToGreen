<?php
include "login.php";

$PageTitle = "Events Administration";
include "header.php";
?>

<div class="one-half">
  <h2>Add Event</h2>

  <form action="events-db.php?a=add" method="POST">
    <div>
      <input type="text" name="title" placeholder="Title"><br>
      <br>

      <input type="text" name="date" placeholder="Date"><br>
      <br>

      <input type="text" name="location" placeholder="Location"><br>
      <br>

      <input type="text" name="location_address" placeholder="Location Address"><br>
      <br>

      <input type="text" name="image" placeholder="Image"><br>
      <br>

      <input type="text" name="image_banner" placeholder="Banner Image"><br>
      <br>

      <input type="text" name="sponsors" placeholder="Event Sponsors"><br>
      <br>

      <textarea name="blurb" placeholder="Blurb"></textarea><br>
      <br>

       <textarea name="details" placeholder="Details"></textarea><br>
      <br>

      <textarea name="schedule" placeholder="Schedule"></textarea><br>
      <br>

      <textarea name="registration" placeholder="Registration"></textarea><br>
      <br>

      <textarea name="home_summary" placeholder="Home Page Summary"></textarea><br>
      <br>

      <textarea name="meta_description" placeholder="Description Meta Tag"></textarea><br>
      <br>

      <textarea name="meta_keywords" placeholder="Keywords Meta Tag"></textarea><br>
      <br>

      <input type="submit" name="submit" value="ADD EVENT">
    </div>
  </form>
</div>

<div class="one-half last">
  <h2>Available Events</h2>

  <?php
  $result = $mysqli->query("SELECT * FROM events ORDER BY date ASC");

  while($row = $result->fetch_array(MYSQLI_ASSOC)) {
    ?>
    <div class="one-fourth edit-icons">
      <a href="events-db.php?a=delete&id=<?php echo $row['id']; ?>" onClick="return(confirm('Are you sure you want to delete this record?'));"><i class="fa fa-trash"></i></a>
      <a href="events-edit.php?id=<?php echo $row['id']; ?>"><i class="fa fa-pencil"></i></a>
    </div>

    <div class="three-fourth last">
      <strong><?php echo $row['title']; ?></strong><br>
      <?php echo ($row['date'] != "") ? date("n/j/Y", $row['date']) : "TBA"; ?><br>
      <br>
    </div>
    <?php
  }
  
  mysqli_free_result($result);
  ?>
</div>

<?php include "footer.php"; ?>