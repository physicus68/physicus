<?php  
        $RACINE = "";
        $TITRE ="Accueil"; 
?>
<?php include "entete.php"; ?>
<?php include "nav-principale.php"; ?>


    <h1 style="text-align: center;">Cours de Sciences Physiques</h1>
    
    <p><i>Physicus 4.0</i> est un <i><a target="_blank" href="https://fr.wikipedia.org/wiki/Site_web_adaptatif">
            site web adaptatif</a></i> d'un cours de physique chimie pour les 
            téléphones mobiles, les tablettes, les ordinateurs et les impressions
            papier. Il correspond aux programmes de Physique Chimie de la réforme 
            du baccalauréat de 2021. Il est volontairement laissé en  accès 
            libre et tout usage commercial est interdit.
    </p>

    <figure>        
        <img id="lycee"src="<?php echo $RACINE?>images/lycee-mermoz.jpg">
        <figcaption style="text-align:center;">
            <i>Lycée Jean Mermoz - Saint Louis </i>
        </figcaption>
    </figure>

    <p><em>Développé et maintenu par Dr. Wulfran Fortin, agrégé de physique,
            Académie de Strasbourg (2018).</em></p>
    
<?php include "fin.php";?>