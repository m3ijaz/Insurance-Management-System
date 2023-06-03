<?php  

   require_once('../Model/insmodel.php');

     $Serial_No = $_REQUEST['Serial_No'];
     $Creation_Date = $_REQUEST['Creation_Date'];
     $Category = $_REQUEST['Category'];  

     if ($Serial_No == null || $Creation_Date == null || $Category == null)
	 {
		echo "invalid Serial_No/Creation_Date/Category <br>";
	 }
	 /*else
	 	{
	 		$data = $Serial_No."|". $Creation_Date."|".$Category. "\r\n";
		$file = fopen('../Data/insurancedetails.txt', 'a');
		fwrite($file, $data);

			if($fname == "create")
			{
				header('location: ../Presentation/addinsurance.php');	
			}
			else
			{
				header('location: ../Presentation/idone.php');
			}
	}*/
	else
	   {
	    $status = addinsurance($Serial_No,$Creation_Date,$Category);

	    if($status)
	    { 
					header('location: ../Presentation/addInsurance.php');
	    }
	    else
	    {
		echo "invalid details!";
	    }
	   }


?>