<?php

require_once '../model/curso.class.php';
require_once '../repository/curso.repository';
require_once '../repository/usuario.repository.php';
require_once '../model/usuario.class.php';
session_start();


$nomeCurso = $_POST['nome'];
$infoCurso = $_POST['info'];


$UsuarioRepository = new UsuarioRepository();
$usuario = $UsuarioRepository->recuperaUsuario($usuario->idusuario);

$cursoRepository = new CursoRepository();
$resultado = $cursoRepository->criaCurso($nomeCurso, $infoCurso, $usuario->idusuario);

if($resultado){
    var_dump($resultado);
}else{
    echo " deu ruim";
}