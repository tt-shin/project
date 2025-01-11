<?php
$host = "userdb.cc7tazxltrra.us-east-1.rds.amazonaws.com";
$username = "root";
$password = "user1234";
$dbname = "user";

// Create a connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM 'user'";

if($result = mysqli_query($con, $sql))
{
    $resultArray = array();
    $tempArray = array();

    while($row = $result->fetch_object())
    {
        $tempArray = $row;
        array_push($resultArray, $tempArray);
    }
    
    echo json_encode($resultArray);
}
// Close connectionsmysqli_close($con);
mysqli_close($con);
?>
