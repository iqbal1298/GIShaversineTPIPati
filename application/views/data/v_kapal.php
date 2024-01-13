<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><?php if ($this->session->userdata('level') == 'admin') { ?>
                <a class="btn btn-primary" href="<?= base_url('data/inputkapal/') ?>"><i class="fa fa-plus"></i> Tambah</a>
              <?php } ?>
            </h3>
          </div>
        </div>
      </div>
      <div class="card-body table-responsive p-0">
      </div>
      <div class="card-body table-responsive p-0">
        <?php
        if ($this->session->flashdata('message')) {

          echo $this->session->flashdata('message');
          echo '</div>';
        }
        ?>

        <div class="card-body table-responsive p-0">
          <?php
          if ($this->session->flashdata('pesan')) {
            echo '<div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><i class="icon fas fa-check"></i>';
            echo $this->session->flashdata('pesan');
            echo '</div>';
          }
          ?>



          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nama Kapal</th>
                <th>Hasil Tangkapan</th>
                <th>Kode Lokasi TPI</th>
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
                  <td><?= $value->no_kapal ?></td>
                  <td><?= $value->pemilik ?></td>
                  <td><?= $value->nama_tpi ?></td>

                  <?php if ($this->session->userdata('level') == 'admin') { ?>
                    <td>
                      <a href="<?= base_url('data/editkapal/' . $value->id) ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"> Edit</i>
                    </td>
                    <td>
                      <a href="<?= base_url('data/hapuskapal/' . $value->id) ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt" onClick="return confirm('Apakah Data Ingin Dihapus?')"> Hapus</i>
                    </td>
                  <?php } ?>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
</section>
</div>