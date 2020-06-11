<?php 
include_once "./app/conexao/Conexao.php";
include_once "./app/dao/UsuarioDAO.php";
include_once "./app/model/Usuario.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>CRUD Simples PHP 2</title>
    <style>
        body{
            background-color: #bbb;
        }
        .row{
            padding: 10px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">
        CRUD PHP POO
  </a>
</nav>
<div class="container">
        <div class="row">
            <div class="col-md-3">
                <label>Nome</label>
                <input type="text" name="nome" value="" class="form-control" require />
            </div> 
            <div class="col-md-5">
                <label>Sobrenome</label>
                <input type="text" name="sobrenome" value="" class="form-control" require />
            </div>
            <div class="col-md-2">
                <label>Idade</label>
                <input type="number" name="idade" value="" class="form-control" require />
            </div>
            <div class="col-md-2">
                <label>Sexo</label>
                <select name="sexo" class="form-control">
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                </select>
            </div>
            <hr>
        </div>

</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>