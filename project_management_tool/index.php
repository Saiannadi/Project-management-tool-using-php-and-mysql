<?php
session_start();
if(!isset($_SESSION['email']))
{
  header('location:login.html?Please Login Here');
}
?>

<html>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
      body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  color:white;
  background-color: black;
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
  margin:5px;
  text-align:center;
  font-family:simpson;
  font-size:25;
}
.top
{
    position: absolute;
    top: 10%;
    left: 20%;
}
.top h1
{
    color:white;
    font-family: verdana;
    font-size: larger;
    font-weight: 900;
}
.centre {
  position: absolute;
  font-family: arial;
  font-style: bold;
  font-size:40;
    color: white;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);

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
  <div class="ren">
<img src="back4.png"  width="1517px" height="665px">
<div class="centre"><p>Welcome To Project Management Tool.</p></div>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>