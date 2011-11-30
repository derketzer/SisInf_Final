<div id="comentariosHeader">
	<h2>Comentarios</h2>
	{if $logged == 1}
		<h2 id="botonComentar">Comentar</h2>
	{/if}

	<div style="clear:both"></div>
</div>

<div id="cajaComentar">
	<div id="cajaComentarWrap">
		<textarea id="textComentario"></textarea>
		<br />
		<input type="button" value="Comentar" id="buttonComentar" />
	</div>
</div>

<br />

<div id="cajaComentarios">
{foreach from=$anuncioComentarios item=anuncioComentario}
	<div class="anuncioComentario">
		<div class="anuncioComentarioTitulo">
			<div class="anuncioComentarioUsuario">
				{$anuncioComentario.usuario}
			</div>

			<div class="anuncioComentarioFecha">
				{$anuncioComentario.fecha}
			</div>
		</div>

		<div class="anuncioComentarioTexto">
			<div style="height:10px;">&nbsp;</div>
			<div class="anuncioComentarioTextoWrap">
				{$anuncioComentario.comentario}
			</div>
		</div>

		<div style="clear:both;height: 15px;">&nbsp;</div>
	</div>
{/foreach}
</div>