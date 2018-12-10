<?php 
	//register resources
	function register_resources(){

		//register  menu

	register_nav_menu('main-menu','Main Menu');

	}
	//register a slide

	$arg =     array(
      	'labels' => array(
        'name' => 'Slides',
        'singular_name' => 'Slides',
        'menu_name' => 'Slides'
      ),
      'public' => true,
      'show_in_nav_menus' => true,
    );

  	register_post_type( 'slide',$arg);

  	//register content

	$arg =     array(
      	'labels' => array(
        'name' => 'Desc',
        'singular_name' => 'Desc',
        'menu_name' => 'Desc'
      ),
      'public' => true,
      'show_in_nav_menus' => true,
    );

  	register_post_type( 'desc',$arg);

  	 //register News

	$arg =     array(
      	'labels' => array(
        'name' => 'News',
        'singular_name' => 'News',
        'menu_name' => 'News'
      ),
      'public' => true,
      'show_in_nav_menus' => true,
    );

  	register_post_type( 'news',$arg);

  	  //register Ratings

	$arg =     array(
      	'labels' => array(
        'name' => 'Ratings',
        'singular_name' => 'Ratings',
        'menu_name' => 'Ratings'
      ),
      'public' => true,
      'show_in_nav_menus' => true,
    );



  	register_post_type( 'ratings',$arg);



	$arg =     array(
      	'labels' => array(
        'name' => 'Gallery Photos',
        'singular_name' => 'Gallery Photos',
        'menu_name' => 'Gallery Photo'
      ),
      'public' => true,
      'show_in_nav_menus' => true,
    );

    
  	register_post_type( 'photos',$arg);

  	$arg =     array(
      	'labels' => array(
        'name' => 'Groom',
        'singular_name' => 'Groom',
        'menu_name' => 'Groom'
      ),
      'public' => true,
      'show_in_nav_menus' => true,
    );

    
  	register_post_type( 'groom',$arg);

        $arg =     array(
        'labels' => array(
        'name' => 'Daycare',
        'singular_name' => 'Daycare',
        'menu_name' => 'Daycare'
      ),
      'public' => true,
      'show_in_nav_menus' => true,
    );

    
    register_post_type( 'daycare',$arg);

        $arg =     array(
        'labels' => array(
        'name' => 'Cattery',
        'singular_name' => 'Cattery',
        'menu_name' => 'Cattery'
      ),
      'public' => true,
      'show_in_nav_menus' => true,
    );

    
    register_post_type( 'cattery',$arg);


	add_action('init','register_resources');
		//menu items hooks

	function add_menu_li_class($classes,$item,$args){
		$classes[] = 'nav-item';
		return $classes;
	}
	add_filter('nav_menu_css_class','add_menu_li_class',10,3);

		//menu items hooks

	function add_menu_anchor_class($attrs,$item,$args){
		$attrs['class'] = 'nav-link waves-effect';
		return $attrs;
	}
	add_filter('nav_menu_link_attributes','add_menu_anchor_class',10,3);


	add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

	function special_nav_class ($classes, $item) {
	    if (in_array('current-menu-item', $classes) ){
	        $classes[] = 'active ';
	    }
	    return $classes;
	}

 ?>