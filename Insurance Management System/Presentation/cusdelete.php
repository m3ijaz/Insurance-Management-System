<?php 
	
	 require_once('../Management/header.php');
     require_once('../Model/cusmodel.php');
	 $NID = $_REQUEST['NID'];
	 $data = cusviewbyNID($NID);
	 
	

?>
<html>
<head>
	<title>Delete Customer</title>
</head>
<body style="background-color:moccasin;">
		<a href="Cususerlist.php"> Back </a> <hr> <br> 
		<a href="../Management/logout.php"> logout </a> <hr>

		<form align = "center" action="../Management/cusdeletecheck.php" method="post" enctype="">
			<fieldset>
				<legend>Delete Customer </legend>
				<table>
				

                     <tr>
						<td>NID</td>
						<td><input type="text" name="NID" value="<?=$data['NID']?>"></td>
					</tr>

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
						<input type="hidden" name="NID" value="<?=$NID?>"> 
						<input type="submit" name="submit" value="Remove"> 
	
                       </td>
					</tr>
				</table>
			</fieldset>
		</form>
</body>
</html>