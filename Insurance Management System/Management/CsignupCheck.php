<?php 

require_once('../Model/cusmodel.php');

    $NID = $_REQUEST['NID'];
	$Name = $_REQUEST['Name'];
	$Gender = $_REQUEST['Gender'];
	$Email = $_REQUEST['Email'];
	$DOB = $_REQUEST['DOB'];
	$Blood_Group = $_REQUEST['Blood_Group'];
	$Degree = $_REQUEST['Degree'];
	$Occupation = $_REQUEST['Occupation'];
	$User_Name = $_REQUEST['User_Name'];
	$Password = $_REQUEST['Password'];
	$Confirm_Password = $_REQUEST['Password'];
	

	if ($NID == null || $Name == null || $Gender == null || $Email == null  || $DOB == null  || $Blood_Group == null || $Degree == null  ||  $Occupation == null ||  $User_Name == null || $Password == null || $Confirm_Password == null)
	 {
		echo "invalid NID/Password/Confirm_Password <br>";
	 }
	 /*else
	 {
		$data = $NID."|". $Name."|".$Gender."|".$Email."|".$DOB."|".$Blood_Group."|".$Degree."|".$Occupation."|".$User_Name."|".$Password."|".$Confirm_Password. "\r\n";
		$file = fopen('../Data/cusdetails.txt', 'a');
		fwrite($file, $data);

			if($fname == "create")
			{
				header('location: ../Presentation/cushome.php');	
			}
			else
			{
				header('location: ../Presentation/clogin.html');
			} 
	}*/

	else
	   {
	    $status = cusSignup($NID,$Name,$Gender,$Email,$DOB,$Blood_Group,$Degree,$Occupation,$User_Name,$Password,$Confirm_Password);

	    if($status)
	    { 
					header('location: ../Presentation/clogin.html');
	    }
	    else
	    {
		echo "invalid user!";
	    }
	   }

?>