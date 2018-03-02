

<article class="search-card">

<header class="clearfix">
	<?php the_post_thumbnail('search-thumbnail'); ?>
	<div></div>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<?php if (get_post_type() === 'post') { get_template_part('templates/entry-meta-search'); } ?>
</header>

<div class="excerpt-content"><?php the_excerpt(); ?></div>

</article>