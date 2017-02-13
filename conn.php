<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $databasename = "juntron_db";

  // Create connection
  $conn = new mysqli($servername, $username, $password,  $databasename);

  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }


 ?>
