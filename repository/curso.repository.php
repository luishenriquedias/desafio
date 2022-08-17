<?php

require_once '../data/conexao.data.php';
require_once '../model/curso.class.php';

class CursoRepository{
    private $conexao;
    private $curso;

    public function __construct(){
        $this->conexao = Conexao::getInstancia();
        $this->curso = new Curso;
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

    public function criaCurso($nome, $info, $idUsuario){
        $this->curso->nome = $nome;
        $this->curso->info = $info;
        $this->curso->idUsuario = $idUsuario;
        $operacao = $this->conexao->prepare(
            "INSERT INTO curso (nome, info, idUsuario) VALUES (':nome', ':info', ':idUsuario')"
        );

        $operacao->bindValue(':nome', $nome);
        $operacao->bindValue(':info', $info);
        $operacao->bindValue('idUsuario', $idUsuario);

        return $operacao->execute();
    }

}