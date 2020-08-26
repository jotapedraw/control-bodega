$(document).ready(main);
 
var contador = 1;
 
function main(){
	$('.btn-crear').click(function(){
		// $('nav').toggle(); 
 
		if(contador == 1){
			$('.modal-add').animate({
				top: '0'
			});
			contador = 0;
		} else {
			contador = 1;
			$('.modal-add').animate({
				top: '-100vh'
			});
		}
 
	});
 
};