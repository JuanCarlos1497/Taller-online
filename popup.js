var btnAbrirPopup = document.getElementById('btn-abrir-popup'),
	overlay = document.getElementById('overlay'),
	popup = document.getElementById('popup'),
	btnCerrarPopup = document.getElementById('btn-cerrar-popup');



btnAbrirPopup.addEventListener('click', function(){
	overlay.classList.add('active');
	popup.classList.add('active');
});

btnCerrarPopup.addEventListener('click', function(e){
	e.preventDefault();
	overlay.classList.remove('active');
	popup.classList.remove('active');
});
	
var fecha;
var bA= 0;
var bF = 0;
var bC= 0;
var bH= 0;
var bR= 0;

function mostrarFecha(){
	fecha = document.getElementById("date").value;
	console.log(fecha);
}

function cargarDatos(){

	document.getElementById("Aruedas").value = bA;
	document.getElementById("Afrenos").value = bF;
	document.getElementById("Aaceite").value = bC;
	document.getElementById("Aholograma").value = bH;
	document.getElementById("Arevision").value = bR;

}
	var fecha;
	var ruedasOn = 0;
	var frenosOn = 0;
	var aceiteOn = 0;
	var hologrOn = 0;
	var generlOn = 0;
	var total = 0;
	
function mostrarFecha(){
	fecha = document.getElementById("date").value;
	console.log(fecha);
}

function cambiar_imagen1(id,img1,img2){
		if (ruedasOn == 0){
			document.getElementById(id).src=img2;
			ruedasOn = 1; 
			total= total + 164;
			console.log(total );
			bA=1;
			}
		else {
			document.getElementById(id).src=img1;
			ruedasOn = 0;
			total= total - 164;
			console.log(total );
			bA=0;
			}
	}
	function cambiar_imagen2(id,img1,img2){
		if (frenosOn == 0){
			document.getElementById(id).src=img2;
			frenosOn = 1; 
			total= total + 598 ;
			bF=2;
			}
		else {
			document.getElementById(id).src=img1;
			frenosOn = 0;
			total= total - 598;
			bF=0;
			}
	}
	function cambiar_imagen3(id,img1,img2){
		if (aceiteOn == 0){
			document.getElementById(id).src=img2;
			aceiteOn = 1; 
			total= total + 3200 ;
			bC=3;
			}
		else {
			document.getElementById(id).src=img1;
			aceiteOn = 0;
			total= total - 3200 ;
			bC=0;
			}
	}
	function cambiar_imagen4(id,img1,img2){
		if (hologrOn == 0){
			document.getElementById(id).src=img2;
			hologrOn = 1; 
			total= total + 434 ;
			bH=4;
			}
		else {
			document.getElementById(id).src=img1;
			hologrOn = 0;
			total= total - 434 ;
			bH=0;
			}
	}
	function cambiar_imagen5(id,img1,img2){
		if (generlOn == 0){
			document.getElementById(id).src=img2;
			generlOn = 1;
			total= total + 150 ; 
			bR=5;
			}
		else {
			document.getElementById(id).src=img1;
			generlOn = 0;
			total= total - 150 ; 
			bR=0;
			}
	}


var btnAbrirPopup = document.getElementById('btn-abrir-popup'),
	overlay = document.getElementById('overlay'),
	popup = document.getElementById('popup'),
	btnCerrarPopup = document.getElementById('btn-cerrar-popup');

btnAbrirPopup.addEventListener('click', function(){
	overlay.classList.add('active');
	popup.classList.add('active');
});

btnCerrarPopup.addEventListener('click', function(e){
	e.preventDefault();
	overlay.classList.remove('active');
	popup.classList.remove('active');
});

