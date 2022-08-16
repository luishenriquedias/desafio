<?php

    require_once '../model/usuario.class.php';
    require_once '../model/curso.class.php';
    require_once '../repository/curso.repository.php';


    $cursoRepository = new CursoRepository();
    $resultado = $cursoRepository->recuperaCurso();

    if($resultado){
        header('location../view/home.php');
    }else{

    }

    

