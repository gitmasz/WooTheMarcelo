<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="search" placeholder="<?php echo esc_attr_x('Search &hellip;', 'woothe-marcelo'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit"><span class="screen-reader-text"><?php echo _x('Search;', 'woothe-marcelo'); ?></span></button>
	<?php if( class_exists( 'WooCommerce' )): ?>
		<input type="hidden" value="product" name="post_type" id="post_type">
	<?php endif; ?>
</form>