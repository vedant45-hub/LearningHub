<?php get_header(); ?>

<section class="hero">
    <h2>Welcome to <?php bloginfo('name'); ?></h2>
    <p>Stay updated with the latest educational content and news.</p>
</section>

<main>
    <section class="blog-posts">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="post">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink(); ?>">Read more</a>
            </article>
        <?php endwhile; else : ?>
            <p>No posts found</p>
        <?php endif; ?>
    </section>
</main>

<?php get_footer(); ?>
