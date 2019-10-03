<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view ('login');
		
    }
    
    public function validarLogin(){
        $this->load->model("usuariosModel");
        $usuario = $this->input->post("user");
        $senha = $this->input->post("pass");
        if(empty($usuario)){
            echo "ErroEmail";
            die();
        }
        if(empty($senha)){
            echo "ErroSenha";
            die();
        }
        $usuario = $this->usuariosModel->logarUsuario($usuario, $senha); 
       // var_dump($usuario["tipo"]);

        if($usuario["tipo"] !="adm"){
            // Carregar o Model Produto
        $this->load->model ( 'produtos_model' , 'produtos' );           
        // Criamos um array dados para armazéns os produtos
        // Executamos uma função no produtos_model getProdutos
        $data ['produtos'] =  $this->produtos->getProdutos();
        // Carrega uma exibição listarprodutos e senhas como parâmetros de uma matriz produtos que guarda todos os produtos da db produtos
        $this->load->view ('listarprodutos' , $data );
        }else{
            
           $this->load->view ( 'addprodutos' );
        }
    }

}
