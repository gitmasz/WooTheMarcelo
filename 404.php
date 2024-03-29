<?php get_header(); ?>
<div class="content-area">
  <main>
    <div class="container">
      <div class="error-404">
        <header>
          <h1><?php esc_html_e( 'Page not found', 'woothe-marcelo' ); ?></h1>
          <p><?php esc_html_e( 'Unfortunately, the page you tried to reach does not exist on this site', 'woothe-marcelo' ); ?></p>
        </header>
        <?php
        the_widget(
          'WP_Widget_Recent_Posts',
          array(
            'title'  => esc_html__( 'Take a Look at Our Latest Posts', 'woothe-marcelo' ),
            'number' => 3,
          )
        );
        ?>
      </div>
    </div>
  </main>
</div>
<?php get_footer(); ?>