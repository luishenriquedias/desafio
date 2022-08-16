<?php

require_once '../model/curso.class.php';
require_once '../repository/curso.repository';
require_once '../repository/usuario.repository.php';
require_once '../model/usuario.class.php';



$nomeCurso = $_POST['nome'];
$infoCurso = $_POST['info'];

$novoCurso = new Curso();
$novoCurso->$nome = $nomeCurso;
$novoCurso->info = $infoCurso;
$novoCurso->idUsuario = $idUsuario; 

$UsuarioRepository = new UsuarioRepository();
$usuario = $UsuarioRepository->recuperaUsuario($usuario->idusuario);

$cursoRepository = new CursoRepository();
$resultado = $cursoRepository->criaCurso($nomeCurso, $infoCurso, $usuario->idusuario);

if($resultado){
    var_dump($resultado);
}else{
    echo " deu ruim";
}