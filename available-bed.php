<!--Donation page-->
<?php
$update=false;
$block = "";
$room = "";
$bed = "";
include('config.php');
if(isset($_REQUEST['save']))
{
     
        
        $floor=$_REQUEST['floor'];
        $block=$_REQUEST['block'];
        $room=$_REQUEST['room'];
        $bed=$_REQUEST['bed'];

        $sql="INSERT into  availablebed(floor,block,room,bed) values('$floor','$block','$room','$bed')";
        if($conn->query($sql)==true)
        {
            $p='<div>Successfully Inserted</div>';
        }

        else
        {
            $p='<div class="alert alert-warning">Wrong Try</div>';
        } 
}

?>

<!DOCTYPE html>
<html>
    <head>
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
         <script src="https://kit.fontawesome.com/76235dc605.js" crossorigin="anonymous"></script>

         <style type="text/css">
             a{
                text-decoration: none;
                color: white;
             }
             #form{
                border-radius: 30px;

             }

         </style>
    </head>

    <body>
      <div class="container mt-4" id="sec1">
       
                <div class="form border border-success p-4" id="form">
                <form method='POST'>

                <div><h3 class="text-center text-success">Available Beds</h3></div>

                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <label for="floor">Floor_No.</label><br>
                <input type="number" name="floor" class="form-control" value="<?php echo $floor; ?>"><br>

                <label for="block">Block</label><br>
                <input type="" name="block" class="form-control" value="<?php echo $block; ?>"required><br>

                <div class="row">
                    <div class="col-sm-6">
                         <label for="room">Room No:</label><br>
                        <input type="number" name="room" class="form-control" value="<?php echo $room; ?>"><br>
                    </div>
                    <div class="col-sm-6">
                    <label for="bed">Bed No:</label><br>
                <input type="text" name="bed" class="form-control" value="<?php echo $bed; ?>"required><br>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 mt-2">
                <button class="btn btn-success form-control" type="submit" name="save">Save</button>

                <?php if ($update == true): ?>
                    <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
                <?php else: ?>
                    <button class="btn" type="submit" name="save" ></button>
                <?php endif ?>
                <?php 

                if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $floor = $_POST['floor'];
    $block = $_POST['block'];
    $room = $_POST['room'];
    $bed = $_POST['bed'];


    mysqli_query($db_name, "UPDATE availablebed SET floor='$floor', block='$block', room='$room', bed='$bed' WHERE id=$id");
    $_SESSION['message'] = "Address updated!"; 
    header('location: available-bed.php');



    if (isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($db_name, "DELETE FROM availablebed WHERE id=$id");
    $_SESSION['message'] = "Address deleted!"; 
    header('location: check-bed.php');
}
}   

                ?>
            </div>


        </div>

            </form>
        </div>
        </div>

       <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>

</html>