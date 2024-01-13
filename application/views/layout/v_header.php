  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= base_url('home') ?>" class="nav-link">Home</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
    <?php if ($this->session->userdata('username')=="") { ?>
    <a href="<?= base_url('login') ?>" class="btn btn-danger">Login</a>
<?php }else{ ?>
    <a href="<?= base_url('login/logout') ?>" class="btn btn-danger">Logout</a>
<?php } ?>    
    </ul>
  </nav>