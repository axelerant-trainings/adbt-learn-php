<?php

// CLI
// Joins & w3 schools

// Do dddev describe to find details locally.
$servername = "db";
$databse = 'db';

// Not recommended way of initializing variables.
$username = $password = "root";


// Create connection
$conn = new mysqli($servername, $username, $password, $databse);




// Check connection
if ($conn->connect_error) {
  var_dump($conn);
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully.<br />";

echo '<pre>';
var_dump($conn);
// $sql = "SELECT * FROM employee";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   // Show result data row wise.
//   while ($row = $result->fetch_object()) {
//     echo "id: " . $row->id . " - Name: " . $row->name . "<br />";
//   }
// }

$sql = "INSERT INTO employee (name) VALUES ('Vivek');";
$result = $conn->query($sql);


var_dump($result);

$conn->close();
echo "Connection closed";
