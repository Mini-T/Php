<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AHAHAHAHAH</title>
    <link rel="stylesheet" href="main.css">
    <style>
        #Acc {
            background-color: grey;
        }
        #rech{
            height: 100px;
        }
    </style>
</head>

<body>
   <?php include("header.inc.php")?>
    <div id="titre">
        <h1>
            Ce genre de page d'accueil mon frère
        </h1>
        <p>
            Tu connais lacoste TN le sang.
        </p>
        <?php
        $prenom = "Nicolas, Marie, Grégoire, Sylvain, Celine";
        echo "<p>Ce genre de $prenom</p>";
        $listePrenom = array("Gregoire", "Nathalie", "Emilie", "Francois", "Georges");

        echo "ouai mon gars c'est ";
        echo $listePrenom[0];
        ?>

    </div>
    
<?php
$Liste = array("Absalon","Aymerick","Affo","clément","Matteo","Ugo","Nell","Nathanaël","Lorraine","Sélomé","Henri","Sarah","Jennifer","Karim","Luca","Titouan");
shuffle($Liste);
echo $Liste[0];
?> 
<div>
<p>sexe : </p>
<a href="page.php?sexe=Homme">Homme</a>
<a href="page.php?sexe=Femme">Femme</a>

   <form method="POST" action="index.php">
       <input type="text" name="prenom" id="prenom" placeholder="votre prenom">
       <input type="text" name="nom" id="nom" placeholder="votre nom">
       <input type="submit" value="Envoyer">
   </form>
    <?php if(!empty($_POST))  {?>     
   <p>Bonjour <?php echo $_POST['prenom']. "." . substr($_POST['nom'], 0, 1)?></p>
<?php } ?>
</div>
<form method="POST" action="" >
            
            <select name="ville" id="ville">
 
                
                <option value="choisir">Choisir votre ville</option>
                <option value="lyon">lyon</option>
                <option value="annecy">annecy</option>
                <option value="evian">evian</option>
                <option value="manigod">manigod</option>
            
            </select> <br>
            
            <input type="text" name="code postal" id="cp" placeholder="Saisir un code postal"> <br>
            
            <input type="text" name="adresse" id="adresse" placeholder="Saisir votre adresse"> <br>
 
            <input type="submit" value="Envoyer">
            
        </form>
 
        <?php if(!empty($_POST)) { ?>
 
            <p>Représentation des données saisies</p><br>
            <p><?php echo 'Ville: ' . $_POST["ville"] ?></p><br>
            <p><?php echo 'Code Postal: ' . $_POST["code_postal"] ?></p><br>
            <p><?php echo 'Adresse: ' . $_POST["adresse"] ?></p>
 
        <?php } ?> 
</body>

</html>