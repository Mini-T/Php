<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input {
            width: 200px;
            margin: 10px 10px 10px 10px;
        }
    </style>
    <?php include("init.inc.php") ?>
</head>

<body>


    <form method="POST" action="">
        Nom :
        <br>
        <input type="text" name="nom" id="nom" >
        <br>
        Prénom :
        <br>
        <input type="text" name="prenom" id="prenom">
        <br>
        Téléphone :
        <br>
        <input type="text" name="telephone" id="telephone">
        <br>
        Profession :
        <br>
        <input type="text" name="profession" id="profession">
        <br>
        Ville :
        <br>
        <input type="text" name="ville" id="ville">
        <br>
        Code Postal :
        <br>
        <input type="number" name="codepostal" id="codepostal">
        <br>
        Adresse :
        <br>
        <input type="text" name="adresse" id="adresse">
        <br>
        Date de naissance :
        <br>
        <input type="date" name="date_de_naissance" id="date_de_naissance">
       <br>
        Sexe : Femme
       
        <input type="checkbox" name="sexe" id="sexe" value="Femme" >
       
        Homme
        
        <input type="checkbox" name="sexe" id="sexe" value="Homme" >
        <br>
        Description :
        <br>
        <input type="text" name="description" id="description" style="height: 125px; width: 300px">
        <br>
        <input type="submit" name="envoyer" id="envoyer" value="Enregistrement">
    </form>
<ul>
    <li> Nom : <?php echo $_POST['nom']?></li>
    <li> Prenom : <?php echo $_POST['prenom']?></li>
    <li> Téléphone : <?php echo $_POST['telephone']?></li>
    <li> Profession : <?php echo $_POST['profession']?></li>
    <li> Ville : <?php echo $_POST['ville']?></li>
    <li> Code Postal : <?php echo $_POST['codepostal']?></li>
    <li> Adresse : <?php echo $_POST['adresse']?></li>
    <li> Date de naissance : <?php echo $_POST['date_de_naissance']?></li>
    <li> Sexe : <?php echo $_POST['sexe'] ?></li>
    <li> Description : <?php echo $_POST['description']?></li>
</ul>
<?php;  $result = $connection->query("INSERT INTO repertoire (nom, prenom, telephone, profession, ville, codepostal, adresse, date_de_naissance, sexe, description) VALUES ('".$_POST['nom']."' , '".$_POST['prenom']."', '".$_POST['telephone']."', '".$_POST['profession']."', '".$_POST['ville']."', '".$_POST['codepostal']."', '".$_POST['adresse']."', '".$_POST['date_de_naissance']."' , '".$_POST['sexe']."' ,'".$_POST['description']."')");
if (!empty($_POST)) {
    $marequete = "INSERT INTO annuaire (nom, prenom, telephone, profession, ville, codepostal, adresse, date_de_naissance, sexe, description) VALUES ('".$_POST['nom']."' , '".$_POST['prenom']."', '".$_POST['telephone']."', '".$_POST['profession']."', '".$_POST['ville']."', '".$_POST['codepostal']."', '".$_POST['adresse']."', '".$_POST['date_de_naissance']."' , '".$_POST['sexe']."' ,'".$_POST['description']."')";

}
while($annuaire = $result->fetch_assoc()){ ?>
    <div>
        <div>
            <th>
                <tr> <?php echo $_POST['nom'] ?></tr>
                <tr> <?php echo $_POST['prenom'] ?></tr>
                <tr> <?php echo $_POST['telephone'] ?></tr>
                <tr> <?php echo $_POST['profession'] ?></tr>
                <tr> <?php echo $_POST['ville'] ?></tr>
                <tr> <?php echo $_POST['codepostal'] ?></tr>
                <tr> <?php echo $_POST['adresse'] ?></tr>
                <tr> <?php echo $_POST['date_de_naissance'] ?></tr>
                <tr> <?php echo $_POST['sexe'] ?></tr>
                <tr> <?php echo $_POST['description'] ?></tr>
            </th>
        </div>
    </div>
}




</body>

</html>