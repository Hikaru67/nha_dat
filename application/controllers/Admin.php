<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
    if(!isset($_SESSION['admin'])){
        $_SESSION['admin'] = false;
    }
class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('nhadat_model');

		if (!isset($_SESSION['wrongad'])) {
			$_SESSION['wrongad'] = null;
		}

		if(!isset($_SESSION['adid'])){
			$_SESSION['adid'] = false;
		}
	}

	public function index()
	{
		
		if($_SESSION['adid']){
			$data = $this->nhadat_model->getAllUser();
				$data = array('mangketqua' => $data);
				$this->load->view('admin2_view', $data, false);
		}

		else{
			$user = $this->input->post('user');
			$pass = $this->input->post('pass');
			$data = $this->nhadat_model->getAdByUser($user);
			if($user==null){
				$_SESSION['wrongad'] = null;
				$this->load->view('admin_view');
			}else{
				if($data == null){
					$_SESSION['wrongad'] = "Tài khoản hoặc mật khẩu không chính xác";
					$this->load->view('admin_view');
				}
				else{
					foreach ($data as $key => $value) {
						if($user == $value['adusername']){
							if($pass == $value['adpassword']){
								$_SESSION = $value;
								//$this->nhadat_model->setAdLogin($value);
								// $_SESION['admin'] = true;
								// $_SESSION['name'] = $value['name'];
								$data = $this->nhadat_model->getAllUser();
								$data = array('mangketqua' => $data);
								$this->load->view('admin2_view', $data, false);
							}
							else{
								$_SESSION['wrongad'] = "Tài khoản hoặc mật khẩu không chính xác";
								$this->load->view('admin_view');
							}
						}
						else{
							$_SESSION['wrongad'] = "Tài khoản hoặc mật khẩu không chính xác";
							$this->load->view('admin_view');
						}
					}
					
				}
			}
			
		}
		
	}

	function changepass()
	{
		if($_SESSION['adid']){
			$old_pass = $this->input->post('old_pass');
			if($old_pass == null){
				$_SESSION['wrong_adpassword'] = false;
				$_SESSION['re_pass'] = false;
				$this->load->view('admin4_view');
			}
			else{
				if($old_pass != $_SESSION['adpassword']){
					$_SESSION['wrong_adpassword'] = "Mật khẩu cũ không chính xác";
					$this->load->view('admin4_view');
				}
				else{
					$pass = $this->input->post('pass');
					if($pass != $this->input->post('re_pass')){
						$_SESSION['re_pass'] = "Nhập lại mật khẩu không chính xác";
						$this->load->view('admin4_view');
					}
					else{
						$this->nhadat_model->updatePasswordAd($_SESSION['adid'], $pass);
						session_unset();
						$this->load->view('admin_view');
					}
				}
			}
			
		}
		else $this->load->view('404_view');
	}

	function logout()
	{
		if($_SESSION['adid']){
			$this->nhadat_model->setAdLogout();
			session_unset();
			$this->load->view('admin_view');
		}
		else $this->load->view('404_view');
	}

	function usermanagement()
	{	
		if($_SESSION['adid']){
			$data = $this->nhadat_model->getAllUser();
			$data = array('mangketqua' => $data);
			$this->load->view('admin2_view', $data, false);
		}
		else $this->load->view('404_view');
	}

	function adduser()
	{
		$user = $this->input->post('username');
		$account = $this->nhadat_model->getUser($user);
		if($account != null){
			$data = $this->nhadat_model->getAllUser();
			$data = array('mangketqua' => $data);
			$this->load->view('admin2_view', $data, false);
		}

		else{
			
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
			$data = $this->nhadat_model->getAllUser();
			$data = array('mangketqua' => $data);
			$this->load->view('admin2_view', $data, false);
			

		}
	}

	function edituser($id)
	{
		if($_SESSION['adid']){
			$imgs = $_FILES["avatar"]["name"];
			$imgs_phys = $_FILES["avatar"]["tmp_name"];
			if(($imgs!="")||$imgs!=null){
					$target_file = 'uploads/' . $imgs;
					move_uploaded_file($imgs_phys, $target_file);
					$avatar = base_url(). $target_file;
				}
			else{
					$avatar = $this->input->post('avatar2');
			}

			$account = array(
			'username' =>  $this->input->post('username'),
			'password' => $this->input->post('password'),
			'name' => $this->input->post('name'),
			'ngaysinh' => $this->input->post('ngaysinh'),
			'diachi' => $this->input->post('diachi'),
			'phone' => $this->input->post('phone'),
			'avatar' => $avatar
			);
			$this->nhadat_model->updateUserById($id, $account);
			$data = $this->nhadat_model->getAllUser();
			$data = array('mangketqua' => $data);
			$this->load->view('admin2_view', $data, false);
		}
		else $this->load->view('404_view');
	}

	function deleteuser($id)
	{
		if($_SESSION['adid']){
			$this->nhadat_model->delUserById($id);
			$data = $this->nhadat_model->getAllUser();
			$data = array('mangketqua' => $data);
			$this->load->view('admin2_view', $data, false);
		}
		else $this->load->view('404_view');
	}

	function postmanagement()
	{
		if($_SESSION['adid']){
			$data = $this->nhadat_model->getAllDataPost();
			$data = array('mangketqua' => $data);
			$this->load->view('admin3_view', $data,  false);
		}
		else $this->load->view('404_view');
	}

	function deletepost($id)
	{
		if($_SESSION['adid']){
			$this->nhadat_model->deleteDataPostById($id);
			$data = $this->nhadat_model->getAllDataPost();
			$data = array('mangketqua' => $data);
			$this->load->view('admin3_view', $data, false);
		}
		else $this->load->view('404_view');
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */