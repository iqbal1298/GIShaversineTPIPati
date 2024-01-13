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
            //validasi data tidak boleh kosong
            echo validation_errors('<div class="alert alert-danger alert-dismissable">
                   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><i class="icon fas fa-ban"></i>', '</div>');
            //Notif Data  disimpan
            if ($this->session->flashdata('pesan')) {
              echo '<div class="alert alert-success alert-dismissable">
                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><i class="icon fas fa-check">';
              echo $this->session->flashdata('pesan');
              echo '</div>';
            }
            echo form_open('data/tambahikan');
            ?>




            <!-- <div class="form-group">
              <label>Tanggal</label>
              <input name="tgl" id="tgl" placeholder="Format: tgl-bl-tahun" value="<?= set_value('tgl', date('d-m-Y')); ?>" class="form-control" readonly>
            </div> -->

            <div class="form-group">
              <label>Tanggal</label>
              <input type="date" class="form-control" name="tgl" id="tgl" value="" class="form-control">
            </div>


            <div class="form-group">
              <label>Jenis Ikan</label>
              <input name="ikan" placeholder="Masukan Jenis Ikan" value="<?= set_value('ikan') ?>" class="form-control" id="ikan" required />
            </div>

            <div class="form-group">
              <label>Harga(kg/pcs)</label>
              <input name="harga" placeholder="Masukan harga" value="<?= set_value('harga') ?>" class="form-control" id="harga" required />
            </div>

            <div class="form-group">
              <label>TPI</label>
              <?php foreach ($data_tpi as $tpi) { ?>
                <label>
                  <input type="radio" name="tpi" value="<?= $tpi->nama_b ?>" required>
                  <?= $tpi->nama_b ?>
                </label>
              <?php } ?>
            </div>

            <!-- Tambahkan tombol submit untuk mengirimkan form -->
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Tambahkan Data Ikan</button>
            </div>



            <!--                      
                    <div class="form-group">
                        <label></label>
                        <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-sm btn-warning">Reset</button>
                    </div> -->

            <?php echo form_close(); ?>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>