<?php
    include('apiVelib.php')
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma carte</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class=container>
        <div class="carte">
            <?php 
                foreach ($stationArray as $value) {
                    echo '<div id="vel'.$value['code_station'].'" class="caseVelo">'.$value['total_dispo'].'</div>';
                }
            ?>
        </div>
        <div class="infos" id="infos">
            <?php 
                foreach ($stationArray as $value) {
                    echo '<div id="infos'.$value['code_station'].'" class="infosVelo">
                    <div class="identificationStation">
                        <div class="name">'.$value['nom_station'].'</div>
                        <div class="code">'.$value['code_station'].'</div>
                    </div>
    
                    <div class="disponibilite">
                        <div class="nbVelosTotal">
                            <img src="img/total.png" alt="total" class="picto">
                            <span>'.$value['total_dispo'].'</span>
                        </div>
                        <div class="nbVelosMecanique">
                            <img src="img/bike.png" alt="bike" class="picto">
                            <span>'.$value['velo_dispo'].'</span>
                        </div>
                        <div class="nbVelosElectric">
                            <img src="img/ebike.png" alt="ebike" class="picto">
                            <span>'.$value['evelo_dispo'].'</span>
                        </div>
                    </div>
                </div>';
                }
            ?>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>
</html>