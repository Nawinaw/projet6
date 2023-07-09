<?php
$temperature=[ 'hiver'=>
                ['lundi'=>['nord' => 0, 'centre' => 6, 'est' => 1, 'Sud' => 10, 'ouest' => 2],
               'mardi'=>['nord' => 1, 'centre' => 6, 'est' => 2, 'Sud' => 0, 'ouest' => 4],
                'mercredi'=>['nord' => 1, 'centre' => 6, 'est' => 7, 'Sud' => 8, 'ouest' => 4],
                'jeudi'=>['nord' => 8, 'centre' => 3, 'est' => 6, 'Sud' => 8, 'ouest' => 7],
                'vendredi'=>['nord' => 4, 'centre' => 1, 'est' => 0, 'Sud' => 9, 'ouest' => 4],
                'samedi'=>['nord' => 4, 'centre' => 2, 'est' => 0, 'Sud' => 8, 'ouest' => 3],
                'dimanche'=>['nord' => 2, 'centre' => 1, 'est' => 0, 'Sud' => 8, 'ouest' => 4]],
                'automne'=>
                ['lundi'=>['nord' => 7, 'centre' => 6, 'est' => 8, 'Sud' => 15, 'ouest' => 9],
               'mardi'=>['nord' => 6, 'centre' => 5, 'est' => 7, 'Sud' => 14, 'ouest' => 8],
                'mercredi'=>['nord' => 7, 'centre' => 5, 'est' => 6, 'Sud' => 13, 'ouest' => 9],
                'jeudi'=>['nord' => 9, 'centre' => 4, 'est' => 7, 'Sud' => 13, 'ouest' => 8],
                'vendredi'=>['nord' => 8, 'centre' => 4, 'est' => 6, 'Sud' => 12, 'ouest' => 7],
                'samedi'=>['nord' => 7, 'centre' => 3, 'est' => 5, 'Sud' => 12, 'ouest' => 8],
                'dimanche'=>['nord' => 6, 'centre' => 11, 'est' => 5, 'Sud' => 11, 'ouest' => 7]],
                'ete'=>
                ['lundi'=>['nord' => 20, 'centre' => 21, 'est' => 23, 'Sud' => 30, 'ouest' => 22],
               'mardi'=>['nord' => 21, 'centre' => 22, 'est' => 24, 'Sud' => 31, 'ouest' => 23],
                'mercredi'=>['nord' => 22, 'centre' => 23, 'est' => 25, 'Sud' => 29, 'ouest' => 24],
                'jeudi'=>['nord' => 25, 'centre' => 22, 'est' => 26, 'Sud' => 32, 'ouest' => 23],
                'vendredi'=>['nord' => 24, 'centre' => 23, 'est' => 27, 'Sud' => 31, 'ouest' => 23],
                'samedi'=>['nord' => 23, 'centre' => 22, 'est' => 26, 'Sud' => 30, 'ouest' => 22],
                'dimanche'=>['nord' => 22, 'centre' => 23, 'est' => 25, 'Sud' => 29, 'ouest' => 23]],
                'printemps'=>
                ['lundi'=>['nord' => 10, 'centre' => 1, 'est' => 11, 'Sud' => 20, 'ouest' => 12],
               'mardi'=>['nord' => 11, 'centre' => 1, 'est' => 12, 'Sud' => 20, 'ouest' => 14],
                'mercredi'=>['nord' => 11, 'centre' => 1, 'est' => 17, 'Sud' => 18, 'ouest' => 14],
                'jeudi'=>['nord' => 18, 'centre' => 4, 'est' => 16, 'Sud' => 21, 'ouest' => 17],
                'vendredi'=>['nord' => 14, 'centre' => 2, 'est' => 10, 'Sud' => 19, 'ouest' => 14],
                'samedi'=>['nord' => 14, 'centre' => 5, 'est' => 10, 'Sud' => 18, 'ouest' => 13],
                'dimanche'=>['nord' => 12, 'centre' => 3, 'est' => 10, 'Sud' => 18, 'ouest' => 14]]
             ];
      
if (isset($_GET['saison'])) {
        $GET_SAISON = strtolower($_GET['saison']);
    } else {
        $GET_SAISON = 'hiver'; // Set default season
    }
    
    if (isset($_GET['jour'])) {
        $GET_JOUR = strtolower($_GET['jour']);
    } else {
        $GET_JOUR = 'lundi'; // Set default day
    }
    
    if (isset($temperature[$GET_SAISON][$GET_JOUR])) {
        $temperatureValue = $temperature[$GET_SAISON][$GET_JOUR];
        echo "La température pour la région le $GET_JOUR en $GET_SAISON est de : <br>";
        foreach ($temperatureValue as $region => $temp) {
            echo "Région $region : $temp°C <br>";
        }
    } else {
        echo "Les données demandées ne sont pas disponibles.";
    }
    ?>

<!DOCTYPE html>
<html>
<head>
<title>Page de météo selon les saison </title>
    <link rel="stylesheet" href="./style1.css">
</head>
<body>
    <!--Creation d'un menu déroulant et de son input afin de selectionner la saison-->
        <form action="./meteoSuite.php?saison" method="get">
            <div class="menuDeroulant">
                <select name="saison" >
                    <option value="">-- Sélectionner une saison --</option>
                    <option value="Hiver">Hiver</option>
                    <option value="Printemps">Printemps</option>
                    <option value="Eté">Eté</option>
                    <option value="Automne">Automne</option>
                </select>
                <input type="submit" value="Valider" />
            </div>
        </form>


            <?php
                if(isset($_GET['saison'])) {
                    $saison = $_GET['saison'];
            ?>

            <ul>
                <li><a href="./meteoSuite.php?saison=<?php echo urlencode($saison); ?>&jour=Lundi">Lundi</a></li>
                <li><a href="./meteoSuite.php?saison=<?php echo urlencode($saison); ?>&jour=Mardi">Mardi</a></li>
                <li><a href="./meteoSuite.php?saison=<?php echo urlencode($saison); ?>&jour=Mercredi">Mercredi</a></li>
                <li><a href="./meteoSuite.php?saison=<?php echo urlencode($saison); ?>&jour=Jeudi">Jeudi</a></li>
                <li><a href="./meteoSuite.php?saison=<?php echo urlencode($saison); ?>&jour=Vendredi">Vendredi</a></li>
                <li><a href="./meteoSuite.php?saison=<?php echo urlencode($saison); ?>&jour=Samedi">Samedi</a></li>
                <li><a href="./meteoSuite.php?saison=<?php echo urlencode($saison); ?>&jour=Dimanche">Dimanche</a></li>
            </ul>
            <?php
            }
            ?>


</body>
</html>