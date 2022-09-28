<?php include "cabeçalho.php" ?>

<?php

session_start();
require_once "../util/Mensagem.php";

?>

<body>

    <nav class="nav-extended  purple lighten-3">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li><a href="index.php">Galeria</a></li>
                <li class="active"><a href="cadastrar.php">Cadastrar</a></li>
            </ul>
        </div>
        <div class="nav-header center">
            <h1>CLOROCINE</h1>
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent purple darken-1">
                <li class="tab"><a class="active" href="#test1">Todos</a></li>
                <li class="tab"><a href="#test2">Assistidos</a></li>
                <li class="tab"><a href="#test3">Favoritos</a></li>
            </ul>
        </div>
    </nav>

    <div class="row">
        <div class="col s6 offset-s3">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Cadastrar Filme</span>

                    <form method="post" action="../controller/cadastraFilme.php" enctype="multipart/form-data" id="cadastraFilme">
                        <!-- input titulo -->
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="titulo" type="text" class="validate" name="titulo" required>
                                <label for="titulo">Título do filme</label>
                            </div>
                        </div>

                        <!-- input sinopse -->
                        <div class="row">
                            <div class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <textarea id="sinopse" class="materialize-textarea" name="sinopse"></textarea>
                                        <label for="sinopse">Sinopse</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--  input nota -->
                        <div class="row">
                            <div class="input-field col s3">
                                <input id="nota" type="number" step=".1" min=0 max=10 class="validate" name="nota" required>
                                <label for="nota">Nota</label>
                            </div>
                        </div>

                        <!-- input capa -->

                        <div class="file-field input-field">
                            <div class="btn purple lighten-2 black-text">
                                <span>Capa</span>
                                <input type="file" name="poster_file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="file-path validate" type="text" name="poster">
                            </div>
                        </div>

                </div>
                <div class="card-action">
                    <a class="waves-effect waves-light btn grey" href="galeria.php">Cancelar</a>
                    <button type="submit" class="waves-effect waves-light btn purple">Cadastrar</button>
                </div>

                </form>
            </div>
        </div>
    </div>

    <?= Mensagem::mostrar() ?>

</body>