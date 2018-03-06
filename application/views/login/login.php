<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $titulo; ?></title>
	
	<link href="css/bootstrap.min.css" rel="stylesheet">

</head>
<body align="center">	

    
    <div class="col-sm-4"></div>
    <div align="center" class="row">
    <div stile="width:50%; margin:250%" class="col-sm-4">
          <div align="center" class="panel panel-default">
            <div align="center" class="panel-heading">
                <h3 class="panel-title"><font color="#696969">Sistema de Gestão de Contratos da FAPEAM</font></h3>
            </div>
            <div align="center" class="panel-body">
                    <input name="usuario" type="input" class="form-control" placeholder="Usuário" required autofocus>
                    <input name="senha" type="password" class="form-control" placeholder="Senha" required>

                    <button class="btn btn-lg btn-primary" type="submit">Fazer Login</button>
                   
            </div>
          </div>
        </div>       
   
    </div>
    <div class="col-sm-4"></div>   
 
    
    
    


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>