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

    <!-- <body onload="window.print()"> -->
    <h1><?php echo $title ?></h1>
    <h2><?php echo $subtitle ?></h2>


    <div class="col-md-12 mt-2">
        <section class="content">
            <table class="table table-hover">

                <tr>
                    <th>No</th>
                    <th>Nama Ikan</th>
                    <th>Harga (kg/pcs)</th>
                    <th>TPI</th>
                    <th>Waktu</th>


                </tr>

                <?php $no = 1;
                foreach ($datafilter as $row) : ?>



                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row->ikan; ?></td>
                        <td><?php echo $row->harga; ?></td>
                        <td><?php echo $row->tpi_id; ?></td>
                        <td><?php echo $row->tgl; ?></td>



                    <?php endforeach ?>
                    </tr>
            </table>

        </section>
    </div>


    </body>
</div>