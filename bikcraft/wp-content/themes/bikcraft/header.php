<?php
	$caminhoRaiz = get_stylesheet_directory_uri() . "/";
	$diretorio = get_template_directory_uri() . "/";
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title><?php bloginfo('name'); wp_title('-'); the_field('titulo_seo'); ?></title>
		<meta name="description" content="Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos Passeio, Retrô e Esporte.">

		<meta property="og:type" content="website"/>
		<meta property="og:title" content="<?php bloginfo('name'); wp_title('-'); the_field('titulo_seo'); ?>"/>
		<meta property="og:description" content="<?php bloginfo('name'); wp_title('-'); the_field('descricao_seo'); ?>Compre a sua bicicleta personalizada na Bikcraft. Possuímos modelos Passeio, Retrô e Esporte."/>
		<meta property="og:url" content="<?php bloginfo('name'); ?>"/>
		<meta property="og:image" content="<?php the_field('imagem_seo'); ?>http://bikcraft.com/img/og-image.png"/>

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" href="<?php echo $diretorio; ?>/favicon.ico">
        
        <!-- Inicio Herader ADM WordPress -->
        <?php wp_head(); ?>
        <!-- Final Herader ADM WordPress -->
	</head>
	<body>

		<header class="header">
			<div class="container">
				<a href="/wp/bikcraft/" class="grid-4">
					<img src="<?php echo $diretorio; ?>img/bikcraft.png" alt="Bikcraft">
				</a>
				<nav class="grid-12 header_menu">
					<?php
						$args = Array ("menu" => 'principal', "theme_location" => "menu-principal", "conatiner" => false);
						wp_nav_menu($args);
					?>
				</nav>
			</div>
		</header>