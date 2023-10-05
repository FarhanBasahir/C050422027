<?php 
  //variabel 
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $gender = $_POST['gender'];
  $prodi = $_POST['prodi'];
  $komentar = $_POST['komentar'];

  //Biodata 
  echo "Biodata Mahasiswa Politeknik Negeri Banjarmasin Jurusan Teknik Elektro <br>";

  // Nama
  echo "Nama : $nama <br>";
  
  // NIM
  echo "NIM : $nim <br>";
  
  //Jenis Kelamin
  echo "Jenis Kelamin : $gender <br>";

  // Bahasa
  echo "Bahasa : <br>";
  if (isset($_POST['Indonesia'])){
    echo "+ " . $_POST['Indonesia'] . "<br>";
  }
  if (isset($_POST['Inggris'])){
    echo "+ " . $_POST['Inggris'] . "<br>";
  }

  // Program Studi
  echo "Program Studi : $prodi <br>";

  //Komentar
  echo "Komentar : <br>";
  echo $komentar;
?>