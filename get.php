<?php
$con=mysqli_connect("cis.gvsu.edu","bloomj","bloomj9361","bloomj");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$sql="SELECT * FROM clips;";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result)) {
  $str = "<div class='row'\n>";
  $str .="\t<div class='col-md-6'>\n";
  $str .="\t\t<div class='panel panel-default'>\n";
  $str .="\t\t\t<div class='panel-body'>\n";
  $str .="\t\t\t\t" . $row['clip'] . "\n";
  $str .="\t\t\t</div>\n";
  $str .="\t\t\t<div class='panel-footer'>\n";
  $str .="\t\t\t\t<div align='right'>\n";
  $str .="\t\t\t\t\t<a data-id='" . $row['id'] . "' onclick='del(this)'><i class='fa fa-times'></i></a>\n";
  $str .="\t\t\t\t</div>\n";
  $str .="\t\t\t</div>\n";
  $str .="\t\t</div>\n";
  $str .="\t</div>\n";
  $str .="</div>\n";
  echo $str;
}
mysqli_close($con);
//header("location: index.php");
?>
