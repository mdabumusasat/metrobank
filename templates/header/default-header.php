<?php
$options = metrobank_WSH()->option(); 
$allowed_html = wp_kses_allowed_html( 'post' );

//Logo Settings
$image_logo = $options->get( 'image_normal_logo' );
$logo_dimension = $options->get( 'normal_logo_dimension' );

$image_logo2 = $options->get( 'image_normal_logo2' );
$logo_dimension2 = $options->get( 'normal_logo_dimension2' );

$logo_type = '';
$logo_text = '';
$logo_typography = '';
?>




        <!--Search Popup-->
        <div id="search-popup" class="search-popup">
            <div class="popup-inner">
                <div class="upper-box clearfix">
                    <figure class="logo-box pull-left"><?php echo metrobank_logo( $logo_type, $image_logo, $logo_dimension, $logo_text, $logo_typography ); ?></figure>
					<div class="close-search pull-right"><i class="fa fa-times"></i></div>
                </div>
                <div class="overlay-layer"></div>
                <div class="auto-container">
                    <div class="search-form">
						<form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="post">	
                            <div class="form-group">
                                <fieldset>    
									<input type="search" name="s" class="form-control" placeholder="<?php echo esc_attr( $options->get( 'search_text_v1'), $allowed_html ); ?>" required="">
									<button  class="search_button"  type="submit"><i class="far fa-search"></i></button>
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <!-- main header -->
        <header class="main-header rashid">
            <!-- header-lower -->
            <div class="header-lower">
                <div class="container">
                    <div class="outer-box">
                        <div class="logo-box">
							<figure class="logo">
							<figure class="logo"><?php echo metrobank_logo( $logo_type, $image_logo, $logo_dimension, $logo_text, $logo_typography ); ?></figure>
						</figure>
                        </div>
                       <div class="menu-area clearfix">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
						   
						 <?php if( $options->get( 'onepage_menu' ) ):?>  
							 <nav class="main-menu navbar-expand-md navbar-light">
								<div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
									<ul class="navigation clearfix home-menu mr_menu">
										<?php wp_nav_menu( array( 'theme_location' => 'onepage_menu', 'container_id' => 'navbarSupportedContent',
										'container_class'=>'collapse navbar-collapse sub-menu-bar',
										'menu_class'=>'nav navbar-nav',
										'fallback_cb'=>false, 
										'add_li_class'  => 'nav-item',
										'items_wrap' => '%3$s', 
										'container'=>false,
										'depth'=>'3',
										'walker'=> new Bootstrap_walker()  
										) ); ?>
									</ul>
								</div>
							</nav>
						    <?php else : ?>
						    <nav class="main-menu navbar-expand-md navbar-light">
								<div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
									<ul class="navigation clearfix home-menu mr_menu">
										<?php wp_nav_menu( array( 'theme_location' => 'main_menu', 'container_id' => 'navbarSupportedContent',
										'container_class'=>'collapse navbar-collapse sub-menu-bar',
										'menu_class'=>'nav navbar-nav',
										'fallback_cb'=>false, 
										'add_li_class'  => 'nav-item',
										'items_wrap' => '%3$s', 
										'container'=>false,
										'depth'=>'3',
										'walker'=> new Bootstrap_walker()  
										) ); ?>
									</ul>
								</div>
							</nav>
						   
						   <?php endif; ?>
                        </div>
						
					 <?php if( !$options->get( 'header_search_show_v1' ) ):?> 	
                        <div class="nav-right">
                            <div class="search-box-outer search-toggler">
                                <i class="far fa-search"></i>
                            </div>
                        </div>
					   <?php endif; ?>	
						
                    </div>
                </div>
            </div>
<?php if(!$options->get( 'theme_stiky_menu' ) ):?>
            <!--sticky Header-->
            <div class="sticky-header">
                <div class="container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <figure class="logo"><?php echo metrobank_logo( $logo_type, $image_logo, $logo_dimension, $logo_text, $logo_typography ); ?></figure>
                        </div>
                        <div class="menu-area clearfix">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
					 <?php if( !$options->get( 'header_search_show_v1' ) ):?> 		
                        <div class="nav-right">
                            <div class="search-box-outer search-toggler">
                                <i class="far fa-search"></i>
                            </div>
                        </div>
					<?php endif; ?>			
                    </div>
                </div>
            </div>
			
   <?php endif; ?>			
			
        </header>
        <!-- main-header end -->
 <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            <nav class="menu-box">
                <div class="nav-logo"><?php echo metrobank_logo_mobile( $logo_type, $image_logo2, $logo_dimension2, $logo_text, $logo_typography ); ?></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div><!-- End Mobile Menu -->

