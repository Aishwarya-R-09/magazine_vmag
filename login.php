<html>
<head>
<?php
$email=$_POST['email'];
$pass=$_POST['password'];

//echo $pwd;
$servername = "localhost";
  $username = "akshaya";
  $password = "akshaya";
  $dbname = "vmag";
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


$q="Select id from signin where email='$email' and pass='$pass'";

$result = $conn->query($q);
  if(($email=="raishwarya344@gmail.com" and $pass=="cse@2017") or ($email=="akshayasrinivas8@gmail.com" and $pass=="Aaraks111"))
  {
     header('Location:back.html');
  }
  elseif($result->num_rows > 0)
  {
      header('Location:blog.html');
  }
else
{
    echo '<script type="text/javascript">';
    echo 'window.alert("ENTER CORRECT CREDENTIALS")';
    echo '</script>';

}
?>
</head>
</html>
