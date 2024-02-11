<?php get_header(); ?>
<div class="content-area">
  <main>
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-8 col-12">
        <?php
        the_archive_title('<h1 class="article-title">', '</h1>');

        if (have_posts()) :
          while (have_posts()) : the_post();
            get_template_part( 'template-parts/content', 'archive' );
          endwhile;

          the_posts_pagination(array(
            'prev_text' => esc_html__( 'Previous', 'woothe-marcelo' ),
            'next_text' => esc_html__( 'Next', 'woothe-marcelo' ),
          ));

        else :
          ?>
          <p><?php esc_html_e( 'Nothing to display.', 'woothe-marcelo' ); ?></p>
        <?php endif; ?>
        </div>
        <?php get_sidebar(); ?>
      </div>
    </div>
  </main>
</div>
<?php get_footer(); ?>