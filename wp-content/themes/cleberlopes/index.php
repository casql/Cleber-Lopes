<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/master.css" media="screen" title="Stylesheet" charset="utf-8">
  </head>
  <body>
    <div id="page" class="hfeed inner-wrapper">
      <header id="header">
        <div id="masthead" class="row md-10 div-central header">
          <a href="#">
            <div class="logo left-floated">
              <img src="<?php echo get_template_directory_uri(); ?>/img/brand-logo.png" alt="Cleber Lopes Imóveis" />
            </div>
          </a>
          <nav class="nav nav-menu horizontal-nav right-floated">
            <ul>
              <li>Imóveis à venda</li>
              <li>Cadastre seu imóvel</li>
              <li>Fale comigo</li>
            </ul>
            </ul>
          </nav>
        </div> <!-- .masthead -->
      </header> <!-- #header -->

      <section id="main" class="div-central">
        <!-- Aqui corta-se o documento em header.php -->

        <section class="landing">
          <h1 class="landing-heading">Pode contar comigo.</h1>
          <p class="landing-subheading">Meu trabalho é te ajudar a encontrar o imóvel ideal.</p>
          <form method="get" class="searchform md-8 div-central">
            <input id="s" class="search-bar left-floated" type="text" value="<?php echo esc_attr( get_search_query() ); ?>" placeholder="Digite o que procura (casa, apartamento, bairro, quartos etc...)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Digite o que procura (casa, apartamento, bairro, quartos etc...)'" >
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

        <!-- Aqui corta-se o documento em footer.php -->
      </section> <!-- #main .content -->

      <footer id="colophon" class="footer md-12 page-footer">
        <div class="row md-10 div-central">
          <div class="footer-info left-floated">
            <b>Cleber A. Lopes</b> <br>
            Imóveis em Pelotas(RS) e região <br>
            contato@cleberlopesimoveis.com.br <br>
            +55 (53) 3222 3667
          </div> <!-- .footer-info -->
          <nav class="nav nav-menu horizontal-nav footer-nav right-floated">
            <ul>
              <li>Imóveis à venda</li>
              <li>Cadastre seu imóvel</li>
              <li>Fale comigo</li>
            </ul>
          </nav> <!-- .nav .nav-menu .footer-nav -->
        </div> <!-- .page-footer -->
      </footer> <!-- .colophon -->
    </div> <!-- #page .hfeed -->
  </body> <!-- body -->
</html>
