<?php

class Users_model extends CI_Model{

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function get_users_data($user_login){
        $this->db
            ->select("codigo, nome, senha, repita_senha, tipo_usuario")
            ->from("usuario")
            ->where("usuario", $user_login);

            $result= $this->db->get();

            if($result->num_rows() > 0){
                return $result->row();
            }else{
                return NULL; 
            }
    }
}