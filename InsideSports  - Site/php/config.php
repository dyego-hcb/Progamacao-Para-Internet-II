<?php
try {
    $dsn = 'mysql:dbname=BANCO_INSIDE_SPORTS;host=127.0.0.1';
    $user = 'root';
    $password = '';
    $conn = new PDO($dsn, $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
  }
?>