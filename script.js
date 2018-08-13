function afficherMenu() {
    document.getElementById("main-menu").classList.toggle("main-menu-visible");
    document.getElementById("main-menu").classList.toggle("main-menu-invisible");
}

function afficherSousMenu() {
    document.getElementById("sous-menu").classList.toggle("sous-menu-visible");
    document.getElementById("sous-menu").classList.toggle("sous-menu-invisible");
}

function info_bulle(e){
    e.getElementsByTagName("span")[0].classList.toggle("info-on");
    e.getElementsByTagName("span")[0].classList.toggle("info-off");
}


/* Gestion du formatage des exercices et des corrigés pour l'impression papier
 Les tag details sont développés pour l'impression puis refermés après l'impression
 Il n'est pas possible de le faire uniquement en CSS/media */
window.onbeforeprint = function () {
       var liste_exercices = document.getElementsByTagName('details');
       var i;
       for(i=0; i < liste_exercices.length; i++){
         e = liste_exercices[i];
         e.setAttribute("open", "");
       }
    };
    
window.onafterprint = function () {
       var liste_exercices = document.getElementsByTagName('details');
       var i;
       for(i=0; i < liste_exercices.length; i++){
         e = liste_exercices[i];
         e.removeAttribute("open");
       }
    };

   
