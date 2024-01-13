<?php

class M_data extends CI_Model
{
    //Menampilkan Data TPI
    public function tampil()
    {
        $this->db->select('*');
        $this->db->from('tbl_data');
        $this->db->order_by('id_data');

        return $this->db->get()->result();
    }

    //Input Data TPI
    public function input($data)
    {
        $this->db->insert('tbl_data', $data);
    }

    //Ambil Data
    public function detail($id_data)
    {
        $this->db->select('*');
        $this->db->from('tbl_data');
        $this->db->where('id_data', $id_data);

        return $this->db->get()->row();
    }

    //Edit Data TPI
    public function edit($data)
    {
        $this->db->where('id_data', $data['id_data']);
        $this->db->update('tbl_data', $data);
    }

    //Hapus Data TPI
    public function hapus($data)
    {
        $this->db->where('id_data', $data['id_data']);
        $this->db->delete('tbl_data', $data);
    }

    //menampilkan DAta Kapal
    public function tampilKapal()
    {
        $this->db->select('tbl_kapal.*, tbl_data.nama_b as nama_tpi');
        $this->db->from('tbl_kapal');
        $this->db->join('tbl_data', 'tbl_kapal.tpi_id = tbl_data.id_data', 'left');
        $this->db->order_by('tbl_kapal.id');

        return $this->db->get()->result();
    }

    public function detailkapal($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_kapal');
        $this->db->where('id', $id);

        return $this->db->get()->row();
    }

    public function editkapal($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('tbl_kapal', [
            'no_kapal' => $data['no_kapal'],
            'pemilik' => $data['pemilik'],
            'tpi_id' => $data['tpi_id'],
        ]);
    }

    public function hapuskapal($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->delete('tbl_kapal', $data);
    }

    public function getTpiById($id)
    {
        return $this->db->get_where('tbl_data', ['id_data' => $id])->row_array();
    }

    public function tampilIkan()
    {
        $this->db->select('*');
        $this->db->from('tbl_data');
        $this->db->order_by('id');

        return $this->db->get()->result();
    }

    //Menampilkan data ikan
    public function tampilIkanku()
    {
        $this->db->select('tbl_ikan.*, tbl_data.nama_b as nama_tpi');
        $this->db->from('tbl_ikan');
        $this->db->join('tbl_data', 'tbl_ikan.tpi_id = tbl_data.id_data', 'left');
        $this->db->order_by('tbl_ikan.id');

        return $this->db->get()->result();
    }

    public function editIkan($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('tbl_ikan', [
            'ikan' => $data['ikan'],
            'harga' => $data['harga'],
            'tpi_id' => $data['tpi_id'],
        ]);
    }

    public function detailIkan($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_ikan');
        $this->db->where('id', $id);

        return $this->db->get()->row();
    }

    public function hapusIkan($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->delete('tbl_ikan', $data);
    }

    public function getIkanByTpiId($id)
    {
        $this->db->select('ikan, harga'); // Memilih kolom 'ikan' dan 'harga'
        $this->db->from('tbl_ikan');
        $this->db->where('tpi_id', $id); // Menambahkan kondisi WHERE untuk ID tertentu

        return $this->db->get()->result(); // Menggunakan row() karena hanya satu baris yang diharapkan
    }

    //Jooin tabel untuk dapat nama TPI by ID
    public function joinTpi()
    {
        $query = 'SELECT `tbl_ikan`.*, `tbl_data`.`nama_b`
    FROM `tbl_ikan` JOIN `tbl_data`
    ON `tbl_ikan`.`tpi_id` = `tbl_data`.`id_data`
                ';

        return $this->db->query($query)->result_array();
    }

    //Ambil data TPI dari tbl_data
    public function getDataTpi()
    {
        return $this->db->get('tbl_data')->result();
    }

    //Amnbil Nama TPI by ID
    public function getIdTpiByNama($namaTpi)
    {
        $this->db->select('id_data');
        $this->db->where('nama_b', $namaTpi);
        $result = $this->db->get('tbl_data')->row();

        if ($result) {
            return $result->id_data;
        } else {
            return 0;
        }
    }

    //Input data ikan
    public function insertDataIkan($dataIkan)
    {
        $this->db->insert('tbl_ikan', $dataIkan);
    }

    //Input Data kapal
    public function insertDataKapal($dataKapal)
    {
        $this->db->insert('tbl_kapal', $dataKapal);
    }

    public function getKapalByTpiId($id)
    {
        $this->db->select('no_kapal, pemilik');
        $this->db->from('tbl_kapal');
        $this->db->where('tpi_id', $id);

        return $this->db->get()->result();
    }

    //Menampilkan data ikan
    public function tampilreport()
    {
        $this->db->select('tbl_ikan.*, tbl_data.nama_b as nama_tpi');
        $this->db->from('tbl_ikan');
        $this->db->join('tbl_data', 'tbl_ikan.tpi_id = tbl_data.id_data', 'left');
        $this->db->order_by('tbl_ikan.id');

        return $this->db->get()->result();
    }

    public function gettahun()
    {
        $query = $this->db->query('SELECT YEAR(tgl) AS tahun FROM tbl_ikan GROUP BY YEAR(tgl) ORDER BY YEAR(tgl) ASC');

        return $query->result();
    }

    public function filterbytanggal($tanggalawal, $tanggalakhir)
    {
        $query = $this->db->query("SELECT * from tbl_ikan where tgl BETWEEN '$tanggalawal' and '$tanggalakhir' ORDER BY tgl ASC");

        return $query->result();
    }

    public function filterbybulan($tahun1, $bulanawal, $bulanakhir)
    {
        $query = $this->db->query("SELECT * from tbl_ikan where YEAR(tgl) = '$tahun1' and MONTH(tgl) BETWEEN '$bulanawal' and '$bulanakhir' ORDER BY tgl ASC");

        return $query->result();
    }

    public function filterbybulan2($tahun1, $bulanawal, $bulanakhir)
    {
        $query = $this->db->query("SELECT * from tbl_kapal where YEAR(tgl) = '$tahun1' and MONTH(tgl) BETWEEN '$bulanawal' and '$bulanakhir' ORDER BY tgl ASC");

        return $query->result();
    }

    public function filterbytahun($tahun2)
    {
        $query = $this->db->query("SELECT * from tbl_ikan where YEAR(tgl) = '$tahun2' ORDER BY tgl ASC ");

        return $query->result();
    }

    public function getDataByDateRange($from, $to)
    {
        return $this->db->where('tgl >=', $from)
            ->where('tgl <=', $to)
            ->get('tbl_ikan')
            ->result();
    }

    public function getAllDataIkan()
    {
        return $this->db->get('tbl_ikan')->result();
    }

    public function getDataByDateRange2($from, $to)
    {
        return $this->db->where('tgl >=', $from)
            ->where('tgl <=', $to)
            ->get('tbl_kapal')
            ->result();
    }

    public function getAllDataKapal()
    {
        return $this->db->get('tbl_kapal')->result();
    }

    public function getTpiOpsi()
    {
        $this->db->select('nama_b');
        $query = $this->db->get('tbl_data');

        return $query->result_array();
    }

    public function ambilopsi()
    {
        $data = $this->db->get('tbl_data')->result_array();

        return $data;
    }




    public function getIkanByTpis($tpiId)
    {
        $this->db->select('*');
        $this->db->from('tbl_ikan');
        $this->db->where('tpi_id', $tpiId);

        return $this->db->get()->result_array();
    }



    public function getKapalByTpis($tpiId)
    {
        $this->db->select('*');
        $this->db->from('tbl_kapal');
        $this->db->where('tpi_id', $tpiId);

        return $this->db->get()->result_array();
    }
}
