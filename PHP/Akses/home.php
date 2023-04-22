<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Logout</title>
</head>
<body>
<?php
if(!isset($_SESSION["status"])){
 ?>
 <script>
 alert('warning! anda kudu login dulu '),
 window.location.href="login.php";
 </script>
 <?php
}
?>

<h1>Ini Halaman utama</h1>
<p>
  <a href="logout.php" >Logout</a>
</p>

</body>
</html>