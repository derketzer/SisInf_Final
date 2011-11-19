var loginVisible = false;

$(document).ready(function(){
	$("#escuelaButton").click(function(){
		$("#menuEscuelas").slideToggle("slow");
	});

	$("#loginButton").click(function(){
		var topPixel = "";
		var loginLeyenda = "";

		if(!loginVisible){
			topPixel = "0px";
			loginLeyenda = "Cerrar";
		}else{
			topPixel = "-225px";
			loginLeyenda = "Ingresar";
		}

		$("#loginBox").animate({
			top: topPixel
		}, 500, function(){
			$("#loginButton").html(loginLeyenda);
			loginVisible = !loginVisible;
			$("#loginInputUser").val("");
			$("#loginInputPass").val("");
		});
	});
});