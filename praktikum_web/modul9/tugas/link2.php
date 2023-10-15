<?php 
session_start();

if (!isset($_SESSION['username'])){
  header('Location: index.php');
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Halaman Utama</title>
</head>
<body>
    <header style="text-align: center;">
        <h1>Selamat datang di Aplikasi Autentikasi</h1>
        <p>Usernema: <?php echo $username; ?>!</p>
    </header>
    <br>

    <ul style="text-align: center; padding: 0; list-style-type: none;">
        <li style="display: inline-block; margin: 0 10px;"><a href="link1.php" style="text-decoration: none; color: black;" >Link 1</a></li>
        <li style="display: inline-block; margin: 0 10px;"><a href="link2.php" style="text-decoration: none; color: black;" >Link 2</a></li>
        <li style="display: inline-block; margin: 0 10px;"><a href="link3.php" style="text-decoration: none; color: black;" >Link 3</a></li>
        <li style="display: inline-block; margin: 0 10px;"><a href="logout.php" style="text-decoration: none; color: black;" >Logout</a></li>
    </ul>
    <br>
    <p style="text-align: center;">Ini adalah isi dari halaman Link 2</p>
    <br>

    <footer style="text-align: center;">
        <p>Copyright&copy FarhanGroup</p>
    </footer>
</body>
</html>