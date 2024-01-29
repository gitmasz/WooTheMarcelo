<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="search" placeholder="<?php echo __('Search &hellip;', 'woothe-marcelo'); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit"><span class="screen-reader-text"><?php echo __('Search;', 'woothe-marcelo'); ?></span></button>
</form>