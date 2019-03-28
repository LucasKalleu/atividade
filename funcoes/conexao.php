<?php
try {
  $username = 'root';
  $password = 'kalleu123';
  $conn = new PDO('mysql:host=localhost;dbname=estoque', $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  return $conn;
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
    return $conn;
}
return $conn;
?>
