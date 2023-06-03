<?php 
	session_start();

	require_once('../Model/adminmodel.php');

	$User_Name = $_REQUEST['User_Name'];
	$Password = $_REQUEST['Password'];

	if ( $User_Name == null || $Password == null) 
	{
		echo "invalid User_Name/Password <br>";
	}

    else
	   {
	    $status = login($User_Name, $Password);

	    if($status)
	    {
	    	setcookie('status', 'true', time()+720, '/');
					header('location: ../Presentation/adminhome.php');
	    }
	    else
	    {
		echo "invalid user!";
	    }
	   }
    
?>

