
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title><?php
        /* @var array $title render's parameter*/
        echo $title;
        ?></title>
    <meta name="google" value="notranslate">
    <script src="https://kit.fontawesome.com/9a391d7800.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/base.css">
    <?php
    $css = $var['css'] ?? 'principal';
    ?>
    <link rel="stylesheet" href="./assets/css/<?= $css ?>.css">
    <link rel= "shortcut icon" href= "./assets/img/standard/favicon.ico" type= "image/x-icon" >
    <link rel= "icon" href= "./assets/img/standard/favicon.ico" type= "image/x-icon" >
</head>
<body>

<div id="container">
