<?php
  $servername = "localhost";
    //$servername = "ec2-34-229-158-255.compute-1.amazonaws.com";
  $username = "root";
  $password = "";
  3$database = "tigerhacks";

  $conn = mysqli_connect($servername, $username, $password, $database);

  if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
  }





  //$data = json_decode($_POST['earth'], $_POST['fire'], $_POST['humidity'], $_POST['intruder'], $_POST['light'], $_POST['lockStatus'], $_POST['magnet'], $_POST['temp'], $_POST['water']);


  foreach ($_POST as $key => $value)
{
  // ... Do what you want with $key and $value
  echo "KEY:    " . $key . "     ";
  echo "VALUE:      " . $value . "        ";
}

  $data = json_decode(file_get_contents('php://input'), true);
  echo $data['earth'];
  if($data === null){
    echo "YOU DUN FUCKED UP CAM";
  }
  //echo $data['earth'];
  echo  ' check 1';
    if ($data['shock'] > 1) {
        $data['shock'] = 1;
    }
    echo ' check 2';
  $catOne = $data['earth'] .  ',' . $data['fire'] . ',' . $data['humidity'] . ',' . $data['intruder'] . ',' . $data['light'];
  $catTwo = "," . $data['lockStatus'] . ',' . $data['magnet'] .  ',' . $data['temp'] . ',' . $data['water'];
  $sql = "INSERT INTO data (earth, fire, humidity, intruder, light, lockStatus, magnet, temp, water) values (". $catOne .  $catTwo . ");";

    //$earth = 1;
    //$sql = "INSERT INTO data (earth) values ($earth);";
    echo ' check 3';
    mysqli_query($conn, $sql);
    echo ' check 4';
?>
