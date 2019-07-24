<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "tigerhacks";

  $conn = mysqli_connect($servername, $username, $password, $database);

  if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
  }

  settype($_POST['data'], "string");
  print("no args: " . $_POST);
  print("data arg: " . $_POST["data"]);
  print("0 arg: " . $_POST[0]);
  echo "no args: " . $_POST;
  echo "data arg: " . $_POST[data];
  echo "0 arg: " . $_POST[0];
  echo "no args: " . gettype($_POST);
  echo "0 arg: " . gettype($_POST[0]);
  echo "data arg: " . gettype($_POST['data']);
  $dataTemp = strtok($_POST["data"], '&');

  echo $dataTemp[0];
  echo $dataTemp[1];
  echo $dataTemp[2];
  echo $dataTemp[3];
  echo $dataTemp[4];
  echo $dataTemp[5];
  echo $dataTemp[6];
  settype($dataTemp[0], "int");
  settype($dataTemp[1], "int");
  settype($dataTemp[2], "int");
  settype($dataTemp[3], "int");
  settype($dataTemp[4], "int");
  settype($dataTemp[5], "int");
  settype($dataTemp[6], "int");
  $data["earth"] = $dataTemp[6];
  //$data["fire"] = $dataTemp[];
  $data["humidity"] = $dataTemp[0];
  //$data["intruder"] = $dataTemp[];
  $data["light"] = $dataTemp[3];
  //$data["lockStatus"] = $dataTemp[];
  $data["magnet"] = $dataTemp[5];
  $data["temp"] = $dataTemp[2];
  $data["water"] = $dataTemp[4];

  $toCat = $data["earth"] . ",". $data["humidity"] . "," . $data["light"] . ",";
  $toCatToo = $data["magnet"] . "," . $data["temp"] . "," . $data["water"];
  $sql = "INSERT INTO data (earth, fire, humidity, intruder, light, lockStatus, magnet, temp, water) VALUES (". $toCat . $toCatToo . ");";

  mysqli_query($conn, $sql);

?>
