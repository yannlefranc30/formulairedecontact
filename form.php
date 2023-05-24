<?php
$bddPDO = new PDO('mysql:host=localhost;dbname=clients','root',"");

$bddPDO->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

if(isset($_POST['enregistrer'])){

    $nom =  htmlspecialchars((trim(($_POST['nom']))));
    $prenom = htmlspecialchars((trim(($_POST['prenom']))));
    $age = htmlspecialchars((trim(($_POST['age']))));
    $adresse = htmlspecialchars((trim(($_POST['adresse']))));
    $ville = htmlspecialchars((trim($_POST['ville'])));
    $mail = htmlspecialchars((trim($_POST['mail'])));

    if(!empty($nom) && !empty($prenom) && !empty($age) && !empty($adresse) && !empty($ville) && !empty($mail))
    {
        $requete = $bddPDO->prepare('INSERT INTO yann(nom,prenom,age,adresse,ville,mail) VALUES(:nom,:prenom,:age,:adresse, :ville, :mail)');

        $requete->bindvalue(':nom', $nom);
        $requete->bindvalue(':prenom', $prenom);
        $requete->bindvalue(':age', $age);
        $requete->bindvalue(':adresse', $adresse);
        $requete->bindvalue(':ville', $ville);
        $requete->bindvalue(':mail', $mail);

        $result = $requete->execute();

        if(!$result){
            echo "Un probléme est survenue";
        }
        else{
            echo "vous etes bien enregistrer";
        }
    }else
    {
        echo "Tous les champs sont recquis";
    }
}
?>



















