<?php

$conn=mysqli_connect("localhost","root","","inter") or die("failed:" . mysqli_connect_error());

$sno = $_GET['id']; // get id through query string

$qry = mysqli_query($conn,"select * from clients where sno='$sno'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $name = $_POST['cnam'];
    $cname = $_POST['coname'];
    $email = $_POST['email'];
    $number = $_POST['num'];
    $pname = $_POST['pname'];
    $pst = $_POST['pst'];
    $cnam = $_POST['cname'];
$cnam= implode(",",$cnam);
$cnum = $_POST['cnum'];
$cnum = implode(",",$cnum);
$crel = $_POST['crel'];
$crel = implode(",",$crel); 
    $edit = mysqli_query($conn,"update clients set name='$name',companyname='$cname',emailid='$email',number='$number',pname='$pname',pstatus='$pst',cname='$cnam',cnumber='$cnum',crelation='$crel' where sno='$sno'");
	
    if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:clients.php"); // redirects to all records page
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
                margin:10px;

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
.but{
  margin:10px;
}
            </style>
</head>
        </body>
        <center>
        <div class="log">
<div class="container mt-5 shadow-lg p-3 mb-5 bg-white rounded rounded-right"> 
<h3 class="card-header bg-success text-white text-center">client details updatation</h3>
<form method="post">
  <input type="text" name="cnam" value="<?php echo $data['name'] ?>" placeholder="Enter Client Name" Required>
  <input type="text" name="coname" value="<?php echo $data['companyname'] ?>" placeholder="Enter company Name" Required>
    <input type="text" name="email" value="<?php echo $data['emailid'] ?>" placeholder="Enter email id" Required>
  <input type="text" name="num" value="<?php echo $data['number'] ?>" placeholder="Enter number" Required>
    <input type="text" name="pname" value="<?php echo $data['pname'] ?>" placeholder="Enter project name" Required>
  <input type="text" name="pst" value="<?php echo $data['pstatus'] ?>" placeholder="Enter project status" Required>
  <input type="text" name="cname[]" value="<?php echo $data['cname'] ?>" placeholder="Enter contact name" Required>
  <input type="text" name="cnum[]" value="<?php echo $data['cnumber'] ?>" placeholder="Enter contact number" Required>
  <input type="text" name="crel[]" value="<?php echo $data['crelation'] ?>" placeholder="Enter contact relationship" Required>
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
