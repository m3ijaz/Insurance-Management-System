<?php

    require_once('../Model/insmodel.php');
     

    $Serial_No = $_REQUEST['Serial_No'];


    $status = cancelinsurance($Serial_No);

			if($status)
			{
				header('location: ../Presentation/isohome.php');	
			}
			else
			{
				header('location: ../Presentation/login.html?ID='.$ID);
			}

 ?>