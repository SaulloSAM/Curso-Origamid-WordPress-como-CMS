<?php
    // Template Name: Produtos
	get_header();
	if ( have_posts() ) : while ( have_posts() ) : the_post();
	include_once (TEMPLATEPATH . "/inc/introducao.php");

	$args = array ('post_type' => 'produtos', 'order' => 'ASC');
	$the_query = new WP_Query ($args);
	if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
?>
<section class="container produto_item animar-interno">
	<a href="<?php the_permalink(); ?>">
	<div class="grid-11">
		<img src="<?php the_field('foto_principal'); ?>" alt="Bikcraft <?php the_title(); ?>">
		<h2><?php the_title(); ?></h2>
	</div>
	<div class="grid-5 produto_icone">
        <img src="<?php the_field('icone_produto'); ?>" alt="Icone <?php the_title(); ?>">
    </div>
	</a>
</section>
<?php 
	endwhile; endif; /* Final - The Query */
	include_once (TEMPLATEPATH . "/inc/produtos_orcamento.php");
	endwhile; endif; /* Final - Loop Post */
	get_footer();
?>