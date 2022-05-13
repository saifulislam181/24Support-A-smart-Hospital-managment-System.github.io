<?php
include('config.php');
$result = mysqli_query($conn,"SELECT * FROM availablebed");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Delete Bed data</title>
</head>
<body>
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
    <tr class="<?php if(isset($classname)) echo $classname;?>">
    <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["floor"]; ?></td>
        <td><?php echo $row["block"]; ?></td>
        <td><?php echo $row["room"]; ?></td>
        <td><?php echo $row["bed"]; ?></td>
    <td><a href="delete-process.php?userid=<?php echo $row["id"]; ?>">Delete</a></td>
    </tr>
    <?php
    $i++;
    }
    ?>

   	<?php
        include('config.php');
        $sql = "DELETE FROM availablebed WHERE id='" . $_GET["id"] . "'";
        if (mysqli_query($conn, $sql)) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
        mysqli_close($conn);
    ?>


</table>
</body>
</html>