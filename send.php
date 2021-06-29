<?php
$servername  = "localhost";
$username = "Maan";
$password = "123456";
$dbname = "robotengine";
$a=1;
$Run  = $_POST["Run"]??"Meow";
$Save = $_POST["Save"]??"Kyah";
$eng1 = $_POST["eng1"];
$eng2 = $_POST["eng2"];
$eng3 = $_POST["eng3"];
$eng4 = $_POST["eng4"];
$eng5 = $_POST["eng5"];
$eng6 = $_POST["eng6"];

$conn = new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if ($Save=="Save") {
  // code...

while ($a <= 6) {
  // code...

if ($a==1) {
  $sql = "UPDATE roboticengine SET Value= $eng1  WHERE EngineID =$a";

}
elseif ($a==2) {
  $sql = "UPDATE roboticengine SET Value= $eng2   WHERE EngineID =$a";

}
elseif ($a==3) {
  $sql = "UPDATE roboticengine SET Value= $eng3   WHERE EngineID =$a";

}
elseif ($a==4) {
  $sql = "UPDATE roboticengine SET Value= $eng4   WHERE EngineID =$a";

}
elseif ($a==5) {
$sql = "UPDATE roboticengine SET Value= $eng5   WHERE EngineID =$a";

}
elseif ($a==6) {
$sql = "UPDATE roboticengine SET Value= $eng6   WHERE EngineID =$a";

}

$a++;

if ($conn->query($sql) === TRUE) {

} else {
  echo "Error updating record: " . $conn->error;
}
$sql = "UPDATE status SET Status = 'Off' ";
if ($conn->query($sql) === TRUE) {

} else {
  echo "Error updating record: " . $conn->error;
}
}
echo "Data Updated";
}

if ($Run=="Run") {
  // code...
  $sql = "UPDATE status SET Status = 'On' ";

  if ($conn->query($sql) === TRUE) {

  } else {
    echo "Error updating record: " . $conn->error;
  }
echo "Engines Are Running!";
}
$conn->close();

?>
