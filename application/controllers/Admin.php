<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{

	public $model = null;

	public function __construct()
	{
		parent::__construct();
		//panggil model
		$this->load->model('Admin_model');
		$this->model = $this->Admin_model;
	}

	public function index()
	{
		$this->model->get_rows();

		$data = array('model' => $this->model);
		
		$this->load->view('templates/admin/header', $data);
		$this->load->view('admin/index', $data);;
		$this->load->view('templates/admin/footer', $data);
	}

	public function table()
	{
		$this->model->get_rows();

		$data = array('model' => $this->model);

		$this->load->view('header', $data);
		$this->load->view('sidebar', $data);
		$this->load->view('h_header', $data);
		$this->load->view('table', $data);
		$this->load->view('footer', $data);
	}

	public function tambah_brg()
	{
		if (isset($_POST['btnSubmit'])) {
			#var_dump($_POST); exit;
			$this->model->kode_brg   = $_POST['kode_brg'];
			$this->model->nama_brg  = $_POST['nama_brg'];
			$this->model->qty = $_POST['qty'];
			$this->model->start_brg   = $_POST['start_brg'];
			$this->model->harga = $_POST['harga'];

			$this->model->insert();
			$this->model->get_rows();
			$this->load->view('header', ['model' => $this->model]);
			$this->load->view('sidebar', ['model' =>
			$this->model]);
			$this->load->view('h_header', ['model' =>
			$this->model]);
			$this->load->view('table', ['model' => $this->model]);
			$this->load->view('footer', ['model' =>
			$this->model]);
		} else {
			$this->load->view('header', ['model' => $this->model]);
			$this->load->view('sidebar', ['model' =>
			$this->model]);
			$this->load->view('h_header', ['model' =>
			$this->model]);
			$this->load->view('form', ['model' => $this->model]);
			$this->load->view('footer', ['model' =>
			$this->model]);
		}
	}

	public function edit() {
		$kode_brg = $this->uri->segment(3);
		$this->model->get_row($kode_brg);

		$this->load->view('header', ['model' => $this->model]);
		$this->load->view('sidebar', ['model' =>
		$this->model]);
		$this->load->view('h_header', ['model' =>
		$this->model]);
		$this->load->view('form', ['model' => $this->model]);
		$this->load->view('footer', ['model' =>
		$this->model]);
	}

	public function ubah()
	{
		if (isset($_POST['btnSubmit'])) {
			$this->model->kode_brg = $this->input->post('kode_brg');
			$this->model->nama_brg = $this->input->post('nama_brg');
			$this->model->qty = $this->input->post('qty');
			$this->model->start_brg = $this->input->post('start_brg');
			$this->model->harga = $this->input->post('harga');

			$this->model->update();
		}
		redirect('admin/table');
	}

	public function hapus()
	{
		$kode_brg = $this->uri->segment(3);
		$this->model->delete($kode_brg);
		redirect('admin/table');
	}

}