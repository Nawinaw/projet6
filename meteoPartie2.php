<?php
// ETAPE 1: Saisie des données par saison, par région et par jour dans un tableau associatif
$saison = [
    /////////////////////////TABLEAU HIVER/////////////////////////////////////
    'HIVER' => [
        'NORD' => [
            'lundi' => ['temperature' => '0°', 'conditionsMeteo' => '#Gel'],
            'mardi' => ['temperature' => '1°', 'conditionsMeteo' => '#Gel'],
            'mercredi' => ['temperature' => '1°', 'conditionsMeteo' => '#Gel'],
            'jeudi' => ['temperature' => '8°'],
            'vendredi' => ['temperature' => '4°'],
            'samedi' => ['temperature' => '4°'],
            'dimanche' => ['temperature' => '2°']
        ],
    
        'SUD' => [
            'lundi' => ['temperature' => '10°'],
            'mardi' => ['temperature' => '0°', 'conditionsMeteo' => 'Gel'],
            'mercredi' => ['temperature' => '8°'],
            'jeudi' => ['temperature' => '8°'],
            'vendredi' => ['temperature' => '9°'],
            'samedi' => ['temperature' => '8°'],
            'dimanche' => ['temperature' => '8°']
        ],
    
        'OUEST' => [
            'lundi' => ['temperature' => '2°', 'conditionsMeteo' => 'Gel'],
            'mardi' => ['temperature' => '4°' ],
            'mercredi' => ['temperature' => '4°' ],
            'jeudi' => ['temperature' => '7°' ],
            'vendredi' => ['temperature' => '4°' ],
            'samedi' => ['temperature' => '3°' ],
            'dimanche' => ['temperature' => '4°' ]
        ],
    
        'EST' => [
            'lundi' => ['temperature' => '1°', 'conditionsMeteo' => 'Gel'],
            'mardi' => ['temperature' => '2°', 'conditionsMeteo' => 'Gel'],
            'mercredi' => ['temperature' => '7°' ],
            'jeudi' => ['temperature' => '6°' ],
            'vendredi' => ['temperature' => '0°' ],
            'samedi' => ['temperature' => '0°' ],
            'dimanche' => ['temperature' => '0°' ]
        ],
    
        'CENTRE' => [
            'lundi' => ['temperature' => '6°' ],
            'mardi' => ['temperature' => '6°' ],
            'mercredi' => ['temperature' => '6°' ],
            'jeudi' => ['temperature' => '3°' ],
            'vendredi' => ['temperature' => '1°', 'conditionsMeteo' => 'Gel, VentPuissant'],
            'samedi' => ['temperature' => '2°' ],
            'dimanche' => ['temperature' => '1°', 'conditionsMeteo' => 'Gel']
        ],
    ], 
       
    ////////////////////////TABLEAU PRINTEMPS/////////////////////////////////////
    'PRINTEMPS' => [
        'NORD' => [
            'lundi' => ['temperature' => '10°'],
            'mardi' => ['temperature' => '11°'],
            'mercredi' => ['temperature' => '11°'],
            'jeudi' => ['temperature' => '18°'],
            'vendredi' => ['temperature' => '14°'],
            'samedi' => ['temperature' => '14°'],
            'dimanche' => ['temperature' => '12°'],
        ],
    
        'SUD' => [
            'lundi' => ['temperature' => '20°'],
            'mardi' => ['temperature' => '20°'],
            'mercredi' => ['temperature' => '18°'],
            'jeudi' => ['temperature' => '21°'],
            'vendredi' => ['temperature' => '19°'],
            'samedi' => ['temperature' => '18°'],
            'dimanche' => ['temperature' => '18°'],
            ],
    
        'OUEST' => [
            'lundi' => ['temperature' => '12°' ],
            'mardi' => ['temperature' => '14°', 'conditionsMeteo' => 'VentPuissant'],
            'mercredi' => ['temperature' => '14°' ],
            'jeudi' => ['temperature' => '17°' ],
            'vendredi' => ['temperature' => '14°' ],
            'samedi' => ['temperature' => '13°' ],
            'dimanche' => ['temperature' => '14°', 'conditionsMeteo' => 'VentPuissant'],
            ],
      
        'EST' => [
            'lundi' => ['temperature' => '11°' ],
            'mardi' => ['temperature' => '12°' ],
            'mercredi' => ['temperature' => '17°' ],
            'jeudi' => ['temperature' => '16°' ],
            'vendredi' => ['temperature' => '10°' ],
            'samedi' => ['temperature' => '10°' ],
            'dimanche' => ['temperature' => '10°' ],
            ],
    
        'CENTRE' => [
            'lundi' => ['temperature' => '1°' ],
            'mardi' => ['temperature' => '1°' ],
            'mercredi' => ['temperature' => '1°' ],
            'jeudi' => ['temperature' => '4°' ],
            'vendredi' => ['temperature' => '2°' ],
            'samedi' => ['temperature' => '5°' ],
            'dimanche' => ['temperature' => '3°' ],
        ],
    ],
    ////////////////////////TABLEAU AUTOMNE/////////////////////////////////////
    'AUTOMNE' => [
        'NORD' => [           
            'lundi' => ['temperature' => '7°'],
            'mardi' => ['temperature' => '6°'],
            'mercredi' => ['temperature' => '7°'],
            'jeudi' => ['temperature' => '9°'],
            'vendredi' => ['temperature' => '8°'],
            'samedi' => ['temperature' => '7°'],
            'dimanche' => ['temperature' => '6°'],
        ],
    
        'SUD' => [
            'lundi' => ['temperature' => '15°'],
            'mardi' => ['temperature' => '14°'],
            'mercredi' => ['temperature' => '13°'],
            'jeudi' => ['temperature' => '13°'],
            'vendredi' => ['temperature' => '12°'],
            'samedi' => ['temperature' => '12°'],
            'dimanche' => ['temperature' => '11°'],
        ],
    
        'OUEST' => [
            'lundi' => ['temperature' => '9°' ],
            'mardi' => ['temperature' => '8°' ],
            'mercredi' => ['temperature' => '9°', 'conditionsMeteo' => 'VentPuissant'],
            'jeudi' => ['temperature' => '8°' ],
            'vendredi' => ['temperature' => '7°' ],
            'samedi' => ['temperature' => '8°' ],
            'dimanche' => ['temperature' => '7°' ],
        ],
    
        'EST' => [
            'lundi' => ['temperature' => '8°' ],
            'mardi' => ['temperature' => '7°' ],
            'mercredi' => ['temperature' => '6°' ],
            'jeudi' => ['temperature' => '7°' ],
            'vendredi' => ['temperature' => '6°' ],
            'samedi' => ['temperature' => '5°' ],
            'dimanche' => ['temperature' => '5°' ],
        ],
    
         'CENTRE' => [
            'lundi' => ['temperature' => '6°' ],
            'mardi' => ['temperature' => '5°' ],
            'mercredi' => ['temperature' => '5°' ],
            'jeudi' => ['temperature' => '4°' ],
            'vendredi' => ['temperature' => '4°' ],
            'samedi' => ['temperature' => '3°' ],
            'dimanche' => ['temperature' => '3°' ],
        ],
    ],
    ////////////////////////TABLEAU ETE/////////////////////////////////////
    'ETE' => [
        'NORD' => [ 
            'lundi' => ['temperature' => '20°'],
            'mardi' => ['temperature' => '21°'],
            'mercredi' => ['temperature' => '22°'],
            'jeudi' => ['temperature' => '25°'],
            'vendredi' => ['temperature' => '24°'],
            'samedi' => ['temperature' => '23°'],
            'dimanche' => ['temperature' => '22°'],
        ],
         
        'SUD' => [
            'lundi' => ['temperature' => '30°'],
            'mardi' => ['temperature' => '31°'],
            'mercredi' => ['temperature' => '29°'],
            'jeudi' => ['temperature' => '32°', 'conditionsMeteo' => 'Orage'],
            'vendredi' => ['temperature' => '31°'],
            'samedi' => ['temperature' => '30°', 'conditionsMeteo' => 'Orage'],
            'dimanche' => ['temperature' => '29°'],
        ],
       
        'OUEST' => [
            'lundi' => ['temperature' => '22°' ],
            'mardi' => ['temperature' => '23°', 'conditionsMeteo' => 'Orage'],
            'mercredi' => ['temperature' => '24°' ],
            'jeudi' => ['temperature' => '23°' ],
            'vendredi' => ['temperature' => '23°' ],
            'samedi' => ['temperature' => '22°' ],
            'dimanche' => ['temperature' => '23°' ], 
        ],
    
        'EST' => [
            'lundi' => ['temperature' => '23°' ],
            'mardi' => ['temperature' => '24°' ],
            'mercredi' => ['temperature' => '25°' ],
            'jeudi' => ['temperature' => '26°' ],
            'vendredi' => ['temperature' => '27°' ],
            'samedi' => ['temperature' => '26°' ],
            'dimanche' => ['temperature' => '25°' ],
        ],
    
        'CENTRE' => [
            'lundi' => ['temperature' => '21°' ],
            'mardi' => ['temperature' => '22°' ],
            'mercredi' => ['temperature' => '23°' ],
            'jeudi' => ['temperature' => '22°' ],
            'vendredi' => ['temperature' => '23°' ],
            'samedi' => ['temperature' => '22°' ],
            'dimanche' => ['temperature' => '23°' ],
        ],
    ]    
    
];
// je recupere les valeurs dans le GET pour pouvoir utiliser dans mon code
        $saison = $_GET['saison'];
        $jour = $_GET['jour'];

 //Ici, je cherche a assoscier les saisons
    if (isset($_GET['saison'])) {
        $saisonGet= $_GET['saison'];
    } else {
        $saisonGet = 'ETE';
    };

    //Ici, je cherche à associer les jours
    if (isset($_GET['jour'])) {
    $jour = $_GET['jour'];
    } else {
    $jour = 'lundi';
    };
//je cherche ici à afficher les données de conditions méteo pour les associer au logo approprié
if (isset($saison['OUEST'][$jour]['conditionsMeteo'])) {
    $conditionsMeteo = $saison['OUEST'][$jour]['conditionsMeteo'];
    echo "Les conditions météo pour $jour sont : $conditionsMeteo";
}


// Répétez le même modèle pour les autres régions et variables



//Je souhaite crée des variables pour associer chaque saison à chaque region à chaque jour

        foreach ($saison as $nomSaison => $regions) {
            foreach ($regions as $nomRegion => $jours) {
                foreach ($jours as $jourSemaine => $data) {
                    if ($jourSemaine === $jour) {
                        switch ($nomRegion) {
                            case 'NORD':
                                $temperatureNordJour = $data['temperature'];
                                $saisonNordJour = $nomSaison;
                                break;
                            case 'SUD':
                                $temperatureSudJour = $data['temperature'];
                                $saisonSudJour = $nomSaison;
                                break;
                            case 'EST':
                                $temperatureEstJour = $data['temperature'];
                                $saisonEstJour = $nomSaison;
                                break;
                            case 'OUEST':
                                $temperatureOuestJour = $data['temperature'];
                                $saisonOUESTJour = $nomSaison;
                                break;
                            case 'CENTRE':
                                $temperatureCentreJour = $data['temperature'];
                                $saisonCentreJour = $nomSaison;
                                break;
                        }
                    }
                }
            }
        }

        echo "Région NORD :\n";
        echo "Jour : " . $jourSemaine . "\n";
        echo "Saison : " . $saisonNordJour . "\n";
        echo "Température : " . $temperatureNordJour . " degrés Celsius\n\n";
        
        echo "Région SUD :\n";
        echo "Jour : " . $jourSemaine . "\n";
        echo "Saison : " . $saisonSudJour . "\n";
        echo "Température : " . $temperatureSudJour . " degrés Celsius\n\n";
        

            
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Page de météo selon les saison </title>
    <link rel="stylesheet" href="./style1.css">
</head>
<body>

    <!--Creation d'un menu déroulant et de son input afin de selectionner la saison-->
    <form action="./meteoPartie2.php?saison" method="get">
        <div class="menuDeroulant">
            <select name="saison" id="lol">
                <option value="Hiver">Hiver</option>
                <option value="Printemps">Printemps</option>
                <option value="Eté">Eté</option>
                <option value="Automne">Automne</option>
            </select>
            <input type="submit" value="Valider" />
        </div>
    </form>

  <!--Creation de l'association dans URL-->

  <ul>
    <li><a href="./meteoPartie2.php?saison=<?php echo urlencode($saison); ?>&jour=Lundi">Lundi</a></li>
    <li><a href="./meteoPartie2.php?saison=<?php echo urlencode($saison); ?>&jour=Mardi">Mardi</a></li>
    <li><a href="./meteoPartie2.php?saison=<?php echo urlencode($saison); ?>&jour=Mercredi">Mercredi</a></li>
    <li><a href="./meteoPartie2.php?saison=<?php echo urlencode($saison); ?>&jour=Jeudi">Jeudi</a></li>
    <li><a href="./meteoPartie2.php?saison=<?php echo urlencode($saison); ?>&jour=Vendredi">Vendredi</a></li>
    <li><a href="./meteoPartie2.php?saison=<?php echo urlencode($saison); ?>&jour=Samedi">Samedi</a></li>
    <li><a href="./meteoPartie2.php?saison=<?php echo urlencode($saison); ?>&jour=Dimanche">Dimanche</a></li>
</ul>

<!--Je mets la condition d'affichage-->  
  

<div class="container">
        
        <!--Association des temperatures des saisons-->
        <?php if (isset($jour)) { ?>
            <p class="$temperaturePrintempsNordJour"><?php echo $temperatureNordJour; ?></p>
            <p class="temperatureSud"><?php echo $temperatureSudJour; ?></p>
            <p class="temperatureEst"><?php echo $temperatureEstJour; ?></p>
            <p class="temperatureOuest"><?php echo $temperatureOuestJour; ?></p>
            <p class="temperatureCentre"><?php echo $temperatureCentreJour; ?></p>
        <?php } ?>
    </div>

    


</body>
</html>
