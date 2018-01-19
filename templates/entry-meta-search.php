<div style="margin-bottom: 20px; color: darkgrey;">
<small><span>Publicado em</span><time class="updated" datetime="<?= get_post_time('c', true); ?>">
	<?= get_the_date(); ?>
</time></small>
	<small>por <span class="fn"><?= get_the_author(); ?></span></small>
<br>
<small>Autor original: <?php echo get_post_meta($post->ID, 'Autor', true); ?></small>
</div>