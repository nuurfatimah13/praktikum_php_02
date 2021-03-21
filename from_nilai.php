<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <title>Sistem Penilaian</title>
    <style>
        h4{
            margin: 10px;
            padding: 30px;
        }
        form{
            margin: 50px;
        }
        

       
    </style>

</head>
<body>
    
<!-- Image and text -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">Form Penilaian</a>
</nav>



<form action="array_siswa.php" method="POST">
  <div class="form-group row">
    <label for="" class="col-sm-2 col-form-label">Nama Lengkap</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="" name="nama">
    </div>
  </div>
  <div class="form-group row">
    <label for="" class="col-sm-2 col-form-label">Mata Kuliah</label>
    <div class="col-sm-10">
    <select class="form-control" id="exampleFormControlSelect1" cols="60" name="matkul">
        <option></option>
        <option value="UI/UX">UI/UX</option>
        <option value="PPKN">PPKN</option>
        <option value="Jaringan Komputer">Jaringan Komputer</option>
        <option value="Statistika dan Probabilitas">Statistika dan Probabilitas</option>
        <option value="Pemrograman Web Lanjutan">Pemrograman Web Lanjutan</option>
    </select>
    </div>
  </div>
  
  <div class="form-group row">
    <label for="" class="col-sm-2 col-form-label">Nilai UTS</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="" name="nilai_uts">
    </div>
  </div>
  <div class="form-group row">
    <label for="" class="col-sm-2 col-form-label">Nilai UAS</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="" name="nilai_uas">
    </div>
  </div>
  <div class="form-group row">
    <label for="" class="col-sm-2 col-form-label">Nilai Tugas Praktikum</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="" name="nilai_praktikum">
    </div>
  </div>
  <button type="submit" class="btn btn-primary  btn-block">Simpan</button>

</form>









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