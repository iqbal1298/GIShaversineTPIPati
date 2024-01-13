<?php

class Data extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_data');
    }


    public function index()
    {
        //Menampilkan
        $data = array(
            'title' => 'Data TPI',
            'data' => $this->M_data->tampil(),
            'isi' => 'data/v_data'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function input()
    {
        $this->user_login->cek_login();
        $this->form_validation->set_rules('nama_b', 'Nama', 'required', array(
            'required' => '%s Harus diisi !!'
        ));

        $this->form_validation->set_rules('kabupaten', 'Kabupaten', 'required', array(
            'required' => '%s Harus diisi !!'
        ));
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required', array(
            'required' => '%s Harus diisi !!'
        ));
        $this->form_validation->set_rules('desa', 'desa', 'required', array(
            'required' => '%s Harus diisi !!'
        ));

        $this->form_validation->set_rules('latitude', 'Latitude', 'required', array(
            'required' => '%s Harus diisi !!'
        ));

        $this->form_validation->set_rules('longitude', 'Longitude', 'required', array(
            'required' => '%s Harus diisi !!'
        ));
        $this->form_validation->set_rules('manfaat', 'Manfaat', 'required', array(
            'required' => '%s Harus diisi !!'
        ));
        // $this->form_validation->set_rules('ikan', 'ikan', 'required', array(
        //     'required' => '%s Harus diisi !!'
        // ));
        // $this->form_validation->set_rules('harga', 'harga', 'required', array(
        //     'required' => '%s Harus diisi !!'
        // ));


        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Input Data TPI',
                'isi' => 'data/v_input'
            );
            $this->load->view('layout/v_wrapper', $data, FALSE);
        } else {
            $data = array(
                'nama_b' => $this->input->post('nama_b'),
                'kabupaten' => $this->input->post('kabupaten'),
                'kecamatan' => $this->input->post('kecamatan'),
                'desa' => $this->input->post('desa'),
                'latitude' => $this->input->post('latitude'),
                'longitude' => $this->input->post('longitude'),
                'manfaat' => $this->input->post('manfaat')
                // 'ikan' => $this->input->post('ikan'),
                // 'harga' => $this->input->post('harga')
            );
            $this->M_data->input($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Disimpan');
            redirect('data');
        }
    }


    public function edit($id_data)
    {
        $this->user_login->cek_login();
        $this->form_validation->set_rules('nama_b', 'Nama', 'required', array(
            'required' => '%s Harus diisi !!'
        ));
        $this->form_validation->set_rules('kabupaten', 'Kabupaten', 'required', array(
            'required' => '%s Harus diisi !!'
        ));
        $this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required', array(
            'required' => '%s Harus diisi !!'
        ));
        $this->form_validation->set_rules('desa', 'desa', 'required', array(
            'required' => '%s Harus diisi !!'
        ));

        $this->form_validation->set_rules('latitude', 'Latitude', 'required', array(
            'required' => '%s Harus diisi !!'
        ));

        $this->form_validation->set_rules('longitude', 'Longitude', 'required', array(
            'required' => '%s Harus diisi !!'
        ));

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Edit Data',
                'data' => $this->M_data->detail($id_data),
                'isi' => 'data/v_edit'
            );
            $this->load->view('layout/v_wrapper', $data, FALSE);
        } else {
            $data = array(
                'id_data' => $id_data,
                'nama_b' => $this->input->post('nama_b'),
                'kabupaten' => $this->input->post('kabupaten'),
                'kecamatan' => $this->input->post('kecamatan'),
                'desa' => $this->input->post('desa'),
                'latitude' => $this->input->post('latitude'),
                'longitude' => $this->input->post('longitude'),

                'ikan' => $this->input->post('ikan')
            );
            $this->M_data->edit($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
            redirect('data');
        }
    }


    public function hapus($id_data)
    {
        $data = array('id_data' => $id_data);
        $this->M_data->hapus($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        redirect('data');
    }


    public function print()
    {
        $data = array(
            'title' => 'Data Bendungan',
            'data' => $this->M_data->tampil(),
            'isi' => 'data/v_data'
        );
        $this->load->view('v_print', $data, FALSE);
    }
    public function excel()
    {
        $data = array(
            'title' => 'Laporan Data Bendungan',
            'data' => $this->M_data->tampil()
        );
        $this->load->view('v_excel', $data);
    }





    public function kapal()
    {
        $data = array(
            'title' => 'Data Kapal',
            'data' => $this->M_data->tampilKapal(),
            'isi' => 'data/v_kapal'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }
    public function inputkapal()
    {
        $this->user_login->cek_login();

        $data = array(
            'title' => 'Input Data Kapal',
            'isi' => 'data/v_inputkapal',
            'data_tpi' => $this->M_data->getDataTpi()
        );
        if ($this->input->post()) {
            $this->form_validation->set_rules('no_kapal', 'No_kapal', 'required');
            $this->form_validation->set_rules('pemilik', 'Pemilik', 'required');
            $this->form_validation->set_rules('tpi', 'TPI', 'required');
            $this->form_validation->set_rules('tgl', 'Tgl', 'required');

            if ($this->form_validation->run() === TRUE) {
                // Ambil ID TPI berdasarkan nama yang dipilih
                $tpiNama = $this->input->post('tpi');
                $tpiId = $this->M_data->getIdTpiByNama($tpiNama);
                $tglInput = $this->input->post('tgl');
                $tglFormat = date('Y-m-d', strtotime(str_replace('-', '/', $tglInput)));

                // Simpan data ikan ke dalam tabel 'tbl_ikan' dengan ID TPI yang sesuai
                $dataKapal = array(
                    'no_kapal' => $this->input->post('no_kapal'),
                    'pemilik' => $this->input->post('pemilik'),
                    'tgl' => $tglFormat,
                    'tpi_id' => $tpiId
                );
                $this->M_data->insertDataKapal($dataKapal);


                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Kapal berhasil ditambahkan!</div>');
                redirect('data/kapal');
            }
        }

        $this->load->view('layout/v_wrapper', $data);
    }


    public function editkapal($id)
    {
        $this->user_login->cek_login();
        $this->form_validation->set_rules('no_kapal', 'No_kapal', 'required', array(
            'required' => '%s Harus diisi !!'
        ));

        $this->form_validation->set_rules('pemilik', 'Pemilik', 'required', array(
            'required' => '%s Harus diisi !!'
        ));

        $this->form_validation->set_rules('tpi_id', 'Tpi_id', 'required', array(
            'required' => '%s Harus diisi !!'
        ));

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Edit Data Kapal',
                'data' => $this->M_data->detailkapal($id),
                'isi' => 'data/v_editkapal',
                'data_tpi' => $this->M_data->getDataTpi()
            );
            $this->load->view('layout/v_wrapper', $data, FALSE);
        } else {
            $data = array(
                'id' => $id,
                'no_kapal' => $this->input->post('no_kapal'),
                'pemilik' => $this->input->post('pemilik'),
                'tpi_id' => $this->input->post('tpi_id')

            );
            $this->M_data->editkapal($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
            redirect('data/kapal');
        }
    }

    public function hapuskapal($id)
    {
        $data = array('id' => $id);
        $this->M_data->hapuskapal($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil Dihapus');
        redirect('data/kapal');
    }




    public function detail($id)
    {
        $this->user_login->cek_login();

        $data = array(
            'title' => 'Detail Data',
            'data' => $this->M_data->getIkanByTpiId($id), // Menggunakan fungsi getIkanById
            'dataKapal' => $this->M_data->getKapalByTpiId($id), // Menggunakan fungsi getIkanById
            'isi' => 'data/v_detail',
            'datatpi' => $this->M_data->getTpiById($id),
            'tahun' => $this->M_data->gettahun()
        );

        $this->load->view('layout/v_wrapper', $data);
    }





    // public function detaildepan($id)
    // {


    //     $data = array(
    //         'title' => 'Detail Data',
    //         'data' => $this->M_data->getIkanByTpiId($id), // Menggunakan fungsi getIkanById
    //         'dataKapal' => $this->M_data->getKapalByTpiId($id), // Menggunakan fungsi getIkanById
    //         'isi' => 'data/v_detaildepan',
    //         'datatpi' => $this->M_data->getTpiById($id),
    //         'tahun' => $this->M_data->gettahun()
    //     );
    //     $this->load->view('front/v_wrapper', $data, FALSE);
    // }




    public function ikan()
    {
        $data = array(
            'title' => 'Data Ikan',
            'data' => $this->M_data->tampilIkanku(),
            'isi' => 'data/v_ikan'
        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }


    public function tambahikan()
    {

        $this->user_login->cek_login();

        $data = array(
            'title' => 'Input Data Ikan',
            'isi' => 'data/v_tambahikan',
            'data_tpi' => $this->M_data->getDataTpi()
        );
        if ($this->input->post()) {
            $this->form_validation->set_rules('ikan', 'Jenis Ikan', 'required');
            $this->form_validation->set_rules('harga', 'Harga', 'required');
            $this->form_validation->set_rules('tpi', 'TPI', 'required');
            $this->form_validation->set_rules('tgl', 'Tgl', 'required');

            if ($this->form_validation->run() === TRUE) {
                // Ambil ID TPI berdasarkan nama yang dipilih
                $tpiNama = $this->input->post('tpi');
                $tpiId = $this->M_data->getIdTpiByNama($tpiNama);
                $tglInput = $this->input->post('tgl');
                $tglFormat = date('Y-m-d', strtotime(str_replace('-', '/', $tglInput)));

                $dataIkan['tgl'] = $tglFormat;

                // Simpan data ikan ke dalam tabel 'tbl_ikan' dengan ID TPI yang sesuai
                $dataIkan = array(
                    'ikan' => $this->input->post('ikan'),
                    'harga' => $this->input->post('harga'),
                    'tgl' => $tglFormat,
                    'tpi_id' => $tpiId
                );
                $this->M_data->insertDataIkan($dataIkan);

                // Redirect atau tampilkan pesan sukses
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data ikan berhasil ditambahkan!</div>');
                redirect('data/ikan');
            }
        }

        $this->load->view('layout/v_wrapper', $data);
    }

    public function editIkan($id)
    {
        $this->user_login->cek_login();
        $this->form_validation->set_rules('ikan', 'Ikan', 'required', array(
            'required' => '%s Harus diisi !!'
        ));

        $this->form_validation->set_rules('harga', 'Harga', 'required', array(
            'required' => '%s Harus diisi !!'
        ));

        $this->form_validation->set_rules('tpi_id', 'Tpi_id', 'required', array(
            'required' => '%s Harus diisi !!'
        ));

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'title' => 'Edit Data Ikan',
                'data' => $this->M_data->detailIkan($id),
                'isi' => 'data/v_editikan',
                'data_tpi' => $this->M_data->getDataTpi()
            );
            $this->load->view('layout/v_wrapper', $data, FALSE);
        } else {
            $data = array(
                'id' => $id,
                'ikan' => $this->input->post('ikan'),
                'harga' => $this->input->post('harga'),
                'tpi_id' => $this->input->post('tpi_id')

            );
            $this->M_data->editIkan($data);
            $this->session->set_flashdata('pesan', 'Data Berhasil Diedit');
            redirect('data/ikan');
        }
    }
    public function hapusIkan($id)
    {
        $data = array('id' => $id);
        $this->M_data->hapusIkan($data);
        $this->session->set_flashdata('pesan', 'Data Ikan Berhasil Dihapus');
        redirect('data/ikan');
    }

    public function report()
    {

        $data = array(
            'title' => 'Data Laporan (Rekap)',
            'data' => $this->M_data->tampilreport(),
            'isi' => 'data/v_report',
            'tahun' => $this->M_data->gettahun()

        );
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }


    public function filter()
    {

        $this->load->model('M_data');

        $tahun1 = $this->input->post('tahun1');
        $bulanawal = $this->input->post('bulanawal');
        $bulanakhir = $this->input->post('bulanakhir');
        $nilaifilter = $this->input->post('nilaifilter');



        if ($nilaifilter == 2) {
            $data['title'] = "Report By Bulan";
            $data['subtitle'] = "Dari bulan : " . $bulanawal . ' Sampai bulan : ' . $bulanakhir . ' Tahun : ' . $tahun1;
            $data['datafilter'] = $this->M_data->filterbybulan($tahun1, $bulanawal, $bulanakhir);


            $html = '';
            $no = 1;
            foreach ($data['datafilter'] as $ikan) {
                $html .= '<tr>';
                $html .= '<td>' . $no++ . '</td>';
                $html .= '<td>' . $ikan->ikan . '</td>';
                $html .= '<td>' . $ikan->harga . '</td>';

                $html .= '</tr>';
            }

            echo $html;
        }
    }
    public function filterkapal()
    {

        $this->load->model('M_data');

        $tahun1 = $this->input->post('tahun1');
        $bulanawal = $this->input->post('bulanawal');
        $bulanakhir = $this->input->post('bulanakhir');
        $nilaifilter = $this->input->post('nilaifilter');

        if ($nilaifilter == 2) {
            $data['title'] = "Report By Bulan";
            $data['subtitle'] = "Dari bulan : " . $bulanawal . ' Sampai bulan : ' . $bulanakhir . ' Tahun : ' . $tahun1;
            $data['dataKapal'] = $this->M_data->filterbybulan2($tahun1, $bulanawal, $bulanakhir);

            $html = '';
            $no = 1;
            foreach ($data['dataKapal'] as $kapal) {
                $html .= '<tr>';
                $html .= '<td>' . $no++ . '</td>';
                $html .= '<td>' . $kapal->no_kapal . '</td>';
                $html .= '<td>' . $kapal->pemilik . '</td>';

                $html .= '</tr>';
            }

            echo $html;
        }
    }
}
