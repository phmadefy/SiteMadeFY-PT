var content = ['Feito Para Você', 'Tecnologia', 'Solução', 'Inovação'];
var text = document.getElementById('efeito');

var speed = 190;
var cont = 0;
var nova = 0;

function typeWriter() {
    if (cont < content[nova].length) {
        text.textContent += content[nova].charAt(cont);
        cont++;
        setTimeout(typeWriter, 400);
    } else {
        text.textContent = '';
        cont = 0;
        nova > 2 ? nova = 0 : nova += 1;
        typeWriter();
    }
}
typeWriter();