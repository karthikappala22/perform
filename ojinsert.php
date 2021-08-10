<html>
<body>
<?php      
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "performancetrack";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}     
$sql="INSERT INTO oj VALUES('$_POST[o]')"; 
if(mysqli_query($conn,$sql))
  {
  echo " record added" ;
  }
else
{
echo "error";
}
mysqli_close($conn);
?>

</body>
</html>