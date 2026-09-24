<?php get_header(); ?>
<main>

    <section class="single__post">
        <article class="article-full">
          <div class="single__post-header">
            <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail(); ?>
            <?php endif; ?>
            <h2><?php the_title(); ?></h2>
            <p>By: <?php the_author(); ?> on <?php the_time('F j, Y'); ?></p>
          </div>
          <?php the_content(); ?>
        </article>
    </section>

<section class="next__prev" />
<?php next_post_link( '<div class="nav-previous">%link</div>', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'wp386' ) . '</span> %title' ); ?>
	<?php previous_post_link( '<div class="nav-next">%link</div>', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'wp386' ) . '</span>' ); ?>
</section>

</main>
<?php get_footer(); ?>
