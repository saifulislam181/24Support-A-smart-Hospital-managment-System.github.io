<?php
include('config.php');
$result = mysqli_query($conn,"SELECT * FROM prescription");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Delete Prescription data</title>
</head>
<body>
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
    <tr class="<?php if(isset($classname)) echo $classname;?>">
        <td><?php echo $row["id"]; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["age"]; ?></td>
        <td><?php echo $row["gender"]; ?></td>
        <td><?php echo $row["phone"]; ?></td>
        <td><?php echo $row["bloodGroup"]; ?></td>
        <td><?php echo $row["medicine"]; ?></td>
    <td><a href="delete-process.php?userid=<?php echo $row["id"]; ?>">Delete</a></td>
    </tr>
    <?php
    $i++;
    }
    ?>


    <?php
        include('config.php');
        $sql = "DELETE FROM prescription WHERE id='" . $_GET["id"] . "'";
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