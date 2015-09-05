<?php get_header(); ?>

        <section class="landing">
          <h1 class="landing-heading">Pode contar comigo.</h1>
          <p class="landing-subheading">Meu trabalho é te ajudar a encontrar o imóvel ideal.</p>
          <form method="get" action="<?php bloginfo('url'); ?>" class="searchform md-8 div-central">
            <input id="s" name="s" class="search-bar left-floated" type="text" value="<?php echo esc_html( get_search_query( false ) ); ?>" placeholder="Digite o que procura (casa, apartamento, bairro, quartos etc...)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Digite o que procura (casa, apartamento, bairro, quartos etc...)'" >
            <button type="submit" class="button grey-button search-button left-floated">Buscar</button>
          </form> <!-- searchform -->
          <p class="letras-pequenas">
            Imóveis e terrenos na região de Pelotas, Rio Grande do Sul, Brasil.
          </p>
        </section>

        <section class="content">
          <div class="row md-10 div-central motivos">
            <div class="bloco md-4 left-floated">
              <img src="<?php echo get_template_directory_uri(); ?>/img/motivo-placeholder.png" alt="Um motivo para comprar com Cleber Lopes" />
              <h2>Menos estresse</h2>
              <p>Transações imobiliárias podem ser uma dor de cabeça. Conte comigo para cuidar dos mínimos detalhes da sua transação.</p>
            </div>
            <div class="bloco md-4 left-floated">
              <img src="<?php echo get_template_directory_uri(); ?>/img/motivo-placeholder.png" alt="Um motivo para comprar com Cleber Lopes" />
              <h2>Negócios com seguraça</h2>
              <p>Meu trabalho é  assegurar que todas as transações sejam feitas com o sigilo necessário, sempre buscando a satisfação de todos.</p>
            </div>
            <div class="bloco md-4 left-floated">
              <img src="<?php echo get_template_directory_uri(); ?>/img/motivo-placeholder.png" alt="Um motivo para comprar com Cleber Lopes" />
              <h2>Sem complicação</h2>
              <p>Gosto de fazer as coisas de maneiras simples, procurando sempre uma relação de sinceridade e harmonia com meus clientes.</p>
            </div>
            <div class="">
              <a href="#" class="md-6 button blue-button div-central" type="button" name="button">OK, vamos lá!</a>
            </div>
          </div>

        </section>

<?php get_footer(); ?>
