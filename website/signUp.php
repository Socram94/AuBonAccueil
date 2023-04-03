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
?>
<div id="mainConnexion">
    <div id="connexionDiv">
        <form action="signIn.php" method="post" id="connexionForm" style="display: flex; padding: 5%; justify-content: center; width: 80%">
            <label for="Nom">Nom</label>
            <input type="Nom" name="Nom" id="Nom" placeholder="Nom">    
            <label for="Prénom">Prénom</label>
            <input type="Prénom" name="Prénom" id="Prénom" placeholder="Prénom" required>  
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="confirmEmail">confirmEmail</label>
            <input type="confirmEmail" name="confirmEmail" id="confirmEmail" placeholder="confirmEmail" required>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" placeholder="Mot de passe" required>
            <input type="submit" value="Se connecter">
        </form>
        <a class="homePageLink" style="text-decoration: none; color: white;"> Mot de passe oublié ? </a>
        <a class="homePageLink" style="text-decoration: none; color: white;" href="signIn.php"> Se connecter </a>
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
