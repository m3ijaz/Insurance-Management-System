<?php 
	
	

?>


<html>
<head>
	<title>Add Insurance</title> 
	<link  rel="stylesheet" type="text/css" href="../Asset/style4.css">
</head>
<body>
		<a href="Isohome.php"> <h3>Back</h3> </a>  
		<div class = "insurance">
		<h1>Insurance</h1>

		<form action="../Management/insuranceCheck.php" method="post" enctype="">   
   
		     <p>Serial_No : </p>
             <input type="text" name="Serial_No" id="Serial_No" value="" placeholder = "Serial_No">
					
			 <p>Creation_Date : </p>
			 <input type="date" name="Creation_Date" id="Creation_Date"  value = " " placeholder = "Creation_Date">

			 <p> Category : </p>
			 <input type="radio" name="Category" id="Category" value="Life_Insurance"> Life_Insurance  
			 <input type="radio" name="Category"  id="Category" value="Property_Insurance"> Property_Insurance
			 <input type="radio" name="Category" id="Category" value="Car_Insurance"> Car_Insurance
			 <input type="radio" name="Category"  id="Category" value="Fire_Insurance"> Fire_Insurance
					   

			<button type="submit" id="submit" onclick="ajax()"> Submit </button> 
			<button type="reset"> Reset </button> 


			<a href="../Management/logout.php"> Logout</a>
				
	    </form>
		
   <script>
		 function validation()
			{
				if(Serial_No == "")
           {
            document.getElementById('Serial_No').innerHTML= "**Serial_No not valid**";
             return false;
           }
        if(Creation_Date == "")
          {
           document.getElementById('Creation_Date').innerHTML= "**Creation_Date not valid**";
           return false;
          }

        if(Category == "")
         {
           document.getElementById('Category').innerHTML= "**Category not valid**";
          return false;
        }

			}

  
			function ajax()
			{ 
                let Serial_No = document.getElementById('Serial_No').value;
                let Creation_Date = document.getElementById('Creation_Date').value;
                let Category  = document.getElementById('Category').value;
				let insurance = {'Serial_No' : Serial_No, 'Creation_Date' : Creation_Date, 'Category' : Category}
				let json = JSON.stringify(insurance);

                let xhttp = new XMLHttpRequest();

				xhttp.open('POST','../Management/jsoncheck.php', true);
                xhttp.onreadystatechange = function ()
                {                    
                    if(this.readyState == 4 && this.status == 200)
					          {
                        alert(this.responseText);
                    }
                }

                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
                xhttp.send('data='+json);        
       }

	  </script>


    </div>


</body>
</html>