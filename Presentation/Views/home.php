<?php

    require_once "../Controller/HomeController.php";

    $id = $_GET['idUser'];
    $user = getUserById($id);
    $name = $user->getNameUser();

?>

<?php include_once "layouts/header.php"?>
<?php include_once "layouts/main.php"?>
    <h1 class="is-size-3">Hola <?= $name; ?></h1>

    <nav class="panel">
        <p class="panel-heading">
            Repositories
        </p>
        <div class="panel-block">
            <p class="control has-icons-left">
                <input class="input" type="text" placeholder="Search">
                <span class="icon is-left">
            <i class="fas fa-search" aria-hidden="true"></i>
          </span>
            </p>
        </div>
        <p class="panel-tabs">
            <a class="is-active">All</a>
            <a>Public</a>
            <a>Private</a>
            <a>Sources</a>
            <a>Forks</a>
        </p>
        <a class="panel-block is-active">
        <span class="panel-icon">
          <i class="fas fa-book" aria-hidden="true"></i>
        </span>
            bulma
        </a>
        <a class="panel-block">
        <span class="panel-icon">
          <i class="fas fa-book" aria-hidden="true"></i>
        </span>
            marksheet
        </a>
        <a class="panel-block">
        <span class="panel-icon">
          <i class="fas fa-book" aria-hidden="true"></i>
        </span>
            minireset.css
        </a>
        <a class="panel-block">
        <span class="panel-icon">
          <i class="fas fa-book" aria-hidden="true"></i>
        </span>
            jgthms.github.io
        </a>
        <a class="panel-block">
        <span class="panel-icon">
          <i class="fas fa-code-branch" aria-hidden="true"></i>
        </span>
            daniellowtw/infboard
        </a>
        <a class="panel-block">
        <span class="panel-icon">
          <i class="fas fa-code-branch" aria-hidden="true"></i>
        </span>
            mojs
        </a>
        <label class="panel-block">
            <input type="checkbox">
            remember me
        </label>
        <div class="panel-block">
            <button class="button is-link is-outlined is-fullwidth">
                Reset all filters
            </button>
        </div>
    </nav>
<?php include_once "layouts/footer.php"?>
