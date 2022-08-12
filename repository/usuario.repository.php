<?php

require_once '../data/conexao.data.php';
require_once '../model/usuario.class.php';

class UsuarioRepository{
    private $conexao;

    public function __construct(){
        $this->conexao = Conexao::getInstancia();
    }

    public function criaUsuario($usuario){
        $operacao = $this->conexao->prepare(
            'INSERT INTO usuario(nome, email, usuaria, senha) VALUES(?, ?, ?, ?)'
        );

        $operacao->bindValue(1, $usuario->nome);
        $operacao->bindValue(2, $usuario->email);
        $operacao->bindValue(3, $usuario->usuaria);
        $operacao->bindValue(4, $usuario->senha);

        return $operacao->execute();

    }

    public function recuperaUsuario($usuario){
        $operacao = $this->conexao->prepare(
            'SELECT * FROM usuario WHERE usuaria = ? AND senha = ?'
        );

        $operacao->bindValue(1, $usuario->usuaria);
        $operacao->bindValue(2, $usuario->senha);


        $resultado = $operacao->execute();

        if($resultado){
            return $operacao->fetchObject('Usuario');
        }else{
            return null;
        }

    }
    
}

