<?php

$conn=mysqli_connect("localhost","root","","inter") or die("failed:" . mysqli_connect_error());

$sno = $_GET['id']; // get id through query string

$qry = mysqli_query($conn,"delete from projects where sno='$sno'"); // select query	
    if($qry)
    {
        mysqli_close($conn); // Close connection
        header("location:project.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	

?>
