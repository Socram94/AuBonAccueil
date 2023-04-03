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
        <form action="signIn.php" method="post" id="connexionForm" style="display: flex; padding: 5%; justify-content: center;">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" placeholder="Mot de passe" required>
            <input type="submit" value="Se connecter">
        </form>
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
