<!-- //on demarre la session -->
<?php require_once('headerSession.php')?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Vérification</title>
</head>

<body>
<?php

//on tente établit la connexion
try {
$bdd = new PDO('mysql:host=localhost;dbname=gestion;charset=UTF8','root','');
// on définit le mode d'erreur de PDO sur Exception
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Connexion réussie <br>";
    
    $email = $_POST['email'];   //on récupère l'email via methode $_POST
    echo "mail entré: ". $email . "<br>";
    $password = $_POST['password'];       //on récupere le pw via $_POST
    echo "password entré: ". $password . "<br>"; // ligne pour debugger
    
    $existe = false ;   // on créé une variable qui retourne simplement true/false, initialisée à false
    $req_string = "SELECT * FROM client WHERE email=?";
    $result = $bdd->prepare($req_string) ;
    $result->execute(array($email)) ;
    
    print_r($email. "<br>");
    $tab=$result->fetch();
    print_r($tab['password']. "<br>");
    $mdp_clair=$tab['password'];
    //     echo "result = ".$result . "<br>";
    
    if ($email == $tab['email'])    //on cherche si l'email entré est déjà inscrit
    { 
        echo 'Vous êtes déjà inscrit. <br>' ;
        $existe = true;     // si oui, on change la variable en vrai
        
        if (password_verify($password, $tab['password'])) // on verifie ensuite si le pw correspond à celui du tableau
        {
            echo 'Votre mot de passe est correct !' ;
            header('location:produit.php');
        } 
        else 
        {
            echo 'Le mot de passe est invalide.';
            header('location:accueil.php');
        }
    }
    
    if (!$existe) // equivalent de if ($existe == false) = si email n'existe pas, la variable est false
    {
        echo "email erroné";
        //header('location:FormVerif.php')
    } 
}  
    
//on capture les exceptions (si exceptions) et on affiche leurs infos
catch(PDOException $e) {
    echo "Erreur : ".$e->getMessage();
}
    
    // on ferme la connexion à la base
    $bdd = null ;
    
    ?>
</body>
</html>