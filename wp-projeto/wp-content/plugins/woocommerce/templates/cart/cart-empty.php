<?php
/**
 * Empty cart page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-empty.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.0
 */

defined( 'ABSPATH' ) || exit;

/*
 * @hooked wc_empty_cart_message - 10
 */
do_action( 'woocommerce_cart_is_empty' );

if ( wc_get_page_id( 'shop' ) > 0 ) : ?>

<script>
	document.querySelector('body').classList.add('cart-empty');
</script>
<div class="container car-empty">
	<div class="row">

		<header class="header-woo d-flex justify-content-between flex-wrap align-items-center">
			<h1><a href="http://localhost/divi-yoga-tema-design/wp-projeto/product/hezbbollah-uma-breve-historia/">ivanlivros.com.br</a></h1>

			<div class="contact-1 d-lg-flex">
					<div class="tel d-flex flex-column align-items-center flex-md-row">
						<p>(19) 3227-9718</p>
						<p class="d-none d-lg-block">|</p>
						<p>(19) 9 9283-7035</p>
					</div>
				</div>
		</header>

		<div class="content">
			<h1>Nenhum Produto no Carrinho</h1>

			<p class="return-to-shop">
				<a class="button wc-backward" href="http://localhost/divi-yoga-tema-design/wp-projeto/product/hezbbollah-uma-breve-historia/">
					<?php esc_html_e( 'Return to shop', 'woocommerce' ); ?>
				</a>
			</p>
		</div>


		<div class="direitos-autorais-woo">
			<p>©2019 Todos os direitos autorais reservados.</p>
		</div>

	</div>
</div>
<?php endif; ?>
