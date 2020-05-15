
<?php 

function load_AllStylesheets(){

   
    wp_register_style('bootstrap',get_template_directory_uri() . '/css/bootstrap.min.css',array(),1,'all' );
    wp_enqueue_style('bootstrap');
    wp_register_style('classy_nav',get_template_directory_uri() . '/css/default/classy-nav.min.css',array(),1,'all' );
    wp_enqueue_style('classy_nav');
    wp_register_style('animate',get_template_directory_uri() . '/css/animate.css',array(),1,'all' );
    wp_enqueue_style('animate');
    wp_register_style('owl',get_template_directory_uri() . '/css/owl.carousel.min.css',array(),1,'all' );
    wp_enqueue_style('owl');
    wp_register_style('popup',get_template_directory_uri() . '/css/magnific-popup.css',array(),1,'all' );
    wp_enqueue_style('popup');
    wp_register_style('jqanimate',get_template_directory_uri() . '/css/jquery.animatedheadline.css',array(),1,'all' );
    wp_enqueue_style('jqanimate');
    wp_register_style('lineicons',get_template_directory_uri() . '/css/default/lineicons.min.css',array(),1,'all' );
    wp_enqueue_style('lineicons');
    wp_register_style('fontawesome',get_template_directory_uri() . '/css/font-awesome.min.css',array(),1,'all' );
    wp_enqueue_style('fontawesome');
    wp_register_style('flagicon',get_template_directory_uri() . '/css/flag-icon.min.css',array(),1,'all' );
    wp_enqueue_style('flagicon');
    wp_register_style('customcss',get_template_directory_uri() . '/css/own.css',array(),1,'all' );
    wp_enqueue_style('customcss');
    
}

add_action('wp_enqueue_scripts','load_AllStylesheets');

function addjs(){

    wp_register_script('jq', get_template_directory_uri() .'/js/jquery.min.js', array(),1, 1,1);
    wp_enqueue_script('jq');
    wp_register_script('popper', get_template_directory_uri() .'/js/popper.min.js', array(),1, 1,1);
    wp_enqueue_script('popper');
    wp_register_script('bsjs', get_template_directory_uri() .'/js/bootstrap.min.js', array(),1, 1,1);
    wp_enqueue_script('bsjs');
    wp_register_script('classynav', get_template_directory_uri() .'/js/default/classy-nav.min.js', array(),1, 1,1);
    wp_enqueue_script('classynav');
    wp_register_script('waypoint', get_template_directory_uri() .'/js/waypoints.min.js', array(),1, 1,1);
    wp_enqueue_script('waypoint');
    wp_register_script('jeasy', get_template_directory_uri() .'/js/jquery.easing.min.js', array(),1, 1,1);
    wp_enqueue_script('jeasy');
    wp_register_script('scrollup', get_template_directory_uri() .'/js/default/jquery.scrollup.min.js', array(),1, 1,1);
    wp_enqueue_script('scrollup');
    //js/owl.carousel.min.js
    wp_register_script('owljs', get_template_directory_uri() .'/js/owl.carousel.min.js', array(),1, 1,1);
    wp_enqueue_script('owljs');
    // /js/imagesloaded.pkgd.min.js
    wp_register_script('imgloadpkgd', get_template_directory_uri() .'/js/imagesloaded.pkgd.min.js', array(),1, 1,1);
    wp_enqueue_script('imgloadpkgd');
    //js/default/isotope.pkgd.min.js
    wp_register_script('isotope', get_template_directory_uri() .'/js/default/isotope.pkgd.min.js', array(),1, 1,1);
    wp_enqueue_script('isotope');
    //js/jquery.magnific-popup.min.js
    wp_register_script('jqmagpop', get_template_directory_uri() .'/js/jquery.magnific-popup.min.js', array(),1, 1,1);
    wp_enqueue_script('jqmagpop');
    //jquery.animatedheadline.min.js
    wp_register_script('jqanimhead', get_template_directory_uri() .'/js/jquery.animatedheadline.min.js', array(),1, 1,1);
    wp_enqueue_script('jqanimhead');
    wp_register_script('jqcountup', get_template_directory_uri() .'/js/jquery.counterup.min.js', array(),1, 1,1);
    wp_enqueue_script('jqcountup');
    wp_register_script('wow', get_template_directory_uri() .'/js/wow.min.js', array(),1, 1,1);
    wp_enqueue_script('wow');
    //js/jarallax.min.js
    wp_register_script('jarallax', get_template_directory_uri() .'/js/jarallax.min.js', array(),1, 1,1);
    wp_enqueue_script('jarallax');
    //jarallax-video.min.js
    wp_register_script('jvideo-min', get_template_directory_uri() .'/js/jarallax-video.min.js', array(),1, 1,1);
    wp_enqueue_script('jvideo-min');
    //js/default/cookiealert.js
    wp_register_script('cookiealert', get_template_directory_uri() .'/js/default/cookiealert.js', array(),1, 1,1);
    wp_enqueue_script('cookiealert');
    wp_register_script('pwds', get_template_directory_uri() .'/js/default/jquery.passwordstrength.js', array(),1, 1,1);
    wp_enqueue_script('pwds');
    wp_register_script('mail', get_template_directory_uri() .'/js/default/mail.js', array(),1, 1,1);
    wp_enqueue_script('mail');
    wp_register_script('act', get_template_directory_uri() .'/js/default/active.js', array(),1, 1,1);
    wp_enqueue_script('act');
}
add_action('wp_enqueue_scripts','addjs');

?>