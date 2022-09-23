<?php

session_start();

require_once "repository/FilmesRepositoryPDO.php";
require_once "model/Filme.php";

$filmesRepository = new FilmesRepositoryPDO();
$filme = new Filme();

$filme->titulo =  $_POST['titulo'];
$filme->sinopse = $_POST['sinopse'];
$filme->nota = $_POST['nota'];
$filme->poster = $_POST['poster'];

 if ($filmesRepository->salvar($filme)){
    $_SESSION["msg"] = "Filme cadastrado com sucesso!";
 } else {
   $_SESSION["msg"] = "Erro ao cadastrar Filme!";
 }

 header("Location: cadastrar.php");


