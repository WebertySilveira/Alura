function tocaSom (idElementoAudio) {  
    const elemento = document.querySelector(idElementoAudio);

    if (elemento === null) {
        return console.log("Elemento não encontrado!");
    }

    elemento.play();
}

const listaDeTeclas = document.querySelectorAll('.tecla');

listaDeTeclas.forEach(tecla => {

    tecla.onclick = function () {
        tocaSom("#som_" + tecla.classList[1]);
    }

    tecla.onkeydown = function (evento) {

        if (evento.code === "Enter" 
            || evento.code === "NumpadEnter" 
            || evento.code === "Space"
        ) {
            tecla.classList.add('ativa');    
        }

    }

    tecla.onkeyup = function () {
        tecla.classList.remove('ativa');
    }
});