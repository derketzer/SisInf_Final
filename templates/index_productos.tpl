<div class="tituloIndex">
	&iexcl;Ofertas Destacadas!
</div>

<div>&nbsp;</div>

<div id="ofertasDestacadas">
	{foreach from=$ofertasDestacadas item=oferta}
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

<div style="height:50px;">&nbsp;</div>

<div class="tituloIndex">
	&iexcl;Ofertas Nuevas!
</div>

<div>&nbsp;</div>

<div id="ofertasNuevas">
	{foreach from=$ofertasNuevas item=oferta}
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