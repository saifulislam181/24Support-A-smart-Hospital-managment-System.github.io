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