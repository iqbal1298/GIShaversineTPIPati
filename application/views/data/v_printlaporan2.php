<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $title; ?></h1>
                </div>
            </div>
        </div>
    </section>

    <body onload="window.print()">
        <h1><?php echo $title ?></h1>
        <h2><?php echo $subtitle ?></h2>



        <!-- TABEL DATA KAPAL -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title ml-2 mb-2">Data Kapal</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Kapal</th>
                                <th>Hasil Tangkapan</th>
                                <?php if ($this->session->userdata('level') == 'admin') { ?>

                                <?php } ?>
                            </tr>
                        </thead>


                        <tbody>
                            <?php foreach ($dataKapal as $dk) { ?>
                                <tr>
                                    <td>#</td>
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


    </body>
</div>