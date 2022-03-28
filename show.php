<!DOCTYPE html>
<html>
<head>
	<title>show table</title>
</head>
<body>
<?php 

include ('connection.php');
$sql ="select * from reg";
$data =mysqli_query($con,$sql);
$total=mysqli_num_rows($data);


if ($total=mysqli_num_rows($data)) {
	?>
	<table border="2">
<tr>
<th>Full Name</th>
<th>Cell Number</th>
<th>Email</th>
<th>Address</th>
<th>City</th>
<th>State</th>
<th>Zip</th>
<th>Delete User</th>
</tr>

	<?php
	
	while ($result = mysqli_fetch_array($data)) {

		echo " 
			<tr>
			<td>".$result['fullname']."</td>
				<td>".$result['fullname']."</td>
				<td>".$result['cellnumber']."</td>
				<td>".$result['gmail']."</td>
				<td>".$result['address']."</td>
				<td>".$result['city']."</td>
				<td>".$result['state']."</td>
				<td>".$result['zip']."</td>
				<td><a href='delete.php?fullname=$result[fullname] '>Delete User</a></td>
			</tr>
		";
	}
}
else
{
 	echo "no record found";
}

?>
</table>
</body>
</html>	