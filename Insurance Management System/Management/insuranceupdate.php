<?php 

require_once('../Model/insmodel.php');


	$Serial_No = $_REQUEST['Serial_No'];
     $Creation_Date = $_REQUEST['Creation_Date'];
     $Category = $_REQUEST['Category'];


	 $Serial_No = $_REQUEST['Serial_No'];


	 $insurance = ['Serial_No'=>$Serial_No, 'Creation_Date'=>$Creation_Date, 'Category'=>$Category ];

	 $status = renewinsurance($insurance);

			if($status)
			{
				header('location: ../Presentation/isohome.php');	
			}
			else
			{
				header('location: ../Presentation/login.html?ID='.$ID);
			}


?>