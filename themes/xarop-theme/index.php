<?php
get_header();
?>
<main class="container">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article <?php post_class(); ?>>
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <div><?php the_content(); ?></div>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php esc_html_e('No posts found.', 'xarop-theme'); ?></p>
    <?php endif; ?>
</main>
<?php
get_footer();
?>