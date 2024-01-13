<?php 

header("Content-type: application/octet-stream");

header("Content-Disposition: attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<h2 align="center"> Data Bendungan BBWS Pemali Juana </h2>
<table border="1" width="100%">
    <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kabupaten</th>
                <th>Kecamatan</th>
                <th>Desa</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Pemanfaatannya</th>
            </tr>
    </thead>
    <tbody>
            <?php $no=1; foreach ($data as $key => $value) {?>
                <tr>
                <td><?= $no++; ?></td>
                <td><?= $value->nama_b ?></td>
                <td><?= $value->kabupaten?></td>
                <td><?= $value->kecamatan?></td>
                <td><?= $value->desa?></td>
                <td><?= $value->latitude?></td>
                <td><?= $value->longitude?></td>
                <td><?= $value->manfaat?></td>
            </tr>
            <?php }?>
    </tbody>
    </table>