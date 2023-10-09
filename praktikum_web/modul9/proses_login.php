<?php 
  session_start();
  if(isset($_POST['Login'])){
    if(($_POST['nama']=="") && ($_POST['pass']=="")) {
      echo "User Name dan Password masih kosong"; 
      session_destroy();

    }else{
      //user = "johan" password = "bengbeng123"
      if(($_POST['nama']=="johan") and ($_POST['pass']=="bengbeng123")){
        $_SESSION['login']=1;
        $_SESSION['username']=$_POST['nama'];

      }

    if ((isset($_SESSION['login'])) and ($_SESSION['login']==1)){
      header("location: submit_formlogin.php");
      exit();
    }
    }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Session</title>
</head>
<body>
  <form name="session" method="post" action="">
    <p>Form Login</p>
    <p>Username <input type="text" name="nama"></p>
    <p>Password <input type="password" name="pass"></p>
    <input type="submit" name="Login" value="Login">
  </form>
</body>
</html>