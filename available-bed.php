<?php
include('config.php');
if(isset($_REQUEST['submit']))
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

        
                <h3 class="text-center text-success"><i class="pr-2 fas fa-donate"></i>Available Beds</h3>



                <label for="floor">Floor_No.</label><br>
                <input type="number" name="floor" class="form-control"><br>

                <label for="block">Block</label><br>
                <input type="" name="block" class="form-control"required><br>

                <div class="row">
                    <div class="col-sm-6">
                         <label for="room">Room_No</label><br>
                        <input type="text" name="room" class="form-control"><br>
                    </div>
                    <div class="col-sm-6">
                    <label for="bed">Bed_No</label><br>
                <input type="text" name="bed" class="form-control" required><br>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 mt-2">
                <button class="btn btn-success form-control" type="submit" name="submit"><i class="pr-1 fas fa-donate"></i>Submit</button>
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