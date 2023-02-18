<?php 
    class User{
        public $_css = "./css/connexion1.css";
        static $_lang = ["fr","en"];
        public $_title = "Gmail";
    }
    $_new_user = new User;
?>


<!DOCTYPE html>
<html lang="<?= User::$_lang[0] ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $_new_user -> _title ?></title>
    <link rel="stylesheet" href=<?= $_new_user -> _css ?>>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>