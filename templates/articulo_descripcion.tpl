<div id="articuloTop">
	<div id="articuloIzquierda">
		<div id="articuloImagen">
			<img src="{$baseURL}{$imagen}" />
		</div>

		<div id="articuloImagenCarrousel">
		</div>
	</div>

	<div id="articuloDerecha">
		<div id="articuloDetalles">
			{foreach from=$articuloDetalles item=articuloDetalle}
				<div class="articuloDetalle">
					<div class="articuloDetalleTitulo">
						{$articuloDetalle.titulo}
					</div>

					<div class="articuloDetalleTexto">
						{$articuloDetalle.texto}
					</div>
				</div>
			{/foreach}
		</div>

		<div style="clear:both"></div>
	</div>

	<div style="clear:both;height:30px;"></div>
</div>

<div id="articuloBottom">
	<div id="articuloComentarios">
		{include file="articulo_comentarios.tpl"}
	</div>

	<div id="articuloAlgo">
		<h2>Algo</h2>
	</div>

	<div style="clear:both"></div>
</div>