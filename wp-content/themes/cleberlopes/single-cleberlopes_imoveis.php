<?php get_header( 'imovel' ) ?>
        <div class="row md-10 div-central">
          <div class="breadcrumbs md-7 left-floated">
            <p>Imóveis • Casas • Laranjal</p>
          </div>
          <div class="searchform md-5 left-floated">
            <input id="s" class="search-bar smaller left-floated" type="text" placeholder="Quer continuar procurando?">
            <button class="button search-button smaller grey-button left-floated">Buscar</button>
          </div> <!-- .row breadcrumbs e campo de pesquisa -->
        </div>

        <article class="row md-10 div-central">
          <div class="info-primaria-imovel">
            <div class="imagem-imovel md-7">
              <img src="img/imovel-placeholder.png" alt="Casa no Laranjal" />
            </div> <!-- .imagem-imovel -->
            <div class="chamada-imovel ">
              <h1>Casa no Laranjal</h1>
              <p class="codigo-imovel">Código do imóvel: CLA968</p>
              <p class="avaliacao-imovel">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec.
              </p>
              <p class="preco-imovel">R$370.000,00</p>
            </div> <!-- .chamada-imovel -->
          </div> <!-- .info-primaria-imovel -->

          <div class="bloco info-secundaria-imovel">
            <div class="md-7 left-floated">
              <h2>Características do imóvel</h2>
              <div class="lista-caracteristicas">
                <ul>
                  <li><b>Quartos:</b> 3</li>
                  <li><b>Banheiros:</b> 2</li>
                  <li><b>Garagem:</b> Sim</li>
                  <li><b>Área total:</b> 300m<sup>2</sup></li>
                  <li><b>Posição solar:</b> Norte</li>
                  <li><b>Suítes:</b> Sim</li>
                  <li><b>Aceita Animais:</b> Sim</li>
                  <li><b>Valor IPTU:</b> R$500</li>
                  <li><b>Financiamento:</b> Sim</li>
                  <li><b>Entrada:</b> A negociar</li>
                </ul>
              </div> <!-- .lista-secundaria -->
          </div>
          <div class="gostei md-5 right-floated">
            <h2>Gostou? Entre em contato!</h2>
            <button class="md-6 button blue-button div-central" type="button" name="button">Gostei!</button>
          </div>
      </article>

<?php get_footer(); ?>
