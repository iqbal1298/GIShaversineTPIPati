<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

  <title>SIG Data TPI</title>
  <!--

TemplateMo 548 Training Studio

https://templatemo.com/tm-548-training-studio

-->
  <!-- Additional CSS Files -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

  <link rel="stylesheet" href="assets/css/templatemo-training-studio.css">

</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->


  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">SIG <em>TPI Pati</em></a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="#top" class="active">Beranda</a></li>
              <li class="scroll-to-section"><a href="#latar-belakang">Latar Belakang</a></li>
              <li class="scroll-to-section"><a href="#peta-digital">Peta</a></li>
              <li class="scroll-to-section"><a href="#data">Data</a></li>
              <li class="scroll-to-section"><a href="<?= base_url('login') ?>" class="btn btn-primary">Login Admin</a></li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  <div class="main-banner" id="top">
    <img src="assets/images/tp.png" />

    <div class="video-overlay header-text">
      <div class="caption">
        <h6>SISTEM INFORMASI GEOGRAFIS Pemetaan</h6>
        <h2>Tempat Pelelangan <em> Ikan di Kabupaten Pati</em></h2>
        <img src="assets/images/iwak.png" width="170" height="167" alt="pemalag"><br><br><br>
        <div class="main-button scroll-to-section">
          <a href="#latar-belakang">TAMPILKAN</a>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Main Banner Area End ***** -->

  <!-- ***** Latar Belakang Start ***** -->
  <section class="section" id="latar-belakang">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="section-heading">
            <h2>Latar <em>Belakang</em></h2>
            <img src="assets/images/line-dec.png" alt="waves">
            <p>Dinas Kelautan dan Perikanan (DKP) Kabupaten Pati mempunyai tugas melaksanakan pengelolaan sumber daya krlautan dan perikanan dan DKP mengelola semua data ikan dan data kapal yang ada di kabupaten Pati. Data yang di input seperti jenis ikan, harga ikan (kg/pcs), nama kapal, dan hasil tangkapan kapal. website ini dibuat agar masyarakat yang ada di kabupaten Pati atau masyarakat di luar kabupaten Pati mengetahui harga-harga ikan yang murah dan terlengkap di Tempat Pelelangan Ikan , kemudian masyarakat atau pemilik kapal mengetahui kapalnya ada di TPI mana, dan masyarakat tahu berapa jarak titik pusat yang ada di Alun-alun Pati ke titik salah satu TPI. </p>
          </div>
        </div>
  </section>
  <!-- ***** Latar Belakang End ***** -->

  <!-- ***** Peta Digital Start ***** -->
  <section class="section" id="peta-digital">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="section-heading">
            <h2>Peta <em>Digital</em></h2>
            <img src="assets/images/line-dec.png" alt="">
            <p>Peta digital ini dibuat dengan menggunakan leafletjs dengan menggunakan titik koordinat berdasarkan latitude dan longitude,
              pada titik koordinat terdapat nama Tempat Pelelangan Ikan dan data ikan yang ada di Kabupaten Pati.
          </div>
        </div>
        <!-- 
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <select class='form-control' id="bloktempat1">
                <?php foreach ($opsi as $tampil) : ?>
                  <option value="<?php echo $tampil['latitude'] . '|' . $tampil['longitude']; ?>"><?php echo $tampil['nama_b']; ?></option>
                <?php endforeach; ?>

              </select>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <select class='form-control' id="bloktempat2">
                <?php foreach ($opsi as $tampil) : ?>
                  <option value="<?php echo $tampil['latitude'] . '|' . $tampil['longitude']; ?>"><?php echo $tampil['nama_b']; ?></option>
                <?php endforeach; ?>

              </select>
            </div>
          </div> -->



        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label for="bloktempat1">Pilih Lokasi 1</label>
              <?php foreach ($opsi as $index => $tampil) : ?>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="bloktempat1" id="bloktempat1_<?php echo $index; ?>" value="<?php echo $tampil['latitude'] . '|' . $tampil['longitude']; ?>">
                  <label class="form-check-label" for="bloktempat1_<?php echo $index; ?>">
                    <?php echo $tampil['nama_b']; ?>
                  </label>

                </div>
              <?php endforeach; ?>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label for="bloktempat1">Pilih Lokasi 2</label>
              <?php foreach ($opsi as $tampil) : ?>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="bloktempat2" id="bloktempat2_<?php echo $index; ?>" value="<?php echo $tampil['latitude'] . '|' . $tampil['longitude']; ?>">
                  <label class="form-check-label" for="bloktempat2_<?php echo $index; ?>">
                    <?php echo $tampil['nama_b']; ?>
                  </label>

                </div>
              <?php endforeach; ?>
            </div>
          </div>



          <div class="col-sm-6">
            <div class="form-group">
              <input type='text' class="form-control" id="haversine" disabled>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <input type='text' class="form-control" id="blokhasil" disabled>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <form id="formHitungJarak">
                <button type='submit' class="btn btn-block btn-primary">Hitung
                  Jarak</button>
              </form>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <form id="formReset">
                <button type='button' class="btn btn-block btn-danger">Reset</button>
            </div>
          </div>
        </div>
      </div>
      <div class="section">

        <style>
          #map {
            border: 5px solid #117a8b;
            border-radius: 10px;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.5);
            height: 500px;
          }
        </style>
        <div id="map" style="height: 500px;"></div>



        <script>
          var map = L.map('map').setView([-6.989527, 110.423858], 9);
          var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
          }).addTo(map);

          var icon_data = L.icon({
            iconUrl: '<?= base_url('assets/icon/data.png') ?>',
            iconSize: [25, 41]
          });

          $query = "SELECT * FROM tbl_data";

          <?php foreach ($data as $key => $value) { ?>
            var marker = L.marker([<?= $value->latitude ?>, <?= $value->longitude ?>], {
              icon: icon_data
            }).addTo(map);




            var popupContent = "<b>TPI : <?php echo $value->nama_b; ?></b><br/>" +
              "Kabupaten : <?php echo $value->kabupaten; ?></br>" +
              "Kecamatan : <?php echo $value->kecamatan; ?> </br>" +
              "Desa : <?php echo $value->desa; ?> </br>" +
              "Pemanfaatannya : <?php echo $value->manfaat; ?> </br>" +
              "DATA IKAN : </br>";


            <?php foreach ($value->ikan as $fish) { ?>
              popupContent += "- <?php echo $fish['ikan']; ?> <?php echo $fish['harga']; ?></br>";
            <?php } ?>

            popupContent += "</br>" +
              "DATA KAPAL : </br>";

            <?php foreach ($value->kapal as $ship) { ?>
              popupContent += "- Kapal: <?php echo $ship['no_kapal']; ?>, Muatan: <?php echo $ship['pemilik']; ?></br>";
            <?php } ?>




            marker.bindPopup(popupContent);

          <?php } ?>
        </script>




        <script>
          document.getElementById('formHitungJarak').addEventListener('submit', function(e) {
            e.preventDefault();
            hitungJarak();
          });



          function hitungJarak() {
            var lokasi1 = document.querySelector('input[name="bloktempat1"]:checked');
            var lokasi2 = document.querySelector('input[name="bloktempat2"]:checked');

            if (lokasi1 !== null && lokasi2 !== null) {
              lokasi1 = lokasi1.value;
              lokasi2 = lokasi2.value;


              $.ajax({
                type: "POST",
                url: "<?php echo base_url('home/hitungJarak'); ?>",
                data: {
                  'bloktempat1': lokasi1,
                  'bloktempat2': lokasi2
                },


                success: function(response) {
                  var result = JSON.parse(response);
                  if (result.status === 'success') {
                    document.getElementById('haversine').value = 'Haversine: ' + result.distance.toFixed(2) + ' KM';

                    var latlng1 = lokasi1.split('|');
                    var latlng2 = lokasi2.split('|');

                    var latlngs = [
                      [parseFloat(latlng1[0]), parseFloat(latlng1[1])],
                      [parseFloat(latlng2[0]), parseFloat(latlng2[1])]

                    ];

                    polyline = L.polyline(latlngs, {
                      color: 'red'
                    }).addTo(map);


                    if (typeof routeControl !== 'undefined') {
                      map.removeControl(routeControl);
                    }

                    routeControl = L.Routing.control({
                      waypoints: [
                        L.latLng(parseFloat(latlng1[0]), parseFloat(latlng1[1])),
                        L.latLng(parseFloat(latlng2[0]), parseFloat(latlng2[1]))
                      ],
                      routeWhileDragging: true,
                      lineOptions: {
                        styles: [{
                          color: 'green',
                          opacity: 0.8,
                          weight: 5
                        }]
                      },

                    }).addTo(map);

                    // var jarakkm = result.distance;
                    // document.getElementById('blokhasil').value = 'Jaraknya adalah: ' + jarakkm.toFixed(2) + ' KM';

                    routeControl.on('routesfound', function(e) {
                      var routes = e.routes;
                      var summary = routes[0].summary;
                      document.getElementById('blokhasil').value = 'Jaraknya adalah: ' + (summary.totalDistance / 1000).toFixed(2) + ' KM';
                    });


                    // map.fitBounds(polyline.getBounds());


                  } else {
                    alert(result.message);
                  }
                }
              });

            } else {
              alert("harap pilih Lokasi!");
            }
          }
          document.getElementById('formReset').addEventListener('click', function(e) {
            e.preventDefault();

            if (typeof polyline !== 'undefined') {
              map.removeLayer(polyline);
            }
            if (typeof routeControl !== 'undefined') {
              map.removeControl(routeControl);
            }

            document.getElementById('haversine').value = '';
            document.getElementById('blokhasil').value = '';
            document.getElementById('bloktempat1').selectedIndex = 0;
            document.getElementById('bloktempat2').selectedIndex = 0;


          });
        </script>




      </div>
    </div>
  </section>
  <!-- ***** Peta Digital End ***** -->

  <!-- ***** Sumber Data Start ***** -->
  <section class="section" id="data">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="section-heading">
            <h2>Sumber <em>Data</em></h2>
            <img src="assets/images/line-dec.png" alt="waves">
            <p>Data yang disajikan disini ambil dari Penelitian di Dinas Kelautan dan Perikanan TPI di Kabupaten Pati berupa data Tempat Pelelangan Ikan, data ikan, dan data kapal.</p>
          </div>
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Data TPI</h3>
                  <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <div class="input-group-append">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-header -->
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nama</th>
                      <th>Kabupaten</th>
                      <th>Kecamatan</th>
                      <th>Pemanfaatannya</th>
                      <!-- <?php if ($this->session->userdata('level') == 'admin') { ?>
                        <th colspan='2'>Action</th>
                      <?php } ?> -->
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($data as $key => $value) { ?>
                      <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $value->nama_b ?></td>
                        <td><?= $value->kabupaten ?></td>
                        <td><?= $value->kecamatan ?></td>
                        <td><?= $value->manfaat ?></td>

                        <td>
                          <a href="<?= base_url('halaman/detaildepan/' . $value->id_data) ?>" class="btn btn-success btn-sm"><i class="fas fa-eye"> Detail</i>
                        </td>



                      </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
  </section>
  </div>
  <!-- ***** Sumber Data End ***** -->

  <!-- jQuery -->
  <script src="assets/js/jquery-2.1.0.min.js"></script>

  <!-- Bootstrap -->
  <script src="assets/js/popper.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- Plugins -->
  <script src="assets/js/scrollreveal.min.js"></script>
  <script src="assets/js/waypoints.min.js"></script>
  <script src="assets/js/jquery.counterup.min.js"></script>
  <script src="assets/js/imgfix.min.js"></script>
  <script src="assets/js/mixitup.js"></script>
  <script src="assets/js/accordions.js"></script>

  <!-- Global Init -->
  <script src="assets/js/custom.js"></script>

</body>

</html>