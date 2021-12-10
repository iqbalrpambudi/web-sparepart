<?php
class Sparepart extends CI_Controller
{
    // Fungsi yg otomatis dijalankan untuk semua fungsi di dalam class
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->model('Product_model');
        $this->load->library('pagination');
        $this->load->library('form_validation');
        $this->load->helper('form');
    }

    // Fungsi yg otomatis dijalankan tp cuma di index
    public function index()
    {
        // Active Page
        $data['active'] = $this->uri->segment(1);

        // Mengambil list produk
        $total_data = $this->Product_model->total_data();

        // Config Pagination
        $config['base_url'] = base_url() . '/sparepart/index';
        $config['total_rows'] = $total_data;
        $config['per_page'] = 10;

        // Styling Pagination
        $config['first_link']       = '<small>First</small>';
        $config['last_link']        = '<small>Last</small>';
        $config['next_link']        = '<i class="fa fa-angle-right"></i>';
        $config['prev_link']        = '<i class="fa fa-angle-left"></i>';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);

        $data['query'] = $this->Product_model->get_product($config['per_page'], $from);

        // Membuat komponen yang akan ditampilkan
        $data['breadcrumbs'] = $this->load->view('components/breadcrumbs', null, true);
        $data['footer'] = $this->load->view('components/footer', null, true);

        // Menampilkan View
        $this->load->view('components/head');
        $this->load->view('components/sidebar', $data);
        $this->load->view('components/topnav');
        $this->load->view('components/header', $data);
        $this->load->view('admin/sparepart', $data);
    }

    public function add()
    {
        // Active Page
        $data['active'] = $this->uri->segment(1);

        // Load library yang dibutuhkan
        $this->load->helper('form');

        // Membuat validasi pada Form
        $this->form_validation->set_rules($this->Product_model->rules());

        // Jalankan fungsi Form_Validation
        if ($this->form_validation->run() === FALSE) {
            // Membuat komponen yang akan ditampilkan
            $data['breadcrumbs'] = $this->load->view('components/breadcrumbs', null, true);
            $data['footer'] = $this->load->view('components/footer', null, true);

            // Menampilkan View
            $this->load->view('components/head');
            $this->load->view('components/sidebar', $data);
            $this->load->view('components/topnav');
            $this->load->view('components/header', $data);
            $this->load->view('admin/sparepart-add', $data);
        } else {
            $this->Product_model->save();
            $this->session->set_flashdata('success', 'Saved successfully !');
            redirect(base_url('/sparepart'));
        }
    }
    public function edit($id = null)
    {
        // Active Page
        $data['active'] = $this->uri->segment(1);

        // Load library yang dibutuhkan
        $this->load->helper('form');


        // Mengecek apakah id kosong
        if ($id === null) {
            redirect('sparepart');
        }

        // Mengambil data yang akan diedit berdasarkan code_tool
        $data['sparepart'] = $this->Product_model->get_product_by_id($id);

        // Membuat validasi pada Form
        $this->form_validation->set_rules($this->Product_model->rules());

        // Jalankan fungsi Form_Validation
        if ($this->form_validation->run() === FALSE) {
            // Membuat komponen yang akan ditampilkan
            $data['breadcrumbs'] = $this->load->view('components/breadcrumbs', null, true);
            $data['footer'] = $this->load->view('components/footer', null, true);

            // Menampilkan View
            $this->load->view('components/head');
            $this->load->view('components/sidebar', $data);
            $this->load->view('components/topnav');
            $this->load->view('components/header', $data);
            $this->load->view('admin/sparepart-edit', $data);
        } else {
            $this->Product_model->update($id);
            $this->session->set_flashdata('success', 'Edited successfully !');
            redirect(base_url('/sparepart'));
        }
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->Product_model->delete($id)) {
            $this->session->set_flashdata('success', 'Deleted successfully !');
            redirect('sparepart');
        }
    }

    public function detail($id = null)
    {
        // Active Page
        $data['active'] = $this->uri->segment(1);

        $data['query'] = $this->Product_model->get_product_by_id($id);

        // Membuat komponen yang akan ditampilkan
        $data['breadcrumbs'] = $this->load->view('components/breadcrumbs', null, true);
        $data['footer'] = $this->load->view('components/footer', null, true);

        // Menampilkan View
        $this->load->view('components/head');
        $this->load->view('components/sidebar', $data);
        $this->load->view('components/topnav');
        $this->load->view('components/header', $data);
        $this->load->view('admin/sparepart-detail', $data);
    }

    public function search($keyword = null)
    {
        // Active Page
        $data['active'] = $this->uri->segment(1);

        $keyword = $this->input->get('keyword');
        $category = $this->input->get('category');

        $this->session->set_flashdata('keyword',$keyword);

        $data['query'] = $this->Product_model->search($keyword, $category);
        $data['keyword'] = $keyword;
        $data['breadcrumbs'] = $this->load->view('components/breadcrumbs', $data, true);
        $data['footer'] = $this->load->view('components/footer', null, true);

        // Menampilkan View
        $this->load->view('components/head');
        $this->load->view('components/sidebar', $data);
        $this->load->view('components/topnav');
        $this->load->view('components/header', $data);
        $this->load->view('admin/sparepart', $data);
    }
}
