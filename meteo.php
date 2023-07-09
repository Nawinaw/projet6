<?php
//ETAPE 1: Saisie des données par région et par jour dans un tableau
    $temperatures = array(
        'Nord' => array(
            'lundi' => '12°',
            'mardi' => '13°',
            'mercredi' => '15°',
            'jeudi' => '14°',
            'vendredi' => '12°',
            'samedi' => '10°',
            'dimanche' => '14°'
        ),
        'Sud' => array(
            'lundi' => '18°',
            'mardi' => '20°',
            'mercredi' => '21°',
            'jeudi' => '19°',
            'vendredi' => '18°',
            'samedi' => '20°',
            'dimanche' => '22°'
        ),
        'Est' => array(
            'lundi' => '15°',
            'mardi' => '14°',
            'mercredi' => '16°',
            'jeudi' => '17°',
            'vendredi' => '18°',
            'samedi' => '16°',
            'dimanche' => '15°'
        ),
        'Ouest' => array(
            'lundi' => '14°',
            'mardi' => '15°',
            'mercredi' => '14°',
            'jeudi' => '13°',
            'vendredi' => '12°',
            'samedi' => '9°',
            'dimanche' => '10°'
        ),
        'Centre' => array(
            'lundi' => '12°',
            'mardi' => '14°',
            'mercredi' => '15°',
            'jeudi' => '15°',
            'vendredi' => '16°',
            'samedi' => '15°',
            'dimanche' => '17°'
        )
    );

    //var_dump($temperatures['Centre']);
//ETAPE 2 : Association du jour et celui qui s'affichera par defaut
         if (isset($_GET['jour'])) {
        $jour=$_GET['jour']; } 
         else{
        $jour='lundi';
         } 
    

//ETAPE 3: Je récupère la température par région selon le jour
       
        $temperatureNordJour=$temperatures['Nord'][$jour];
        $temperatureSudJour=$temperatures['Sud'][$jour];
        $temperatureEstJour=$temperatures['Est'][$jour];
        $temperatureOuestJour=$temperatures['Ouest'][$jour];
        $temperatureCentreJour=$temperatures['Centre'][$jour];

?>
<!--*****************************************
        html pour la mise en page
******************************************-->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Page de météo </title>  
  <link rel="stylesheet" href="./style.css">
</head>
<body>

         <!-- ce programme me permet d'afficher le jour dans l'url-->
        <ul>
            <a href=".\meteo.php?jour=lundi"> <li>Lundi</li><a>
            <a href=".\meteo.php?jour=mardi"> <li>Mardi</li><a>
            <a href=".\meteo.php?jour=mercredi"> <li>Mercredi</li><a>
            <a href=".\meteo.php?jour=jeudi"> <li>Jeudi</li><a>
            <a href=".\meteo.php?jour=vendredi"> <li>Vendredi</li><a>
            <a href=".\meteo.php?jour=samedi"> <li>Samedi</li><a>
            <a href=".\meteo.php?jour=dimanche"> <li>dimanche</li><a><a>
        </ul>


    
    <div class="container">
        <img src="map.png" alt="">
        <!-- je récupère les variables de température de chaque région -->
                <?php if (isset($jour)) { ?>
                    <p class="temperatureNord"><?php echo $temperatureNordJour; ?></p>
                    <p class="temperatureSud"><?php echo $temperatureSudJour; ?></p>
                    <p class="temperatureEst"><?php echo $temperatureEstJour; ?></p>
                    <p class="temperatureOuest"><?php echo $temperatureOuestJour; ?></p>
                    <p class="temperatureCentre"><?php echo $temperatureCentreJour; ?></p>
                <?php } ?>

    </div>    

</body>
</html>
