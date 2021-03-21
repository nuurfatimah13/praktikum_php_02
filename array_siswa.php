<?php

// $proses = $_POST["proses"];
// $nama_siswa = $_POST["nama"];
// $mata_kuliah = $_POST["matkul"];
// $nilai_uts = $_POST["nilai"];
// $nilai_uas = $_POST["nilai"];
// $nilai_tugas = $_POST["nilai"];

// if(!empty ($proses)){
//     echo "proses :"  .$proses;
//     echo "<br/> Nama :"  .$nama_siswa;
//     echo "<br/> Mata kuliah :"  .$mata_kuliah;
//     echo "<br/> Nilai UTS :"  .$nilai_uts;
//     echo "<br/> Nilai UAS :"  .$nilai_uas;
//     echo "<br/> Nilai Tugas Praktikum :"  .$nilai_tugas;

// }

// $nama = @$_GET["Nama_Lengkap"];
// $mata_kuliah = @$_GET["Mata_Kuliah"];
// $nilai = @$_GET["Nilai"];
// $nilai = @$_GET["Nilai"];
// $nilai = @$_GET["Nilai"];

// if($nama){
//     echo "<h2>Nama Lengkap : </h2> {$nama} <br> ";
//     echo "<h2>Mata Kuliah : </h2> {$mata_kuliah} <br> ";
//     echo "<h2>Nilai UTS : </h2> {$nilai} <br> ";
//     echo "<h2>Nilai UAS : </h2> {$nilai} <br> ";
//     echo "<h2>Nilai Praktikum : </h2> {$nilai} <br> ";
// }

// nama = $_POST["nama"];

// echo "selamat ... $nama "

// <pre>

// print_r($_REQUEST);

// </pre>



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <title>Sistem Penilaian</title>
    <style>
        
        table{
            margin: 50px;
        }
        

       
    </style>

</head>
<body>
    
<!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">Hasil Penilaian</a>
</nav>

<table class="table mt-5 " >

<?php

//fungsi nilai dari from ke sistem nilai

function grade($nilai)
{
  if($nilai <= 35 && $nilai >= 0 ) {
       $grade = "E";
  } 
  else if($nilai <= 55 && $nilai >= 36 )  {
      $grade = "D";
  } 
  else if($nilai <= 69 && $nilai >= 56 )  {
      $grade = "C";
  } 
  else if($nilai <= 84 && $nilai >= 70 )  {
      $grade = "B";
  } 
  else if($nilai <= 100 && $nilai >= 85 )  {
      $grade = "A";
    }
  else {
      $grade = "I";
  }

 return $grade;
}

?>


<?php


$nama = trim($_POST["nama"]);
$matkul = trim($_POST["matkul"]);
$nilai_uts = trim($_POST["nilai_uts"]);
$nilai_uas = trim($_POST["nilai_uas"]);
$nilai_praktikum = trim($_POST["nilai_praktikum"]);

$nilai = (30 * $nilai_uts / 100) + (35 * $nilai_uas / 100) + (35 * $nilai_praktikum / 100);
$grade = grade($nilai);



?>


<!-- belum bisa nampilkan nomer tiap nambah data -->
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Lengkap</th>
      <th scope="col">Mata Kuliah</th>
      <th scope="col">Nilai UTS</th>
      <th scope="col">Nilai UAS</th>
      <th scope="col">Nilai Praktikum</th>
      <th scope="col">Grade Nilai</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $nama ?></td>
      <td><?php echo $matkul ?></td>
      <td><?php echo $nilai_uts ?></td>
      <td><?php echo $nilai_uas ?></td>
      <td><?php echo $nilai_praktikum ?></td>
      <td><?php echo $grade ?></td>
    </tr>
   
  </tbody>

  

</table>






<br><br><br><br>

<footer class="footer-light bg-light text-black">
    <div class="container ">
        <div class="row pt-3">
            <div class="col text-center">
                <p>STT Nurul Fikri - 2020/2021</p>
            </div>
        </div>
    </div>
</footer>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>
</html>



