<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Lista de produtos</title>

    <!-- Bootstrap core CSS -->
    <link href="../node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">     

  </head>

  <body>    

    <div class="container">

      <div class="row">
        <h1 class="mx-auto mt-4">Lista de produtos</h1>
      </div>
      
      <div class="row">
        <table class="table table-bordered">
            
            <thead>
                <tr class="bg-warning" >
                  <th class="text-center">Produto</th>
                  <th class="text-center">Preço</th>
                  <th class="text-center">Peso</th>
                </tr>
            </thead>

            <?php
               
                foreach ($produtos as $produto)
                {        
                    echo '<tr>';
                      echo '<td class="text-center">'.$produto->nome.'</td>'; 
                      echo '<td class="text-center">R$: '.$produto->preco.'</td>'; 
                      echo '<td class="text-center">'.$produto->peso.' Kg</td>'; 
                    echo '</tr>';
                
                }
            ?>

        </table>

        <div class="row ml-auto">
          <button type="button" class="bt btn-lg btn-danger" onClick="JavaScript: window.history.back();">SAIR</button>
        </div>

      </div>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>    
  </body>
</html>
