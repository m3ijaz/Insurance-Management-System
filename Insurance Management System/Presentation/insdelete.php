<?php 
	
	 require_once('../Management/header.php');
     require_once('../Model/insmodel.php');
	 $Serial_No = $_REQUEST['Serial_No'];
	 $data = insviewbySerial_No($Serial_No);
	 
?>

<html>
<head>
	<title>Edit Insurance Officer</title>
</head>
<body style="background-color:moccasin;">
		<a href="renewInsurance.php"> Back </a> <hr> <br> 
		<a href="../Management/logout.php"> logout </a> <hr>

		<form align = "center" action="../Management/insurancecancel.php" method="post" enctype="">
			<fieldset>
				<legend>Cancel Insurance</legend>
				<table>
				

					<tr>
						<td>Serial_No</td>
						<td><input type="text" name="Serial_No" value="<?=$data['Serial_No']?>"></td>
					</tr>
					
					<tr>
						<td>Creation_Date</td>
						<td><input type="date" name="Creation_Date" value="<?=$data['Creation_Date']?>"></td>
					</tr>
					<tr>
						<td>Category</td>
						<td><input type="text" name="Category" value="<?=$data['Category']?>"></td>
					</tr>
					
					<tr>
						<td>
						<input type="hidden" name="Serial_No" value="<?=$Serial_No?>"> 
						<input type="submit" name="submit" value="submit"> 
                       </td>
					</tr>
				</table>
			</fieldset>
		</form>
</body>
</html>