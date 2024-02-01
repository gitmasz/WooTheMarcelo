<article class="col">
  <h1><?php the_title(); ?></h1>
  <div>
    <?php
    wp_link_pages(
      array(
        'before' => '<p class="inner-pagination">' . 'Pages',
        'after'  => '</p>',
      )
    );
    ?>
    <?php the_content(); ?>
  </div>
  <?php
  if (comments_open() || get_comments_number()) :
    comments_template();
  endif;
  ?>
</article>