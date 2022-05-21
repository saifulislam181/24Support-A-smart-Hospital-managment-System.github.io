<?php

$conn = mysqli_connect("localhost", "root", "", "24support");
$sql = "SELECT * FROM sharerequest WHERE fname LIKE '%".$_POST['name']."%'";
		
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
	while ($row=mysqli_fetch_assoc($result)) {
		echo "	<tr>
				  <td>".$row['id']."</td>
		          <td>".$row['fname']."</td>
		          <td>".$row['email']."</td>
		          <td>".$row['phone']."</td>
		          <td>".$row['upzilla']."</td>
				  <td>".$row['district']."</td>
				  <td>".$row['info']."</td>
		        </tr>";
	}
}
else{
	echo "<tr><td>0 result's found</td></tr>";
}

?>