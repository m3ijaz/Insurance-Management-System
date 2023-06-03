<?php 

require_once('database.php');

//for Signup 

function Signup($User_Name,$Password,$Confirm_Password)
{
    $conn = getConnection();
	$sql = "insert into admindetails values('', '{$User_Name}', '{$Password}', '{$Confirm_Password}')";

    if(mysqli_query($conn, $sql))
    {
        return true;
    }
    else
    {
        return false;
    }
}


//for login

function login($User_Name, $Password)
{
	 $conn = getConnection();
	$sql = "select * from admindetails where User_Name = '{$User_Name}' and Password = '{$Password}' ";
	$result = mysqli_query($conn, $sql);
	$count = mysqli_num_rows($result);



	if($count > 0)
	{
		return true;
	}
	else
	{
		return false;
	}
}