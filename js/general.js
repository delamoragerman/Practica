/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//////    EFECTOS FLECHAS CARRUSEL ESTILO NETFLIX    //////
const fila = document.querySelector('.contenedor-carrusel-catalogo');
const prendas = document.querySelector('.prendas');

const flechaIzquierda = document.getElementById('flecha-izquierda-inv');
const flechaDerecha = document.getElementById('flecha-derecha-inv');

//////    EVENT LISTENER FLECHA IZQUIERDA    //////

flechaDerecha.addEventListener('click', () => {
    fila.scrollLeft += fila.offsetWidth;
});

//////    EVENT LISTENER FLECHA DERECHA//////

flechaIzquierda.addEventListener('click', () => {
    fila.scrollLeft -= fila.offsetWidth;
});

//////    ANIMACIONES DE ELEMENTOS DE LA PAGINA    //////

let animado = document.querySelectorAll('.animado');

function scrollAnimation() {
    let scrollTop = document.documentElement.scrollTop;
    for (var i = 0; i < animado.length; i++) {
        let alturaAnimado = animado[i].offsetTop;
        if (alturaAnimado - 300 < scrollTop) {
            animado[i].style.opacity = 1;
        }
    }
}

window.addEventListener('scroll', mostrarScroll);