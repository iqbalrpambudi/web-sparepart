<?php
class Product_controller extends CI_Controller
{
    public function index()
    {
		$this->load->model('Product_model');
		$data['query']=$this->Product_model->get_product();
        
        $this->load->view('components/head');
        $this->load->view('components/sidebar');
        $this->load->view('components/topnav');
        $this->load->view('components/header');
        $this->load->view('admin/dashboard',$data);
        $this->load->view('components/footer');
    }
}
?>
