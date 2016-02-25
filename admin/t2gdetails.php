<?php
include "login.php";

$PageTitle = "Edit T2G Details";
include "header.php";

if (isset($_POST['submit'])) {
  $TheDate = strtotime($_POST['eventdate']);
  $mysqli->query("UPDATE theevent SET eventdate = '" . $TheDate  . "', eventloc = '" . $_POST['eventloc'] . "' WHERE id = 1");
}

$result = $mysqli->query("SELECT * FROM theevent WHERE id = 1");
$row = $result->fetch_array(MYSQLI_ASSOC);
?>

<form action="t2gdetails.php" method="POST">
  <div class="one-half">
    <input type="text" name="eventdate" placeholder="Event Date" value="<?php echo date("n/j/Y", $row['eventdate']); ?>">
  </div>

  <div class="one-half last">
    <input type="text" name="eventloc" placeholder="Event Location" value="<?php echo $row['eventloc']; ?>">
  </div>
  
  <div style="clear: both; height: 1.5em;"></div>

  <div>
    <input type="submit" name="submit" value="UPDATE T2G DETAILS">
  </div>
</form>

<?php mysqli_free_result($result); include "footer.php"; ?>