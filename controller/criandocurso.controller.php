<?php

require_once '../model/curso.class.php';
require_once '../repository/curso.repository.php';
require_once '../repository/usuario.repository.php';
require_once '../model/usuario.class.php';


if(isset($_POST['nome']) &&
isset($_POST['infos'])){
   
    $nomeCurso = $_POST['nome'];
    $infoCurso = $_POST['infos'];


    $UsuarioRepository = new UsuarioRepository();
    $usuario = $UsuarioRepository->recuperaUsuario($usuario->idusuario);

    $cursoRepository = new CursoRepository();
    $resultado = $cursoRepository->criaCurso($nomeCurso, $infoCurso, $usuario->idusuario);

    if ($resultado) {
        var_dump($resultado);
    } else {
        echo " deu ruim";
    }
}else{
    echo "nao deu";
}

