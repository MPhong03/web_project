<?php
    require_once("../Models/Model_updateUser.php");

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $password = $_POST['password'];
        $email = $_POST['email'];

        $model = new Model_updateUser();

        $model -> updatePassword($email, $password);

        header("Location: C_SignIn.php");
        exit();
    }
?>