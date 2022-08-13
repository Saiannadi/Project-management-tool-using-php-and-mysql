<?php

$conn=mysqli_connect("localhost","root","","inter") or die("failed:" . mysqli_connect_error());

$sno = $_GET['id']; // get id through query string

$qry = mysqli_query($conn,"select * from projects where sno='$sno'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
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
    $edit = mysqli_query($conn,"update projects set pname='$name',preq='$req',ppric='$pprice',price='$price',rclient='$rclient',pgst='$pgst',pduration='$pdura',pay='$pay',pdate='$payd',dpay='$dupay',ddate='$dupayd',pclient='$pct',pstatus='$pst',ptask='$ptask',taskdh='$tdur',tprice='$ppic',tpp='$tprice',tdesc='$tdesc' where sno='$sno'");
	
    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:project.php"); // redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>
<html>
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <style>
            .log{
                display:inline;

            }
            body{
            background-image: url("back4.png");
          background-size:1517px 750px;
 background-color: #cccccc;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
            }
input[type=text], select, textarea {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  margin:5px;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: darkred;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin:20px;

}
input[type=submit]:hover {
  background-color: darkred;
}
            </style>
</head>
        </body>
        <center>
        <div class="log">
<div class="container mt-5 shadow-lg p-3 mb-5 bg-white rounded rounded-right"> 
<h3 class="card-header bg-success text-white text-center">project details updatation</h3>
<form method="post">
  <input type="text" name="pname" value="<?php echo $data['pname'] ?>" placeholder="Enter Client Name" Required>
  <input type="text" name="prequir" value="<?php echo $data['preq'] ?>" placeholder="Enter Project Name" Required>
    <input type="text" name="cname" value="<?php echo $data['ppric'] ?>" placeholder="Enter TYPE OF PTICE" Required>
  <input type="text" name="pprice" value="<?php echo $data['price'] ?>" placeholder="Enter project" Required>
    <input type="text" name="rclient" value="<?php echo $data['rclient'] ?>" placeholder="Enter reference CLient" Required>
  <input type="text" name="pgst" value="<?php echo $data['pgst'] ?>" placeholder="Enter project gst" Required>
  <input type="text" name="pdura" value="<?php echo $data['pduration'] ?>" placeholder="Enter project duration" Required>
  <input type="text" name="pay[]" value="<?php echo $data['pay'] ?>" placeholder="Enter payment" Required>
  <input type="text" name="payd[]" value="<?php echo $data['pdate'] ?>" placeholder="Enter payment date" Required>
  <input type="text" name="dupay[]" value="<?php echo $data['dpay'] ?>" placeholder="Enter due payment" Required>
  <input type="text" name="dupayd[]" value="<?php echo $data['ddate'] ?>" placeholder="Enter due date" Required>
  <input type="text" name="pclient" value="<?php echo $data['pclient'] ?>" placeholder="Enter project client" Required>
  <input type="text" name="pst" value="<?php echo $data['pstatus'] ?>" placeholder="Enter project status" Required>
  <input type="text" name="ptask[]" value="<?php echo $data['ptask'] ?>" placeholder="Enter project task" Required>
  <input type="text" name="tdur[]" value="<?php echo $data['taskdh'] ?>" placeholder="Enter task duration" Required>
  <input type="text" name="ppic[]" value="<?php echo $data['tprice'] ?>" placeholder="Enter task price" Required>
  <input type="text" name="tprice[]" value="<?php echo $data['tpp'] ?>" placeholder="Enter task price" Required>
  <input type="text" name="tdesc[]" value="<?php echo $data['tdesc'] ?>" placeholder="Enter task description" Required>
<div class="but">
  <input type="submit" name="update" value="Update">
  </div>
</form>
</div>
        </div>
        </center>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

</body>
</html>
