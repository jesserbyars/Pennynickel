$(document).ready(function() {

	//DATE AND TIME

	var curDate = new Date();
	$("#time").text(currentTimeString());
	$("#date").text(curDate.toLocaleDateString());

	setInterval(function() {
		$("#time").text(currentTimeString()); /*this function is in jessefunctions.js*/
	}, 1000);

	//END OF DATE AND TIME

	//HELP

	$(".helplink").click(function() {
		$("#help").fadeIn();
	});

	$(".closehelp").click(function() {
		$("#help").fadeOut();
	});

	//NAV
	$("#create,#row2").mouseover(function() {
		$("nav #row2").show();
	});

	$("#create,#row2").mouseout(function() {
		$("nav #row2").hide();
	})

	//TEMPFIX FOR VIEWING ERRORS
	/*
		$("header").click(function() {
		$(this).fadeOut();
		setInterval(function() {
			$("header").fadeIn();
		}, 10000);
	});
	*/

});