<?php

class Halaman extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_data');
    }

    public function index()
    {
        $data = array(
            'title' => 'Peta TPI',
            'data'  => $this->M_data->tampil(),
            'isi' => 'halaman',
            'opsi' => $this->M_data->ambilopsi()
        );

        foreach ($data['data'] as $key => $value) {
            $data['data'][$key]->ikan = $this->M_data->getIkanByTpis($value->id_data);
            $data['data'][$key]->kapal = $this->M_data->getKapalByTpis($value->id_data);
        }
        $this->load->view('front/v_wrapper', $data, FALSE);
    }

    public function detaildepan($id)
    {

        $data = array(
            'title' => 'Detail Data',
            'data' => $this->M_data->getIkanByTpiId($id),
            'dataKapal' => $this->M_data->getKapalByTpiId($id),
            'isi' => 'data/v_detaildepan',
            'datatpi' => $this->M_data->getTpiById($id),
            'tahun' => $this->M_data->gettahun()
        );
        $this->load->view('front/v_wrapper', $data, FALSE);
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
