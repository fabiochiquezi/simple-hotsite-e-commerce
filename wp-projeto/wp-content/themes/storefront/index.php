<?php get_header(); ?>

  <section class="banner-produto">
    <div class="container">
      <div class="row d-flex flex-column align-items-center flex-lg-row justify-content-lg-between">
        <div class="content order-2 order-lg-1">
          <h1>Hezbbollah <span>Uma breve
              História</span></h1>
          <p class="desc">Nunc consequat justo eget enim finibus porta. 
              Suspendisse orci nunc, rutrum quis nunc sed.</p>
          <p class="preco">R$ 29,90</p>
          <a href="" class="button1">COMPRAR</a>
        </div>
        <div class="image order-1">
          <img src="<?php echo get_template_directory_uri(); ?>/img/banner-01.png" class="d-none d-lg-block" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/img/banner-01-mob.png" class="d-lg-none" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="detalhes-produto">
    <div class="container">
      <div class="row d-lg-flex flex-lg-nowrap justify-content-lg-between">
        <div class="content d-flex flex-column align-items-center align-items-lg-start align-content-center">
          <div class="menu-colapse">
              <ul class="d-none d-lg-flex">
                  <li><a href="item-1" class="active">Nota do Autor</a></li>
                  <li>|</li>
                  <li><a href="item-2">Detalhes</a></li>
                  <li>|</li>
                  <li><a href="item-3">Outros</a></li>
                </ul>
              <select class="d-lg-none">
                <option value="item-1">Nota do Autor</option>
                <option value="item-2">Detalhes</option>
                <option value="item-3">Outros</option>
              </select>
          </div>

          <div class="content-colapse">
            <div class="item item-1 active">
              <h2>Perspeciates Unde & Omnis
                  Zoga Natus</h2>
              <p>Perspiciatis unde omnis iste natus sit voluptatem accusantium 
                  doloremque laudantium, totam rem aperiam, eaque ipsa quae. Ab illo 
                  inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
                  Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut.
                  </p>

              <div class="frase-personalizada">
                <p>“Nunc consequat justo eget enim finibus porta. Suspendisse 
                    orci nunc, rutrum quis nunc sed, feugiat hendrerit massa. In 
                    cursus ornare sollicitudin.”</p>
                <p class="autor">Ivan Hassan, Nunc Consequat</p>
              </div>
            </div>

            <div class="item item-2">
                <h2>R$ 29,90 <span>ou</span> 3 x R$10,00</h2>
                <ul>
                  <li><b>- Altura:</b> 23.00 cm</li>
                  <li><b>- Cód. Barras:</b> 9788556510761</li>
                  <li><b>- Largura:</b> 16.00 cm</li>
                  <li><b>- Peso:</b> 1.000 Kg</li>
                  <li><b>- Produto sob encomenda:</b> Sim</li>
                </ul>
  
                <p>“Nunc consequat justo eget enim finibus porta. Suspendisse 
                    orci nunc, rutrum quis nunc sed, feugiat hendrerit massa. In 
                    cursus ornare sollicitudin.”</p>
              </div>

              <div class="item item-3">
                  <h2>Donec A Tristique Risus!</h2>
                  <p>Donec tristique nec risus at tempor. Praesent vel blandit lacus, id viverra nunc. Pellentesque tristique nibh ac erat lacinia maximus. Quisque quis pellentesque metus. Nam vestibulum libero at nulla sollicitudin sodales. Vivamus auctor pellentesque varius. Fusce in egestas ante. Etiam mattis dui et purus finibus dignissim quis et erat. Aliquam quis rhoncus lacus. Proin at massa in quam viverra egestas. Nulla facilisi. Integer at libero quis ipsum mollis aliquam suscipit eu nibh. Vivamus id augue justo. Maecenas aliquet pulvinar nisl venenatis faucibus. Vivamus consectetur sapien lectus, a gravida magna euismod sit amet.
                  </p>
                  <p>Fusce sed leo ac enim eleifend tempus. Vestibulum condimentum, nulla nec efficitur suscipit, mi arcu bibendum diam, eget posuere nisl massa ut neque. Nulla facilisi. Etiam sed fermentum libero. Vestibulum eget volutpat massa. Sed eu ipsum bibendum, finibus elit at, semper urna. Aliquam dapibus, velit facilisis venenatis interdum, augue sapien consectetur metus, in accumsan dolor nisl sed felis. Duis ultricies risus nec pulvinar dignissim.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec mauris nec nulla congue consectetur nec et odio. Phasellus lobortis commodo mi, in pharetra eros. Nunc eu dictum tellus, vitae finibus dui. Nam aliquet scelerisque quam ac molestie. Suspendisse pellentesque finibus tellus, a malesuada dolor mollis et. Donec eu lectus ac libero iaculis tempus eu vitae magna. </p>
    
                  <div class="frase-personalizada">
                    <p>“Nunc consequat justo eget enim finibus porta. Suspendisse 
                        orci nunc, rutrum quis nunc sed, feugiat hendrerit massa. In 
                        cursus ornare sollicitudin.”</p>
                    <p class="autor">Ivan Hassan, Nunc Consequat</p>
                  </div>
                </div>
          </div>
        </div>
        <div class="image">
          <img src="<?php echo get_template_directory_uri(); ?>/img/foto-ilustrativa-01.jpg" alt="">
        </div>
      </div>
    </div>
  </section>

  <hr class="hr-1">

  <section class="resumo-produto d-none d-lg-block">
    <div class="container">
      <div class="row">
          <h3>RESUMO DO LIVRO</h3>
          <h2>Donec A Tristique Risus!</h2>
          <div class="content">
            <p>Donec tristique nec risus at tempor. Praesent vel blandit lacus, id viverra nunc. Pellentesque tristique nibh ac erat lacinia maximus. Quisque quis pellentesque metus. Nam vestibulum libero at nulla sollicitudin sodales. Vivamus auctor pellentesque varius. Fusce in egestas ante. Etiam mattis dui et purus finibus dignissim quis et erat. Aliquam quis rhoncus lacus. Proin at massa in quam viverra egestas. Nulla facilisi. Integer at libero quis ipsum mollis aliquam suscipit eu nibh. Vivamus id augue justo. Maecenas aliquet pulvinar nisl venenatis faucibus. Vivamus consectetur sapien lectus, a gravida magna euismod sit amet.</p>
            <p>Fusce sed leo ac enim eleifend tempus. Vestibulum condimentum, nulla nec efficitur suscipit, mi arcu bibendum diam, eget posuere nisl massa ut neque. Nulla facilisi. Etiam sed fermentum libero. Vestibulum eget volutpat massa. Sed eu ipsum bibendum, finibus elit at, semper urna. Aliquam dapibus, velit facilisis venenatis interdum, augue sapien consectetur metus, in accumsan dolor nisl sed felis. Duis ultricies risus nec pulvinar dignissim.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec mauris nec nulla congue consectetur nec et odio. Phasellus lobortis commodo mi, in pharetra eros. Nunc eu dictum tellus, vitae finibus dui. Nam aliquet scelerisque quam ac molestie. Suspendisse pellentesque finibus tellus, a malesuada dolor mollis et. Donec eu lectus ac libero iaculis tempus eu vitae magna. </p>
          </div>
      </div>
    </div>
  </section>

  <section class="outros-produtos">
    <div class="container">
      <div class="row d-flex flex-column align-items-center flex-lg-row justify-content-around">
        <div class="content order-2 order-lg-1">
          <h3>OUTROS LIVROS</h3>
          <h2>Perspiciatis Unde Omnis Iste Natus Sit Voluptatem</h2>
          <p>Perspiciatis unde omnis iste natus sit voluptatem accusantium 
            doloremque laudantium, totam rem aperiam, eaque ipsa quae. Ab illo 
            inventore veritatis et quasi architecto beatae vitae dicta sunt 
            explicabo.Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut 
            odit aut fugit, sed quia</p>
          <a href="" class="button1">VER MAIS</a>
        </div>
        <div class="image order-1">
          <img src="./img/banner-02.png" alt="">
        </div>
      </div>
    </div>
  </section>

  <section class="testimonials-section">
    <div class="container">
      <div class="row">
          <h3>RESUMO DO LIVRO</h3>
          <h2>Donec A Tristique Risus!</h2>

          <div class="content-testimonials d-md-flex flex-wrap justify-content-lg-between">

            <div class="item">
              <p>“Nunc consequat justo eget enim 
                  finibus porta. Suspendisse orci nunc, 
                  rutrum quis nunc sed, feugiat hendrerit 
                  massa. In cursus ornare sollicitudin.”</p>
              <span class="autor">Fábio Chiquezi</span>
              <span class="where">Editora Lorem Ipsun</span>
            </div>
            <div class="item">

              <p>“Nunc consequat justo eget enim 
                  finibus porta. Suspendisse orci nunc, 
                  rutrum quis nunc sed, feugiat hendrerit 
                  massa. In cursus ornare sollicitudin.”</p>
              <span class="autor">Fábio Chiquezi</span>
              <span class="where">Editora Lorem Ipsun</span>
            </div>

            <div class="item">
              <p>“Nunc consequat justo eget enim 
                  finibus porta. Suspendisse orci nunc, 
                  rutrum quis nunc sed, feugiat hendrerit 
                  massa. In cursus ornare sollicitudin.”</p>
              <span class="autor">Fábio Chiquezi</span>
              <span class="where">Editora Lorem Ipsun</span>
            </div>
              
            <div class="item">
              <p>“Nunc consequat justo eget enim 
                  finibus porta. Suspendisse orci nunc, 
                  rutrum quis nunc sed, feugiat hendrerit 
                  massa. In cursus ornare sollicitudin.”</p>
              <span class="autor">Fábio Chiquezi</span>
              <span class="where">Editora Lorem Ipsun</span>
            </div>

              <div class="item">
                <p>“Nunc consequat justo eget enim 
                    finibus porta. Suspendisse orci nunc, 
                    rutrum quis nunc sed, feugiat hendrerit 
                    massa. In cursus ornare sollicitudin.”</p>
                <span class="autor">Fábio Chiquezi</span>
                <span class="where">Editora Lorem Ipsun</span>
              </div>

                <div class="item">
                  <p>“Nunc consequat justo eget enim 
                      finibus porta. Suspendisse orci nunc, 
                      rutrum quis nunc sed, feugiat hendrerit 
                      massa. In cursus ornare sollicitudin.”</p>
                  <span class="autor">Fábio Chiquezi</span>
                  <span class="where">Editora Lorem Ipsun</span>
                </div>
          </div>
      </div>
    </div>

    <hr class="hr-1 d-none d-lg-block">

    <footer class="contato-section">
      <div class="container">
        <div class="row">
            <h2>Nunc Conseuat just a finibus?</h2>

            <div class="sub">
                <p>Nunc consequat justo eget enim finibus porta. Suspendisse orci nunc. Nunc 
                    consequat justo eget enim finibus porta. Suspendisse orci nunc.</p>
            </div>
      
            <div class="contact-1 d-lg-flex">
              <div class="tel">
                <p>(19) 3227-9718</p>
                <p>(19) 9 9283-7035</p>
              </div>
              <ul class="social d-flex">
                <li><a href=""><i class="icon icon-face"></i></a></li>
                <li><a href=""><i class="icon icon-insta"></i></a></li>
                <li><a href=""><i class="icon icon-whats"></i></a></li>
              </div>
            </div>
      
            <p class="ajuste-separa">Ou</p>
      
            <form action="">
              <input type="text" name="nome" placeholder="Nome Completo">
              <input type="text" name="email" placeholder="E-mail">
              <textarea name="mensagem" placeholder="Sua Mensagem"></textarea>
              <input type="text" value="enviar" class="button-submit">
              <a href="" class="button1">ENVIAR</a>
            </form>
      
            <div class="direitos-autorais">
              <p>© Todos os direitos autorais reservados.</p>
            </div>
        </div>
      </div>
    </footer>
  </section>



  <?php get_footer(); ?>