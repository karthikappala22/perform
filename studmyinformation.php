<html>
<style>
table{
	
	margin:150px 150px;
	
}
td{
	padding:20px;
	
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
}
body{
	 background-image:url(iplpic.png);
	 
	 background-size:cover;
	background-position:center;
	
	 
}
</style>
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

$result = mysqli_query($conn,"SELECT * FROM student");

echo "<table border='1'>
<tr>
<th>Roll no</th>
<th>Name</th>
<th>Branch</th>
<th>Passout Year</th>
<th>Codechef username</th>
<th>Hackerrank username</th>
<th>Codeforces username</th>
<th>Hackerearth username</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Roll no'] . "</td>";
echo "<td>" . $row['Name'] . "</td>";
echo "<td>" . $row['Branch'] . "</td>";
echo "<td>" . $row['Passout Year'] . "</td>";
echo "<td>" . $row['Codechef username'] . "</td>";
echo "<td>" . $row['Hackerrank username'] . "</td>";
echo "<td>" . $row['Codeforces username'] . "</td>";
echo "<td>" . $row['Hackerearth username'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>

</body>
</html>