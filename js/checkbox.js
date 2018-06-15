function check_todos(vars){
	
	if(vars==true) $("input[type='checkbox']").attr("checked", true);
	
	else $("input[type='checkbox']").attr("checked", false);

};

function valUlMay (){
	var ulCuanti = $(".sucurales ul").length;
	var anchoTotal = $(".ingrese").width();
	var altoMayor = 0;
	var altoActuaal =0;
	for (var i = 0; i < ulCuanti; i++) {
		console.log("valor de "+i);
		altoActuaal = $(".sucurales ul:eq("+i+")").height();
		if (altoActuaal > altoMayor) {
			altoMayor = altoActuaal;
		};
		console.log(altoMayor);
		var cadaAncho = (anchoTotal/4)-14;
	};
	$(".sucurales ul").css({"height" : altoMayor, "width": cadaAncho});
	var altoBoton = $(".buscarCss").height();
	$(".buscarCss").css("margin-top", altoMayor-altoBoton);

};

valUlMay();

		
		

	
	
	
