<?php
$sqlIp = "127.0.0.1";
$sqlUsername = "root";
$sqlPassword = "";
$sqlDatabase = "web";

$conn = new mysqli($sqlIp,$sqlUsername,$sqlPassword,$sqlDatabase);

if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$hashPre = "fh9873y29hnfksfh938h";
$hashPost = "dmna988jn32kbfsiadnhikjunyoiu";

?>

