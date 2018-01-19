<div style="margin-bottom: 20px; color: darkgrey;">
<small><i class="fa fa-clock-o" aria-hidden="true" style="margin-left: 4px;"></i><span>Publicado em</span><time class="updated" datetime="<?= get_post_time('c', true); ?>">
	<?= get_the_date(); ?>
</time></small>
<br>
<small><i class="fa user-o" aria-hidden="true" style="margin-left: 4px;"></i>Autor original: <?php echo get_post_meta($post->ID, 'Autor', true); ?></small>
<br>
<small><i class="fa fa-external-link" aria-hidden="true" style="margin-left: 4px;"></i>Traduzido e adaptado de: <?php echo get_post_meta($post->ID, 'Fonte', true); ?></small>
</div>