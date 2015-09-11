<form method="get" action="<?php bloginfo('url'); ?>" class="searchform">
  <input id="s" name="s" class="search-bar left-floated" type="text" value="<?php echo esc_html( get_search_query( false ) ); ?>" placeholder="Digite o que procura (casa, apartamento, bairro, quartos etc...)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Digite o que procura (casa, apartamento, bairro, quartos etc...)'" >
  <button type="submit" class="button grey-button search-button left-floated">Buscar</button>
</form> <!-- searchform -->
