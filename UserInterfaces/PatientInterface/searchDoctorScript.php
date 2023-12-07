<?php
        $Doctor=$_POST['doctorName'];
        $Doctor = $Doctor . "%";
        //conection related
        $servername = "localhost";
        $username = "root";
        $password = "";
        $db_name = "maindatabase";
        //conecting and assigning connection variable
        $conn = new mysqli($servername, $username, $password, $db_name);
        // Disable foreign key checks
        $conn->query('SET FOREIGN_KEY_CHECKS=0;');
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }


        //select doctor
        $sqlselectionquerry = "SELECT * FROM user WHERE nom LIKE '$Doctor';";
        $result = $conn->query($sqlselectionquerry);
        $message = "";
        
        
        if ($result->num_rows > 0) {
            // Fetch and process results
            while ($row = $result->fetch_assoc()) {
                $name = $row["nom"];
                $show = $name;
                $message = $message." ".$show ;
            }
            $response = ['message' => $message];
            $jsonResponse = json_encode($response);
            echo $jsonResponse;

        } 
        else 
        {
            echo "No results found";
            /*$sql1 = "INSERT INTO test VALUES('SAMI hachicha',20,'0000',0,1)";
            $conn->query($sql1);*/
        }
        $conn->close();

?>