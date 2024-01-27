console.log("Voici un script JS personnalisé pour le studio Koukaki !");

document.addEventListener('DOMContentLoaded', function () { // On vérifie que le DOM soit chargé avant de le manipuler

 /*'.'.'.'.'.'.'.'.'.'.'.'.'.'*/
 /*     PARALLAXE NUAGES      */
 /*'.'.'.'.'.'.'.'.'.'.'.'.'.'*/
    
    // On récupère les données pour les variables principales
    const articlePlace = document.getElementById('place');
    const clouds = document.querySelector('#place .clouds');
    let cloudsAnimatedClass = 'clouds-animated'; // Marqueur qui contrôle le déclenchement de l'animation
 
    // On créé un Observer
    const observer = new IntersectionObserver(function (entries) {
        const entry = entries[0];
 
        if (entry.intersectionRatio > 0.5) {
            articlePlace.classList.add(cloudsAnimatedClass);
        } else {
            articlePlace.classList.remove(cloudsAnimatedClass);
        }
    }, { threshold: 0.5 }); // Déclenchement de l'animation à 50% d'affichage au viewport
 
    // Observer l'article #place
    observer.observe(articlePlace);
 
    // On créé la fonction de déplacement horizontal
    function translateClouds() {
        let scrollY = window.scrollY;                 // Propriété qui calcul le nombre de pixels de la page défilés verticalement
        const topSpace = articlePlace.offsetTop + 0.5 * articlePlace.offsetHeight;      // Distance entre le haut de la page et le milieu de l'élément "#place"
        const cloudsStartPosition = 0;              // Position initiale des nuages

        if (scrollY > topSpace) {
            let distance = scrollY - topSpace;
            let newPosition = cloudsStartPosition - distance * 0.68;        

            clouds.style.transform = 'translateX(' + newPosition + 'px)';
        } else {
            clouds.style.transform = 'translateX(' + cloudsStartPosition + 'px)';
        }
    }
 
    function scrollReached() {
        if (articlePlace.classList.contains(cloudsAnimatedClass)) {
            translateClouds();
        }
    }
 
    // On écoute le scroll pour gérer le déplacement des nuages
    document.addEventListener('scroll', function () {
        scrollReached();
    });
 
    // Déclencher la mise à jour des nuages lors du chargement initial
    scrollReached();



 /*'.'.'.'.'.'.'.'.'.'.'.'.'.'.'.'.'.'.'.'*/
 /*   GESTION DE L'ANIMATION DES TITRES   */
 /*'.'.'.'.'.'.'.'.'.'.'.'.'.'.'.'.'.'.'.'*/

    const titles = document.querySelectorAll('h2 span, h3 span, #oscars');

    titles.forEach(title => {
        const titlesObserver = new IntersectionObserver(
            function (entries) {
                if (entries[0].isIntersecting) {
                    title.classList.add('reveal');
                }
            },
            { threshold: 0.5 } // L'élément est considéré comme visible lorsque 50% de son élément parent est dans la vue
        );

        titlesObserver.observe(title);
    });



 /*'.'.'.'.'.'.'.'.'.'.'.'.'.'.'*/
 /*   ACCELERATION DES FLEURS   */
 /*'.'.'.'.'.'.'.'.'.'.'.'.'.'.'*/

    // On récupère l'élément racine (:root)
    const rootElement = document.documentElement;

    // Variables pour le suivi du scroll
    let isScrolling = false;
    let timer;

    document.addEventListener('scroll', function () {
        
        if (!isScrolling) {
            // Au début du scroll, ajuster la valeur de --rotate à 2s
            rootElement.style.setProperty('--rotate', '2s');
            isScrolling = true;
        }

        // Réinitialiser la valeur de --rotate après 300ms sans défilement
        clearTimeout(timer);
        timer = setTimeout(function () {
            rootElement.style.setProperty('--rotate', '18s');
            isScrolling = false;
        }, 300);

    });

    //////////////////////////////////////////

    
    

});