<?php
if(isset($_POST['name']) && isset ($_POST['tel'])) {
    $name = $_POST['name'];
    $tel = $_POST['tel'];

    if (mail(
'capuchinisimos@gmail.com',
'newsletter',
'vous etes bien enregistré'. '\n'.
'vous avez renseigné le nom: ' .$name. '\n'. 
'vous avez renseigné le téléphone:' .$tel

    )) {
        echo('message envoyé');
    }

        else {
            echo('erreur');
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <input type="text" name="name" placeholder="Name">  
    <input type="number" name="tel" placeholder="Tel"> 
    <input type="submit" value="Envoyer">
    </form>

</body>
</html>