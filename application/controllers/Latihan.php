<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Latihan extends CI_Controller {

    function tampil() 
    {
        $data['nama'] = "Lumi";
        $this->load->view('v_latihan', $data);
    }

}
