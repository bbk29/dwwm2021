<?php  require_once('headerSession.php')?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <LINK rel="stylesheet" type="text/css" href="styles.css">
    <title>Accueil Boutique</title>
</head>

<body>
    
<!-- Navigation-->
    <?php require_once('navigation.php') ?>

<!-- Form Inscription-->
        <div>
            <br>
        <h1>
            Bienvenue
        </h1>
        <br>
        <hr>
        <br>
        <h3>
            Si c'est votre première visite, <br>inscrivez-vous :
        </h3>
        </div>
        <div>
        <form action = "listeClient.php" method= "POST">
            <label for="nom" class="form-label">Nom : </label> <input type="text" required id="nom" name="nom">
            <br><br>
            <label for="prenom" class="form-label">Prénom : </label> <input type="text" required id="prenom" name="prenom">
            <br><br>
            <label for="email" class="form-label">Email : </label> <input type="email" required id="email" name="email">
            <br><br>
            <label for="password" class="form-label">Password : </label> <input type="text" required id="password" name="password">
            <br><br>
            <label for="phone" class="form-label">Téléphone : </label> <input type="text" required id="phone" name="phone">
            <br><br>
            <label for="num_rue" class="form-label">N° : </label> <input type="text" required id="num_rue" name="num_rue"> 
            <br><br>
            <label for="nom_rue" class="form-label">Rue : </label> <input type="text" required id="nom_rue" name="nom_rue"> 
            <br><br>
            <label for="cp" class="form-label">Code Postal : </label> <input type="text" required id="password" name="cp">
            <br><br>
            <label for="ville" class="form-label">Ville : </label> <input type="text" required id="ville" name="ville">
            <br><br>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
               <button class="btn btn-secondary" type="submit"> Inscription </button>
            </div>
        </form>
        </div>

        <br>
        <hr>
        <br>

        <!-- Form Verify-->
        <div>
            <h3> Si vous êtes déjà client, <br>entrez vos identifiants :</h3>
        </div>
        <div>
        <form action="clientVerif.php" method="POST" >
            <label for="email" class="form-label">Votre e-mail : </label> <input type="email" required id="email" name="email">
            <br><br>
            <label for="password" class="form-label">Votre password : </label> <input type="text" required id="password" name="password">
            <br>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <button class="btn btn-secondary" type="submit">Ok</button>
            </div>
        </form>
        </div>

<!-- Footer-->
     <?php require_once ('footer.php')?>

</body>
</html>