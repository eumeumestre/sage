<div style="margin-bottom: 20px; color: darkgrey;">
<small><i class="fa fa-clock-o" aria-hidden="true"></i><span>Publicado em</span><time class="updated" datetime="<?= get_post_time('c', true); ?>">
	<?= get_the_date(); ?>
</time></small>
	<small>por <span class="fn"><?= get_the_author(); ?></span></small>
<br>

<small>Autor original: <?php echo get_post_meta($post->ID, 'Autor', true); ?></small> - 
<small>Traduzido e adaptado de: <?php echo get_post_meta($post->ID, 'Fonte', true); ?></small>
</div>