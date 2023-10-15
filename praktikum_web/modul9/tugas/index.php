<?php 
session_start();

// Daftar Username dan Password yang diizinkan
$users = array(
  'Ali' => 'password1',
  'Bona' => 'password1',
  'Charlie' => 'password1',
  'Dede' => 'password1',
  'Emon' => 'password1'
);

if (isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  if (array($username, $users) && $users[$username] == $password){
    $_SESSION['username'] = $username;
    header('Location: home.php');
  } else {
    $error = "Username atau password salah!";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=\, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Aplikasi Autentifikasi</title>
  <style type="text/css"></style>
</head>
<body>
  <header style="text-align: center;">
    <h1>Selamat datang di Aplikasi Autentikasi</h1>
  </header>
  <br>
      <form method="post">
        <p style="text-align: center;">Silakan Login</p>
        <table cellpadding="5" style="margin: 0 auto;">
          <tr>
            <td>
            <label for="username">Username:</label>
            </td>
            <td>
            <input type="text" name="username" required><br>
            </td>
          </tr>
          <tr>
            <td>
            <label for="password">Password:</label>
            </td>
            <td>
            <input type="password" name="password" required><br>
            </td>
          </tr>
          <tr>
            <td>
            </td>
            <td style="text-align: center;">
            <button type="submit" name="login">Submit</button>
            </td>
          </tr>
        </table>
      </form>

      <?php 
      if (isset($error)){
        echo "<p style='text-align: center'>$error</p>";
      }
        ?>
      <br><br>

      <footer style="text-align: center;">
        <p>Copyright&copy FarhanGroup</p>
      </footer>
     
</body>
</html>