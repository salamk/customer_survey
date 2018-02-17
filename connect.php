
<?php
$servername = "localhost";
$username = "root";
$password = "3032-$@l@m";
$dbname = "hrinfo";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
