<?php
include('config.php');
$result = mysqli_query($conn,"SELECT * FROM emergencydoctor");
?>
<!DOCTYPE html>
<html>
 <head>
   <title> Update data</title>
   <link rel="stylesheet" href="style.css">
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table>
      <tr>
        <td>#</td>
        <td>name</td>
        <td>depertment</td>
        <td>Room</td>
        <td>phone</td>
        <td>floor</td>
        <td>Action</td>
      </tr>
            <?php
            $i=0;
            while($row = mysqli_fetch_array($result)) {
            ?>
      <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["depertment"]; ?></td>
        <td><?php echo $row["room"]; ?></td>
        <td><?php echo $row["phone"]; ?></td>
        <td><?php echo $row["floor"]; ?></td>

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
mysqli_query($conn,"UPDATE emergencydoctor set id='" . $_POST['id'] . "', name='" . $_POST['name'] . "', depertment='" . $_POST['depertment'] . "', room='" . $_POST['room'] . "' ,phone='" . $_POST['phone'] . ", floor='" . $_POST['floor'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM emergencydoctor WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>

<html>
<head>
<title>Update Doctor</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
</div>
ID: <br>
<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
<input type="text" name="id"  value="<?php echo $row['id']; ?>">
<br>
name: <br>
<input type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>">
<br>
Depertment:<br>
<input type="text" name="depertment" class="txtField" value="<?php echo $row['depertment']; ?>">
<br>
Room<br>
<input type="text" name="room" class="txtField" value="<?php echo $row['room']; ?>">
<br>
Phone<br>
<input type="text" name="phone" class="txtField" value="<?php echo $row['phone']; ?>">
<br>
Floor<br>
<input type="number" name="floor" class="txtField" value="<?php echo $row['floor']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>
 </body>
</html>