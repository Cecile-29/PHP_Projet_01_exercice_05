<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Projet01 Exercice05</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid col-7 p-3 m-4 border border-warning rounded justify-content-center">
        <div class="row ">
            <h1 class="col-12 text-secondary text-center">PHP Projet01 Exercice05</h1>
            <h3 class="col-12 text-info text-center">Créez une variable age aléatoire. Afficher vous êtes majeur ou vous êtes mineur en fonction de l'âge obtenu.</h3>
        </div>
        <div class="row border border-primary rounded p-3 m-4 text-secondary text-center">
        <?php
        $age = rand(0, 100);
        $sexe = array('femme', 'homme');
        $genre = $sexe[rand(0,1)];
        $result = $age. ' '. $genre. ' ';
        echo $result;
        
        if($age > 0 && ($genre == 'femme' || $genre == 'homme')){
            if($age >= 18 && $genre == 'femme'){
                echo 'Vous êtes une femme et vous êtes majeure !';
            }elseif($age < 18 && $genre == 'femme'){
                echo 'Vous êtes une femme et vous êtes mineure !';
            }elseif($age >= 18 && $genre == 'homme'){
                echo 'Vous êtes un homme et vous êtes majeur !';
            }
            elseif($age < 18 && $genre == 'homme'){
            echo 'Vous êtes un homme et vous êtes mineur !';
            }
        }else echo 'Veuillez rentrer des champs valides !';
        ?>
        </div>
    </div> 
</body>
</html>