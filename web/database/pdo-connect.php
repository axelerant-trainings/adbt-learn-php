<?php

// echo phpinfo();

// Do dddev describe to find details locally.
$servername = "db";
$databse = 'db';

// Not recommended way of initializing variables.
$username = $password = "root";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$databse", $username, $password);
  echo "Connected successfully";

  $sql = "SELECT * FROM employee";
  $result = $conn->query($sql);

  echo '<pre>';
  var_dump($result);
  var_dump($result->fetchAll());

  $conn = NULL;
  echo "Connection closed.";
}
catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}


