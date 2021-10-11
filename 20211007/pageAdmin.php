<?php  require_once('headerSession.php')?>

<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <LINK rel="stylesheet" type="text/css" href="styles.css">
    <title>Admin</title>
</head>

<body>
        
<!-- Navigation-->
<?php require_once('navigation.php') ?>

    <div>
        <br>
        <h3>
            Entrez un nouveau produit dans le catalogue : 
        </h3>
        <br>
    </div>
    <br>
<div>
    <form action = "listeProduit.php" method= "POST">
        <label for="nom" class="form-label">Nom du produit :</label> <input type="text" id="nom" name="nom">
        <br><br>
        <label for="couleur" class="form-label">Couleur :</label> <input type="couleur" id="couleur" name="couleur">
        <br><br>
        <label for="prix" class="form-label">Prix :</label> <input type="prix" id="prix" name="prix">
        <br><br>
        <label for="stock" class="form-label">Stock :</label> <input type="stock" id="stock" name="stock">
        <br><br>
        
        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
               <button class="btn btn-secondary" type="submit">Entrer</button>
        </div>
    </form>
</div>
<!-- Footer-->
<?php require_once ('footer.php')?>

</body>
</html>