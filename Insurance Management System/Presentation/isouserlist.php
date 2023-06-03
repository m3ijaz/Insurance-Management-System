<?php 

	 require_once('../Management/header.php');
	 require_once('../Model/isomodel.php');
	 $result = isoview();
	 $count = mysqli_num_rows($result);
	
	
	
?>
<html>
<head>
	<title>Insurance Officer User list</title>
</head>
<body style="background-color:moccasin;">
		<a href="isohome.php"> Back </a><hr> <br> 
		<a href="../Management/logout.php"> logout </a><hr>
		<br>
		<table border="2" >
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Gender</th>
				<th>Email</th>
				<th>DoB</th>
				<th>Blood_Group</th>
				<th>Degree</th>
				<th>Occupation</th>
				<th>User_Name</th>
				<th>Password</th>
				<th>Confirm_Password</th>
				<th>Actions</th>
			</tr>

		<?php  
		
		    while($data = mysqli_fetch_assoc($result))
			 {
		?>

				<tr>

					<td><?php echo $data['ID']?></td>
					<td><?php echo $data['Name']?></td>
					<td><?php echo $data['Gender']?></td>
					<td><?php echo $data['Email']?></td>
					<td><?php echo $data['DOB']?></td>
					<td><?php echo $data['Blood_Group']?></td>
					<td><?php echo $data['Degree']?></td>
					<td><?php echo $data['Occupation']?></td>
					<td><?php echo $data['User_Name']?></td>
					<td><?php echo $data['Password']?></td>
					<td><?php echo $data['Confirm_Password']?></td>
					<td>
					<a href="isoedit.php?ID=<?php echo $data['ID'];?>"> Edit </a> |
					<a href="isodelete.php?ID=<?php echo  $data['ID'];?>"> Delete </a>
				   </td>
				   
			 </tr>
            
			 <?php
			 }

			 ?>
            
			
			
		</table>
</body>
</html>