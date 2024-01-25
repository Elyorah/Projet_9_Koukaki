console.log("Voici mon script personnalisé JS pour le studio Koukaki !");

//Création d'un Observer
const observer = new IntersectionObserver(entries =>{
     entries.forEach(entry => {
          if (entry.intersectionRatio > 0.5) {
               entry.target.classList.add('clouds-animated')
               console.log('Les nuages sont en mouvement !')
          }
     })
     
},
{
     threshold: [0.5]
})

//Je stocke la div prévue pour gérer l'animation des nuages
const clouds = document.querySelector('.clouds')
//Je demande à l'Observer de l'observer
observer.observe(clouds)