<?php 
	
	 require_once('../Management/header.php');
     require_once('../Model/isomodel.php');
	 $ID = $_REQUEST['ID'];
	 $data = isoviewbyID($ID);
	 
	

?>
<html>
<head>
	<title>Delete Insurance Officer</title>
</head>
<body style="background-color:moccasin;">
		<a href="isouserlist.php"> Back </a> <hr> <br> 
		<a href="../Management/logout.php"> logout </a> <hr>

		<form align = "center" action="../Management/isodeletecheck.php" method="post" enctype="">
			<fieldset>
				<legend>Update Insurance Officer</legend>
				<table>
				

					<tr>
						<td>Name</td>
						<td><input type="text" name="Name" value="<?=$data['Name']?>"></td>
					</tr>
					
					<tr>
						<td>Gender</td>
						<td><input type="text" name="Gender" value="<?=$data['Gender']?>"></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="Email" name="Email" value="<?=$data['Email']?>"></td>
					</tr>
					<tr>
						<td>DOB</td>
						<td><input type="date" name="DOB" value="<?=$data['DOB']?>"></td>
					</tr>
					<tr>
						<td>Blood_Group</td>
						<td><input type="text" name="Blood_Group" value="<?=$data['Blood_Group']?>"></td>
					</tr>
					<tr>
						<td>Degree</td>
						<td><input type="text" name="Degree" value="<?=$data['Degree']?>"></td>
					</tr>
					<tr>
						<td>Occupation</td>
						<td><input type="text" name="Occupation" value="<?=$data['Occupation']?>"></td>
					</tr>
					<tr>
						<td>User_Name</td>
						<td><input type="text" name="User_Name" value="<?=$data['User_Name']?>"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="Password" name="Password" value="<?=$data['Password']?>"></td>
					</tr>
					<tr>
						<td>Confirm_Password</td>
						<td><input type="Password" name="Password" value="<?=$data['Confirm_Password']?>"></td>
					</tr>
					<tr>
						<td>
						<input type="hidden" name="ID" value="<?=$ID?>"> 
						<input type="submit" name="submit" value="Delete"> 
	
                       </td>
					</tr>
				</table>
			</fieldset>
		</form>
</body>
</html>