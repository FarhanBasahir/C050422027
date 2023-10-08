  <!-- PHP Start -->
  <?php 
  $valid_username = "C050422027";
  $valid_password = "SIKC3B";
  if ($_POST['username'] == $valid_username && $_POST['password'] == $valid_password) {
    include 'biodata.html';
  } else {
    include 'tugas2.html';
  }
  ?>
  <!-- PHP End -->
