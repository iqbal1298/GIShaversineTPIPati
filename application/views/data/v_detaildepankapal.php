<br>
<br>
<section class="content">
    <div class="container-fluid">


    </div>




    <form action="<?php echo base_url(); ?>data/carikapal" method="get">
        <div class="row g-3 align-items-center">
            <div class="col-auto">

            </div>
            <div class="col-auto">
                <input type="date" class="form-control" name="dari" required>
            </div>
            <div class="col-auto">
                -
            </div>
            <div class="col-auto">
                <input type="date" class="form-control" name="ke" required>
            </div>
            <div class="col-auto">
                <button class="btn btn-primary" type="submit">Cari</button>
            </div>
        </div>
    </form>

    <!-- TABEL DATA KAPAL -->
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title ml-2 mb-2">Data Kapal</h3>
                <table class="table">
                    <thead class="thead-dark">

                        <tr>
                            <th>#</th>
                            <th>Nama Kapal</th>
                            <th>Hasil Tangkapan</th>
                            <?php if ($this->session->userdata('level') == 'admin') { ?>

                            <?php } ?>
                        </tr>
                    </thead>


                    <tbody>
                        <?php

                        $no = 1;
                        foreach ($dataKapal as $dt) {
                        ?>

                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $dt->no_kapal ?></td>
                                <td><?= $dt->pemilik ?></td>


                            <?php } ?>
                            </tr>

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
    document.getElementById("printButton").addEventListener("click", function() {
        window.print(); // Memicu pencetakan saat tombol cetak ditekan
    });
</script>