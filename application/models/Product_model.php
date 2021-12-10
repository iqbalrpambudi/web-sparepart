<?php
class Product_model extends CI_Model
{
        public $code_tool;
        public $category;
        public $sub_category;
        public $machine;
        public $name;
        public $type;
        public $maker;
        public $seller;
        public $remark;
        public $model;
        public $location;
        public $tool_permachine;
        public $used_machine;
        public $total_used;
        public $delivery_time;
        public $max_qty;
        public $min_qty;
        public $stock_end;
        public $unit_price;
        public $picture = "default.jpg";

        public function rules()
        {
                return [
                        [
                                'field' => 'code_tool',
                                'label' => 'Code Tool',
                                'rules' => 'required'
                        ],

                        [
                                'field' => 'category',
                                'label' => 'Category',
                                'rules' => 'required'
                        ],

                        [
                                'field' => 'sub_category',
                                'label' => 'Sub Category',
                                'rules' => 'required'
                        ],

                        [
                                'field' => 'machine',
                                'label' => 'Machine',
                                'rules' => 'required'
                        ],

                        [
                                'field' => 'name',
                                'label' => 'Name',
                                'rules' => 'required'
                        ],

                        [
                                'field' => 'type',
                                'label' => 'Type',
                                'rules' => 'required'
                        ],

                        [
                                'field' => 'maker',
                                'label' => 'Maker',
                                'rules' => 'required'
                        ],

                        [
                                'field' => 'seller',
                                'label' => 'Seller',
                                'rules' => 'required'
                        ],

                        [
                                'field' => 'remark',
                                'label' => 'Remark',
                                'rules' => 'required'
                        ],

                        [
                                'field' => 'model',
                                'label' => 'Model',
                                'rules' => 'required'
                        ],

                        [
                                'field' => 'location',
                                'label' => 'Location',
                                'rules' => 'required'
                        ],

                        [
                                'field' => 'tool_permachine',
                                'label' => 'Tool Permachine',
                                'rules' => 'required'
                        ],

                        [
                                'field' => 'used_machine',
                                'label' => 'Used Machine',
                                'rules' => 'required'
                        ],

                        [
                                'field' => 'delivery_time',
                                'label' => 'Delivery Time',
                                'rules' => 'required'
                        ],

                        [
                                'field' => 'min_qty',
                                'label' => 'Min Qty',
                                'rules' => 'required'
                        ],

                        [
                                'field' => 'max_qty',
                                'label' => 'Max Qty',
                                'rules' => 'required'
                        ],

                                                [
                                'field' => 'stock_end',
                                'label' => 'Stock End',
                                'rules' => 'required'
                        ],

                        [
                                'field' => 'unit_price',
                                'label' => 'Unit Price',
                                'rules' => 'required'
                        ],


                ];
        }

        // Fungsi untuk menjumlahkan out_tool
        public function get_model_stock()
        {
                return $this->db->query('SELECT sum(stock_end) as total,model FROM `db_sparepart` group by model')->result_array();
        }
        public function get_model_limit_stock()
        {
                return $this->db->query('SELECT sum(min_qty) as limit_stock,model FROM `db_sparepart` group by model')->result_array();
        }
        // // Fungsi untuk menjumlahkan out_tool
        // public function get_out_tool()
        // {
        //         return $this->db->query('SELECT count(out_tool) as out_tool FROM `db_sparepart`')->result_array();
        // }

        // // Fungsi untuk menjumlahkan in_tool
        // public function get_in_tool()
        // {
        //         return $this->db->query('SELECT count(in_tool) as in_tool FROM `db_sparepart`')->result_array();
        // }

        // Fungsi untuk menjumlahkan sparepart ready
        public function total_product_ready()
        {
                return $this->db->query('SELECT * FROM `db_sparepart` WHERE stock_end > min_qty')->num_rows();
        }
        
        // Fungsi untuk mengambil total produk yang statusnya min
        public function total_min_data()
        {
                return $this->db->query('SELECT * FROM `db_sparepart` WHERE stock_end < min_qty')->num_rows();
        }
        
        // Fungsi untuk mengambil list produk
        public function get_product($limit, $start)
        {
                return $this->db->get('db_sparepart', $limit, $start)->result_array();
        }

        // Fungsi untuk mengambil total produk
        public function total_data()
        {
                return $this->db->get('db_sparepart')->num_rows();
        }

        // Fungsi untuk mengambil produk berdasarkan code_tool
        public function get_product_by_id($id)
        {
                return $this->db->get_where('db_sparepart', array('no' => $id))->result_array();
        }

        public function get_min_product($limit, $start)
        {
                $query = $this->db->query('SELECT * FROM `db_sparepart` WHERE stock_end < min_qty LIMIT ' . $start . ', ' . $limit . '');
                return $query->result_array();
        }

        // Simpan 
        public function save()
        {
                $post = $this->input->post();

                $this->code_tool =              $post['code_tool'];
                $this->category =               $post['category'];
                $this->sub_category =           $post['sub_category'];
                $this->machine =                $post['machine'];
                $this->name =                   $post['name'];
                $this->type =                   $post['type'];
                $this->maker =                  $post['maker'];
                $this->seller =                 $post['seller'];
                $this->remark =                 $post['remark'];
                $this->model =                  $post['model'];
                $this->location =               $post['location'];
                $this->tool_permachine =        $post['tool_permachine'];
                $this->used_machine =           $post['used_machine'];
                $this->total_used =             $post['total_used'];
                $this->delivery_time =          $post['delivery_time'];
                $this->max_qty =                $post['max_qty'];
                $this->min_qty =                $post['min_qty'];
                $this->stock_end =              $post['stock_end'];
                $this->unit_price =             $post['unit_price'];
                $this->picture =                $this->_uploadImage();

                return $this->db->insert("db_sparepart", $this);
        }

        // Edit 
        public function update($id)
        {
                $post = $this->input->post();

                $this->code_tool =              $post['code_tool'];
                $this->category =               $post['category'];
                $this->sub_category =           $post['sub_category'];
                $this->machine =                $post['machine'];
                $this->name =                   $post['name'];
                $this->type =                   $post['type'];
                $this->maker =                  $post['maker'];
                $this->seller =                 $post['seller'];
                $this->remark =                 $post['remark'];
                $this->model =                  $post['model'];
                $this->location =               $post['location'];
                $this->tool_permachine =        $post['tool_permachine'];
                $this->used_machine =           $post['used_machine'];
                $this->total_used =             $post['total_used'];
                $this->delivery_time =          $post['delivery_time'];
                $this->max_qty =                $post['max_qty'];
                $this->min_qty =                $post['min_qty'];
                $this->stock_end =              $post['stock_end'];
                $this->unit_price =             $post['unit_price'];

                if (!empty($_FILES["image"]["name"])) {
                        $this->picture = $this->_uploadImage();
                } else {
                        $this->picture = $post["old_image"];
                }

                return $this->db->update('db_sparepart', $this, array('no' => $id));
        }

        // Hapus
        public function delete($id)
        {
                return $this->db->delete("db_sparepart", array("no" => $id));
        }

        // Cari
        public function search($keyword = null, $category = "nama")
        {
                $this->db->select('*');
                $this->db->from('db_sparepart');
                $this->db->like($category, $keyword);
                return $this->db->get()->result_array();
        }

        private function _uploadImage()
        {
                $config['upload_path']          = './assets/picture/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['file_name']            = uniqid();
                $config['overwrite']            = true;
                $config['max_size']             = 1024; // 1MB
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                        return $this->upload->data("file_name");
                }

                return "default.jpg";
        }
}
