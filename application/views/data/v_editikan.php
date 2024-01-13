<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Data</h3>
                    </div>
                    <div class="card-body">
                        <?php
                        //Validasi data tidak boleh kosong
                        echo validation_errors('<div class="alert alert-danger alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><i class="icon fas fa-ban"></i>', '</div>');

                        //Notif Data berhasil disimpan
                        if ($this->session->flashdata('pesan')) {
                            echo '<div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><i class="icon fas fa-check"></i>';
                            echo $this->session->flashdata('pesan');
                            echo '</div>';
                        }
                        echo form_open('data/editIkan/' . $data->id);
                        ?>

                        <div class="form-group">
                            <label>Nama/Jenis Ikan</label>
                            <input name="ikan" placeholder="Nama Ikan" value="<?= $data->ikan ?>" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label>Harga (kg/pcs)</label>
                            <input name="harga" placeholder="Harga Ikan" value="<?= $data->harga ?>" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label>TPI</label>
                            <?php foreach ($data_tpi as $tpi) { ?>
                                <label>
                                    <input type="radio" name="tpi_id" value="<?= $tpi->id_data ?>" required>
                                    <?= $tpi->nama_b ?>
                                </label>
                            <?php } ?>
                        </div>

                        <div class="form-group">
                            <label></label>
                            <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                            <button type="reset" class="btn btn-sm btn-warning">Reset</button>
                        </div>
                        <?php echo form_close(); ?>

                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Lokasi</h3>
                    </div>
                    <div class="card-body">

                        <div id="map" style="height: 500px;"></div>

                    </div>
                </div>
            </div>

            <script>
                var map = L.map('map').setView([-6.989527, 110.423858], 12);

                var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 19,
                    attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                }).addTo(map);

                var marker = new L.marker([-6.989527, 110.423858], {
                    draggable: true,
                    autoPan: true
                }).addTo(map);

                marker.on('dragend', function(event) {
                    var position = marker.getLatLng();
                    marker.setLatLng(position, {
                        draggable: 'true'
                    }).bindPopup(position).update();
                    $("#Latitude").val(position.lat);
                    $("#Longitude").val(position.lng).keyup();
                }).addTo(map);

                $("#Latitude, #Longitude").change(function() {
                    var position = [parseInt($("#Latitude").val()), parseInt($("#Longitude").val())];
                    marker.setLatLng(position, {
                        draggable: 'true'
                    }).bindPopup(position).update();
                    mymap.panTo(position);
                }).addTo(map);
                mymap.addLayer(marker);
            </script>

</section>
</div>