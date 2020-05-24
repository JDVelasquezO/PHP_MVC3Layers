<?php

$_SESSION['user'] = null;
session_destroy();

header("location: ../Views/auth.php");