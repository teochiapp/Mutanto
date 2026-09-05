<?php

  // Database credentials
  
  /*
  $host = "localhost";
  $port = 3306;
  $dbname = "mutanto_db";
  $username = "root";
  $password = "root";
  */
  
  $host = "localhost";
  $port = "";
  $dbname = "c2271764_mutanto";
  $username = "c2271764_mutanto";
  $password = "peKO27desa";


try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }

  ?>