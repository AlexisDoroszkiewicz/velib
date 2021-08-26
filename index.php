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
            <div id="vel17033" class="caseVelo"><?= $station17033['total_dispo'] ; ?></div>
            <div id="vel8056" class="caseVelo"><?= $station8056['total_dispo'] ; ?></div>
            <div id="vel8057" class="caseVelo"><?= $station8057['total_dispo'] ; ?></div>
            <div id="vel8028" class="caseVelo"><?= $station8028['total_dispo'] ; ?></div>
            <div id="vel8003" class="caseVelo"><?= $station8003['total_dispo'] ; ?></div>
            <div id="vel16001" class="caseVelo"><?= $station16001['total_dispo'] ; ?></div>
            <div id="vel16103" class="caseVelo"><?= $station16103['total_dispo'] ; ?></div>
        </div>
        <div class="infos" id="infos">
            <div id="infos17033" class="infosVelo">
                <div class="identificationStation">
                    <div class="name"><?= $station17033['nom_station'] ; ?></div>
                    <div class="code"><?= $station17033['code_station'] ; ?></div>
                </div>

                <div class="disponibilite">
                    <div class="nbVelosTotal">
                        <img src="img/total.png" alt="total" class='picto'>
                        <span><?= $station17033['total_dispo'] ; ?></span>
                    </div>
                    <div class="nbVelosMecanique">
                        <img src="img/bike.png" alt="bike" class='picto'>
                        <span><?= $station17033['velo_dispo'] ; ?></span>
                    </div>
                    <div class="nbVelosElectric">
                        <img src="img/ebike.png" alt="ebike" class='picto'>
                        <span><?= $station17033['evelo_dispo'] ; ?></span>
                    </div>
                </div>

                
                
            </div>
            <div id="infos8056" class="infosVelo">
            <div class="identificationStation">
                    <div class="name"><?= $station8056['nom_station'] ; ?></div>
                    <div class="code"><?= $station8056['code_station'] ; ?></div>
                </div>

                <div class="disponibilite">
                    <div class="nbVelosTotal">
                        <img src="img/total.png" alt="total" class='picto'>
                        <span><?= $station8056['total_dispo'] ; ?></span>
                    </div>
                    <div class="nbVelosMecanique">
                        <img src="img/bike.png" alt="bike" class='picto'>
                        <span><?= $station8056['velo_dispo'] ; ?></span>
                    </div>
                    <div class="nbVelosElectric">
                        <img src="img/ebike.png" alt="ebike" class='picto'>
                        <span><?= $station8056['evelo_dispo'] ; ?></span>
                    </div>
                </div>
            </div>
            <div id="infos8057" class="infosVelo">
            <div class="identificationStation">
                    <div class="name"><?= $station8057['nom_station'] ; ?></div>
                    <div class="code"><?= $station8057['code_station'] ; ?></div>
                </div>

                <div class="disponibilite">
                    <div class="nbVelosTotal">
                        <img src="img/total.png" alt="total" class='picto'>
                        <span><?= $station8057['total_dispo'] ; ?></span>
                    </div>
                    <div class="nbVelosMecanique">
                        <img src="img/bike.png" alt="bike" class='picto'>
                        <span><?= $station8057['velo_dispo'] ; ?></span>
                    </div>
                    <div class="nbVelosElectric">
                        <img src="img/ebike.png" alt="ebike" class='picto'>
                        <span><?= $station8057['evelo_dispo'] ; ?></span>
                    </div>
                </div>
            </div>
            <div id="infos8028" class="infosVelo">
            <div class="identificationStation">
                    <div class="name"><?= $station8028['nom_station'] ; ?></div>
                    <div class="code"><?= $station8028['code_station'] ; ?></div>
                </div>

                <div class="disponibilite">
                    <div class="nbVelosTotal">
                        <img src="img/total.png" alt="total" class='picto'>
                        <span><?= $station8028['total_dispo'] ; ?></span>
                    </div>
                    <div class="nbVelosMecanique">
                        <img src="img/bike.png" alt="bike" class='picto'>
                        <span><?= $station8028['velo_dispo'] ; ?></span>
                    </div>
                    <div class="nbVelosElectric">
                        <img src="img/ebike.png" alt="ebike" class='picto'>
                        <span><?= $station8028['evelo_dispo'] ; ?></span>
                    </div>
                </div>
            </div>
            <div id="infos8003" class="infosVelo">
            <div class="identificationStation">
                    <div class="name"><?= $station8003['nom_station'] ; ?></div>
                    <div class="code"><?= $station8003['code_station'] ; ?></div>
                </div>

                <div class="disponibilite">
                    <div class="nbVelosTotal">
                        <img src="img/total.png" alt="total" class='picto'>
                        <span><?= $station8003['total_dispo'] ; ?></span>
                    </div>
                    <div class="nbVelosMecanique">
                        <img src="img/bike.png" alt="bike" class='picto'>
                        <span><?= $station8003['velo_dispo'] ; ?></span>
                    </div>
                    <div class="nbVelosElectric">
                        <img src="img/ebike.png" alt="ebike" class='picto'>
                        <span><?= $station8003['evelo_dispo'] ; ?></span>
                    </div>
                </div>
            </div>
            <div id="infos16001" class="infosVelo">
            <div class="identificationStation">
                    <div class="name"><?= $station16001['nom_station'] ; ?></div>
                    <div class="code"><?= $station16001['code_station'] ; ?></div>
                </div>

                <div class="disponibilite">
                    <div class="nbVelosTotal">
                        <img src="img/total.png" alt="total" class='picto'>
                        <span><?= $station16001['total_dispo'] ; ?></span>
                    </div>
                    <div class="nbVelosMecanique">
                        <img src="img/bike.png" alt="bike" class='picto'>
                        <span><?= $station16001['velo_dispo'] ; ?></span>
                    </div>
                    <div class="nbVelosElectric">
                        <img src="img/ebike.png" alt="ebike" class='picto'>
                        <span><?= $station16001['evelo_dispo'] ; ?></span>
                    </div>
                </div>
            </div>
            <div id="infos16103" class="infosVelo">
            <div class="identificationStation">
                    <div class="name"><?= $station16103['nom_station'] ; ?></div>
                    <div class="code"><?= $station16103['code_station'] ; ?></div>
                </div>

                <div class="disponibilite">
                    <div class="nbVelosTotal">
                        <img src="img/total.png" alt="total" class='picto'>
                        <span><?= $station16103['total_dispo'] ; ?></span>
                    </div>
                    <div class="nbVelosMecanique">
                        <img src="img/bike.png" alt="bike" class='picto'>
                        <span><?= $station16103['velo_dispo'] ; ?></span>
                    </div>
                    <div class="nbVelosElectric">
                        <img src="img/ebike.png" alt="ebike" class='picto'>
                        <span><?= $station16103['evelo_dispo'] ; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>
</html>