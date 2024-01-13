<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"><?php if ($this->session->userdata('level') == 'admin') { ?> -->
                <!-- <a class="btn btn-primary" href="<?= base_url('data/tambahikan/') ?>"><i class="fa fa-plus"></i> Tambah</a> -->
            <?php } ?>
            </h3>
            </div>
        </div>
    </div>
    <div class="card-body table-responsive p-0">
    </div>
    <div class="card-body table-responsive p-0">
        <?php
        if ($this->session->flashdata('pesan')) {
            echo '<div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><i class="icon fas fa-check"></i>';
            echo $this->session->flashdata('pesan');
            echo '</div>';
        }
        ?>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form filter by Bulan</h3>
                </div>

                <div class="card-body">
                    <form action="<?php echo base_url(); ?>data/filter" method="POST" target="_blank">
                        <input type="hidden" name="nilaifilter" value="2">

                        <div class="form-group">
                            <label for="tahun1">Pilih Tahun</label>
                            <select name="tahun1" class="form-control" required>
                                <?php foreach ($tahun as $row) : ?>
                                    <option value="<?php echo $row->tahun ?>"><?php echo $row->tahun ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>


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

                        <div class="form-group">
                            <input type="submit" value="Print" class="btn btn-primary">
                        </div>

                    </form>
                </div>
            </div>
        </div>


        <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Ikan</th>
                    <th>Harga (kg/pcs)</th>
                    <th>Kode Lokasi TPI</th>
                    <th>Waktu</th>

                    <?php if ($this->session->userdata('level') == 'admin') { ?>
                        <th colspan='2'>Action</th>
                    <?php } ?>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($data as $key => $value) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $value->ikan ?></td>
                        <td><?= $value->harga ?></td>
                        <td><?= $value->nama_tpi ?></td>
                        <td><?= $value->tgl ?></td>

                        <?php if ($this->session->userdata('level') == 'admin') { ?>
                            <td>
                                <a href="<?= base_url('data/editIkan/' . $value->id) ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"> Edit</i>
                            </td>
                            <td>
                                <a href="<?= base_url('data/hapusIkan/' . $value->id) ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt" onClick="return confirm('Apakah Data Ingin Dihapus?')"> Hapus</i>
                            </td>
                        <?php } ?>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</section>
</div>