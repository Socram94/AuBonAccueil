<html id="hu">
<head>
<meta charset="utf-8">
    <title>Au Bon Accueil</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<!--
    include le header
-->
<body>
<?php
    require 'Generic/headerLandingPage.php';

    if(isset($_GET["i"])){
        if($_GET["i"] == "ok")
        echo "<div style='background-color: green;'> Merci de validé votre adresse email puis vous connecter pour continuer </div>";
    }
?>
<div id="mainLanding">
    <h1> Bienvenue sur le site d'ABA </h1>
    <div id="buttonLanding">
        <a href="signUp.php"> Rejoignez-nous </a>
        <a href="signIn.php"> Je suis déjà inscrit </a>
    </div>
</div>
    <!-- bienvenue au bon accueil 
        Bouton inscripton/Connexion
-->
<?php
    include 'Generic/footer.php';
?>
</body>
<!--
    Include le footer ici
-->
</html>
<script src="js/landing.js"></script>
