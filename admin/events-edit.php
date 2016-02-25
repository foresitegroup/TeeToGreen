<?php
include "login.php";

$PageTitle = "Edit Event";
include "header.php";

$result = $mysqli->query("SELECT * FROM events WHERE id = '" . $_GET['id'] . "'");
$row = $result->fetch_array(MYSQLI_ASSOC);
?>

<form action="events-db.php?a=edit" method="POST">
  <div class="one-half">
    <input type="text" name="title" placeholder="Title" value="<?php echo $row['title']; ?>"><br>
    <br>

    <input type="text" name="date" placeholder="Date" value="<?php echo date("n/j/Y", $row['date']); ?>"><br>
    <br>

    <input type="text" name="location" placeholder="Location" value="<?php echo $row['location']; ?>"><br>
    <br>

    <input type="text" name="location_address" placeholder="Location Address" value="<?php echo $row['location_address']; ?>"><br>
    <br>

    <input type="text" name="image" placeholder="Image" value="<?php echo $row['image']; ?>"><br>
    <br>

    <textarea name="blurb" placeholder="Blurb"><?php echo $row['blurb']; ?></textarea>
  </div>

  <div class="one-half last">
    <textarea name="schedule" placeholder="Schedule"><?php echo $row['schedule']; ?></textarea><br>
    <br>

    <textarea name="registration" placeholder="Registration"><?php echo $row['registration']; ?></textarea><br>
    <br>

    <textarea name="home_summary" placeholder="Home Page Summary"><?php echo $row['home_summary']; ?></textarea>
  </div>
  
  <div style="clear: both; height: 1.5em;"></div>

  <div>
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
    <input type="submit" name="submit" value="UPDATE EVENT">
  </div>
</form>

<?php mysqli_free_result($result); include "footer.php"; ?>