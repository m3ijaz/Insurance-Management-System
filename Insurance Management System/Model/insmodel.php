<?php
     
     require_once('database.php');   


//Add Insurance

function addinsurance($Serial_No,$Creation_Date,$Category)
{
    $conn = getConnection();
	$sql = "insert into insurance values('{$Serial_No}', '{$Creation_Date}', '{$Category}')";

    if(mysqli_query($conn, $sql))
    {
        return true;
    }
    else
    {
        return false;
    }
}


//Show data

function insview()
{
  $conn = getConnection();
  $sql = "select * from insurance ";
  $result = mysqli_query($conn, $sql);
  return $result;
}

function insviewbySerial_No($Serial_No)
{
  $conn = getConnection();
  $sql = "select * from insurance where Serial_No = {$Serial_No}";
  $result = mysqli_query($conn, $sql);
  $query = mysqli_fetch_assoc($result);
  return $query;
}


//Renew or Update Insurance

function renewinsurance($insurance)
{
	$conn = getConnection();
	$sql = "update insurance set  Serial_No='{$insurance['Serial_No']}', Creation_Date='{$insurance['Creation_Date']}', Category='{$insurance['Category']}' where  Serial_No ={$insurance['Serial_No']}";
	
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

function cancelinsurance($Serial_No)
{
    $conn = getConnection();
    $sql = "delete from insurance where Serial_No={$Serial_No}";

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