<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

<?php while ( have_posts() ) : the_post(); ?>
<style>
	.banner-produto{
		background: <?php the_field('color_back'); ?> !important;
	}
	.banner-produto h1, .banner-produto .desc{
		color: <?php the_field('color_font'); ?> !important;
	}
</style>

<main class="main-site off" >
	<div id="product-<?php the_ID(); ?>" <?php wc_product_class(); ?>>
		<section class="banner-produto sec-js">
			<div class="container">
				<div class="row d-flex flex-column align-items-center flex-lg-row justify-content-lg-between">
					<div class="content order-2 order-lg-1">
						<h1 class="js-show-func"><?php the_field('titulo_01'); ?>  <span><?php the_field('subtitulo_01'); ?></span></h1>
						<p class="desc js-show-func"><?php the_field('desc_01'); ?></p>
						<p class="preco js-show-func"><?php the_field('preco'); ?></p>
						<!-- <a href="" class="button1 js-show-func">COMPRAR</a> -->
						<?php wc_get_template_part( 'content', 'single-product' ); ?>
					</div>
					<div class="image order-1 js-show-func">
						<img src="<?php the_field('banner_desk'); ?>" class="d-none d-lg-block" alt="">
						<img src="<?php the_field('banner_mobile'); ?>" class="d-lg-none" alt="">
					</div>
				</div>
			</div>
		</section>

		<section class="detalhes-produto sec-js">
			<div class="container">
				<div class="row d-lg-flex flex-lg-nowrap justify-content-lg-between">
					<div class="content d-flex flex-column align-items-center align-items-lg-start align-content-center js-show-func2" data-classShow="show-left">
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
								<h2><?php the_field('nota_autor_titulo'); ?></h2>
								<?php the_field('nota_autor_desc'); ?>

								<div class="frase-personalizada">
									<p><?php the_field('nota_autor_frase'); ?></p>
									<p class="autor"><?php the_field('autor_nome'); ?></p>
								</div>
							</div>

							<div class="item item-2">
									<h2><?php the_field('preco'); ?> <span>ou</span> <?php the_field('preco_parcelado'); ?></h2>
									<?php the_field('sub_inform'); ?>
								</div>

								<div class="item item-3">
										<h2><?php the_field('titulo_resumo_2'); ?></h2>
										<?php the_field('resumo_livro'); ?>
									</div>
						</div>
					</div>
					<div class="image js-show-func2" data-classShow="show-right">
						<img src="<?php the_field('imagem_ilustrativa_01'); ?>" alt="">
					</div>
				</div>
			</div>
		</section>

		<hr class="hr-1">

		<section class="resumo-produto d-none d-lg-block sec-js">
			<div class="container">
				<div class="row">
						<h3 class="js-show-func2" data-classShow="show-top">RESUMO DO LIVRO</h3>
						<h2 class="js-show-func2" data-classShow="show-top"><?php the_field('titulo_resumo_2'); ?></h2>
						<div class="content js-show-func2" data-classShow="show-top">
							<?php the_field('resumo_livro'); ?>
						</div>
				</div>
			</div>
		</section>

		<section class="outros-produtos sec-js">
			<div class="container">
				<div class="row d-flex flex-column align-items-center flex-lg-row justify-content-around">

				<?php
						$post = get_the_ID();

							$args = array(
								'post_type' => 'product',
								'order' => 'ASC',
								'posts_per_page' => '1',
								'orderby'        => 'rand',
								'post__not_in' => array($post)
							);
							$the_query = new WP_Query($args)
						?>
						<?php if( $the_query->have_posts() ) : while($the_query->have_posts()) : $the_query->the_post(); ?>

							<div class="content order-2 order-lg-1">
								<h3>OUTROS LIVROS</h3>
								<h2><?php the_title(); ?></h2>
								<p><?php the_field('descricao_outros_produtos') ?></p>
								<a href="<?php the_permalink(); ?>" class="button1">VER MAIS</a>
							</div>

							<div class="image order-1">
								<img src="<?php the_field('imagem_marketing'); ?>" alt="">
							</div>

						<?php endwhile; else: endif; 
        			wp_reset_query();
        		?>	
				</div>
			</div>
		</section>

		<section class="testimonials-section sec-js">
			<div class="container">
				<div class="row">
						<h3>RESUMO DO LIVRO</h3>
						<h2><?php the_field('titulo_testemunhos'); ?></h2>

						<div class="content-testimonials d-md-flex flex-wrap justify-content-lg-between">
							<?php the_field('testemunhos'); ?>
						</div>
				</div>
			</div>

			<hr class="hr-1 d-none d-lg-block">

			<footer class="contato-section">
				<div class="container">
					<div class="row">
							<h2><?php the_field('title_contato'); ?></h2>

							<div class="sub">
									<p><?php the_field('desc_contato'); ?></p>
							</div>
				
							<div class="contact-1 d-lg-flex">
								<div class="tel">
									<p><?php the_field('tel01'); ?></p>
									<p><?php the_field('tel02'); ?></p>
								</div>
								<ul class="social d-flex align-items-center">
									<li><a href="<?php the_field('face_link'); ?>"><i class="icon icon-face"></i></a></li>
									<li><a href="<?php the_field('insta_link'); ?>"><i class="icon icon-insta"></i></a></li>
									<li><a href="<?php the_field('whats_link'); ?>"><i class="icon icon-whats"></i></a></li>
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

		<div class="buttons-adc d-flex">
			<a href="http://localhost/divi-yoga-tema-design/wp-projeto/carrinho/" class="button button-carrinho">
				<i class="icon icon-carrinho"></i>
				<span class="quantidade-carrinho">
					<?php 
						global $woocommerce;
						$numero = sprintf(_n('%d', $woocommerce->cart->cart_contents_count, 'woothemes'));

						echo $numero;
				?>
				</span>
			</a>
			<a href="<?php the_field('whats_link'); ?>" target="_blank" class="button button-whats"><i class="icon icon-whats2"></i></a>
		</div>
	</div>
</main>

<?php endwhile; // end of the loop. ?>

<?php get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */