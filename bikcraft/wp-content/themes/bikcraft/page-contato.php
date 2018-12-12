<?php
    // Template Name: Contato
	get_header();
	if ( have_posts() ) : while ( have_posts() ) : the_post();
	include_once (TEMPLATEPATH . "/inc/introducao.php");
?>
<section class="contato container animar-interno">
	<form action="<?php echo get_template_directory_uri(); ?>/enviar.php" method="post" name="form" class="formphp contato_form grid-8">
		<label for="nome">Nome</label>
		<input id="nome" name="nome" type="text">
		<label for="email">E-mail</label>
		<input id="email" name="email" type="text">
		<label for="telefone">Telefone</label>
		<input id="telefone" name="telefone" type="text">

		<label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
		<input type="text" class="nao-aparece" name="leaveblank">
		<label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
		<input type="text" class="nao-aparece" name="dontchange" value="http://" >

		<label for="mensagem">Mensagem</label>
		<textarea name="mensagem" id="mensagem"></textarea>

		<button id="enviar" name="enviar" type="submit" class="btn btn-preto">Enviar</button>
	</form>

	<div class="contato_dados grid-8">
		<h3>Dados</h3>
		<span><?php the_field('telefone'); ?></span>
		<span><?php the_field('email'); ?></span>
		<span><?php the_field('endereco_1'); ?></span>
		<span><?php the_field('endereco_2'); ?></span>
		<?php include (TEMPLATEPATH . "/inc/redes_sociais.php"); ?>		
	</div>
</section>

<section class="container contato_mapa">
	<a href="<?php the_field('link_mapa'); ?>" target="_blank" class="grid-16">
		<img src="<?php the_field('imagem_mapa'); ?>" alt="<?php the_field('texto_mapa'); ?>">
	</a>
</section>
<?php endwhile; endif; get_footer(); ?>