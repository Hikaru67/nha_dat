<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Nhadat_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	function getLoginResult()
	{
		$this->db->select('*');
		$data = $this->db->get('LoginResult');
		$data = $data->result_array();
		return $data;
	}

	// function setLoginResult($id, $name, $ngaysinh, $diachi ,$phone)
	// {
	// 	// $this->db->where('id', $id);
	// 	$data = array(
	// 		'id' => $id,
	// 		'name' => $name,
	// 		'ngaySinh' => $ngaysinh,
	// 		'diachi' => $diachi,
	// 		'phone' => $phone,
	// 		'Loged' => '1'
	// 	);

	// 	$this->db->update('LoginResult', $data);
	// }

	function setLoginResult($data)
	{
		// $this->db->where('id', $id);
		$this->db->update('LoginResult', $data);
	}

	function setLogoutResult()
	{
		$data = array(
			'id' => null,
			'username' => null,
			'password' => null,
			'typeKH' => null,
			'name' => null,
			'ngaySinh' => null,
			'diachi' => null,
			'phone' => null
		);

		$this->db->update('LoginResult', $data);
	}

	function getAdLogin()
	{
		$this->db->select('*');
		$data = $this->db->get('adloginresult');
		$data = $data->result_array();
		return $data;
	}

	// function setAdLogin($data)
	// {
	// 	$this->db->update('adloginresult', $data);
	// }

	function setAdLogout()
	{
		$data = array(
			'id' => null,
			'name' => null,
			'username' => null,
			'password' => null,
		);
		$this->db->update('adloginresult', $data);
	}

	function updatePasswordAd($id, $pass)
	{
		$this->db->where('adid', $id);
		$data = array(
			'adpassword' => $pass
		);
		$this->db->update('adminuser', $data);
	}

	function getAdByUser($user)
	{
		$this->db->where('adusername', $user);
		$data = $this->db->get('adminuser');
		$data = $data->result_array();
		return $data;
	}

	function getAllUser()
	{
		$this->db->select('*');
		$data = $this->db->get('khachhang');
		$data = $data->result_array();
		return $data;
	}

	function getUser($user)
	{
		$this->db->select('*');
		$this->db->where('username', $user);
		$data = $this->db->get('khachhang');
		$data = $data->result_array();
		return $data;
	}

	function getUserById($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		$data = $this->db->get('khachhang');
		$data = $data->result_array();
		return $data;
	}

	function updateUserById($id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update('khachhang', $data);
	}

	function delUserById($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('khachhang');
	}

	function updateDataUser($data)
	{
		return $this->db->update('khachhang', $data);
	}

	function updatePasswordUser($user,$pass)
	{
		$this->db->where('username', $user);
		$data = array(
			'password' => $pass
		);
		return $this->db->update('khachhang', $data);
	
	}

	function addUser($data)
	{
		$this->db->insert('khachhang', $data);
	}

	function addDataPost($data)
	{
		return $this->db->insert('baiviet', $data);	
	}

	function getAllDataPost()
	{
		$this->db->select('*');
		$data = $this->db->get('baiviet');
		$data = $data -> result_array();
		return $data;
	}
	
	function getDataPost($typePost)
	{
		$this->db->select('*');
		$this->db->where('typePost', $typePost);
		$data = $this->db->get('baiviet');
		$data = $data -> result_array();
		return $data;
	}

	function getDataPost2($typePost, $typeBDS)
	{
		$this->db->select('*');
		$this->db->where('typePost', $typePost);
		$this->db->where('typeBDS', $typeBDS);
		$data = $this->db->get('baiviet');
		$data = $data -> result_array();
		return $data;
	}

	function getDataPostById($id)
	{
		$this->db->select('*');
		$this->db->where('id', $id);
		$data = $this->db->get('baiviet');
		$data = $data -> result_array();
		
		return $data;
	}

	function getDataPostByIdUser($id_user)
	{
		$this->db->select('*');
		$this->db->where('id_user', $id_user);
		$data = $this->db->get('baiviet');
		$data = $data -> result_array();
		
		if($data == null){
			return null;
		}

		return $data;
	}

	function deleteDataPostById($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('baiviet');
	}

	function updateDataPostById($id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update('baiviet', $data);
	}

	public function updateDataPost($typePost, $dataupdate)
	{
		$chuanbidulieu = array(
			'namePost' => $typePost, 
			'valuePost' => $dataupdate
			);
		$this->db->where('namePost', $typePost);
		return $this->db->update('posts', $chuanbidulieu);
	}


}

/* End of file nhadat_model.php */
/* Location: ./application/models/nhadat_model.php */