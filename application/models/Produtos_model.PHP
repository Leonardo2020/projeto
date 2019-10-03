<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos_model extends CI_Controller 
{
	public function getProdutos()
	{
		$query  =  $this->db->get( "produtos" );
        return  $query->result();
	}

	public function addProduto( $dados = NULL )
	{
		if ( $dados  !=  NULL ):
		$this->db->insert( 'produtos' , $dados );		
	endif ;
	}
}
