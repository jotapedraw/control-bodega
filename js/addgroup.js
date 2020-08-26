$(document).ready(main);
 
var contador = 1;
 
function main(){
	$('.btn-group').click(function(){
		// $('nav').toggle(); 
 
		if(contador == 1){
			$('.modal-addgroup').animate({
				top: '0'
			});
			contador = 0;
		} else {
			contador = 1;
			$('.modal-addgroup').animate({
				top: '-100vh'
			});
		}
 
	});
 
};