<h2>Agregar nuevo anuncio</h2>

<form method="POST" action="/agregar-anuncio" enctype="multipart/form-data">
	<div class="campoFila">
		<div class="campoTitulo">
			Categoria
		</div>
		<div class="campoCampo">
			<select name="id_categoria">
				{foreach from=$categorias item=categoria}
					<option value="{$categoria.id}">{$categoria.categoria}</option>
				{/foreach}
			</select>
		</div>
	</div>

	<div class="campoFila">
		<div class="campoTitulo">
			Escuela
		</div>
		<div class="campoCampo">
			<select name="id_escuela">
				{foreach from=$escuelas item=escuela}
					<option value="{$escuela.id}">{$escuela.escuela}</option>
				{/foreach}
			</select>
		</div>
	</div>

	<div class="campoFila">
		<div class="campoTitulo">
			Imagen
		</div>
		<div class="campoCampo">
			<input type="file" name="imagen" id="imagen" />
		</div>
	</div>

	<div class="campoFila">
		<div class="campoTitulo">
			Titulo
		</div>
		<div class="campoCampo">
			<input type="text" name="titulo" id="titulo" />
		</div>
	</div>

	<div class="campoFila">
		<div class="campoTitulo">
			Descripcion
		</div>
		<div class="campoCampo">
			<textarea name="descripcion" id="descripcion"></textarea>
		</div>
	</div>

	<div class="campoFila">
		<input type="submit" value="Anunciar" id="botonAnunciar" />
	</div>

	<input type="hidden" name="guardar" value="1" />
</form>