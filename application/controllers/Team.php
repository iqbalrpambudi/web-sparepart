<?php
class Team extends CI_Controller
{
    public function index()
    {
        // Active Page
        $data['active'] = $this->uri->segment(1);
        
		// Membuat komponen yang akan ditampilkan
        $data['breadcrumbs'] = $this->load->view('components/breadcrumbs', null, true);
        $data['footer'] = $this->load->view('components/footer', null, true);

        // Menampilkan View
        $this->load->view('components/head');
        $this->load->view('components/sidebar',$data);
        $this->load->view('components/topnav');
        $this->load->view('components/header', $data);
        $this->load->view('admin/team', $data);
    }
}
