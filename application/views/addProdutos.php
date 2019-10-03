<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Cadastro de produtos</title>

    <!-- Bootstrap core CSS -->
    <link href="../node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">    
    
  </head>

  <body>   

    <div  class="container">

      <div  class="row">
                
        <h1 class="mx-auto mt-4"> Cadastro de produto </h1>         
      </div>
      <div class="row">

        <form  action="../produtos/salvar " name="form_add" method="post" class="form-group border mt-3 p-3 mx-auto">

          <div class="row mt-3">
            <div class="col-12 mx-auto">
              <label> Nome </label>
              <input  type="text"  name="nome"  value=" " class="form-control">
            </div>
          </div> 

          <div  class="row mt-3">
            <div  class="col-6 mx-auto">
              <label>Peso</label>
              <input  type="text"  name="peso" value = " "  class="form-control" placeholder="1.5">
            </div>
            
            <div  class="col-6 mx-auto">
              <label>Preço</label>
              <input  type="text"  name="preco" value = " "  class="form-control" placeholder="2.99">
            </div>

          </div>

          <div class="row mt-5">
            <div class="col-md-8 ml-auto">
              <button class="btn btn-outline-warning col-5" type="submit">SALVAR</button>
            </div>
          </div> <!-- fim do botão enviar (enviar) formulário -->
          

        </form> <!-- Fim de novo cadastro   -->

      </div>
        <div class="row float-right">
          <button type="button" class="bt btn-lg btn-danger" onClick="JavaScript: window.history.back();">SAIR</button>
        </div>
    </div> <!-- /.container -->


    <!-- JavaScript básico do Bootstrap
    ==================================================== -->
    <!-- Posicionado no final do documento para que as páginas sejam carregadas mais rapidamente -->
    <script  src = " https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js " > </script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>  
</body>
</html>