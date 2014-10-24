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
  
        <form role="search" class="navbar-form navbar-right">
                <div class="input-group">
                    <input type="text" placeholder="検索" class="form-control">
                    <div class="input-group-btn">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-search-minus"></i></button>
                    </div>
                </div>
                
        </form>
    </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<!-- /カスタムメニューをBootstrapで表示する -->