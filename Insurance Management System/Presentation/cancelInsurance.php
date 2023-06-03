<?php 

	 require_once('../Management/header.php');
	 require_once('../Model/insmodel.php');
	 $result = insview();
	 $count = mysqli_num_rows($result);
?>
<html>
<head>
	<title>Insurance list</title>
</head>
<body align="center" style="background-color:moccasin;">
		<a href="isohome.php"> Back </a><hr> <br> 
		<a href="../logout.php"> logout </a><hr> 
		<br>
		<table border="3">
			<tr>
				<th>Serial_No</th>
				<th>Creation_Date</th>
				<th>Category</th>
				<th>Action</th>
			</tr>

			<?php  
		
		    while($data = mysqli_fetch_assoc($result))
			 {
		  ?>

				<tr>

					<td><?php echo $data['Serial_No']?></td>
					<td><?php echo $data['Creation_Date']?></td>
					<td><?php echo $data['Category']?></td>
					<td>
				<!--	<a href="insedit.php?Serial_No=<?php echo $data['Serial_No'];?>"> Renew Insurance </a> -->
					<a href="insdelete.php?Serial_No=<?php echo  $data['Serial_No'];?>"> Delete </a>
				   </td> 
				   
			 </tr>
            
			 <?php
			 }

			 ?>
            
			
		</table>
</body>
</html>