<?php
$con=mysqli_connect("cis.gvsu.edu","bloomj","bloomj9361","bloomj");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
if (isset($_POST['clipping'])){
$text = mysqli_real_escape_string($con, $_POST['clipping']);

$sql="INSERT INTO clips (id,clip)
VALUES (0, '$text')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
echo "1 record added";
}
mysqli_close($con);
header("location: index.php");
?>
