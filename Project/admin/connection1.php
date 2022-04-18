<?php
            $servername = "localhost";//connection to the database for outside sourced open data
            $username = "tokola_3340";
            $password = "tokola135";
            $dbname = "tokola_3340";

    // Create connection
    $con = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if (!$con) {
         die("Connection failed: " . mysqli_connect_error());
    }
?>