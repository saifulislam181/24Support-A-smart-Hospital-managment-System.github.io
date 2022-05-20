
<!DOCTYPE html>
<html>
<head>
	<title>Bed List</title>
	<script src="https://kit.fontawesome.com/76235dc605.js" crossorigin="anonymous"></script>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			font-family: cursive;
		}

		a{
			text-decoration: none;
		}

		.header{
	    height: 50px;
	    width: 100%;
	    background: #ececec;;
	    color: indigo;
	    position: relative;
	    overflow: hidden;
	    padding-top: 25px;
	    position: fixed;
	    z-index: 1;   
	}
	.logo-img{
	    width: 80px;
	    height: 80px;
	    padding-left: 25px;
	    margin-left: 25px;
	    margin-top: -20px;

	}
	.header ul{
	    float: right;
	    margin-right: 20px;
	}
	.header ul li{
	    display: inline-block;
	    list-style-type: none;
	    font-size: 15px;
	    font-weight: 600;
	    border-radius: 15px;
	    padding: 3px;
	    outline: none;
	    background: none;
	    border:none;
	    margin-left: 7px;
	    box-shadow:  5px 5px 2px gray, -5px -5px 2px white;
	}
	.header ul li a{
	    padding:33px 25px;
	    transition: 0.7s ease;
	    color: indigo;
	    text-decoration: none;
	    
	}

		.section1{
			text-align: center;
			color: #0984e3;
			background-color: #636e72;
			padding:5px;
		}

		.section1 h1{
			color: #00b894;
			margin-top: 70px;
		}

		.table{
			margin-left: auto;
  			margin-right: auto;
			border:3px solid #182C61;
			margin-top: 20px;
			margin-left: auto;
			margin-right: auto;
			border-collapse: collapse;
			margin-bottom: 50px;
			text-align: center;
		}

		td,th{
			border:1px solid #192a56;
			text-align: justify;
			padding: 10px;
		}
		/*tr:nth-child(odd){
			background-color: #ececec;
		}*/
		.back{
			background: #2C3A47;
			text-align: center;
			padding: 15px;
			border-radius: 40px;
			margin-left: 600px;
			font-size: 15px;
			font-weight: bold;
			color: yellow;
			margin-bottom: 500px;

		}
		/*.back:hover{
			background:white;
			color: #05A966;
			border:1px solid #E5EB2E;
		}*/
		.back i{
			margin-right: 5px;
		}
	</style>
</head>
<body>

	<div class="header">
            <img src="img/Log2.jpg" class="logo-img">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="donation.php">Donation</a></li>
                <li><a href="organization.php">Report Status</a></li>
                <li><a href="doctorappoinment.php">Doctor Appoinment</a></li>
                <li><a href="check-bed.php">Bed Availability</a></li>
                <li><a href="contact.php">Contact Us</a></li>

            </ul>
    </div>

	<div class="section1">
		<h1>Available Bed List</h1>
	</div>
	


	<?php
	$floor = "";
	$block = "";
	$room = "";
	$bed = "";
	$id = 0;


	include('config.php');
	$sql='SELECT * from availablebed';
	if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Serial</th>";
                                        echo "<th>Floor</th>";
                                        echo "<th>Block</th>";
                                        echo "<th>Room</th>";
                                        echo "<th>Bed</th>";
                                        echo "<th>Update</th>";
                                        echo "<th>Delete</th>";

                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['floor'] . "</td>";
                                        echo "<td>" . $row['block'] . "</td>";
                                        echo "<td>" . $row['room'] . "</td>";
                                        echo "<td>" . $row['bed'] . "</td>";

                                        echo "<td>";
                                          
                                            echo '<a href="update-bed.php?id='. $row['id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';

                                        echo "</td>";

                                        echo "<td>";

                                            echo '<a href="delete-bed.php?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";    
                                        
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 
                    // Close connection
                    mysqli_close($conn);
                    ?>


	<a href="dashboard.php" class="back"><i class="fas fa-home"></i>Back to DashBoard</a>
</body>
</html>