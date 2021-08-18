// script para animar os destaques nos textos do bloco de Projetos (.featuredProjects)

// prepare um Observer para detectar todas as vezes em que os highlights estejam
// dentro da visão do usuário
const observerCallback = (entries, observer) => {
    entries.forEach( entry => {
        entry.target.classList.toggle('animatedHighlight', entry.isIntersecting)
    } );
};

const Observer = new IntersectionObserver( observerCallback, {threshold: .75} );
const elementsToAnimate = document.querySelectorAll('.featuredProjects .highlight'); // bloco dos Projetos

// sinalize quais elementos devem ser monitorados pelo Obsorver
elementsToAnimate.forEach( element => {
    Observer.observe( element, {} );
} );


// controle do scroll da lista de Últimos Posts
document.querySelector('.postsGrid').addEventListener('wheel', event => {
    event.preventDefault();
   if (event.deltaY > 0) {
        event.target.scrollBy(300,0); // faz scroll de 300px para frente (carrossel vai para direita)
   } else {
        event.target.scrollBy(-300,0); // faz o scroll de 300px para trás (carrossel volta para esquerda)
   }
});

// controla o menu principal
let mainNav = document.querySelector('.mainNav');
let logoWhite = document.querySelector('.logo-white');
let logoDark = document.querySelector('.logo-dark');
let mainNavBg = document.querySelector('.mainNav .navBg');

window.addEventListener("scroll", event => {   
    // o scroll já andou mais de 100px ?
    let scrolled = (window.pageYOffset > 100) ? true : false;

    // torna o bg do wrapper em branco
    mainNav.classList.toggle('mainNav-white', scrolled);

    // inverte a visibilidade dos logotipos nas versões clara e escura
    logoWhite.classList.toggle('hide', scrolled);
    logoDark.classList.toggle('show', scrolled);

    // anima deslocamento do background
    mainNavBg.classList.toggle('animate-moveUp', scrolled);
});

// anima o menu principal .mainNav ao carregar o documento
window.addEventListener('load', event => {
    mainNavBg.classList.toggle('animate-moveLeft');
})