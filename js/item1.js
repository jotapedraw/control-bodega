$(document).ready(main);
 
var contador = 1;
 
function main(){
	$('.herramientas').click(function(){
		// $('nav').toggle(); 
 
		if(contador == 1){
			$('.despliegue-herramientas').animate({
				left: '-20%'
			});
			contador = 0;
		} else {
			contador = 1;
			$('.despliegue-herramientas').animate({
				left: '20%'
			});
		}
 
	});
 
};