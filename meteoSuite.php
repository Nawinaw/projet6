<?php
// ETAPE 1: Saisie des données par saison, par région et par jour dans un tableau associatif
$saisons = [
    /////////////////////////TABLEAU HIVER/////////////////////////////////////
    'HIVER' => [

          ////////////TABLEAU REGION////////////
        'NORD' => [
                ///TABLEAU SEMAINE///
            'lundi' => ['temperature' => '0°', 'conditionsMeteo' => 'Gel'],
            'mardi' => ['temperature' => '1°', 'conditionsMeteo' => 'Gel'],
            'mercredi' => ['temperature' => '1°', 'conditionsMeteo' => 'Gel'],
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
    ] ,
];
    //Je recupere la saison depuis le para GET
    if (isset($_GET['saison'])) {
        $GET_SAISON=$_GET['saison']; 
        } 
        else{
        $GET_SAISON='HIVER';//je mets la saison par defaut
        }
    //Je recupere le jour depuis le GET
    if (isset($_GET['jour'])) {
        $GET_JOUR=$_GET['jour']; } 
        else{
        $GET_JOUR='lundi';//je mets le jour par defaut
    }
    //je crée ces variables pour stocker les infos temperatures par region
    $tempNord="";
    $tempSud="";
    $tempCentre=""; 
    $tempOuest="";
    $tempEst="";


//je recupere la saison
foreach ($saisons as $saison=> $regions){
//je conditionne pour que tous soit en liaison
    echo "\n $saison \n \n ";
if ($saison==$GET_SAISON){
		//je recupere le jour
    foreach ($regions as $region => $jours){
        echo "\n $region \n \n ";
	   //je veux maintenant acceder aux données de temperatures par jours
        foreach ($jours as $jour => $donnees){
			//si jour 
            if ($jour==$GET_JOUR){
                switch ($region){
                    //je prends les données de temperatures dans chaque region
                    case 'NORD':
					    $tempNord=$donnees['temperature'];
                        echo $tempNord;
                        break;
                    case 'SUD': 
                        $tempSud=$donnees['temperature'];
                    case 'OUEST':
                        $tempOuest=$donnees['temperature'];
                        break;
                    case 'EST';
                        $tempEst=$donnees['temperature'];
                        break;
                    case 'CENTRE';
                        $tempCentre=$donnees['temperature'];
					break;
                }
              // mettr

			//je veux prendre les données de conditions meteo pour les exploiter
           //    if (isset($donnees['conditionsMeteo'])) {
            //echo "    Conditions météo: " . $donnees['conditionsMeteo'];
             }
            }
         }
    }
}



// J'associe a valeur de conditionsMeteo le logo approprié
/*$logos =[
    'gel' => 'gel.png',
    'vent puissant' => 'ventPuissant.png',
    'orage' => 'orage.png'
];

//j'essaie d'automatiser dès que que condition meteo il affiche le logo associé
    switch ($conditionsMeteo) {
        //si condition=gel alors affiche le logo gel
        case 'gel':
            echo '<img src="gel.png" alt="Logo Gel">';
            break;
        //si condition=ventPuisaint alors le logo vent
        case 'ventPuisaint':
            echo '<img src="ventPuissant.png" alt="Logo Vent Puissant">';
            break;
        //si condition=orage alors le logo orage  
        case 'orage':
            echo '<img src="orage.png" alt="Logo Orage">';
            break;
    }


$saisons = ['hiver', 'automne','printemps','ete'];

$logos = [
    'hiver' => 'chemin/vers/logo_hiver.png',
    'automne' => 'chemin/vers/logo_automne.png'
];

*/

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

<div class="container">
    <p class="tempNord">Température Nord : <?php echo $tempNord; ?></p>
    <p class="tempSud">Température Sud : <?php echo $tempSud; ?></p>
    <p class="tempCentre">Température Centre : <?php echo $tempCentre; ?></p>
    <p class="tempOuest">Température Ouest : <?php echo $tempOuest; ?></p>
    <p class="tempEst">Température Est : <?php echo $tempEst; ?></p>
</div>


</body>
</html>


