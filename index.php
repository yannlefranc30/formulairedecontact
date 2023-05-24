<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrement des donnée</title>
</head>
<body>
<form action="form.php" method="post">
    <fieldset>
        <legend><b>Vos coordonnées</b></legend>
        <table>
            <td><td>Nom:</td></td><input type="text" name="nom" size="50"
                                         maxlength="50"></td></tr>

            <td><td>Prenom:</td></td><input type="text" name="prenom" size="50"
                                            maxlength="50"></td></tr>


            <td><td>Age:</td></td><input type="text" name="age" size="50"
                                         maxlength="3"></td></tr>


            <td><td>Adresse:</td></td><input type="text" name="adresse" size="50"
                                             maxlength="100"></td></tr>


            <td><td>Ville:</td></td><input type="text" name="ville" size="50"
                                           maxlength="50"></td></tr>


            <td><td>Adresse Email:</td></td><input type="text" name="mail" size="50"
                                                   maxlength="50"></td></tr>

            <tr>
                <td><input type="reset" name="effacer"  value="effacer"></td>
                <td><input type="submit" name="enregistrer"  value="enregistrer"></td>
            </tr>
        </table>
    </fieldset>
</form>
</body>
</html>












