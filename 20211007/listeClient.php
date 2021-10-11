<?php  require_once('headerSession.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste Client</title>
</head>
<body>
<?php
    
    //on tente d'établir la connexion
    try {
    $bdd = new PDO( 'mysql:host=localhost;dbname=gestion;charset=UTF8','root','');
    // on définit le mode d'erreur de PDO sur Exception
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie <br>";

    //insertion dans une variable du nom récupéré dans les formulaire par $_POST
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = htmlspecialchars($_POST['email']);
    $pw = $_POST['password'];
    $hash = password_hash($pw , PASSWORD_DEFAULT);

    $phone = $_POST['phone'];
            // $role = $_POST['role'];
                // echo $role;

    $num_rue = $_POST['num_rue'];
    $nom_rue = $_POST['nom_rue'];
    $cp = $_POST['cp'];
    $ville = $_POST['ville'];
    
    // lancement de la requete
    $insert = $bdd->prepare ("INSERT INTO client 
                            SET 
                            email = '$email', 
                            password = '$hash', 
                            nom = '$nom', 
                            prenom = '$prenom', 
                            phone = '$phone', 
                            num_rue = '$num_rue', 
                            nom_rue = '$nom_rue', 
                            cp = '$cp', 
                            ville = '$ville' ");
    $insert->execute();
        echo 'Entrée ajoutée dans la table';
           
        // je recupere l'id de ce qui va etre mis dans la bdd (qui va me servir pour les autres tables)
        // $lastid = $bdd->lastInsertID();
        
        // je remplis ma table telephone ave les données fournies
        // $sql = $bdd->prepare("INSERT INTO `telephone` (`utilisateur_id`, `numero`) VALUES (?, ?);");
        // $sql->execute(array($lastid, $phone));
        
        // je remplis ma table addresse
        // $sql = $bdd->prepare("INSERT INTO `adresse` (`num_rue`,`nom_rue`,`cp`,`ville`,`utilisateur_id`) VALUES (?, ?, ?, ?, ?);");
        // $sql->execute(array($num_rue, $nom_rue, $cp, $ville, $lastid));
        
    }
    //on capture les exceptions (si exceptions) et on affiche leurs infos
    catch(PDOException $e) {
        echo "Erreur : ".$e->getMessage();
    }

    // on teste la déclaration de nos variables
    if (isset($_POST['nom'])) {
    	// on affiche nos résultats
    	echo '<br> Le nouvel utilisateur est '.$_POST['nom'] ;
    }

    // on ferme la connexion à la base
    $bdd = null ;
    ?>

</body>
</html>