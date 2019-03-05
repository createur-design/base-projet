<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titre; ?></title>
</head>
<body class="<?php echo $page; ?>">
    <header>
        <nav>
            <div class="btMenu" id="btMenu">Burger Menu</div>
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