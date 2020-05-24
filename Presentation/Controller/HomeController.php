<?php

require_once "../../LogicBusiness/User_Logic.php";

function getUserById($id) {
    $userLogic = new User_Logic();
    return $userLogic->GetUserById($id);
}
