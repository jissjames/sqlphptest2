<!DOCTYPE html>
<html>
    <head>
        <title>View Data</title>
        
        <body>
            
            <?php
            //Development db variables - use this to Cloud9 DB
             $servername = "127.0.0.1";
             $username = "jissjames9";
             $password = "";
             $dbname = "dbTest";
            
            //Production db variables - for Heroku ClearDB
            $servername = "eu-cdbr-west-01.cleardb.com";
            $username = "b9e5c5c133f110";
            $password = "b8765cdd";
            $dbname = "heroku_c2c9e9e90fa200c";
            
            
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            
            $sql = "SELECT UserID, UserNAME, UserADDRESS, UserPHONE FROM tblUsers";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "ID: " . $row["UserID"]. " - Name: " . $row["UserNAME"]. " " . " 
                    - Address: " . $row["UserADDRESS"]. " " . " - Phone: " . $row["UserPHONE"]. "<br>";
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
            
            <a href="index.php">BACK</a>
        </body>
    </head>
</html>
