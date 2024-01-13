<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a class="d-block">
          <?php if ($this->session->userdata('username') == "") { ?>
          <?php } else { ?>
            <?= $this->session->userdata('nama_user') ?>
          <?php } ?></a>
      </div>
    </div>
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="<?= base_url('home') ?>" class="nav-link">
            <i class="nav-icon fas fa-globe-asia"></i>
            <p>
              Peta SIG TPI
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('data') ?>" class="nav-link">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Data TPI
            </p>
          </a>
        </li>
        <!-- <li class="nav-item">
          <a href="<?= base_url('data/print') ?>" class="nav-link">
            <i class="nav-icon fas fa-print"></i>
            <p>
              Print
            </p>
          </a>
        </li> -->
        <!-- <li class="nav-item">
          <a href="<?= base_url('data/excel') ?>" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Excel
            </p>
          </a>
        </li> -->

        <li class="nav-item">
          <a href="<?= base_url('data/kapal') ?>" class="nav-link">
            <i class="nav-icon fas fa-ship"></i>
            <p>
              Data Kapal
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('data/ikan') ?>" class="nav-link">
            <i class="nav-icon fas fa-fish"></i>
            <p>
              Data Ikan
            </p>
          </a>
        </li>
        <!-- <li class="nav-item">
          <a href="<?= base_url('data/report') ?>" class="nav-link">
            <i class="nav-icon fas fa-fish"></i>
            <p>
              Report Ikan
            </p>
          </a>
        </li> -->

      </ul>
    </nav>
  </div>
</aside>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><?= $title ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('home') ?>">Home</a></li>
            <li class="breadcrumb-item active"><?= $title ?></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->