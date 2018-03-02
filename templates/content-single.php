<?php while (have_posts()) : the_post(); ?>

<article <?php post_class(); ?>>

<header>
	<h1><?php the_title(); ?></h1>
	<?php get_template_part('templates/entry-meta'); ?>
</header>

<div class="post-content"><?php the_content(); ?></div>

</article>

<?php endwhile; ?>