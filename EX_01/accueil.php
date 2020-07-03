<html>
    <head>
    <meta charset="utf-8">
    <title>mini_site_routing</title>
    </head>
    <body>
    <header>
    <nav>
    <a href="Accueil.php">Accueil</a>
    <a href="Page1.php">Page1</a>
    <a href="Page2.php">Page2</a>
    </nav>
    </header>
    <h1>
        <?php
        if($_GET['page']==1){
            echo 'Accueil!';

        }
        elseif($_GET['page']==2){
            echo 'Page 2!';

        }
        elseif($_GET['page']==3){
            echo 'Page 3!';
        }
    ?>
    </h1>
    </body>
</html>