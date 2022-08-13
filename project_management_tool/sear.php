<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            color:navy;
            background-color:black;
          }
          
          .topnav {
  overflow: hidden;
  background-color:#1687a7;
}

.topnav a {
  float: left;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 25;
}

.topnav a:hover {
  background-color:#62959c;
  color: white;
}

.topnav a.active {
  color: white;
  font-size:40;
}
.topnav a.f3 {
  color: white;
  font-size:15;
  float:right;
}
.f5{
  margin:10px;
  text-align:center;
  font-family:simpson;
  font-size:25;
  background-color:#00587a;
  color:white;
  text-decoration: none;
  border-radius: 10px;
  margin:5px;
}
.f5:hover{
    background-color:#008891;
    color:white;
    text-decoration: none;
}
          table{
              margin:50px;
              color:royalblue;
              text-align:Center;
          }
          .f1{
  display:inline-flex;
  margin:10px;
  margin-left:400px;
  margin-right: 10px;
  border-radius:10px;
  float:center;
}
input[type=text], select, textarea {
  width: 250px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

input[type=submit] {
  background-color: darkred;
  color: white;
  padding: 12px 20px;
  border: none;
  height:40px;
  width:120px;
  margin-left:10px;
  border-radius: 4px;
  cursor: pointer;

}
input[type=submit]:hover {
  background-color: darkred;
}
.but{
  margin:10px;
  text-align:center;
} 
.b1 {
  margin-left:15px;
  color:white;
  background-color:green;
  border-radius:3px;
  text-decoration:none;
}
.b1:hover{
  background-color:darkred;
  color:white;
  width:15px;
  text-decoration:none;
}
.b2 {
  margin-left:15px;
  color:white;
  width:15px;
  background-color:darkred;
  border-radius:3px;
  text-decoration:none;
}
.b2:hover{

  background-color:black;
  color:white;
  text-decoration:none;
}
            </style>
            </head>
          <body>
         <div class="topnav">
    <a class="active" href="index.php">PMT</a>
    <a href="project.php">PROJECT</a>
    <a href="clients.php">CLIENTS</a>
    <a href="invoice.php">INVOICE</a>
    <a class="f3"  href="logout.php">LOG OUT</a>
  </div>
        
                </div>
                <div class="container mt-5 shadow-lg p-3 mb-5 bg-white rounded rounded-right"> 

<?php
if(isset($_POST['submit']))
{
  $req=$_POST['sena'];
  $conn=mysqli_connect("localhost","root","","inter") or die("failed:" . mysqli_connect_error());
$records = mysqli_query($conn,"select * from projects where pclient='$req'"); // fetch data from database
echo"<table border='2'>
<tr>
<th>S.NO</th>
<th>PROJECT NAME</th>
<th>CLIENT NAME</th>
<th>PROJECT PRICE</th>
<th>DUE PAYMENT</th>
<th>REFERENCE CLIENT</th>
<th>PROJECT STATUS</th>
<th>OPTIONS</th>
</tr>";
while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['sno']; ?></td>
    <td><?php echo $data['pname']; ?></td>
    <td><?php echo $data['pclient']; ?></td>    
    <td><?php echo $data['ppric']; ?><?php echo $data['price']; ?></td>    
    <td><?php echo $data['dpay']; ?></td>    
    <td><?php echo $data['rclient']; ?></td>    
    <td><?php echo $data['pstatus']; ?></td>    
    <td><a class="b1" href="edit1.php?id=<?php echo $data['sno']; ?>">Edit</a> <a class="b2" href="dele.php?id=<?php echo $data['sno']; ?>">Delete</a></td>
  </tr>	
  </table>
  <?php
  }
  }
  $conn->close();

  ?>
  
  

</div>
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    </body>
</html>

