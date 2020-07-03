<html>
 
<head>
 <title>Accueil</title>
 <link rel="stylesheet" href="style/vitrine.css">
 <meta charset="utf-8">
</head>
 
<body>
 <header>
 <div class="navigation">
 <nav>
 <?php if ($_GET['page'] == 'accueil') : ?>
 <strong><a style="color:#17c1ff" href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_02/?page=accueil">Accueil</a></strong>
 <?php else: ?>
 <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_02/?page=accueil">Accueil</a>
 <?php endif; ?>
 
 <?php if ($_GET['page'] == 'contacts') : ?>
 <strong><a style="color:#17c1ff" href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_02/?page=contacts">Contact</a></strong>
 <?php else: ?>
 <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_02/?page=contacts">Contact</a>
 <?php endif; ?>
 
 <?php if ($_GET['page'] == 'programme') : ?>
 <strong><a style="color:#17c1ff" href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_02/?page=programme">Programme</a></strong>
 <?php else: ?>
 <a href="http://localhost:8888/ISCC-2020/ISCC-2020-J08/EX_02/?page=programme">Programme</a>
 <?php endif; ?>
 
 </nav>
 </div>
 <h1>
 Summer Code Camp
 </h1>
 
 </header>
 
<?php
if ($_GET['page'] == 'accueil'){
 include('vitrine-accueil.html'); 
}elseif ($_GET['page'] == 'contacts') {
 include('vitrine-contacts.html');
} elseif ($_GET['page'] == 'programme') {
 include('vitrine-programme.html');
}elseif($_GET['page'] == 'contact-from'){
 include('contact-from.php');
}else{
 include('404.php');
}
?>
 
 <footer>
 <div class="imageep">
<a href="https://www.epitech.eu"><img src="assetD04/logo_epitech.png" alt="logo_epitech"></a>
 </footer>
 </div>
</body>
</html>