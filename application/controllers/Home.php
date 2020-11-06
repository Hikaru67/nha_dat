<?php 

	session_start();
    if(!isset($_SESSION['Loged'])){
        $_SESSION['Loged'] = false;
    }
     header("Access-Control-Allow-Origin: *");


if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	    

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('nhadat_model');		
	}

	public function index()
	{
		
		if(!isset($_SESSION['loged'])){
			$_SESSION['loged'] = false;
		}
		if(!isset($_SESSION['registed'])) $_SESSION['registed'] = false;
		//$data = array("mangketqua" => $data);
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
						//$this->nhadat_model->setLoginResult($value);
						//$_SESSION['typeKH'] = $value['typeKH'];
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

	function editpost($id)
	{
		if(isset($_SESSION['id'])){
			$data = $this->nhadat_model->getDataPostById($id);
			$data = array('mangketqua'=>$data);
			$this->load->view('editpost_view', $data, FALSE);
		}
		else $this->load->view('404_view');
	}

	function deletepost($id)
	{
		if(isset($_SESSION['id'])){
			
			if($this->nhadat_model->deleteDataPostById($id))
				$this->load->view('success.php');
			else echo 'failure';
		}
		else $this->load->view('404_view');
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

	function updatepost()
	{
		$imgs = $_FILES["BDS_image"]["name"];
		$imgs_phys = $_FILES["BDS_image"]["tmp_name"];
		if(($imgs!="")){
				$target_file = 'uploads/' . $imgs;
				move_uploaded_file($imgs_phys, $target_file);
				$BDS_image = base_url(). $target_file;
			}
		else{
				$BDS_image= $this->input->post('BDS_image2');
		}

		$new_data = array(
			'id' => $this->input->post('id'),
			'id_user' => $this->input->post('id_user'),
			'typeBDS' => $this->input->post('typeBDS'),
			'title' => $this->input->post('title'),
			'address' => $this->input->post('address'),
			'price' => $this->input->post('price'),
			'dientich' => $this->input->post('dientich'),
			'dientich_sd' => $this->input->post('dientich_sd'),
			'chitiet' => $this->input->post('chitiet'),
			'BDS_image' => $BDS_image
		);

		if($this->nhadat_model->updateDataPostById($this->input->post('id'), $new_data))
			$this->load->view('success.php');
		else echo 'failure';
	}

	function new_post()
	{
		if(isset($_SESSION['id'])){
			$typePost = $_GET['typePost'];
			if($_SESSION['typeKH'] == 'khach hang'){
				if($typePost!='post_can_mua' && $typePost != 'post_can_thue' ){
					$this->load->view('404_view');
				}
				else {$this->load->view('new_post_view');}
			}
			elseif ($_SESSION['typeKH'] == 'chu nha dat') {
				if($typePost!='post_ban' && $typePost != 'post_cho_thue' ){
					$this->load->view('404_view');
				}
				else $this->load->view('new_post_view');
			}
			else $this->load->view('new_post_view');
		}
		else $this->load->view('404_view');
		
	}

	function add_post()
	{
		if(isset($_SESSION['id'])){
			//lay dl tu view
			$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES["BDS_image"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
			    $check = getimagesize($_FILES["BDS_image"]["tmp_name"]);
			    if($check !== false) {
			        echo "File is an image - " . $check["mime"] . ".";
			        $uploadOk = 1;
			    } else {
			        echo "File is not an image.";
			        $uploadOk = 0;
			    }
			}

			if ($uploadOk == 0) {
			    echo "Sorry, your file was not uploaded.";
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["BDS_image"]["tmp_name"], $target_file)) {
			        //echo "The file ". basename( $_FILES["BDS_image"]["name"]). " has been uploaded.";
			    } else {
			        // echo "Sorry, there was an error uploading your file.";
			    }
			}

			$typeBDS = $this->input->post('typeBDS');
			if($typeBDS != 'dat'){
				$typeBDS = 'nha';
			}
			$id = $this->input->post('id');
			$id_user = $this->input->post('id_user');
			$typePost = $this->input->post('typePost');
			$title = $this->input->post('title');
			$address = $this->input->post('address');
			$price = $this->input->post('price');
			$dientich = $this->input->post('dientich');
			$dientich_sd = $this->input->post('dientich_sd');
			$chitiet = $this->input->post('chitiet');
			$BDS_image = base_url().'uploads/'.basename($_FILES["BDS_image"]["name"]);

			$data = array(
				'id' => $id,
				'id_user' => $id_user,
				'typeBDS' => $typeBDS,
				'typePost' => $typePost,
				'title' => $title,
				'address' => $address,
				'price' => $price,
				'dientich' => $dientich,
				'dientich_sd' => $dientich_sd,
				'chitiet' => $chitiet,
				'BDS_image' => $BDS_image
				);

			if ($this->nhadat_model->addDataPost($data)) {
				$this->load->view('success', $_SESSION, FALSE);
			} else {
				echo "Failed";
			}
		}
		else $this->load->view('404_view');
		
	}

	function changepassword()
	{
		$old_pass = $this->input->post('old_password');
		if ($old_pass == null) {
			$this->load->view('changepassword_view');
		}
		elseif ($old_pass != $_SESSION['password']) {
			$_SESSION['wrong_password'] = "Mật khẩu cũ không chính xác";
			$this->load->view('changepassword_view');
		}
		else {
			if ($this->input->post('password')!=$this->input->post('re_password')) {
				$_SESSION['re_pass'] = false;
				$this->load->view('changepassword_view');
			}
			else{
				$_SESSION['re_pass'] = true;
				$account = $this->nhadat_model->getUserById($_SESSION['id']);
				$new_pass = $this->input->post('password');
				if($this->nhadat_model->updatePasswordUser($_SESSION['username'], $new_pass)){
					$account = $this->nhadat_model->getUserById($_SESSION['id']);
					foreach ($account as $key => $value) {
						$_SESSION = $value;
					}
					
					$this->load->view('success.php');
				}
			}
		}
		
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

	function showPost2(){

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "nha_dat";

		$conn = new mysqli($servername, $username, $password, $dbname);

		if($conn->connect_error){
			die("Connection failed: " . $conn->connect_error);
		}

		$typePost = $_GET['typePost'];
		$typeBDS = $_GET['typeBDS'];

		$sql = "SELECT * from baiviet where typePost = '$typePost' and typeBDS = '$typePost'";

			if(isset($_POST['nhomthuoc'])){
				$nhomthuoc = $_POST['nhomthuoc'];

				$sql = "SELECT * from thuoc where nhomthuoc = '$nhomthuoc'";
			}
		
		$result = $conn->query($sql);
		$array = array('mangketqua' => $result);
		$this->load->view('showPost_view', $array, FALSE);
		
	}

	function showPost()
	{

		$address = $this->input->post('address');
		$typePost = $_GET['typePost'];

		$typeBDS = $_GET['typeBDS'];
		$dientich = $this->input->post('dientich');
		$price = $this->input->post('price');

		$data = $this->nhadat_model->getDataPost($typePost);
		$array = array();

		if($typeBDS != '0'){
			$array = $this->nhadat_model->getDataPost2($typePost, $typeBDS);
		}
		else{
			$array = $data;
		}

		if($address!=null){
			$temp = array();
			foreach ($array as $key => $value) {
				if (strpos(strtolower($value['address']), strtolower($address))) {
					array_push($temp, $value);
				}
			}
			$array = $temp;
		}

		if ($dientich!=null) {
			$temp = array();
			foreach ($array as $key => $value) {
				if ($value['dientich'] >= $dientich) {
					array_push($temp, $value);
				}
			}
			$array = $temp;
		}

		if ($price!=null) {
			$temp = array();
			foreach ($array as $key => $value) {
				if ($value['price'] <= $price) {
					array_push($temp, $value);
				}
			}
			$array = $temp;
		}

		$_SESSION['typeBDS'] = $typeBDS;
		$_SESSION['typePost'] = $typePost;
		$array = array('mangketqua' => $array);
		$this->load->view('showPost_view', $array, FALSE);
		
	}

	function chitiet($id)
	{

		$data = $this->nhadat_model->getDataPostById($id);

		//$data = array('mangketqua' => $data);

		foreach ($data as $key => $value) {
			$_SESSION['id_post'] = $value['id'];
			$_SESSION['id_user'] =  $value['id_user'];
			$_SESSION['typePost'] = $value['typePost'];
			$_SESSION['typeBDS'] = $value['typeBDS'];
			$_SESSION['title'] = $value['title'];
			$_SESSION['address'] = $value['address'];
			$_SESSION['price'] = $value['price'];
			$_SESSION['dientich'] = $value['dientich'];
			if (isset($value['dientich_sd'])) {
				$_SESSION['dientich_sd'] = $value['dientich_sd'];
			}
			else $_SESSION['dientich_sd'] = null;
			$_SESSION['chitiet'] = $value['chitiet'];
			$_SESSION['BDS_image'] = $value['BDS_image'];
			$account = $this->nhadat_model->getUserById($value['id_user']);
		}
		$account = array('mangketqua' => $account);
		$this->load->view('chitietPost_view', $account, FALSE);
		
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */