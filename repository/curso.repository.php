<?php

require_once '../data/conexao.data.php';
require_once '../model/curso.class.php';

class UsuarioRepository{
    private $conexao;

    public function __construct(){
        $this->conexao = Conexao::getInstancia();
    }
    
    public function criaCurso($curso){
        $operacao = $this->conexao->prepare(
            'INSERT INTO curso(nome, info, img) Values(?, ?, ?)'
        );

        $operacao->bindValue(1, $curso->nome);
        $operacao->bindValue(2, $curso->info);
        $operacao->bindValue(3, $curso->img);

        return $operacao->execute();
    }
}