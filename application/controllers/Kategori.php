<?php  
class Kategori extends CI_Controller {  
    public function __construct() {  
        parent::__construct();  
        $this->load->model('Kategori_model');  
        $this->load->library('form_validation');  
    }  
  
    public function index() {  
        // $data['title'] = 'Master Kategori';  
        // $data['kategoris'] = $this->Kategori_model->get_all();  
		$data = [
			'title' => 'Master Kategori',
			'kategoris' => $this->Kategori_model->get_all()
		];
        $this->load->view('partials/header', $data);  
        $this->load->view('kategori/index', $data);  
        $this->load->view('partials/footer');  
    }  
  
    public function create() {  
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');  
        if ($this->form_validation->run() == FALSE) {  
            $data['title'] = 'Tambah Kategori';  
            $this->load->view('partials/header', $data);  
            $this->load->view('kategori/create');  
            $this->load->view('partials/footer');  
        } else {  
            $data = [  
                'kategori' => $this->input->post('kategori'),  
                'created_at' => date('Y-m-d H:i:s'),  
                'updated_at' => date('Y-m-d H:i:s')  
            ];  
            $this->Kategori_model->insert($data);  
            redirect('kategori');  
        }  
    }  
  
    public function edit($id) {  
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');  
        if ($this->form_validation->run() == FALSE) {  
            $data['title'] = 'Edit Kategori';  
            $data['kategori'] = $this->Kategori_model->get_by_id($id);  
            $this->load->view('partials/header', $data);  
            $this->load->view('kategori/edit', $data);  
            $this->load->view('partials/footer');  
        } else {  
            $data = [  
                'kategori' => $this->input->post('kategori'),  
                'updated_at' => date('Y-m-d H:i:s')  
            ];  
            $this->Kategori_model->update($id, $data);  
            redirect('kategori');  
        }  
    }  
  
    public function delete($id) {  
        $this->Kategori_model->delete_kate($id);  
        redirect('kategori');  
    }  
}  
