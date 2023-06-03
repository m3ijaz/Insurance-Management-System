<html>
<head>
    <title>File Upload</title>
</head>
<body style="background-color:cyan;"> 
<a href="../Management/welcome.html"> Back to Welcome Page </a>
<form  align="center" method="post" enctype="multipart/form-data">
    <label> Title </label> 
    <input type="text" name="title"> <br> <br> <br>
    <label> File Upload </label> 
    <input type="File" name="file"> <br> <br> <br>

    <input type="submit" name="submit"> <br>
</form>
</body>  
</html>
 
         <?php 
                  $localhost = "localhost"; 
                  $dbusername = "root"; 
                  $dbpassword = "";  
                  $dbname = "project";  
 
                    $conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);
 
            if (isset($_POST["submit"]))
                  {
    
                          $title = $_POST["title"];
      
                          $Picture_Name = rand(1000,10000)."-".$_FILES["file"]["name"];
  
                           $tname = $_FILES["file"]["tmp_name"];
 
                              $sql = "INSERT into pictures (Title,image) VALUES('$title','$Picture_Name')";
 
                                  if(mysqli_query($conn,$sql))
                                    {
                                       echo "File Uploaded";
                                    }
                                else
                                 {
                                     echo " File Not Uploaded";
                                 }
                    }
 
 
        ?>