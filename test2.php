<!DOCTYPE html>

<html>

    <body>
        <?php
            
            $servername = "http://ec2-34-229-158-255.compute-1.amazonaws.com";
            $username = "root";
            $password = "";
            $database = "tigerhacks";

            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $database);

            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
        
            $sql = "SELECT * FROM data";
           
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    
                    if ($row["earth"] == 0) {
                        echo "Earth Quake : No" . "<br>";
                    }
                
                    else {
                        echo "Earth Quake : Yes" . "<br>";
                    }
                     
                    if ($row["fire"] == 0) {
                        echo "Is the house on fire? : No" . "<br>";
                    }
                    
                    else {
                        echo "Is the house on fire? : Yes" . "<br";
                    }
                    
                    echo "Humidity : " . $row["humidity"] . "<br>"; 
                    
                    if ($row["intruder"] == 0){
                        echo "Is there an intruder? : No" . "<br>";
                    }
                    
                    else {
                        echo "Is there an intruder? : Yes" . "<br>";
                    }
                    
                    if ($row["light"] == 0){
                        echo "Light Status : No" . "<br>";
                    }
                    
                    else {
                        echo "Light Status : Yes" . "<br>";
                    }
                    
                    if ($row["lockStatus"] == 0){
                        echo "Did I lock the door? : No" . "<br>";
                    }
                    
                    else {
                        echo "Did I lock the door? : Yes" . "<br>";
                    }
                    
                    if ($row["magnet"] == 0){
                        echo "Is that rapscallion Magneto about? : No" . "<br>";
                    }
                    
                    else {
                        echo "Is that rapscallion Magneto about? : Yes" . "<br>";
                    }
                    
                    echo "Temperature : " . $row["temp"] . "<br>";
                    
                    if ($row["water"] == 0){
                        echo "Is the house flooded? No" . "<br>";
                    }
                    
                    else {
                        echo "Is the house flooded? : Yes" . "<br>";
                    }
                    
                }
            } 
            
            else {
                echo "0 results";
            }

            mysqli_close($conn);
        
        ?>
    </body>
    
    
</html>
