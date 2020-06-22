<!--
$servername = "localhost";
$username = "id13419638_tolito_users";
$password = "^==?T^=]%Gp[\kX7";
$database = "id13419638_users";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
*/

<?php
$servername = "localhost";
$database = "id13419638_users";
$username = "id13419638_tolito_users";
$password = "^==?T^=]%Gp[\kX7";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    echo '<script>console.log("Coneccion fallida");</script>';
    die("Connection failed: " . mysqli_connect_error());
}
echo '<script>console.log("Coneccion Correcta");</script>';
mysqli_close($conn);