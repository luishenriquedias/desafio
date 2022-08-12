<?php
require_once '../model/usuario.class.php';
require_once '../repository/usuario.repository.php';

if(isset($_POST['nome']) &&
isset($_POST['email']) &&
isset($_POST['usuario'])&&
isset($_POST['senha'])){
    
    $nome = $_POST['nome'] ;
    $email = $_POST['email'];
    $usuaria = $_POST['usuario'];
    $senha = $_POST['senha'];

    $user = new Usuario();
    $user->nome = $nome;
    $user->email = $email;
    $user->usuaria = $usuaria;
    $user->senha = $senha;
    
    $usuarioRepository = new UsuarioRepository();
    $resultado = $usuarioRepository->criaUsuario($user);

    if($resultado){
        header('location:../view/home.html');
    }else{
        echo "tudo errado";
    }
}else{
    header('location:./index.html');
}


