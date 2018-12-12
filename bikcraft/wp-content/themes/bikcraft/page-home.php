<?php
    // Template Name: Home
	get_header();
	if ( have_posts() ) : while ( have_posts() ) : the_post();
	$diretorio = get_template_directory_uri() . "/";

	// Referenciando a IMG para Dis. Pequenos
	$imagem_id = get_field('bg_home');
	$bg_large = wp_get_attachment_image_src($imagem_id, 'large');
	$bg_medium = wp_get_attachment_image_src($imagem_id, 'medium');
?>
<style type="text/css">
.introducao {
	background: url("<?php echo $bg_large[0]; ?>") no-repeat center;
	background-size: cover;
}
/*Estilo para smartphone*/
@media only screen and (max-width: 767px) {
	.introducao {
		background: url("<?php echo $bg_medium[0]; ?>") no-repeat center;
		background-size: cover;
	}
}
</style>

<section class="introducao">
	<div class="container">
		<h1><?php the_field('titulo_introducao'); ?></h1>
		<blockquote class="quote-externo">
			<p><?php the_field('quote_introducao'); ?></p>
			<cite><?php the_field('citacao_introducao'); ?></cite>
		</blockquote>
		<a href="/wp/bikcraft/produtos/" class="btn">Orçamento</a>
	</div>
</section>

<section class="produtos container animar">
	<h2 class="subtitulo">Produtos</h2>
	<ul class="produtos_lista">
		<?php
			$args = array ('post_type' => 'produtos', 'order' => 'ASC');
			$the_query = new WP_Query ($args);
			if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
		?>
		<li class="grid-1-3">
			<a href="<?php the_permalink(); ?>">
				<div class="produtos_icone">
					<img src="<?php the_field('icone_produto'); ?>" alt="Bikcraft Passeio">
				</div>
				<h3><?php the_title(); ?></h3>
				<p><?php the_field('resumo_produtos'); ?></p>
			</a>
		</li>
		<?php 
			endwhile; endif; /* Final - The Query */
			wp_reset_query();
			wp_reset_postdata();
		?>
	</ul>

	<div class="call">
		<p><?php the_field('chamada_produtos'); ?></p>
		<a href="/wp/bikcraft/produtos/" class="btn btn-preto">Produtos</a>
	</div>
</section>
<!-- Fecha Produtos -->

<section class="portfolio">
	<div class="container">
		<h2 class="subtitulo">Portfólio</h2>
		<?php include_once (TEMPLATEPATH . "/inc/slide_protfolio.php"); ?>
		</div>
</section>
<?php 
	include_once (TEMPLATEPATH . "/inc/qualidade.php");	
	endwhile; endif; get_footer();
?>