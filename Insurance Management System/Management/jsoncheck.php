<?php

$json = $_POST['data'];
    
    $insurance = json_decode($json);
    
    echo $insurance->Serial_No;

    echo $insurance->Creation_Date;
    
    echo $insurance->Category;
   
?>  