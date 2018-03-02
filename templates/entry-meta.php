<aside class="meta">
	<i class="fa fa-clock-o" aria-hidden="true"></i>
	<span>Publicado em</span>
	<time datetime="<?= get_post_time('c', true); ?>"><?= get_the_date(); ?></time> em <span class="article-label"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></span>
</aside>

<!-- <small style="display: none;"><i class="fa fa-user-o" aria-hidden="true" style="margin-right: 4px;"></i>Autor original: <?php echo get_post_meta($post->ID, 'Autor', true); ?></small> -->

<!-- <small style="display: none;"><i class="fa fa-external-link" aria-hidden="true" style="margin-right: 4px;"></i>Traduzido e adaptado de: <?php echo get_post_meta($post->ID, 'Fonte', true); ?></small> -->