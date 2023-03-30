<?php 
    class User{
        public $_css = "./css/connexion3.css";
        static $_lang = ["fr","en"];
        public $_title = 'Gmail';
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
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="icon" href="./favicon/favicon.ico">
    <link rel="manifest" href="./favicon/site.webmanifest">
</head>