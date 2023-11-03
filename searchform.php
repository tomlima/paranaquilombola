<div class="search__modal disable">
	<i  class="fas fa-times search__close"></i>
	<form id="searchform" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input  placeholder="O que você procura?" type="text" name="s" value="<?php echo get_search_query(); ?>">
		<label for="modal-search-field">Pressione ENTER para buscar ou ESC para sair</label>
	</form>
</div>
