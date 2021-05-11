<html>
<head>
<?php
//print_r($_POST);
$fname=$_POST['first'];
$lname=$_POST['last'];
$email=$_POST['email'];
$pass=$_POST['password'];
$servername = "localhost";
  $username = "akshaya";
  $password = "akshaya";
  $dbname = "vmag";
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error)
  {
    die("Connection failed: " . $conn->connect_error);
  }


$q="INSERT into signin (fname,lname,email,pass) values('$fname','$lname','$email','$pass')";

if ($conn->query($q) === TRUE)
{
    header('Location:blog.html');
}
else
{
   echo '<script type="text/javascript">';
   echo 'window.alert("THIS EMAIL ALREADY EXISTS")';
   echo '</script>';
}
?>
</head>
</html>
