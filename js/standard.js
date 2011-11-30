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

	$("#botonComentar").click(function(){
		$("#cajaComentar").slideToggle("slow");
	});

	$("#buttonComentar").click(function(){
		var comentario = $("#textComentario").val();
		var id_anuncio = $("#id_anuncio").val();

		var request = $.ajax({
			url: "/ajax/comentario.php",
			type: "POST",
			data: "id_anuncio="+id_anuncio+"&comentario="+comentario,
			dataType: "json",
			success: function(res){
				muestraComentario();
			}
		});
	});
});

function muestraComentario(){
	var comentario = $("#textComentario").val();

	$("#cajaComentar").slideUp("slow", function(){
		var a = $("<div></div>");
		a.addClass("anuncioComentario");
		var b = $("<div></div>");
		b.addClass("anuncioComentarioTitulo");
		var c = $("<div></div>");
		c.addClass("anuncioComentarioUsuario");
		c.html("Yo");
		var d = $("<div></div>");
		d.addClass("anuncioComentarioFecha");
		d.html("Ahora");
		var e = $("<div></div>");
		e.addClass("anuncioComentarioTexto");
		var f = $("<div></div>");
		f.attr("style", "height:10px;");
		var g = $("<div></div>");
		g.addClass("anuncioComentarioTextoWrap");
		g.html(comentario);
		var h = $("<div></div>");
		h.attr("style", "clear:both;height: 15px;");

		b.append(c);
		b.append(d);
		e.append(f);
		e.append(g);
		a.append(b);
		a.append(e);
		a.append(h);

		$("#cajaComentarios").prepend(a);

		$("#textComentario").val("");
	});
}