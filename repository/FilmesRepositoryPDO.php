<?php

require_once "../db/db.class.php";
require_once "Conexao.php";

class FilmesRepositoryPDO {
    public $conexao;

    public function __construct()
    {
        $this->conexao = Conexao::criar();
    }

    public function listarTodos() : array
    {
        $filmesLista = [];

        $sql = "SELECT * FROM filme";

        $retorno = mysqli_query($this->conexao, $sql);

        while($filme = mysqli_fetch_array($retorno, MYSQLI_ASSOC)){
            array_push($filmesLista, $filme);
        }

        return $filmesLista;
    }

    public function salvar(Filme $filme) : bool
    {
         $sql = "INSERT INTO FILME(titulo, poster, sinopse, nota) values
         ('{$filme->titulo}', '{$filme->poster}', '{$filme->sinopse}', '{$filme->nota}')";

         return mysqli_query($this->conexao, $sql);
    }
}