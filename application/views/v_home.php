<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="callout callout-info">


                <!-- PAKAI OPTION -->

                <!-- <h5><i class="fas fa-info"></i> Peta Pati</h5> -->
                <!-- <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <select class='form-control' id="bloktempat1">
                                <?php foreach ($opsi as $tampil) { ?>
                                    <option value="<?php echo $tampil['latitude'] . '|' . $tampil['longitude']; ?>"><?php echo $tampil['nama_b']; ?></option>
                                <?php } ?>

                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <select class='form-control' id="bloktempat2">
                                <?php foreach ($opsi as $tampil) { ?>
                                    <option value="<?php echo $tampil['latitude'] . '|' . $tampil['longitude']; ?>"><?php echo $tampil['nama_b']; ?></option>
                                <?php } ?>

                            </select>
                        </div>
                    </div> -->





                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="bloktempat1">Pilih Lokasi 1</label>
                            <?php foreach ($opsi as $index => $tampil) { ?>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="bloktempat1" id="bloktempat1_<?php echo $index; ?>" value="<?php echo $tampil['latitude'] . '|' . $tampil['longitude']; ?>">
                                    <label class="form-check-label" for="bloktempat1_<?php echo $index; ?>">
                                        <?php echo $tampil['nama_b']; ?>
                                    </label>

                                </div>
                            <?php } ?>

                            <!-- <div class="form-check">
                                <input class="form-check-input" type="radio" name="bloktempat1" id="bloktempat1_user" value="<?php echo isset($userLatitude) && isset($userLongitude) ? $userLatitude . '|' . $userLongitude : ''; ?>">
                                <label class="form-check-label" for="bloktempat1_user">
                                    Lokasi Saya
                                </label>
                            </div> -->
                        </div>
                    </div>


                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="bloktempat1">Pilih Lokasi 2</label>
                            <?php foreach ($opsi as $tampil) { ?>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="bloktempat2" id="bloktempat2_<?php echo $index; ?>" value="<?php echo $tampil['latitude'] . '|' . $tampil['longitude']; ?>">
                                    <label class="form-check-label" for="bloktempat2_<?php echo $index; ?>">
                                        <?php echo $tampil['nama_b']; ?>
                                    </label>

                                </div>
                            <?php } ?>

                            <!-- <div class="form-check">
                                <input class="form-check-input" type="radio" name="bloktempat2" id="bloktempat2_user" value="<?php echo isset($userLatitude) && isset($userLongitude) ? $userLatitude . '|' . $userLongitude : ''; ?>">
                                <label class="form-check-label" for="bloktempat2_user">
                                    Lokasi Saya
                                </label>
                            </div> -->


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
                                </button>
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
                    iconUrl: '<?php echo base_url('assets/icon/data.png'); ?>',
                    iconSize: [25, 41]
                });

                $query = "SELECT * FROM tbl_data";

                <?php foreach ($data as $key => $value) { ?>
                    var marker = L.marker([<?php echo $value->latitude; ?>, <?php echo $value->longitude; ?>], {
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




                //HAVERSINE
                function hitungJarak() {
                    var lokasi1 = document.querySelector('input[name="bloktempat1"]:checked');
                    var lokasi2 = document.querySelector('input[name="bloktempat2"]:checked');

                    if (lokasi1 !== null && lokasi2 !== null) {
                        lokasi1 = lokasi1.value;
                        lokasi2 = lokasi2.value;



                        //MEMANGGIL FUNGSI HITUNG JARAK DI CONTROLLER HOME
                        $.ajax({
                            type: "POST",
                            url: "<?php echo base_url('home/hitungJarak'); ?>",
                            data: {
                                'bloktempat1': lokasi1,
                                'bloktempat2': lokasi2
                            },

                            //MENAMPILKAN HASIL HAVERSINE
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



                                    // PERHITUNNGAN RUTE
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


                                    // Menampilkan hasil perhitungan jarak
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



            <!-- 
 <script>
                var userLatitude;
                var userLongitude;

                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(showPosition);
                } else {
                    alert("Geolocation tidak support untuk browser yang anda gunakan!");
                }

                function showPosition(position) {
                    userLatitude = position.coords.latitude;
                    userLongitude = position.coords.longitude;

                    var userMarker = L.marker([userLatitude, userLongitude]).addTo(map);
                    userMarker.bindPopup("Lokasi Anda Saat ini").openPopup();

                    document.getElementById('bloktempat1.user').value = userLatitude + '|' + userLongitude;
                    document.getElementById('bloktempat2.user').value = userLatitude + '|' + userLongitude;
                }
            </script> -->