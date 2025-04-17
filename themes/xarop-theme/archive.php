<?php
get_header();
?>
<main class="container">
    <h1><?php the_archive_title(); ?></h1>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class(); ?>>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div><?php the_excerpt(); ?></div>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php esc_html_e('No posts found.', 'xarop-theme'); ?></p>
    <?php endif; ?>
</main>
<?php
get_footer();
