<?php
$update=false;
$name= "";
$age = "";
$gender = "";
$phone = "";
$bloodGroup = "";
$medicine = "";
include('config.php');
if(isset($_REQUEST['save']))
{
     
        
        $name=$_REQUEST['name'];
        $age=$_REQUEST['age'];
        $gender=$_REQUEST['gender'];
        $phone=$_REQUEST['phone'];
        $bloodGroup=$_REQUEST['bloodGroup'];
        $medicine=$_REQUEST['medicine'];


        $sql="INSERT into prescription(name,age,gender,phone,bloodGroup,medicine) values('$name','$age','$gender','$phone', '$bloodGroup', '$medicine')";
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
        <!--start donation header part-->
      <div class="container mt-4" id="sec1">
       
                <div class="form border border-success p-4" id="form">
                <form method='POST'>

                <div><h3 class="text-center text-success">Doctor Prescription</h3></div>

                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <label for="name">Name</label><br>
                <input id= "userName" type="text" name="name" class="form-control" value="<?php echo $name; ?>"><br>

                <label for="age">Age</label><br>
                <input id= "userAge" type="text" name="age" class="form-control" value="<?php echo $age; ?>"required><br>

                <div class="row">
                    <div class="col-sm-6">
                         <label for="gender">Gender</label><br>
                        <input id= "userGender" type="text" name="gender" class="form-control" value="<?php echo $gender; ?>"><br>
                    </div>
                    <div class="col-sm-6">
                    <label for="phone">Phone_No</label><br>
                <input id= "userPhone" type="text" name="phone" class="form-control" value="<?php echo $phone; ?>"required><br>
                <label for="bloodGroup">Blood Group</label><br>
                <input id= "userBlood" type="text" name="bloodGroup" class="form-control" value="<?php echo $bloodGroup; ?>"><br>
                <label for="medicine">Medicine</label><br>
                <input id= "userMedicine" type="text" name="medicine" class="form-control" value="<?php echo $medicine; ?>" required><br>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 mt-2">
                <input type="hidden" id="user_id" />
                <button id="getUser" value="Get Details" class="btn btn-success form-control" type="submit" name="save"><i class="pr-1 fas fa-donate"></i>Save</button>

                <script>
                $(document).ready(function(){
                    $('#getUser').on('click',function(){
                        var user_id = $('#user_id').val();
                        $.ajax({
                            type:'POST',
                            url:'doctor-prescription.php',
                            dataType: "json",
                            data:{user_id:user_id},
                            success:function(data){
                                if(data.status == 'ok'){
                                    $('#userName').text(data.result.name);
                                    $('#userAge').text(data.result.email);
                                    $('#userGender').text(data.result.email);
                                    $('#userPhone').text(data.result.phone);
                                    $('#userBlood').text(data.result.created);
                                    $('#userMedicine').text(data.result.created);
                                    $('.user-content').slideDown();
                                }else{
                                    $('.user-content').slideUp();
                                    alert("User not found...");
                                } 
                            }
                        });
                    });
                });
                </script>
                <!-- yufyufjlfuljhuf -->

                <?php
                if(!empty($_POST['user_id'])){
                    $data = array();
                    
                    //database details
                    $host="localhost";
                    $user="root";
                    $pass="";
                    $db_name="nagorikapps";
                    
                    //create connection and select DB
                    $db = new mysqli($host, $user, $pass, $db_name);
                    if($db->connect_error){
                        die("Unable to connect database: " . $db->connect_error);
                    }
                    
                    //get user data from the database
                    $query = $db->query("SELECT * FROM prescription WHERE id = {$_POST['user_id']}");
                    
                    if($query->num_rows > 0){
                        $userData = $query->fetch_assoc();
                        $data['status'] = 'ok';
                        $data['result'] = $userData;
                    }else{
                        $data['status'] = 'err';
                        $data['result'] = '';
                    }
                    
                    //returns data as JSON format
                    echo json_encode($data);
                }
                ?>


                <?php if ($update == true): ?>
                    <button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>                    
                <?php endif ?>

                
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