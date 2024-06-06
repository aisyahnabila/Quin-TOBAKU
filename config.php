<?php 
      
    $server   = "localhost";
    $username = "root";
    $password = "";
    $database = "tobaku";
  
    //sambungkan ke database
    $conn = mysqli_connect($server, $username, $password, $database);
  
    if (!$conn) //jika tidak berhasil disambungkan
    {
        echo "<h1>Sambungan Gagal</h1>";
    }
  