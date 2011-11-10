$(document).ready(function () {
	$('.jmenu').jmenu();
	$( "div.actions ul li a" ).button();
	
	$('.jmenu a').click(function(e) {
		var href = $(this).attr('href');
		if(href == "#")
			e.preventDefault();
	});
});