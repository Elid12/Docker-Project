<?php

$celsius = $_POST['celsius'];

if (!empty($celsius)) {
    $host = "mysql";
    $dbUsername = "root";
    $dbPassword = "root";
    $dbname = "temps";

    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connection Failed!('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
  
     $INSERT = "INSERT Into temperatures (celsius) values(?)";
     
     $stmt = $conn->prepare($INSERT);
     $stmt->bind_param("i", $celsius);
     $stmt->execute();
     echo "Data entered with success!";
    
     $stmt->close();
     $conn->close();
    }
} else {
 echo "Enter temperature";
 die();
}
?>

<html>

<head>

<title> Enter Data </title>

</head>

<body>

</body>
</html>