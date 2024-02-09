<?php get_header(); ?>
<div class="content-area">
  <main>
    <div class="container">
      <div class="row">

        <h1><?php _e( 'Search results for', 'woothe-marcelo' ); ?>: <?php echo get_search_query(); ?></h1>

        <?php
        get_search_form();

        if (have_posts()) :
          while (have_posts()) : the_post();
            get_template_part( 'template-parts/content', 'search' );
          endwhile;

          the_posts_pagination(array(
            'prev_text' => __( 'Previous', 'woothe-marcelo' ),
            'next_text' => __( 'Next', 'woothe-marcelo' ),
          ));

        else :
          ?>
          <p><?php _e( 'There are no results for your query.', 'woothe-marcelo' ); ?></p>
        <?php endif; ?>
      </div>
    </div>
  </main>
</div>
<?php get_footer(); ?>