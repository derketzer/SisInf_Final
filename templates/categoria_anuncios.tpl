<div class="tituloIndex">
	Categoría {$categoria}
</div>

<div>&nbsp;</div>

<div id="ofertas">
	{foreach from=$ofertas item=oferta}
		<a href="{$urlBase}{$oferta.url}" class="ofertaURL">
			<div class="ofertaItem">
				<div class="ofertaImagen">
					<img src="{$oferta.imagen}" />
				</div>

				<div class="ofertaTitulo">
					<div class="ofertaTituloTexto">
						{$oferta.titulo}
					</div>
				</div>
			</div>
		</a>
	{/foreach}

	<div style="clear:both;"></div>
</div>
