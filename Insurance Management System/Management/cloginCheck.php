<?php 
	session_start();

	require_once('../Model/cusmodel.php');

    $NID = $_REQUEST['NID'];
	$Password = $_REQUEST['Password'];
	$Confirm_Password = $_REQUEST['Password'];

	if ($NID == null ||  $Password == null || $Confirm_Password == null) 
	{
		echo "invalid NID/Password/Confirm_Password <br>";
	}
	/*else
	{
		$file = fopen('../Data/cusdetails.txt', 'r');
		while (!feof($file)) 
		{ 
				$line = fgets($file);
				$user = explode('|', $line);
				print_r($user);
				echo "<br>";
				if($NID == trim($user[0]) && $Password == trim($user[9]))
				{
					setcookie('status', 'true', time()+7200, '/');
					header('location: ../Presentation/cushome.php');
				}
	}
		echo "invalid user!";
	}*/

	else
	{
	 $status = cuslogin($NID, $Password);

	 if($status)
	 {
		 setcookie('status', 'true', time()+720, '/');
				 header('location: ../Presentation/cushome.php');
	 }
	 else
	 {
	 echo "invalid user!";
	 }
	}

?>