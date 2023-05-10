
<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Botstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>
    <title>Tiketkita</title>
</head>
<body id="home">
    <!--Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Tiketkita</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#destinasi">Destinasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#harga">Harga</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#pesan">Beli Tiket</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
<!--Akhir Navbar-->
<!--Jumbotron-->
<div class="jumbotron text-center mb-3">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br><br>
  <h1 class="display-4 ">Hello, Treveller!</h1>
  <p class="lead">Liburan Lebih Mudah dengan tiketkita</p>
  <hr class="my-4">
  <p>Nikmati Berbagai Kemudahan Dalam Memesan Tiket Liburan Anda Bersama Keluarga Anda</p>
  <a class="btn btn-primary btn-lg" href="#destinasi" role="button">Destinasi</a>
</div>
<!--Akhir Jumbotron-->
<!--Awal destinasi-->

    <section id="destinasi">
    <br>
    <br>
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>Destinasi</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-4 mb-3">
                <div class="card">
                <iframe src="https://www.youtube.com/embed/N4TGxx0cmRM" title="PULAU PERAK KEPULAUAN SERIBU - Cinematic Travel Video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <div class="card-body">
                  <H3>Trip Pulau Seribu 2 Hari 1 Malam</H3>
                <p class="card-text">Dewasa: Rp.300.000</p>
                <p class="card-text">Anak-Anak: Rp.150.000</p>
              </div>
            </div>
          </div>

                <div class="col-4 mb-3">
                <div class="card">
                <iframe src="https://www.youtube.com/embed/EeJPFhX41ho" title="One day at SEA WORLD ANCOL | Cinematic Video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <div class="card-body">
                  <H3>Tiket Seaworld Ancol</H3>
                <p class="card-text">Dewasa: Rp.200.000</p>
                <p class="card-text">Anak-Anak: Rp.100.000</p>
              </div>
            </div>
          </div>
          
                <div class="col-4 mb-3">
                <div class="card">
                <iframe src="https://www.youtube.com/embed/nLcn3ME9xlw" title="Ancol - Indonesia - by Drone [4K]" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              <div class="card-body">
                  <H3>Tiket Ancol</H3>
                <p class="card-text">Dewasa: Rp.50.000</p>
                <p class="card-text">Anak-Anak: Rp.25.000</p>
              </div>
            </div>
          </div>
                </div>
            </div>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f3f4f5" fill-opacity="1" d="M0,192L34.3,160C68.6,128,137,64,206,37.3C274.3,11,343,21,411,58.7C480,96,549,160,617,192C685.7,224,754,224,823,208C891.4,192,960,160,1029,128C1097.1,96,1166,64,1234,69.3C1302.9,75,1371,117,1406,138.7L1440,160L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z"></path></svg>
    <!--Akhir Destinasi-->
    <!--Daftar Harga-->
    <section id="harga">
    <br>
    <br>
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>Daftar Harga</h2>
                </div>
            </div>
            
            <?php 
            $host='localhost';
            $user='root';
            $pass='';
            $conn=mysqli_connect($host,$user,$pass,'tiket');
            $queri="select * from destinasi";
            $destinasi=mysqli_query($conn,$queri);
            echo"
            <table class='table'>
  <thead>
    <tr>
      <th scope='col'>No</th>
      <th scope='col'>Destinasi</th>
      
      <th scope='col'>Harga Dewasa</th>
    </tr>
  </thead>";
  $nomer=1;
  while($data =mysqli_fetch_array($destinasi)){

  echo"<tbody>
    <tr>
      <th scope='row'>$nomer</th>
      <td>$data[1]</td>
      <td>$data[3]</td>
    </tr>";
    $nomer++;
  }
  
  echo"
  </tbody>
</table>";
  ?>
  </section>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f3f4f5" fill-opacity="1" d="M0,256L34.3,234.7C68.6,213,137,171,206,160C274.3,149,343,171,411,149.3C480,128,549,64,617,74.7C685.7,85,754,171,823,176C891.4,181,960,107,1029,106.7C1097.1,107,1166,181,1234,197.3C1302.9,213,1371,171,1406,149.3L1440,128L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
    <!--Akhir Daftar Harga-->
    <!--Pemesanan-->
    <section id="pesan">
        

      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h2>Pesan Tiket</h2>
          </div>
        </div>
        <form  action="cetak.php" method="POST" >
        <div class="row justify-content-center mb-3">
            <div class="col-md-6">
        <div class="mb-3">
              <label for="name" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="name" aria-describedby="name" name="nama" />
            </div>
            <div class="mb-3">
              <label for="identitas" class="form-label">Nomer Identitas</label>
              <input type="text" class="form-control" id="identitas" aria-describedby="identitas" name="identitas" />
            </div>
            <div class="mb-3">
              <label for="hp" class="form-label">Nomer HP</label>
              <input type="text" class="form-control" id="hp" aria-describedby="hp" name="hp" />
            </div>
            <div class="mb-3">
      <label for="pilih" class="form-label">Tempat Wisata</label>
      
      <select onchange="harga()" name="destinasi" class="form-select form-control" id="pilih" >
          <option value="">--PILIH--</option>
          <option value="pulau">Trip Pulau Seribu</option>
          <option value="seaworld">Tiket Seaworld</option>
          <option value="ancol">Tiket Ancol</option>
          
      </select>
    
    </div>
    
    <div class="mb-3">
              <label for="tgl" class="form-label">Tanggal Kunjunga</label>
              <input type="date" class="form-control" id="tgl" aria-describedby="tgl" name="tgl" />
            </div>
            <div class="mb-3">
              <label for="dewasa" class="form-label">Pengunjung Dewasa</label>
              <input type="text" class="form-control" id="dewasa" aria-describedby="dewasa" name="dewasa" id="dewasa" />
            </div>
            <div class="mb-3">
              <label for="anak" class="form-label">Pengunjung Anak-Anak</label>
              <p><small>usia dibawah 12 tahun</small></p>
              <input type="text" class="form-control" id="anak" aria-describedby="anak" name="anak" id="anak" />
            </div>
            <div class="mb-3">
            
              <label for="hargadewasa" class="form-label">Harga Tiket Dewasa</label>
              <input class="form-control" aria-describedby="hardewasa" name="hardewasa" id="harga_tiket"/>
        
            </div>
            <div class="mb-3">
            
              <label for="hargaAnak" class="form-label">Harga Tiket Anak</label>
              <input class="form-control" aria-describedby="haranak" name="haranak" id="harga_anak"/>
        
            </div>
            
            <div class="mb-3">
              <label for="total" class="form-label">Total Harga</label>
              <input  type="text" class="form-control" aria-describedby="jumlah" name="jumlah" id="total_harga"/>
   
            </div>
 
            <div class="form-check mb-3">
  <input class="form-check-input" type="checkbox" value="" id="check" name="status" required>
  <label class="form-check-label" for="check">
    <p>Saya dan/ rombongan telah membaca, memahami, dan setuju berdasarkan syarat ketentuan yang telah di tetapkan</p>
  </label>
</div>

        <div class="text-center">
            <button onclick="harga()" type="button" class="btn btn-success " name="hitung">Hitung Total Bayar</button>
            <button type="submit" class="btn btn-primary" name="submit">Pesan Tiket</button>
            <button type="submit" class="btn btn-danger" name="Cancel">Cancel</button>
    </div>
      </div>
      </div>
      </form>
        </section>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0d6efd" fill-opacity="1" d="M0,256L34.3,234.7C68.6,213,137,171,206,160C274.3,149,343,171,411,149.3C480,128,549,64,617,74.7C685.7,85,754,171,823,176C891.4,181,960,107,1029,106.7C1097.1,107,1166,181,1234,197.3C1302.9,213,1371,171,1406,149.3L1440,128L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
    <!--Akhir Pemesanan-->
    
        
    <!-- footer -->
    <footer class="bg-primary text-white text-center p-3">
      <p>Created by <a href="https://www.instagram.com/pradikar04/" class="text-white fw-bold">Pradika Rahmawan</a></p>
    </footer>
    <!-- akhir footer -->
    <script type="text/javascript">
   
      function harga() {
        var data = document.getElementById("pilih").value;
          var dewasa =Number(document.getElementById("dewasa").value);
          var anak = Number(document.getElementById("anak").value);
          if (data == "pulau") {
              var harga_tiket = 300000;
              var harga_anak = 300000 * 50 / 100;
          document.getElementById("harga_anak").value = harga_anak;
              document.getElementById("harga_tiket").value = harga_tiket;    
          } else if (data == "seaworld") {       
              var harga_tiket = 200000;
              var harga_anak = 200000 * 50 / 100;
          document.getElementById("harga_anak").value = harga_anak;
              document.getElementById("harga_tiket").value = harga_tiket;
          } else if (data == "ancol") {
              var harga_tiket = 50000;
              var harga_anak = 50000 * 50 / 100;
          document.getElementById("harga_anak").value = harga_anak;
              document.getElementById("harga_tiket").value = harga_tiket;
          } else {
              var harga_tiket = 0;
              document.getElementById("harga_tiket").value = harga_tiket;
          }
         
          var total = (dewasa * harga_tiket) + (anak * (harga_tiket * 50 / 100));
          document.getElementById("total_harga").value = Number(total);
          
      }    
  </script>
       
</body>
</html>