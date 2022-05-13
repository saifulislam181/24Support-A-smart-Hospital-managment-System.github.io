<?php
include('config.php');
$result = mysqli_query($conn,"SELECT * FROM availablebed");
?>

<!DOCTYPE html>
<html>
 <head>
   <title> Read data</title>
   <link rel="stylesheet" href="style.css">
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table>
      <tr>
        <td>#</td>
        <td>Floor</td>
        <td>Block</td>
        <td>Room</td>
        <td>Bed</td>
        <td>Action</td>
      </tr>
            <?php
            $i=0;
            while($row = mysqli_fetch_array($result)) {
            ?>
      <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["floor"]; ?></td>
        <td><?php echo $row["block"]; ?></td>
        <td><?php echo $row["room"]; ?></td>
        <td><?php echo $row["bed"]; ?></td>
        <td><a href="update-process.php?id=<?php echo $row["id"]; ?>">Update</a></td>
      </tr>
            <?php
            $i++;
            }
            ?>
</table>
 <?php
}
else
{
    echo "No result found";
}
?>


<?php
include('config.php');
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE availablebed set id='" . $_POST['id'] . "', floor='" . $_POST['floor'] . "', block='" . $_POST['block'] . "', room='" . $_POST['room'] . "' ,bed='" . $_POST['bed'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM availablebed WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Bed</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="check-bed.php">Bed List</a>
</div>
ID: <br>
<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
<input type="text" name="id"  value="<?php echo $row['id']; ?>">
<br>
Floor: <br>
<input type="text" name="floor" class="txtField" value="<?php echo $row['floor']; ?>">
<br>
Block :<br>
<input type="text" name="block" class="txtField" value="<?php echo $row['block']; ?>">
<br>
Room:<br>
<input type="text" name="room" class="txtField" value="<?php echo $row['room']; ?>">
<br>
Bed<br>
<input type="text" name="bed" class="txtField" value="<?php echo $row['bed']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>
 </body>
</html>