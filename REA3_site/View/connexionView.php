<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="../View/digginNuggets1.css">
    <link rel="icon" type="image/png" href="../images/kisspng-chicken-nugget-fried-chicken-chicken-fingers-fast-chicken-nuggets-clipart-5a8b06b4effbd2.362129591519060660983.png" />
</head>
<body>   
    <header class="shdw">
        <h1><img src="../images/kisspng-chicken-nugget-fried-chicken-chicken-fingers-fast-chicken-nuggets-clipart-5a8b06b4effbd2.362129591519060660983.png" alt="" id="logoHdr"><a href="../REA3/DnAccueil.html">Diggin' Nuggets</a></h1>
        <h2>Connexion</h2>
        <div><img src="../REA3/images/kisspng-magnifying-glass-computer-icons-clip-art-magnifying-glass-ico-5ab151010c51b2.1038397015215700490505 (1).png" alt="" id="loupe"><input type="text" placeholder="search..." id="search"></div>
    </header>

    <nav class="shdw"><a href="../Controller/accueilController.php" class="navLinks">Accueil</a><a href="connexion.html" class="navLinks">S'inscrire</a><a href="nousContacter.html"class="navLinks">Nous contacter</a></nav>

    <container>
        <span class="shdw">
            <a href="" class="spanLinks">House</a>
            <a href="" class="spanLinks">article recent</a>
            <a href="" class="spanLinks">article recent</a>
            <a href="" class="spanLinks">BASS</a>
            <a href="" class="spanLinks">Dubstep</a>
            <a href="" class="spanLinks">Jungle</a>
            <a href="" class="spanLinks">Breakbeat</a>
            <a href="" class="spanLinks">Electro</a>

        </span>
        <span class="shdw">
            <form action="" method="POST">
                <legend>Indiquez vos identifiants pour vous connecter</legend>
                <input class="shdw" type="text" name="email" placeholder="Votre adresse mail" maxlength="100" minlength="2" id="identifiants">
                    
                <input class="shdw" type="password" name="mdp" placeholder="Mot de passe" maxlength="100" minlength="2" >
                                    
                <input class="shdw" type="submit" value="Se connecter"> <input class ="shdw" type="reset" value="Effacer">
                <p id = "err"></p>
            
                <p>Vous n'avez pas de compte? <a href="http://localhost/REA/REA3_site/Controller/sInscrireController.php">inscrivez-vous</a></p>
            </form>

            

            
        </span>

    </container>

    
</body>
</html>