<?php

    include_once "../../LogicBusiness/User_Logic.php";

    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $userLogic = new User_Logic();
    $result = $userLogic->AuthUser($email, $pass);

    if ($result === 'false'){
        echo "Los datos son incorrectos, intenta de nuevo";
    } else {
        $id = $result->getIdUser();
        session_start();
        $_SESSION['user'] = $id;
        header("location: ../Views/home.php");
    }
