<?php if ( is_active_sidebar( 'primary' ) ) : ?>

<div id="secondary" class="widget-area col-1-4" role="complementary">

<aside id="sidebar-primary" class="sidebar">

<?php dynamic_sidebar( 'primary' ); ?>

</aside><!-- #sidebar-primary .aside -->

</div>

<?php endif; ?>
