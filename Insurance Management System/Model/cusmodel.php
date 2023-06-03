<?php 

require_once('database.php');
 
//for Signup

function cusSignup($NID,$Name,$Gender,$Email,$DOB,$Blood_Group,$Degree,$Occupation,$User_Name,$Password,$Confirm_Password)
{
    $conn = getConnection();
	$sql = "insert into cusdetails values('{$NID}', '{$Name}', '{$Gender}', '{$Email}', '{$DOB}', '{$Blood_Group}', '{$Degree}', '{$Occupation}', '{$User_Name}', '{$Password}', '{$Confirm_Password}')";

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

function cuslogin($NID, $Password)
{
	 $conn = getConnection();
	$sql = "select * from cusdetails where NID = '{$NID}' and Password = '{$Password}' ";
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



//show data table

function cusview()
{
  $conn = getConnection();
  $sql = "select * from cusdetails ";
  $result = mysqli_query($conn, $sql);
  return $result;
}

function cusviewbyNID($NID)
{
  $conn = getConnection();
  $sql = "select * from cusdetails where NID = {$NID}";
  $result = mysqli_query($conn, $sql);
  $query = mysqli_fetch_assoc($result);
  return $query;
}


//Edit or Update

function editcusdetails($cusdetails)
{
	$conn = getConnection();
	$sql = "update cusdetails set NID='{$cusdetails['NID']}', Name='{$cusdetails['Name']}', Gender='{$cusdetails['Gender']}', Email='{$cusdetails['Email']}', DOB='{$cusdetails['DOB']}', Blood_Group='{$cusdetails['Blood_Group']}', Degree='{$cusdetails['Degree']}', Occupation='{$cusdetails['Occupation']}', User_Name ='{$cusdetails['User_Name']}', Password='{$cusdetails['Password']}',  Confirm_Password ='{$cusdetails['Confirm_Password']}' where  NID ={$cusdetails['NID']}";

    
    if(mysqli_query($conn, $sql))
    {
        return true;
    }
    else
    {
        return false;
    }
}


//delete

function deletecusdetails($NID)
{
    $conn = getConnection();
    $sql = "delete from cusdetails where NID={$NID}";

    if(mysqli_query($conn,$sql))
    {
        return true;
    }
    else
    {
        return false;
    }
}


//Block

function blockcusdetails($NID)
{
    $conn = getConnection();
    $sql = "delete from cusdetails where NID={$NID}";

    if(mysqli_query($conn,$sql))
    {
        return true;
    }
    else
    {
        return false;
    }
}


?>