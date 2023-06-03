<?php 

require_once('database.php');

//for Signup 

function Signup($Name,$Gender,$Email,$DOB,$Blood_Group,$Degree,$Occupation,$User_Name,$Password,$Confirm_Password)
{
    $conn = getConnection();
	$sql = "insert into isodetails values('', '{$Name}', '{$Gender}', '{$Email}', '{$DOB}', '{$Blood_Group}', '{$Degree}', '{$Occupation}', '{$User_Name}', '{$Password}', '{$Confirm_Password}')";

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
	$sql = "select * from isodetails where User_Name = '{$User_Name}' and Password = '{$Password}' ";
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

function isoview()
{
  $conn = getConnection();
  $sql = "select * from isodetails ";
  $result = mysqli_query($conn, $sql);
  return $result;
}

function isoviewbyID($ID)
{
  $conn = getConnection();
  $sql = "select * from isodetails where ID = {$ID}";
  $result = mysqli_query($conn, $sql);
  $query = mysqli_fetch_assoc($result);
  return $query;
}


//Edit or Update

function editisodetails($isodetails)
{
	$conn = getConnection();
	$sql = "update isodetails set  Name='{$isodetails['Name']}', Gender='{$isodetails['Gender']}', Email='{$isodetails['Email']}', DOB='{$isodetails['DOB']}', Blood_Group='{$isodetails['Blood_Group']}', Degree='{$isodetails['Degree']}', Occupation='{$isodetails['Occupation']}', User_Name ='{$isodetails['User_Name']}', Password='{$isodetails['Password']}',  Confirm_Password ='{$isodetails['Confirm_Password']}' where  ID ={$isodetails['ID']}";
	//$sql = "update isodetails set Name='{Name}', Gender='{Gender}', Email='{Email}', DOB='{DOB}', Blood_Group='{Blood_Group}', Degree='{Degree}', Occupation='{Occupation}', User_Name ='{User_Name}', Password='{Password}',  Confirm_Password ='{Confirm_Password}' where ID='{ID}'";
   
    //$sql = "update isodetails set Name ='{$Name}', Gender='{$Gender}', Email='{$Email}', DOB='{$DOB}', Blood_Group='{$Blood_Group}', Degree='{$Degree}', Occupation='{$Occupation}', User_Name ='{$User_Name}', Password='{$Password}',  Confirm_Password ='{$Confirm_Password}' where ID={$isodetails['ID']}";

    
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

function deleteisodetails($ID)
{
    $conn = getConnection();
    $sql = "delete from isodetails where ID={$ID}";

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