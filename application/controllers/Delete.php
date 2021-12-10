<?php
class Delete extends CI_Controller
{
    public function index()
    {
		$this->load->model('Product_model');
		$data['query']=$this->Product_model->get_product(10,0);
        
        $this->load->view('components/head');
        $this->load->view('components/sidebar');
        $this->load->view('components/topnav');
        $this->load->view('admin/delete_sparepart',$data);
        $this->load->view('components/footer');
    }
}
?>
