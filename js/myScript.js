//для цветов
var wrapper = document.getElementById('wrapper');
var main = document.getElementsByTagName('main');
var oplata = document.getElementById('oplata');
var button = document.getElementById('button'); // кнопка зазазать обратный звонок
var krestik = document.getElementById('krestik');
var obratZvonok = document.getElementById('obratZvonok');

button.addEventListener("click", function () {
	obratZvonok.style.visibility = 'visible';
    wrapper.style.backgroundColor= '#B5B5B5';
    main[0].style.backgroundColor = '#939393';
    oplata.style.backgroundColor = '#008800';
    }, false);

krestik.addEventListener("click", function () {
	obratZvonok.style.visibility = 'hidden';
    wrapper.style.backgroundColor= '#DDDDDD';
    main[0].style.backgroundColor = '#C0C0C0';
    oplata.style.backgroundColor = '#80FF80';
    }, false);