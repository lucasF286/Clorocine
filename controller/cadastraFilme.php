<?php

session_start();

require_once "../repository/FilmesRepositoryPDO.php";
require_once "../model/Filme.php";

$filmesRepository = new FilmesRepositoryPDO();
$filme = new Filme();

$filme->titulo =  $_POST['titulo'];
$filme->sinopse = $_POST['sinopse'];
$filme->nota = $_POST['nota'];

$upload = savePoster($_FILES["poster_file"]);

if(gettype($upload) === "string") {
  $filme->poster = $upload;
} else {
  $filme->poster = "../imagens/posters/default.jpg";
}

 if ($filmesRepository->salvar($filme)){
    $_SESSION["msg"] = "Filme cadastrado com sucesso!";
 } else {
   $_SESSION["msg"] = "Erro ao cadastrar Filme!";
 }

 header("Location: ../view/cadastrar.php");

 function savePoster ($file) {
  $posterDir = "../imagens/posters/";
  $posterPath = $posterDir . basename($file["name"]); 
  $posterTmp = $file["tmp_name"];
  
  if(str_contains($file["type"], "imagem")){
    if(move_uploaded_file($posterTmp, $posterPath)) {
      return $posterPath;
    } else {
      return false;
    }
  }
 }









