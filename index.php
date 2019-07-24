<!DOCTYPE html>

<html>

    <head>
        <title>SigPhiTigerHacks</title>
        <meta charset="utf-8">
        <meta http-equiv="refresh" content="20">
        
        <style>
            
            body {
                background-color: red;
            }
            
            #wrapper {
                width: 100%;
                background-color: white;
                text-align: center;
            }
            
            #header {
                padding: 5px;
                margin: 5px;
                border-radius: 25px;
            }
            
            h1 {
                padding: 5px;
                color: red;
                background-color: black;
                border-radius: 25px;
            }
            
            h2 {
                padding: 5px;
                color: red;
                background-color: black;
                border-radius: 25px;
            }
            
            table {
                width: 100%;
                text-align: center;
            }
            
            #table {
                text-align: center;
                width: 90%;
                margin: 0px 5% 0px 5%;
            }
            
            th, td {
                border: 2px solid black;
                border-collapse: collapse;
                margin: 0px;
                padding: 5px;
                text-align: center;
                width: 45%;
                
            }
            
            #footer {
                height: 35px;
            }
            
        </style>
        
    </head>
    
    <body id="body">
        
        <div id="wrapper">
            
            <div id="header">
                <h1>Sigma Phi Delta</h1>
                <h2>Arduino Home Monitor via Google Home</h2>
            </div>
            
            <div id="table">
                
                <?php
            
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $database = "tigerhacks";

                    // Create connection
                    $conn = mysqli_connect($servername, $username, $password, $database);

                    // Check connection
                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    $sql = "SELECT * FROM data WHERE id = (SELECT MAX(id) FROM data);";

                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            
                            echo "<table style=\"text-align: center;\"";
                            
                            echo "<tr><th colspan=\"2\">Arduino Data</th></tr>";
                            
                            if ($row["earth"] == 0) {
                                echo "<tr>";
                                echo "<td>" . "Is an Earth Quake happening?" . "</td>" . "<td>" . "No" . "</td>";
                                echo "</tr>";
                            }

                            else {
                                echo "<tr>";
                                echo "<td>" . "Is an Earth Quake happening" . "</td>" . "<th>" . "Yes" . "</th>";
                                echo "</tr>";
                            }

                            if ($row["fire"] == 0) {
                                echo "<tr>";
                                echo "<td>" . "Is the house on fire?" . "</td>" . "<td>" . "No" . "</td>";
                                echo "</tr>";
                            }

                            else {
                                echo "<tr>";
                                echo "<td>" . "Is the house on fire?" . "</td>" . "<th>" . "Yes" . "</th>";
                                echo "</tr>";
                            }
                            
                            echo "<tr>";
                            echo "<td>" . "Current Humidity" . "</td>" . "<td>" . $row["humidity"] . "</td>"; 
                            echo "</tr>";
                            
                            if ($row["intruder"] == 0){
                                echo "<tr>";
                                echo "<td>" . "Is there an intruder?" . "</td>" . "<td>" . "No" . "</td>";
                                echo "</tr>";
                            }

                            else {
                                echo "<tr>";
                                echo "<td>" . "Is there an intruder?" . "</td>" . "<th>" . "Yes" . "</th>";
                                echo "</tr>";
                            }

                            if ($row["light"] == 0){
                                echo "<tr>";
                                echo "<td>" . "Did I leave the light on?" . "</td>" . "<td>" . "No" . "</td>";
                                echo "</tr>";
                            }

                            else {
                                echo "<tr>";
                                echo "<td>" . "Did I leave the lights on?" . "</td>" . "<th>" . "Yes" . "</th>";
                                echo "</tr>";
                            }

                            if ($row["lockStatus"] == 0){
                                echo "<tr>";
                                echo "<td>" . "Did I lock the door?" . "</td>" . "<td>" . "Yes" . "</td>";
                                echo "</tr>";
                            }

                            else {
                                echo "<tr>";
                                echo "<td>" . "Did I lock the door?" . "</td>" . "<th>" . "No" . "</th>";
                                echo "</tr>";
                            }

                            if ($row["magnet"] == 0){
                                echo "<tr>";
                                echo "<td>" . "Is that rapscallion Magneto about?" . "</td>" . "<td>" . "No" . "</td>";
                                echo "</tr>";
                            }

                            else {
                                echo "<tr>";
                                echo "<td>" . "Is that rapscallion Magneto about?" . "</td>" . "<th>" . "Yes" . "</th>";
                                echo "</tr>";
                            }
                            
                            echo "<tr>";
                            echo "<td>" . "Temperature" . "</td>" . "<td>" . $row["temp"] . "</td>";
                            echo "</tr>";

                            if ($row["water"] == 0){
                                echo "<tr>";
                                echo "<td>" . "Is the house flooded?" . "</td>" . "<td>" . "No" . "</td>";
                                echo "</tr>";
                            }

                            else {
                                echo "<tr>";
                                echo "<td>" . "Is the house flooded?" . "</td>" . "<th>" . "Yes" . "</th>";
                                echo "</tr>";
                            }
                            
                            echo "</table>";

                        }
                    } 

                    else {
                        echo "0 results";
                    }

                    mysqli_close($conn);

                ?>
                
            </div>
            
            <div id="footer"></div>
        </div>
        
    </body>

</html>