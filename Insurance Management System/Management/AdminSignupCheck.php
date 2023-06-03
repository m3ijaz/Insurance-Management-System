<?php 

require_once('../Model/adminmodel.php');

    
	$User_Name = $_REQUEST['User_Name'];
	$Password = $_REQUEST['Password']; 
	$Confirm_Password = $_REQUEST['Password'];

	

	if ($User_Name == null || $Password == null || $Confirm_Password == null)
	 {
		echo "invalid User_Name/Password/Confirm_Password/Others <br>";
	 }
	
	else
	   {   
	    $status = Signup($User_Name, $Password, $Confirm_Password);

	    if($status)
	    { 
					header('location: ../Presentation/Adminlogin.html');
	    }
	    else
	    {
		echo "invalid user!";
	    }
	   }

?>