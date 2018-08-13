<?php 
    $RACINE = "../";
    include $RACINE . "entete.php"; 
    include $RACINE . "nav-principale.php"; 
?>

<nav class="sub-nav">
   
    <b onclick="afficherSousMenu()"> &nbsp; &rtrif; Mon Template Cours</b>
    
    <ol id="sous-menu" class="sous-menu-invisible">
        <li>
            <a href='<?php echo $NAV_SECONDAIRE?>001-template.php'>
                Mon template de chapitre
            </a>
        </li>
        
    </ol>
</nav>