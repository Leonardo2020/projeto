<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap core CSS -->
    <link href="node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">   

    <title>Faça seu Login</title>
</head>
<body class="bg-warning">

    <div class="mt-5">
        <div class="w-50 h-80 p-2 mx-auto bg-white">
            <h1 class="text-center text-dark">BEM-VINDO</h1>
            <h2 class="text-center text-dark">FAÇA SEU LOGIN</h2>
            <form action="<?php echo 'Login/validarLogin';?>" method="POST" id="login" class="form-group">
              

                <div class="row mt-5">
                    <div class="col-8 mx-auto">
                        <input class="form-control" type="text"
                    placeholder="Digite aqui seu usuário" name="user" id="user">
                    </div>
                </div>
              
                <div class="row mt-3 mb-5">
                    <div class="col-8 mx-auto">
                        <input class="form-control" type="password" 
                        placeholder="Digite aqui sua senha" name="pass" id="pass">
                    </div>
                </div>

                <div class="form-row col-10 mx-auto mt-5">
                    <button class="btn btn-outline-warning col-5 mx-auto" type="submit">ENTRAR</button>
                </div>
                <div>
                </div>
            </form>
        </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script> 

</body>
</html>