<?php
    $TITRE = "Template de cours";
    include "debut.php";
 ?>

<article>
    <h1>Mon chapitre</h1>
    <h2>Introduction</h2>
    <p>On utilise un  <i class="bulle" onclick="info_bulle(this)">template
            <span class="info-off">
                Un template (patron en anglais) est un exemple de codage à partir 
                du quel on va pouvoir adapter notre code.
            </span>
        </i>pour écrire un chapitre du cours
    </p>
   
    
    <h2>Structure d'un chapitre</h2>
    <p>
        Un chapitre se compose d'un titre principal et de différentes parties
    </p>
    <pre>   &lt;article&gt; 
        &lt;h1&gt; Titre Principal&lt;/h1&gt; 
            &lt;h2&gt; Première partie&lt;/h2&gt; 
                &lt;p&gt;
                     Mon texte ...
                &lt;/p&gt; 
            &lt;h2&gt; Deuxième partie&lt;/h2&gt; 
                &lt;p&gt;
                    Mon texte ...
                &lt;/p&gt; 
    &lt;/article&gt;     
    </pre>
    
     <p>Des mathématiques $$y=x^2+2$$
    
    
    <details class="exercice">                                                     <!-- exercice 1 -->     
        <summary>Exercice 1</summary>
        <div>
            <p> L'énoncé de l'exercice est ici</p>
            <details class="correction">
                <summary>Correction</summary>    
                <p><b>1.</b> Voir doc.1 p.15, 1-iris, 2-cristallin, 3-rétine. 
                <b>2.a</b> Voir doc2 p.17. <b>2.b</b> 1-l’iris est le diaphragme,
                2-le cristallin est la lentille convergente, 
                3-la rétine est l’écran.</p>
        </div>
    </details>
    <p>
        Voici un exemple d'image (SVG).
    <figure>
        <img src="./img-001/test.svg">
    </figure>
    
     <figure>
         <img src="./img-001/untitled.png">
    </figure>
    </p>
   

</article>


<?php include $RACINE . "fin.php"; ?>