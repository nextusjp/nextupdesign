<!-- カスタムメニューをBootstrapで表示する -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url(); ?>">
                <i class="fa fa-wordpress"></i> <?php bloginfo('name'); ?>
            </a>
    </div>
    <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse navbar-ex1-collapse">
        <?php
            wp_nav_menu( array(
                'menu'              => 'mainmenu',
                'theme_location'    => 'mainmenu',
                'depth'             => 3,
                'container'         => '',
                'container_class'   => '',
                'menu_class'        => 'nav navbar-nav no-float',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker(),
            ));
        ?>
    
        <!-- Large modal -->
        <span class="searchico navbar-right">
		<a data-toggle="modal" data-target=".bs-example-modal-lg" href="#"><i class="fa fa-search"></i></a>
		</span>

    </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <?php get_search_form(); ?>
    </div>
  </div>
</div>

<!-- /カスタムメニューをBootstrapで表示する -->