var orange = "#f78064";

$(function () {

	$('#_submit').each(function(i,e){
		var out = $(this).parent();
		out.clone().addClass('over').insertBefore(out.addClass('out'));
	});	

	$('.containerButtons').hover(function(){
		//$(this).animate({marginTop:"30px"}, 150);
		$(".button.over").animate({marginTop:"0px"}, 100);
	}, function() {
		$(".button.over").animate({marginTop:"-30px"}, 100);
	});
});

function doShake( capa ) {
	$("#" + capa).effect("shake", {times:3, distance: 15});
}
function changeColor( ) {	
	$(".grey").css("color", orange);
}