
<!DOCTYPE html>
<html>
<head>
	<title>Prescription List</title>
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

		.section1{
			text-align: center;
			color: #C0E38E;
			background-color: #05A966;
			padding:5px;
		}

		.table1{
			border:2px double #E5EB2E;
			margin-top: 20px;
			margin-left: auto;
			margin-right: auto;
			border-collapse: collapse;
			margin-bottom: 50px;
			text-align: center;
		}

		td,th{
			border:1px solid tomato;
			text-align: justify;
			padding: 10px;
		}
		tr:nth-child(odd){
			background-color: #ececec;
		}
		.back{
			background: #05A966;
			text-align: center;
			padding: 15px;
			border-radius: 40px;
			margin-left: 550px;
			font-size: 15px;
			font-weight: bold;
			color: yellow;

		}
		.back:hover{
			background:white;
			color: #05A966;
			border:1px solid #E5EB2E;
		}
		.back i{
			margin-right: 5px;
		}
	</style>
</head>
<body>

	<div class="section1">
		<h1>Prescription List</h1>
	</div>
	


	<?php
	$name= "";
	$age = "";
	$gender = "";
	$phone = "";
	$bloodGroup = "";
	$medicine = "";
	$id = 0;


	include('config.php');
	$sql='SELECT * from prescription';
	if($result = mysqli_query($conn, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>name</th>";
                                        echo "<th>age</th>";
                                        echo "<th>gender</th>";
                                        echo "<th>phone</th>";
                                        echo "<th>bloodGroup</th>";
                                        echo "<th>medicine</th>";
                                        echo "<th>Action</th>";

                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['age'] . "</td>";
                                        echo "<td>" . $row['gender'] . "</td>";
                                        echo "<td>" . $row['phone'] . "</td>";
                                        echo "<td>" . $row['bloodGroup'] . "</td>";
                                        echo "<td>" . $row['medicine'] . "</td>";


                                        echo "<td>";
                                          
                                            echo '<a href="update-prescription.php?id='. $row['id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                            echo '<a href="delete-prescription.php?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
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