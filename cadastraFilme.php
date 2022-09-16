<?php 

require_once "db.class.php";

$titulo = $_POST['titulo'];
$sinopse = $_POST['sinopse'];
$nota = $_POST['nota'];
$capa = $_POST['capa'];

$objDb = new db();
$link = $objDb->conecta_myslq();

$sql = "INSERT INTO FILME(titulo, poster, sinopse, nota) values
 ('{$titulo}', '{$capa}', '{$sinopse}', '{$nota}')";

 if (mysqli_query($link, $sql)){
    $retornoGet = 'retorno=1&';
    header("Location: cadastrar.php?".$retornoGet);
 } else {
    $retornoGet = 'retorno=0&';
    header("Location: cadastrar.php?".$retornoGet);
 }



