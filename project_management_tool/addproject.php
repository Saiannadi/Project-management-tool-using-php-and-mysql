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

$name=$_POST['pname'];
$req=$_POST['prequir'];
$pprice=$_POST['cname'];
$price=$_POST['pprice'];
$pgst=$_POST['pgst'];
$pdura=$_POST['pdura'];
$rclient=$_POST['rclient'];
$pay = $_POST['pay'];
$pay= implode(",",$pay);
$payd = $_POST['payd'];
$payd = implode(",",$payd);
$dupay = $_POST['dupay'];
$dupay = implode(",",$dupay);
$dupayd = $_POST['dupayd'];
$dupayd = implode(",",$dupayd);
$pct = $_POST['pclient'];
$pst = $_POST['pst'];
$ptask = $_POST['ptask'];
$ptask = implode(",",$ptask);
$tdur = $_POST['tdur'];
$tdur = implode(",",$tdur);
$ppic = $_POST['ppic'];
$ppic = implode(",",$ppic);
$tprice = $_POST['tprice'];
$tprice = implode(",",$tprice);
$tdesc = $_POST['tdesc'];
$tdesc = implode(",",$tdesc);
$conn=mysqli_connect("localhost","root","","inter") or die("failed:" . mysqli_connect_error()); 

$sql=mysqli_query($conn,"insert into projects (pname,preq,ppric,price,rclient,pgst,pduration,pay,pdate,dpay,ddate,pclient,pstatus,ptask,taskdh,tprice,tpp,tdesc) values ('$name','$req','$pprice','$price','$rclient','$pgst','$pdura','$pay','$payd','$dupay','$dupayd','$pct','$pst','$ptask','$tdur','$ppic','$tprice','$tdesc')") or die("failed:" . mysqli_error($conn));

if($sql)
echo "<h2>Project Details submitted successfully<h2>";
else
echo "<h2>your project details not submitted.</h2>";


$conn->close();
?>
<div class="f3">
<form action="project.php">
<input type="submit" value="back">
</form>
</div>
</body>
</html>