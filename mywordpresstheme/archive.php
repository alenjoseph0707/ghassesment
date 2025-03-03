<?php get_header(); ?>

<div class="container">
    <h1 class="archive-title"><?php the_archive_title(); ?></h1>

    <div class="blog-grid">
        <?php if (have_posts()) : $post_count = 0; ?>
            <?php while (have_posts()) : the_post(); $post_count++; ?>

                <article class="blog-post <?php echo ($post_count == 1) ? 'latest-post' : ''; ?>">
                    <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail">
                                <?php the_post_thumbnail('large'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="post-content">
                            <h2 class="post-title"><?php the_title(); ?></h2>
                            <p class="post-excerpt"><?php echo get_the_excerpt(); ?></p>
                        </div>
                    </a>
                </article>

            <?php endwhile; ?>
        <?php else : ?>
            <p>No posts found.</p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
