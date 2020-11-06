<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
header("Access-Control-Allow-Origin: *");
class Account extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('nhadat_model');
	}

	

	public function index()
	{
		$this->load->view('home_view');
	}

	function login()
	{
		$this->load->view('login_view');
	}

	function loged()
	{
		$user = $this->input->post('username');
		$pass = $this->input->post('password');
		if($user == null || $pass == null){
			$_SESSION['wrong_account'] = "Tên tài khoản hoặc mật khẩu không chính xác";
			$this->load->view('login_view', $_SESSION, FALSE);
		}
		else{
			$account = $this->nhadat_model->getUser($user);
			foreach ($account as $key => $value) {
				if($user == $value['username']){
					if ($pass == $value['password']) {
						$_SESSION = $value;
						$_SESSION['wrong_account'] = null;
						// $this->nhadat_model->setLoginResult($value);
						// $_SESSION['typeKH'] = $value['typeKH'];
						$_SESSION['loged'] = true;
						$this->load->view('success.php', $_SESSION, FALSE);
					}	
				else {
					$_SESSION['wrong_account'] = "Tên tài khoản hoặc mật khẩu không chính xác";
					$this->load->view('login_view', $_SESSION, FALSE);
				}
			}
			else $this->load->view('home_view.php', $_SESSION, FALSE);
			
			}
		}
		
	}

	function logout()
	{
		$this->nhadat_model->setLogoutResult();
		$_SESSION['loged'] = false;
		session_unset();
		$this->load->view('success.php', $_SESSION, FALSE);
	}

	function register()
	{
		$this->load->view('register_view');
	}

	function registed()
	{	
		$user = $this->input->post('username');
		$account = $this->nhadat_model->getUser($user);
		if($account != null){
			$_SESSION['registed'] = true;
			$this->load->view('register_view', $_SESSION, false);
			
		}

		else{
			if($this->input->post('password')!=$this->input->post('re_password')){
				$_SESSION['re_pass'] = false;
				$this->load->view('register_view', $_SESSION, false);
			}
			else{
				$_SESSION['re_pass']=true;
				$target_dir = "uploads/";
				$target_file = $target_dir . basename($_FILES["avatar"]["name"]);
				$uploadOk = 1;
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
				// Check if image file is a actual image or fake image
				if(isset($_POST["submit"])) {

				    $check = getimagesize($_FILES["avatar"]["tmp_name"]);
				    if($check !== false) {
				        echo "File is an image - " . $check["mime"] . ".";
				        $uploadOk = 1;
				    } else {
				        echo "File is not an image.";
				        $uploadOk = 0;
				    }
				}

				if ($uploadOk == 0) {
				    // echo "Sorry, your file was not uploaded.";
				// if everything is ok, try to upload file
				} else {
				    if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {		
				    	//echo "The file ". basename( $_FILES["avatar"]["name"]). " has been uploaded.";	        
				    } else {
				        // echo "Sorry, there was an error uploading your file.";
				    }
				}

				$avatar = base_url().'uploads/'.basename($_FILES["avatar"]["name"]);
				// echo $avatar;
				if($avatar == ""||$avatar == null||$avatar = "http://127.0.0.1:8080/nha_dat/uploads/"){
					$avatar= "http://127.0.0.1:8080/nha_dat/uploads/default.png";
				}

				$data = array(
					'username' => $user,
					'password' => $this->input->post('password'),
					'typeKH' => $this->input->post('typeKH'),
					'name' => $this->input->post('name'),
					'ngaysinh' => $this->input->post('ngaysinh'),
					'diachi' => $this->input->post('diachi'),
					'phone' => $this->input->post('phone'),
					'avatar' => $avatar
				);
				$this->nhadat_model->addUser($data);
				$data = $this->nhadat_model->getUser($user);
				foreach ($data as $key => $value) {
					$_SESSION = $value;
					// $this->nhadat_model->setLoginResult($value);
				}
				
				$this->load->view('success.php');
			}

			
		}
	}

	function myprofile()
	{
		if (isset($_SESSION['id'])) {
			$data = $this->nhadat_model->getUserById($_SESSION['id']);
			$data = array('mangketqua' => $data);
			$this->load->view('myprofile_view', $data, false);
		}
		else $this->load->view('404_view');
	}

	function changepassword()
	{
		if (isset($_SESSION['id'])) {
			$old_pass = $this->input->post('old_password');
			if ($old_pass == null) {
				$this->load->view('changepassword_view');
			}
			elseif ($old_pass != $_SESSION['password']) {
				$_SESSION['wrong_password'] = "Mật khẩu cũ không chính xác";
				$this->load->view('changepassword_view');
			}
			else {
				$account = $this->nhadat_model->getUserById($_SESSION['id']);
				$new_pass = $this->input->post('password');
				if($this->nhadat_model->updatePasswordUser($_SESSION['username'], $new_pass)){
					$account = $this->nhadat_model->getUserById($_SESSION['id']);
					foreach ($account as $key => $value) {
						$this->nhadat_model->setLoginResult($value);
					}
					
					$this->load->view('success.php');
				}
			}
		}
		else $this->load->view('404_view');
	}

	function updateprofile()
	{
		if (isset($_SESSION['id'])) {
			$imgs = $_FILES["avatar"]["name"];
			$imgs_phys = $_FILES["avatar"]["tmp_name"];
			if(($imgs!="")){
					$target_file = 'uploads/' . $imgs;
					move_uploaded_file($imgs_phys, $target_file);
					$avatar = base_url(). $target_file;
				}
			else{
					$avatar= $this->input->post('avatar2');
			}

			$data = array(
				'name' => $this->input->post('name'),
				'diachi' => $this->input->post('diachi'),
				'phone' => $this->input->post('phone'),
				'avatar' => $avatar
			);
			if($this->nhadat_model->updateUserById($_SESSION['id'], $data))
				$this->load->view('success.php');
			else echo 'failure';
		}
		else $this->load->view('404_view');
	}

	function listpost()
	{
		if(isset($_SESSION['id'])){
			$data = $this->nhadat_model->getDataPostByIdUser($_SESSION['id']);

			$data = array('mangketqua' => $data);

			$this->load->view('mylist_view', $data, FALSE);
			
		}
		else $this->load->view('404_view');
	}

}

/* End of file Account.php */
/* Location: ./application/controllers/Account.php */