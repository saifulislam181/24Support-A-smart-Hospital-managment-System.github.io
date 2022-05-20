<?php
include('config.php');
$result = mysqli_query($conn,"SELECT * FROM prescription");
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
        <td>Name</td>
        <td>Age</td>
        <td>Gender</td>
        <td>Phone</td>
        <td>Blood Group</td>
        <td>Medicine</td>
        <td>Action</td>
      </tr>
            <?php
            $i=0;
            while($row = mysqli_fetch_array($result)) {
            ?>
      <tr>
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["age"]; ?></td>
        <td><?php echo $row["gender"]; ?></td>
        <td><?php echo $row["phone"]; ?></td>
        <td><?php echo $row["bloodGroup"]; ?></td>
        <td><?php echo $row["medicine"]; ?></td>


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
mysqli_query($conn,"UPDATE prescription set id='" . $_POST['id'] . "', name='" . $_POST['name'] . "', age='" . $_POST['age'] . "', gender='" . $_POST['gender'] . "' ,phone='" . $_POST['phone'] . "', bloodGroup='" . $_POST['bloodGroup'] . "', medicine='" . $_POST['medicine'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM prescription WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Prescription</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="check-bed.php">Prescription List</a>
</div>
ID: <br>
<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
<input type="text" name="id"  value="<?php echo $row['id']; ?>">
<br>
Name: <br>
<input type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>">
<br>
Age :<br>
<input type="text" name="age" class="txtField" value="<?php echo $row['age']; ?>">
<br>
Gender:<br>
<input type="text" name="gender" class="txtField" value="<?php echo $row['gender']; ?>">
<br>
Phone<br>
<input type="text" name="phone" class="txtField" value="<?php echo $row['phone']; ?>">
<br>
Blood Group<br>
<input type="text" name="bloodGroup" class="txtField" value="<?php echo $row['bloodGroup']; ?>">
<br>
Medicine<br>
<input type="text" name="medicine" class="txtField" value="<?php echo $row['medicine']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>
 </body>
</html>