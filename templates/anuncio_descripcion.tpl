<input type="hidden" name="id_anuncio" id="id_anuncio" value="{$id_anuncio}" />

<div id="anuncioTop">
	<div id="anuncioIzquierda">
		<div id="anuncioImagen">
			<img src="{$baseURL}{$imagen}" />
		</div>

		<div id="anuncioImagenCarrousel">
		</div>
	</div>

	<div id="anuncioDerecha">
		<div id="anuncioDetalles">
			{foreach from=$anuncioDetalles item=anuncioDetalle}
				<div class="anuncioDetalle">
					<div class="anuncioDetalleTitulo">
						{$anuncioDetalle.titulo}
					</div>

					<div class="anuncioDetalleTexto">
						{$anuncioDetalle.texto}
					</div>
				</div>
			{/foreach}
		</div>

		<div style="clear:both"></div>
	</div>

	<div style="clear:both;height:30px;"></div>
</div>

<div id="anuncioBottom">
	<div id="anuncioComentarios">
		{include file="anuncio_comentarios.tpl"}
	</div>

	<div id="anuncioAlgo">
		{include file="anuncio_recomendados.tpl"}
	</div>

	<div style="clear:both"></div>
</div>