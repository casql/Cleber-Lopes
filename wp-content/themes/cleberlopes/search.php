<?php get_header('imovel'); ?>

        <?php // iniciar o loop da busca ?>
        <?php if (have_posts()) : ?>
          <div class="row md-10 div-central">
            <h1>Resultados da sua busca por:</h1>
            <div class="md-10">
              <?php get_template_part( 'content' , 'searchform'); ?>
            </div>

          <div class="md-12 search-filtros div-central">
            <h3>Filtrar resultados:</h3>
              <select class="md-2" name="tipo">
                <option value="option">Mostre-me apenas...</option>
                <option value="option">Casas</option>
                <option value="option">Apartamentos</option>
                <option value="option">Terrenos</option>
              </select>

              <select class="md-2" name="">
                <option value="option">Nº de quartos...</option>
                <option value="option">1-2 quarto</option>
                <option value="option">3-5 quartos</option>
                <option value="option">Acima de 5 quartos</option>
              </select>

              <select class="md-2" name="">
                <option value="option">No bairro...</option>
                <option value="option">Areal</option>
                <option value="option">Fragata</option>
                <option value="option">Centro</option>
              </select>

              <select class="md-2" name="">
                <option value="option">De valor entre...</option>
                <option value="option">Areal</option>
                <option value="option">Fragata</option>
                <option value="option">Centro</option>
              </select>
            </div>
          </div>
          <div class="row md-10 div-central resultados">
          <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part( 'content', 'search' ); ?>
          <?php endwhile; ?>
        <?php else : ?>
        <?php endif; ?>

        <div class="row paginacao">
          <ul class="">
            <li><<</li>
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>>></li>
          </ul>
        </div>

<?php get_footer(); ?>
