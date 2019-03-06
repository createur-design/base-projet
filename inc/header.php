<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titre; ?></title>
    <style>
        .loader{
            position: fixed;
            top:0;
            left:0;
            width:100%;
            height:100vh;
            background-color: #fff;
            z-index:9999;
            display:flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body class="<?php echo $page; ?>">
    <div class="loader" id="loader">
        <p><b>chagement</b> en cours...</p>
    </div>
    <header>
        <nav>
            <div class="btMenu" id="btMenu"><span></span></div>
            <ul class="nav" id="nav">
                <li <?php if($page === "accueil"){echo "class='active'";} ?>><a href="index.php">Accueil</a></li>
                <li><a href="#">lien2</a></li>
                <li><a href="#">lien3</a></li>
                <li><a href="#">lien4</a></li>
                <li><a href="#">lien5</a></li>
            </ul>
        </nav>
    </header>
    <main>