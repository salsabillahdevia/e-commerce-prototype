<?php 

//ini extends nya diambil dari core/Controller.php. jadi yang di controllers/home itu isinya child class. sedangkan yang di core/Controller.php itu parent class.

class User extends Controller
{
	public function index()
	{
		$data['judul'] = 'User';
		//ini buat ngambil data dari model. nama modelnya User_model. terus methodnya getUser(); dan model nya ini juga harus dibikin juga di Controller.php supaya methodnya bisa dijalanin
		$data['nama'] = $this->model('User_model')->getUser();

		$this->view('templates/user/header', $data);
		$this->view('user/index', $data);
		$this->view('templates/user/footer');
	}


	public function logout()
	{
		header('Location: ' . BASEURL . 'user/login');
	}


	public function login()
	{
		$data['judul'] = 'Login User';
		//ini buat ngambil data dari model. nama modelnya User_model. terus methodnya getUser(); dan model nya ini juga harus dibikin juga di Controller.php supaya methodnya bisa dijalanin
		$data['nama'] = $this->model('User_model')->getUser();

		$this->view('templates/user/login/header', $data);
		$this->view('user/login', $data);
		$this->view('templates/user/login/footer');
	}


	public function keranjang()
	{
		$data['judul'] = 'Keranjang';

		$data['nama'] = $this->model('User_model')->getUser();

		$this->view('templates/user/header', $data);
		$this->view('user/keranjang', $data);
		$this->view('templates/user/footer');
	}
}