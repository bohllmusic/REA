<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../View/digginNuggets1.css">
    <title>S'inscrire</title>
    
    <link rel="icon" type="image/png" href="../images/kisspng-chicken-nugget-fried-chicken-chicken-fingers-fast-chicken-nuggets-clipart-5a8b06b4effbd2.362129591519060660983.png" />
</head>
<body>
    
    <header class="shdw">
        <h1><img src="../images/kisspng-chicken-nugget-fried-chicken-chicken-fingers-fast-chicken-nuggets-clipart-5a8b06b4effbd2.362129591519060660983.png" alt="" id="logoHdr"><a href="../REA3/DnAccueil.html">Diggin' Nuggets</a></h1>
        <h2>Inscription</h2>
        <div ><img src="../images/kisspng-magnifying-glass-computer-icons-clip-art-magnifying-glass-ico-5ab151010c51b2.1038397015215700490505 (1).png" alt="" id="loupe"><input type="text" placeholder="search..." id="search"></div>
        
    </header>
    <nav class="shdw">
        <a href="../REA3/DnAccueil.html" class="navLinks">Accueil</a><a href="connexion.html" class="navLinks">Se connecter</a><a href="nousContacter.html"class="navLinks">Nous contacter</a>
    </nav>


    <container>
        <span class="shdw">
            <a href="" class="spanLinks">article recent</a>
            <a href="" class="spanLinks">article recent</a>
            <a href="" class="spanLinks">article recent</a>
            <a href="" class="spanLinks">article recent</a>
            <a href="" class="spanLinks">article recent</a>
            <a href="" class="spanLinks">article recent</a>
            <a href="" class="spanLinks">article recent</a>
            <a href="" class="spanLinks">article recent</a>

        </span>
        <span class="shdw">
            <form action="" method="POST">
                <input class="shdw" type="text" name="pseudo" placeholder="choisissez un pseudo *" maxlength="20" minlength="2" id="prénom"> 
                <input class="shdw" type="email" name="email" placeholder="Votre mail *" max="20" minlength="2">
                <input class="shdw" type="text" name="nom" placeholder="Prénom *" maxlength="20" minlength="2" >
                <input class="shdw" type="text" name="prenom" placeholder="Nom *" maxlength="20" minlength="2" id="prénom">
                <input class="shdw" type="password" name = "mdp"placeholder="Votre mot de passe *"> 

                <input class="shdw" type="password" name = "mdpConfirm"placeholder="Confirmez votre mot de passe *">
                <input class="shdw" type="number" name = "age"placeholder="indiquez votre âge *">
                <input class="shdw" type="text" name = "bio"placeholder="présentez-vous brièvement">
                <label for="photo_profil">Choisissez une photo de profil</label>
                <input  type="file" name = "photo_profil"placeholder="choisissez une photo de profil">
                <input class="shdw" type="submit" value="Confirmer"> <input class ="shdw" type="reset" value="Effacer">
            </form>

        </span>

    </container>



    
</body>
</html>