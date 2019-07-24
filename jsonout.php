<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "tigerhacks";

  $conn = mysqli_connect($servername, $username, $password, $database);

  if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
  }

  $sql = "SELECT * FROM data WHERE id = (SELECT MAX(id) FROM data);";

  $result = mysqli_query($conn, $sql);


  if(gettype($result) == "boolean"){
    die("Table not found");
  }

    else{
        $row = mysqli_fetch_assoc($result);
        $jsonout = json_encode($row);

            echo $jsonout;

  }



  //$myObj->earth =
  //$myObj->fire =
  //$myObj->humidity =
  //$myObj->intruder =
  //$myObj->light =
  //$myObj->lockStatus =
  //$myObj->magnet =
  //$myObj->temp =
  //$myObj->water =
?>
