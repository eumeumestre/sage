<small><span>Publicado em</span><time class="updated" datetime="<?= get_post_time('c', true); ?>">
	<?= get_the_date(); ?>
</time></small>

<p class="byline author vcard">
	<small>Por <span class="fn"><?= get_the_author(); ?></span></small>
</p>

<p>Autor original: <?php echo get_post_meta($post->ID, 'Autor', true); ?></p>
<p>Traduzido e adaptado de: <?php echo get_post_meta($post->ID, 'Fonte', true); ?></p>
