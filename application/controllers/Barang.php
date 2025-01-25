<?php
class Barang extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Barang_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['title'] = 'Master Barang';
		$data['barangs'] = $this->Barang_model->get_all();

		// print_r($data);
		$this->load->view('partials/header', $data);
		$this->load->view('barang/index', $data);
		$this->load->view('partials/footer');
	}

	public function create()
	{
		$data['kategoris'] = $this->Barang_model->get_kategori();
		$this->form_validation->set_rules('barang', 'Barang', 'required');
		$this->form_validation->set_rules('stok', 'Stok', 'required|numeric');

		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Tambah Barang';
			$this->load->view('partials/header', $data);
			$this->load->view('barang/create', $data);
			$this->load->view('partials/footer');
		} else {
			$data = [
				'kategori_id' => $this->input->post('kategori_id'),
				'barang' => $this->input->post('barang'),
				'stok' => $this->input->post('stok'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
			];
			$this->Barang_model->insert($data);
			redirect('barang');
		}
	}

	public function edit($id)
	{
		$data['kategoris'] = $this->Barang_model->get_kategori_barang();
		$data['barang'] = $this->Barang_model->get_by_id($id);
		$this->form_validation->set_rules('barang', 'Barang', 'required');
		$this->form_validation->set_rules('stok', 'Stok', 'required|numeric');
		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Edit Barang';
			$this->load->view('partials/header', $data);
			$this->load->view('barang/edit', $data);
			$this->load->view('partials/footer');
		} else {
			$data = [
				'kategori_id' => $this->input->post('kategori_id'),
				'barang' => $this->input->post('barang'),
				'stok' => $this->input->post('stok'),
				'updated_at' => date('Y-m-d H:i:s')
			];
			$this->Barang_model->update($id, $data);
			redirect('barang');
		}
	}

	public function delete($id)
	{
		$this->Barang_model->delete($id);
		redirect('barang');
	}
}
