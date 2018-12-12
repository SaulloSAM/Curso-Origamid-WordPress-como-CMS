<?php
	// Template Name: Portifolio
	get_header();
	if ( have_posts() ) : while ( have_posts() ) : the_post();
	include_once (TEMPLATEPATH . "/inc/introducao.php");
?>
<section class="container animar-interno">
	<ul class="rslides">
	<?php if(have_rows('quote_portfolio')) : while(have_rows('quote_portfolio')) : the_row(); ?>
		<li>
			<blockquote class="quote_clientes">
				<?php the_sub_field('quote'); ?>
				<cite><?php the_sub_field('quote_nome'); ?></cite>
			</blockquote>
		</li>
	<?php endwhile; endif; ?>
	</ul>
</section>

<section class="portfolio">
	<div class="container">
		<?php include_once (TEMPLATEPATH . "/inc/slide_protfolio.php"); ?>
	</div>
</section>
<?php endwhile; endif; get_footer(); ?>