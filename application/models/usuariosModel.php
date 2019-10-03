<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuariosModel extends CI_Model {

	public function logarUsuario($email, $senha)
	{
        $this->db->where("userName",$email, "senha", $email);
        $this->db->where("senha", $senha);
        $resultado = $this->db->get("TB_Usuarios")->row_array();
        return $resultado;
	}
}
