<!-- THIS IS SHARE REQUEST PAGE-->
<?php
include('config.php');
if(isset($_REQUEST['submit']))
{
     

        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $phone=$_REQUEST['phone'];
        $upzilla=$_REQUEST['upzilla'];
        $district=$_REQUEST['district'];
        $info=$_REQUEST['info'];

        $sql="INSERT into  shareRequest(fname,email,phone,upzilla,district,info) values('$name','$email','$phone','$upzilla','$district','$info')";
        if($conn->query($sql)==true)
        {
            $p='<div>Successfully Inserted</div>';
        }

        else
        {
            $p='<div>Wrong Try</div>';
        }



    
}

?>


<!DOCTYPE html>
<html>
    <head>
	  
        <link rel="icon" href="img/share.png">
       <!--<link rel="stylesheet"  href="css/bootstrap.min.css">
	    <link rel="stylesheet"  href="css/all.min.css">-->
        <title>Doctor Appoinment</title>
        <link rel='stylesheet' href="header.css">
        <link rel="stylesheet" href="doctorappoinment.css">

    </head>


    <body>
        <!--start share request header part-->
        <div class="header">
            <img src="img/log2.png" class="logo-img">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="donation.php">Donation</a></li>
                <li><a href="organization.php">Report Status</a></li>
                <li><a href="#">Doctor Appoinment</a></li>
                <li><a href="area.php">Check availability</a></li>
                <li><a href="dashboard.php">Admin Panel</a></li>
                <li><a href="contact.php">Contact Us</a></li>

            </ul>
        </div>

        <div class="sec2">
            <div class="col1">
            <h1>Welcome!<br>Doctor Appoinment</h1>
        </div>


            <div class="col2">
                <p>Thankyou for chosen us.If you need any help or you have to need Doctor appoinment please fill up the form from given bellow.Its must notify or check the doctor profile and his/him visit day and the close day.Its very important notice all every government off day all of doctors chamber are closed.More carefully please make that the schedule time you have prefered.</p>
             </div>
        </div>

        <div class="sec3">

            <div class="box">
            <form method="POST" action="">
                <div class="h2"><h2>Doctor Appoinment</h2></div>
               <p id="msgHolder" class="subtitle"> Please fill all information</p>
                <div class="input-field">
 
                    <input type="text" name="name"placeholder="Enter Your name" class="user" required><br>
                    <input type="email" name="email"placeholder="Enter your email" class="mail" required><br>
                    
                    <input type="text" name="upzilla" class="upzilla" placeholder="Catagory of Doctor" required>
                    <input type="text" name="district" class="district" placeholder="Name of Doctor" required>
                    
                    <input type="text" name="phone"placeholder="+8801XXXXXXXXX"required class="phone"><br>
                    <textarea rows="5"name="info" cols="30" class="description" placeholder="Problem description" required></textarea><br>
                  <!--  <input type="file" name="file" class="file"placeholder="upload" accept="image/*" required>
-->
                    <input id="btnGetData" type="submit" class="btn" value="Submit Info"name='submit'>
					
					<script>
					let btn=document.querySelector('#btnGetData');
					btn.addEventListener('click', function (){
						let msgHolder = document.querySelector('#msgHolder');
						msgHolder.innerHTML = "Please wait, You will get a confirmation as soon as possible.Thankoyu.....";
						
						

						});
					
					
				</script>
					
                  
                </div>
				
            </form>
			
               
        </div>
		
    </div>


        <!--foooter-->
        <div class="footer">
            <h3>Copyright &copy;2021 | All right reserverd</h3>
        </div>




    </body>

</html>