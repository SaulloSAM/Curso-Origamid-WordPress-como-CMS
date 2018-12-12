<?php $page = get_page_by_title("portfolio"); ?>
<ul class="portfolio_lista rslides_portfolio">
    <?php if(have_rows('item_portfolio', $page)): while(have_rows('item_portfolio', $page)) : the_row(); ?>
    <li>
        <div class="grid-8"><img src="<?php the_sub_field('item_portfolio_img_1'); ?>" alt="<?php the_sub_field('item_portfolio_descricao_img_1'); ?>"></div>
        <div class="grid-8"><img src="<?php the_sub_field('item_portfolio_img_2'); ?>" alt="<?php the_sub_field('item_portfolio_descricao_img_2'); ?>"></div>
        <div class="grid-16"><img src="<?php the_sub_field('item_portfolio_img_3'); ?>" alt="<?php the_sub_field('item_portfolio_descricao_img_3'); ?>"></div>
    </li>
    <?php endwhile; endif; ?>
</ul>

<?php if (!is_page("portfolio")) { ?>
    <div class="call">
            <p><?php the_field('chamada_portfolio', $page); ?></p>
            <a href="/wp/bikcraft/portfolio/" class="btn">Portfólio</a>
        </div>
<?php } ?>