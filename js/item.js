$(document).ready(main);
 
var contador = 1;
 
function main(){
	$('.caja').click(function(){
		// $('nav').toggle(); 
 
		if(contador == 1){
			$('.despliegue-caja').animate({
				left: '-20%'
			});
			contador = 0;
		} else {
			contador = 1;
			$('.despliegue-caja').animate({
				left: '20%'
			});
		}
 
	});
 
};