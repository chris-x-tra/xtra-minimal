<?php get_header(); ?>
<main class="wrap">
<hr />
  <section class="">
      <article class="article-full">
        <div class="page-header">
          <h1><?php woocommerce_page_title(); ?></h1>
        </div>
        <?php woocommerce_content(); ?>
      </article>
  </section>
</main>
<?php get_footer(); ?>
