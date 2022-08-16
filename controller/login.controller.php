<?php

if(isset($_POST['usuario']) &&
isset($_POST['senha'])){

    $usuaria = $_POST['usuario'];
    $senha = $_POST['senha'];

        require_once '../model/usuario.class.php';
        require_once '../repository/usuario.repository.php';

        $user = new Usuario();
        $user->usuaria = $usuaria;
        $user->senha = $senha;

        $usuarioRepository = new UsuarioRepository();
        $usuarioLogado = $usuarioRepository->recuperaUsuario($user);

        if($usuarioLogado == null){
            header('location:./index.html');
        }else{
            header('location:../view/home.php');
        }
       

}else{
    header('location./index.html');
}