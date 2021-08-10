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
$sql="INSERT INTO student VALUES('$_POST[roll]','$_POST[pass]','$_POST[n]','$_POST[branch]','$_POST[py]','$_POST[cu]','$_POST[hu]','$_POST[cfu]','$_POST[heu]')"; 
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