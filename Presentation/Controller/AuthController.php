<?php

    include_once "../../LogicBusiness/User_Logic.php";

    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $userLogic = new User_Logic();
    $result = $userLogic->AuthUser($email, $pass);

    if ($result === 'false'){
        header("location: ../Views/errors/errorData.php");
    } else {
        $id = $result->getIdUser();
        session_start();
        $_SESSION['user'] = $id;
        header("location: ../Views/home.php");
    }
