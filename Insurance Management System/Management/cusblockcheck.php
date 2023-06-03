<?php

    require_once('../Model/cusmodel.php');
     

    $NID = $_REQUEST['NID'];


    $status = blockcusdetails($NID);

			if($status)
			{
				header('location: ../Presentation/isohome.php');	
			}
			else
			{
				header('location: ../Presentation/login.html?ID='.$ID);
			}

 ?>