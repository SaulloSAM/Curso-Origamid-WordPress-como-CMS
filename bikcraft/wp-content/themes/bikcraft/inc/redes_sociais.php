<?php $page = get_page_by_title("contato"); ?>
<h3>Redes Sociais</h3>
<ul>
    <?php if(have_rows('redes_sociais', $page)): while(have_rows('redes_sociais', $page)) : the_row(); ?>
    <li>
        <a href="<?php the_sub_field('link_social'); ?>" target="_blank">
            <img src="<?php the_sub_field('imagem_social'); ?>" alt="<?php the_sub_field('nome_imagem_social'); ?>">
        </a>
    </li>
    <?php endwhile; endif; ?>
</ul>