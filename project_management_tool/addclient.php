<?php
session_start();
if(!isset($_SESSION['email']))
{
  header('location:login.html?Please Login Here');
}
?>
<html>
<head>
<style>
    body{
        background-color:black;
        color:white;
        font-size:30;
        font-family:simpson;
        text-align:center;
    }
    input[type=submit] {
  background-color: darkred;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;

}
input[type=submit]:hover {
  background-color: darkred;
}
    </style>
    </head>
<body>
<?php

$name=$_POST['clname'];
$coname=$_POST['coname'];
$email=$_POST['emailid'];
$num=$_POST['number'];
$add=$_POST['cadd'];
$gst=$_POST['gst'];
$pname=$_POST['pname'];
$pstatus=$_POST['pst'];
$cname = $_POST['nam'];
$cname= implode(",",$cname);
$cnum = $_POST['num'];
$cnum = implode(",",$cnum);
$crel = $_POST['rel'];
$crel = implode(",",$crel);
$conn=mysqli_connect("localhost","root","","inter") or die("failed:" . mysqli_connect_error()); 

$sql=mysqli_query($conn,"insert into clients (name,companyname,emailid,number,companyadd,gstnumber,pname,pstatus,cname,cnumber,crelation) values ('$name','$coname','$email','$num','$add','$gst','$pname','$pstatus','$cname','$cnum','$crel')") or die("failed:" . mysqli_error($conn));

if($sql)
echo "<h2>clients Details submitted successfully<h2>";
else
echo "<h2>your enquiry not submitted.</h2>";


$conn->close();
?>
<div class="f3">
<form action="clients.php">
<input type="submit" value="back">
</form>
</div>
</body>
</html>