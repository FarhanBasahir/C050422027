<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Selamat Datang di POLIBAN</title>
  <style>
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Poppins, "Times New Roman", Times, serif;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <h2 style="text-align: center">Selamat Datang Mahasiswa Politeknik Negeri Banjarmasin Jurusan Teknik Elektro</h2>
  <table border="1" cellpadding="5" cellspacing="0" style="margin: auto">
    <tr>
      <td>Nama :</td>
      <td>
        <?php 
          $nama = $_POST['nama'];
          echo " $nama <br>";
        ?>
      </td>
    </tr>
    <tr>
      <td>NIM :</td>
      <td>
        <?php 
          $nim = $_POST['nim'];
          echo " $nim <br>";
        ?>
      </td>
    </tr>
    <tr>
      <td>Jenis Kelamin :</td>
      <td>
        <?php 
          $gender = $_POST['gender'];
          echo " $gender <br>";
        ?>
      </td>
    </tr>
    <tr>
      <td>Bahasa :</td>
      <td>
        <?php 
        if (isset($_POST['Indonesia'])){
          echo "+ " . $_POST['Indonesia'] . "<br>";
        }
        if (isset($_POST['Inggris'])){
          echo "+ " . $_POST['Inggris'] . "<br>";
        }
        ?>
      </td>
    </tr>
    <tr>
      <td>Program Studi :</td>
      <td>
        <?php 
          $prodi = $_POST['prodi'];
          echo " $prodi <br>";
        ?>
      </td>
    </tr>
    <tr>
      <td>Komentar :</td>
      <td>
        <?php 
          $komentar = $_POST['komentar'];
          echo $komentar;
        ?>
      </td>
    </tr>
  </table>
</body>
</html>
