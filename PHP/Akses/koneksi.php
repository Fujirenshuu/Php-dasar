<?php
$koneksi = mysqli_connect("0.0.0.0", "root","root", "db_login", 3306);

 if (mysqli_connect_errno())
 {
 echo "Koneksi database gagal : " . mysqli_connect_error();
 }