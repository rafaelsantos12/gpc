<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restrict extends CI_Controller {
	
	public function __construct(){
        parent::__construct();
        $this->load->library("session");
    }

	public function index()
	{
		$data = array(
			"scripts" => array(
				"util.js",
				"login.js"
			)
		);
		$this->template->show('login.php', $data);
	}

	public function ajax_login(){
		$json = array();
		$json["status"] = 1;
		$json["error_list"] = array();

		$username = $this->input->post("username");
		$password = $this->input->post("password");

		if(empty($username)){
			$json["status"] = 0;
			$json["error_list"]["#username"] = "Usuário não pode ser vazio";
		} else{
			$this->load->model("users_model");
			$result = $this->users_model->get_users_data($username);
			if($result){
				$user_id = $result->codigo;
				$password_hash = $result->senha;
				if(password_verify($password, $password_hash)){
					$this->session->set_userdata("usuario", $user_id);
				} else{
					$json["status"] = 0;
				}
			} else{
				$json["status"] = 0;
			}

			if ($json["status"] = 0){
				$json["status"]["#btn_login"] = "Usuário e /ou senha incorretos!"; 
			}
		}

		echo json_encode($json);
	}
}