<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ngigi_Moringa
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'ngigi-moringa' ); ?></a>

	<header id="masthead" class="site-header">
	    <?php if( get_field('header_top_text',2) ): ?>
    	    <div class="header-top">
    	        <div class="container">
    	            <div class="row">
    	                <div class="col-md-12">
    	                    <p class="text-center"><?php the_field('header_top_text',2); ?></p>
    	                </div>
    	            </div>
    	        </div>
    	    </div>
    	<?php endif; ?>
	    
		<div class="site-branding">
			<?php
			// the_custom_logo();
			if ( is_front_page() || is_home() ) : ?>
			    <div class="main-header">
			        <div class="header-menu">
            	        <div class="container">
            	            <div class="row">
            	                <div class="col-md-3">
            	                    <p class="text-center"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php the_custom_logo(); ?></a></p>
            	                </div>
            	                <div class="col-md-6">
            	                    <div class="main-nav text-end">
                	                   <?php
                                			wp_nav_menu(
                                				array(
                                					'theme_location' => 'menu-1',
                                					'menu_id'        => 'primary-menu',
                                				)
                                			);
                                		?>
                                	</div>
            	                </div>
            	                <div class="col-md-3 text-end text-right pt-4">
            	                    <a class="btn-1 sm" href="#" class="" target="_blank">Apply Now</a>
            	                </div>
            	            </div>
            	        </div>
            	   </div>
            	   <div class="main-slider">
            	       <div class="container">
            	           <div class="row">
            	               <div class="col-md-6">
            	                   <?php if( get_field('slider_subtitle') ): ?>
                	                   <div class="subtitle-outer">
                                            <span class="subtitle-inner">
                                                <span class="subtitle-text"><?php the_field('slider_subtitle'); ?></span>
                                            </span>
                                        </div>
                                    <?php endif; ?>
                                    <?php if( get_field('slider_title') ): ?>
            	                        <h1><?php the_field('slider_title'); ?></h1>
            	                    <?php endif; ?>
            	                    <?php if( get_field('slider_description') ): ?>
            	                        <p><?php the_field('slider_description'); ?></p>
            	                   <?php endif; ?>
            	                   <?php if( get_field('slider_button_caption') &&  get_field('slider_button_url')): ?>
                	                   <div class="slider-btn">
                	                       <a class="btn-1" href="<?php the_field('slider_button_url'); ?>"><?php the_field('slider_button_caption'); ?></a>
                	                   </div>
                	                <?php endif; ?>
                	                
            	                   <div class="slider-rating">
            	                       <span class="slider-rating-inner">
                	                       <i class="far fa-star"></i>
                	                       <i class="far fa-star"></i>
                	                       <i class="far fa-star"></i>
                	                       <i class="far fa-star"></i>
                	                       <i class="far fa-star-half"></i>
                	                   </span>
                	                   <span class="slider-rating-title"><?php the_field('slider_rating_value'); ?></span>
            	                   </div>
            	                   <div class="slider-rating-description">
            	                       <?php the_field('slider_rating_description'); ?>
            	                   </div>
            	               </div>
            	               <div class="col-md-2"></div>
            	               <div class="col-md-4">
            	                   <?php if( get_field('slider_image') ): ?>
            	                        <div class="slider-image-outer"></div>
            	                        <img class="slider-image" src="<?php the_field('slider_image'); ?>">
            	                        
            	                   <?php endif; ?>
            	               </div>
            	           </div>
            	       </div>
            	   </div>
            	   
        	    </div>
				<!--<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>-->
				<?php elseif (get_the_title() == 'Course Detail'): ?>
				    <div class="main-header">
    			        <div class="header-menu">
                	        <div class="container">
                	            <div class="row">
                	                <div class="col-md-3">
                	                    <p class="text-center"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php the_custom_logo(); ?></a></p>
                	                </div>
                	                <div class="col-md-6">
                	                    <div class="main-nav text-end">
                    	                   <?php
                                    			wp_nav_menu(
                                    				array(
                                    					'theme_location' => 'menu-1',
                                    					'menu_id'        => 'primary-menu',
                                    				)
                                    			);
                                    		?>
                                    	</div>
                	                </div>
                	                <div class="col-md-3">
                	                    
                	                </div>
                	            </div>
                	        </div>
                	   </div>
                	   <div class="main-slider">
                	       <div class="container">
                	           <div class="row">
                	               <div class="col-md-7">
                                        <?php if( get_field('course_name') ): ?>
                	                        <h1><?php the_field('course_name'); ?></h1>
                	                    <?php endif; ?>
                	                    <?php if( get_field('header_subtitle') ): ?>
                	                        <p><?php the_field('header_subtitle'); ?></p>
                	                   <?php endif; ?>
                	                   
                	                   <div class="slider-btn">
                	                        <?php if( get_field('cta_button_caption') &&  get_field('cta_button_url')): ?>
                	                            <a class="btn-1" href="<?php the_field('cta_button_url'); ?>"><?php the_field('cta_button_caption'); ?></a>
                	                        <?php endif; ?>
                	                        <?php if( get_field('course_brochure') &&  get_field('course_brochure')): ?>
                	                            <a class="btn-1 btn-outline" href="<?php the_field('cta_course_brochure'); ?>" class="ml-2 ms-2" target="_blank">Course Brochure</a>
                	                        <?php endif; ?>
                	                   </div>
                	                   
                	                   <div class="slider-lnk">
                	                       <?php if( get_field('cta_link_caption') &&  get_field('cta_link_url')): ?>
                	                            <a class="btn-lnk" href="<?php the_field('cta_link_url'); ?>"><?php the_field('cta_link_caption'); ?></a>
                	                        <?php endif; ?>
                	                    </div>
                    	                
                	               </div>
                	               <div class="col-md-1"></div>
                	               <div class="col-md-4">
                	                   <?php if( get_field('header_image') ): ?>
                	                        <div class="slider-image-outer"></div>
                	                        <img class="slider-image" src="<?php the_field('header_image'); ?>">
                	                        
                	                   <?php endif; ?>
                	               </div>
                	           </div>
                	       </div>
                	   </div>
                	   
                	 </div>
				
				<?php else : ?>
				    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
    			<?php
    			    endif;
    			    $ngigi_moringa_description = get_bloginfo( 'description', 'display' );
    			    if ( $ngigi_moringa_description || is_customize_preview() ) :
    			?>
				<!-- <p class="site-description"><?php echo $ngigi_moringa_description; ?></p>-->
			<?php endif; ?>
		</div><!-- .site-branding -->

		<!--<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'ngigi-moringa' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav>--> <!-- #site-navigation -->
	</header><!-- #masthead -->
