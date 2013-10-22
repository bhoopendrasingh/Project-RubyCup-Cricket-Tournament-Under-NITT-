
<?php
$con=mysqli_connect("localhost","root","rubycup");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM team");

while($row = mysqli_fetch_array($result))
  {
  echo $row['departmentname'] . " " . $row['teamid'];
  echo "<br>";
  }

mysqli_close($con);
?>

