<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller 
{
	public function index()
	{
		// Carregar o Model Produto
		$this->load->model ( 'produtos_model' , 'produtos' );			
		// Criamos um array dados para armazéns os produtos
		// Executamos uma função no produtos_model getProdutos
		$data ['produtos'] =  $this->produtos->getProdutos();
		// Carrega uma exibição listarprodutos e senhas como parâmetros de uma matriz produtos que guarda todos os produtos da db produtos
		$this->load->view ('listarprodutos' , $data );
	}

	public function add()
	{
		// Carrega o Model Produtos				
		$this->load->model ( 'produtos_model' , 'produtos' );					
		// Carrega a View
		$this->load->view ( 'addprodutos' );
	}

	public function salvar()
	{
		// Verifica se foi passado ou nome de campo vazio.
		if ( $this->input->post ( 'nome' ) ==  NULL ) {
			echo  ' O nome do produto é obrigatório. ' ;
			echo  ' <a href="/produtos/add" title="voltar"> Voltar </a> ' ;
		} else {
			// Carrega o Model Produtos				
			$this->load->model ( 'produtos_model' , 'produtos' );
			// Pega dados do post e guarda na matriz $ dados
			$dados [ 'nome' ] =  $this->input->post ( 'nome' );
			$dados [ 'preco' ] =  $this->input->post ( 'preco' );
			$dados [ 'peso' ] =  $this->input->post ( 'peso' );		
			
			// Executa a função do produto_model adicionar
			$this->produtos->addProduto ( $dados );
			// Faz um redicionamento para uma página 
			echo "<script>
					alert('DADOS SALVO COM SUCESO!');
				 </script>";
			$this->load->view ( 'addprodutos' );
		}	
	}
}
