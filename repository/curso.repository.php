<?php

require_once '../data/conexao.data.php';
require_once '../model/curso.class.php';

class CursoRepository{
    private $conexao;

    public function __construct(){
        $this->conexao = Conexao::getInstancia();
    }
    
    public function recuperaCurso(){
        $operacao = $this->conexao->prepare(
            'SELECT curso.nome, curso.info, curso.id, usuario.usuaria FROM usuario INNER JOIN curso ON curso.idUsuario = usuario.idusuario'
        );

        
        $resultado = $operacao->execute();

        if($resultado){
            $cursos = $operacao->fetchAll(PDO::FETCH_CLASS, 'Curso'  );
            return $cursos;
        }else{
            return [];
        }
    }

}