<?php

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Data');
    }

    public function index()
    {
        $this->load->model('M_data');
        $data = array(
            'title' => 'Peta',
            'data'  => $this->M_Data->tampil(),
            'isi' => 'v_home',
            'opsi' => $this->M_data->ambilopsi()
        );

        foreach ($data['data'] as $key => $value) {
            $data['data'][$key]->ikan = $this->M_data->getIkanByTpis($value->id_data);
            $data['data'][$key]->kapal = $this->M_data->getKapalByTpis($value->id_data);
        }
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }




    public function getIkanByTpiId($tpiId)
    {
        $this->load->model('M_data');
        return $this->M_data->getIkanByTpis($tpiId);
    }



    public function getKapalByTpiId($tpiId)
    {
        $this->load->model('M_data');
        return $this->M_data->getKapalByTpis($tpiId);
    }







    public function hitungJarak()
    {
        //input nama TPI yamg akan di hitung
        $lokasi1 = $this->input->post('bloktempat1');
        $lokasi2 = $this->input->post('bloktempat2');

        // aturan harus memilih lokasi 
        if (empty($lokasi1) || empty($lokasi2)) {
            $response['status'] = 'error';
            $response['message'] = 'Lokasi harus dipilih!';
            echo json_encode($response);
            return;
        }


        // Inisiasi untuk membedakan koordinat 1 dan koordinat 2
        $latitudeLokasi1 = explode('|', $lokasi1)[0];
        $longitudeLokasi1 = explode('|', $lokasi1)[1];
        $latitudeLokasi2 = explode('|', $lokasi2)[0];
        $longitudeLokasi2 = explode('|', $lokasi2)[1];



        // untuk mengkonversi nilai lat dan long ke radian umtuk di hitung dengan rumus haversine
        $lat1 = deg2rad($latitudeLokasi1);
        $lon1 = deg2rad($longitudeLokasi1);
        $lat2 = deg2rad($latitudeLokasi2);
        $lon2 = deg2rad($longitudeLokasi2);

        $dlat = $lat2 - $lat1;
        $dlon = $lon2 - $lon1;


        // Haversine

        $a = sin($dlat / 2) * sin($dlat / 2) + cos($lat1) * cos($lat2) * sin($dlon / 2) * sin($dlon / 2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
        $radius_bumi = 6371;
        $jarak = $radius_bumi * $c;

        $response['status'] = 'success';
        $response['distance'] = $jarak;
        echo json_encode($response);
    }
}

/* End of file Controllername.php */
