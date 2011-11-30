<h2>Anuncios recomendados</h2>

{foreach from=$recomendados item=recomendado}
	<div class="recomendado">
		<a href="{$recomendado.url}">
			<img src="{$recomendado.imagen}" class="recomendadoImagen" />
		</a>
	</div>
{/foreach}