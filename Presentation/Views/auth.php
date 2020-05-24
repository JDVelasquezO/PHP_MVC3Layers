
<?php include_once "layouts/header.php"?>
<?php include_once "layouts/main.php"?>
    <br><br><br>
    <h1 class="is-size-3">Login</h1>
    <form action="../Controller/AuthController.php" method="post">
        <div class="field">
            <div class="control">
                <input autofocus class="input is-primary" name="email" type="email" placeholder="Correo">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <input class="input is-primary" name="pass" type="password" placeholder="Contraseña">
            </div>
        </div>
        <button class="button has-background-info has-text-white">Entrar</button>
    </form>
    <br><br><br><br><br><br><br>
<?php include_once "layouts/footer.php"?>
