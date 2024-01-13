<?php

class User_login
{
    protected $ci;

    public function __construct()
    {
        $this->ci =& get_instance();
        $this->ci->load->model('M_login');
    }

    public function login($username, $password)
    {
        $cek = $this->ci->M_login->login($username, $password, $level);
        if ($cek) {
            $nama_user = $cek->nama_user;
            $username = $cek->username;
            $level = $cek->level;
            //Session
            $this->ci->session->set_userdata('nama_user', $nama_user);
            $this->ci->session->set_userdata('username', $username);
            $this->ci->session->set_userdata('level', $level);
            //redirect ke halaman home
            redirect('home');
        }else{
            //jika salah 
            $this->ci->session->set_flashdata('pesan', 'Username Atau Password Salah');
            redirect('login');       
        }
    }    

    public function cek_login()
    {
        if ($this->ci->session->userdata('username')=="") {
            $this->ci->session->set_flashdata('pesan', 'Anda Belum Login');
            redirect('login');   
        }
    }

    public function logout()
    {
        $this->ci->session->unset_userdata('nama_user');
        $this->ci->session->unset_userdata('username');
        $this->ci->session->unset_userdata('level');
        $this->ci->session->set_flashdata('pesan', 'Anda Telah Logout');
        redirect('login');
    }
}

/* End of file LibraryName.php */
