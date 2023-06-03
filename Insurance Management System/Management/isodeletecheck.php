<?php

    require_once('../Model/isomodel.php');
     

    $ID = $_REQUEST['ID'];


    $status = deleteisodetails($ID);

			if($status)
			{
				header('location: ../Presentation/isohome.php');	
			}
			else
			{
				header('location: ../Presentation/login.html?ID='.$ID);
			}

 ?>