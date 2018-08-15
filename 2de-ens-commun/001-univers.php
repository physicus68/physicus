<?php
$TITRE = "Seconde Univers";
include "debut.php";
?>

<article>
    <h1>Chapitre Univers</h1>
    <h2>Un premier titre</h2>
    <p>Texte du cours ici.</p>

    <p>Des mathématiques $$y=x^2+2$$


    <details class="exercice">                                                  <!-- exercice 1 -->
        <summary>Exercice n<sup>o</sup>1</summary>
        <div>
            <p> L'énoncé de l'exercice est ici</p>
            <details class="correction">
                <summary>Correction n<sup>o</sup>1</summary>    
                <p><b>1.</b> Voir doc.1 p.15, 1-iris, 2-cristallin, 3-rétine. 
                    <b>2.a</b> Voir doc2 p.17. <b>2.b</b> 1-l’iris est le diaphragme,
                    2-le cristallin est la lentille convergente, 
                    3-la rétine est l’écran.</p>
        </div>
    </details>
            
    <details class="exercice">                                                  <!-- exercice 1 -->
        <summary>Exercice n<sup>0</sup>1</summary>
        <div>
            <p> L'énoncé de l'exercice est ici</p>
            <details class="correction">
                <summary>Correction n<sup>1</sup>1</summary>    
                <p>Le texte est ici.</p>
        </div>
    </details>            
            

</article>

<?php include $RACINE . "fin.php"; ?>