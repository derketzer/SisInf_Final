<div id="menuPrincipal">
	<div>&nbsp;</div>
	<div class="submenuPrincipal {$activo4}">
		<a href="/">Inicio</a>
	</div>

	<div class="submenuPrincipal {$activo5}">
		<a href="/agregar-anuncio">Agregar anuncio</a>
	</div>
	
	{foreach from=$menu item=menuItem}
		<div class="submenuPrincipal{$menuItem.activo}">
			<a href="{$menuItem.url}">{$menuItem.categoria}</a>
		</div>
	{/foreach}
	
	{if $logged == 1}
		<div class="submenuPrincipal">
			<a href="/logout.php">Salir</a>
		</div>
	{/if}
	<div>&nbsp;</div>
</div>
