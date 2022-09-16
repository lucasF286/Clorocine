<?php include "cabeçalho.php"  ?>

<?php
require_once "db.class.php";

$objDb = new db();
$link = $objDb->conecta_myslq();

$sql = "SELECT * FROM filme";

$retorno = mysqli_query($link, $sql);

?>

<body>

    <nav class="nav-extended purple lighten-3">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li class="active"><a href="galeria.php">Galeria</a></li>
                <li><a href="cadastrar.php">Cadastrar</a></li>
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

        <?php while($filme = mysqli_fetch_array($retorno, MYSQLI_ASSOC)) : ?>

        <div class="col s3">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="<?= $filme["poster"] ?>">
                    <a class="btn-floating halfway-fab waves-effect waves-light red">
                        <i class="material-icons">favorite_border</i>
                    </a>
                </div>
                <div class="card-content">
                    <p class="valign-wrapper">
                        <i class="material-icons amber-text">star</i> <?= $filme["nota"] ?>
                    </p>
                    <span class="card-title"><?= $filme["titulo"] ?></span>
                      <p>
                      <?= $filme["sinopse"] ?>
                      </p>
                </div>
            </div>
        </div>

        <?php endwhile ?>
    </div>

</body>

</html>