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

    <input type="text" name="short_title" placeholder="Short Title" value="<?php echo $row['short_title']; ?>"><br>
    <br>

    <input type="text" name="date" placeholder="Date" value="<?php echo ($row['date'] != "") ? date("n/j/Y", $row['date']) : ""; ?>"><br>
    <br>

    <input type="text" name="enddate" placeholder="End Date" value="<?php echo ($row['enddate'] != "") ? date("n/j/Y", $row['enddate']) : ""; ?>"><br>
    <br>

    <input type="text" name="location" placeholder="Location" value="<?php echo $row['location']; ?>"><br>
    <br>

    <input type="text" name="location_address" placeholder="Location Address" value="<?php echo $row['location_address']; ?>"><br>
    <br>

    <input type="text" name="image" placeholder="Image" value="<?php echo $row['image']; ?>"><br>
    <br>

    <input type="text" name="image_banner" placeholder="Banner Image" value="<?php echo $row['image_banner']; ?>"><br>
    <br>

    <input type="text" name="sponsors" placeholder="Event Sponsors" value="<?php echo $row['sponsors']; ?>"><br>
    <br>

    <textarea name="blurb" placeholder="Blurb"><?php echo $row['blurb']; ?></textarea><br>
    <br>

    <textarea name="details" placeholder="Details"><?php echo $row['details']; ?></textarea>
  </div>

  <div class="one-half last">
    <textarea name="schedule" placeholder="Schedule"><?php echo $row['schedule']; ?></textarea><br>
    <br>

    <textarea name="registration" placeholder="Registration"><?php echo $row['registration']; ?></textarea><br>
    <br>

    <textarea name="home_summary" placeholder="Home Page Summary"><?php echo $row['home_summary']; ?></textarea><br>
    <br>

    <textarea name="meta_description" placeholder="Description Meta Tag"><?php echo $row['meta_description']; ?></textarea><br>
    <br>

    <textarea name="meta_keywords" placeholder="Keywords Meta Tag"><?php echo $row['meta_keywords']; ?></textarea>
  </div>
  
  <div style="clear: both; height: 1.5em;"></div>

  <div>
    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
    <input type="submit" name="submit" value="UPDATE EVENT">
  </div>
</form>

<?php mysqli_free_result($result); include "footer.php"; ?>