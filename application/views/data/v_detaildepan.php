<br>
<br>
<section class="content">
    <div class="container-fluid">



        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Pilih range bulan Untuk melihat data ikan per-bulan tertentu</h3>
                </div>

                <div class="card-body">
                    <form id="formIkan" action="<?php echo base_url(); ?>halaman/filter" method="POST" target="">
                        <input type="hidden" name="nilaifilter" value="2">

                        <!-- <input type="hidden" name="id_tpi" value="<?= $datatpi->id_data ?>"> -->

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="tahun1">Pilih Tahun</label>
                                    <select name="tahun1" class="form-control" required>
                                        <?php foreach ($tahun as $row) : ?>
                                            <option value="<?php echo $row->tahun ?>"><?php echo $row->tahun ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="bulanawal">Bulan Awal</label>
                                    <select name="bulanawal" class="form-control" required>
                                        <option value="1">januari</option>
                                        <option value="2">Februari</option>
                                        <option value="3">Maret</option>
                                        <option value="4">April</option>
                                        <option value="5">Mei</option>
                                        <option value="6">Juni</option>
                                        <option value="7">Juli</option>
                                        <option value="8">Agustus</option>
                                        <option value="9">September</option>
                                        <option value="10">Oktober</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="bulanakhir">Bulan Akhir</label>
                                    <select name="bulanakhir" class="form-control" required>
                                        <option value="1">januari</option>
                                        <option value="2">Februari</option>
                                        <option value="3">Maret</option>
                                        <option value="4">April</option>
                                        <option value="5">Mei</option>
                                        <option value="6">Juni</option>
                                        <option value="7">Juli</option>
                                        <option value="8">Agustus</option>
                                        <option value="9">September</option>
                                        <option value="10">Oktober</option>
                                        <option value="11">November</option>
                                        <option value="12">Desember</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Cari Data" class="btn btn-primary">
                        </div>

                    </form>
                </div>
            </div>
        </div>



        <!-- TABEL DATA IKAN -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title ml-2 mb-2">Data Ikan</h3>

                    <table class="table table-ikan">
                        <thead class="thead-dark">

                            <tr>
                                <th>No</th>
                                <th>Jenis Ikan</th>
                                <th>Harga (kg/pcs)</th>
                                <?php if ($this->session->userdata('level') == 'admin') { ?>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($data as $ikan) { ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $ikan->ikan ?></td>
                                    <td><?= $ikan->harga ?></td>

                                    <?php if ($this->session->userdata('level') == 'admin') { ?>

                                    <?php } ?>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END TABEL DATA IKAN -->



            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Pilih range bulan Untuk melihat data ikan per-bulan tertentu</h3>
                    </div>

                    <div class="card-body">
                        <form id="formKapal" action="<?php echo base_url(); ?>halaman/filterkapal" method="POST" target="">
                            <input type="hidden" name="nilaifilter" value="2">

                            <!-- <input type="hidden" name="id_tpi" value="<?= $datatpi->id_data ?>"> -->

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="tahun1">Pilih Tahun</label>
                                        <select name="tahun1" class="form-control" required>
                                            <?php foreach ($tahun as $row) : ?>
                                                <option value="<?php echo $row->tahun ?>"><?php echo $row->tahun ?></option>
                                            <?php endforeach ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="bulanawal">Bulan Awal</label>
                                        <select name="bulanawal" class="form-control" required>
                                            <option value="1">januari</option>
                                            <option value="2">Februari</option>
                                            <option value="3">Maret</option>
                                            <option value="4">April</option>
                                            <option value="5">Mei</option>
                                            <option value="6">Juni</option>
                                            <option value="7">Juli</option>
                                            <option value="8">Agustus</option>
                                            <option value="9">September</option>
                                            <option value="10">Oktober</option>
                                            <option value="11">November</option>
                                            <option value="12">Desember</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="bulanakhir">Bulan Akhir</label>
                                        <select name="bulanakhir" class="form-control" required>
                                            <option value="1">januari</option>
                                            <option value="2">Februari</option>
                                            <option value="3">Maret</option>
                                            <option value="4">April</option>
                                            <option value="5">Mei</option>
                                            <option value="6">Juni</option>
                                            <option value="7">Juli</option>
                                            <option value="8">Agustus</option>
                                            <option value="9">September</option>
                                            <option value="10">Oktober</option>
                                            <option value="11">November</option>
                                            <option value="12">Desember</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Cari Data" class="btn btn-primary">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- TABEL DATA KAPAL -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title ml-2 mb-2">Data Kapal</h3>
                        <table class="table table-kapal">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kapal</th>
                                    <th>Hasil Tangkapan</th>
                                    <?php if ($this->session->userdata('level') == 'admin') { ?>

                                    <?php } ?>
                                </tr>
                            </thead>


                            <tbody>
                                <?php $no = 1;
                                foreach ($dataKapal as $dk) { ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $dk->no_kapal ?></td>
                                        <td><?= $dk->pemilik ?></td>

                                        <?php if ($this->session->userdata('level') == 'admin') { ?>
                                            <!-- Jika diperlukan, tambahkan kolom admin di sini -->
                                        <?php } ?>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>


                <!-- END TABEL DATA KAPAL -->
            </div>

        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        $('#formIkan').submit(function(e) {
            e.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: formData,
                success: function(response) {
                    $('.table-ikan tbody').html(response);
                }
            });
        });

        $('#formKapal').submit(function(e) {
            e.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: formData,
                success: function(response) {
                    $('.table-kapal tbody').html(response);
                }
            });
        });
    })
</script>