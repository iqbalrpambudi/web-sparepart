<?php
class Home extends CI_Controller
{
    // Fungsi yg otomatis dijalankan untuk semua fungsi di dalam class
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url'));
        $this->load->model('Product_model');
        $this->load->library('pagination');
    }

    // Fungsi yg otomatis dijalankan tp cuma di index
    public function index()
    {   
        // Active Page
        $data['active'] = $this->uri->segment(1);

        // Pagination
        $jumlah_data = $this->Product_model->total_data();

        // Config Pagination
        $config['base_url'] = base_url() . '/home/index/';
        $config['total_rows'] = $jumlah_data;
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

        if ($this->uri->segment(3) !== null) {
            $from = $this->uri->segment(3);
        } else {
            $from = 0;
        }
        $this->pagination->initialize($config);


        // Mengambil total sparepart
        $data['query'] = $this->Product_model->get_min_product($config['per_page'], $from);
        $total['total'] = $this->Product_model->total_min_data();

        // Mengambil total pada cardstat
        $total['total_out_tool'] = $this->Product_model->get_out_tool();
        $total['total_in_tool'] = $this->Product_model->get_in_tool();
        $total['total_limit_stock'] = $this->Product_model->total_min_data();
        $total['total_product_ready'] = $this->Product_model->total_product_ready();

        // Membuat komponen yang akan ditampilkan
        $data['breadcrumbs'] = $this->load->view('components/breadcrumbs', null, true);
        $data['card_stat'] = $this->load->view('components/card-stat', $total, true);
        $data['footer'] = $this->load->view('components/footer', null, true);


        // Menampilkan View
        $this->load->view('components/head');
        $this->load->view('components/sidebar',$data);
        $this->load->view('components/topnav');
        $this->load->view('components/header', $data);
        $this->load->view('admin/dashboard', $data);
    }
}
