<html>
    <head>
        <title>Saved Data</title>
        <body>
            
            <?php
            //Development db variables - use this to Cloud9 DB
            //  $servername = "127.0.0.1";
            //  $username = "jissjames9";
            //  $password = "";
            //  $dbname = "dbTest";
            
            //Production db variables - for Heroku ClearDB
            $servername = "eu-cdbr-west-01.cleardb.com";
            $username = "b9e5c5c133f110";
            $password = "b8765cdd";
            $dbname = "heroku_c2c9e9e90fa200c";
            
            //Retrieving values POSTed
            $user_name = $_POST["user_name"];
            $address = $_POST["address"];
            $phone = $_POST["phone"];
            
            // Create connection - using the credentials above
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            
            //SQL Query using the fetched values
            $sql = "INSERT INTO tblUsers (UserNAME, UserADDRESS, UserPHONE)
            VALUES ('$user_name', '$address', '$phone')";
            
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            $conn->close();
            ?>

            <a href="view_data.php">VIEW DATA</a>
        </body>
    </head>
</html>
