<?php

/*
  NOTE: Place the following in wp-config to enable domain-relative uri

  # Relative hostname -sg
  define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/wordpress' );
  define( 'WP_HOME',    'http://' . $_SERVER['HTTP_HOST'] );

*/

// For now this is in footer instead
/*
add_action( 'wp_head', create_function( '',  
   'echo \'<!--[if lt IE 9]><script src="'.get_template_directory_uri() . '/assets/js/vendor/respond.min.js"></script><![endif]-->\';'
) );
*/

// Register wp_nav_menu() menus (http://codex.wordpress.org/Function_Reference/register_nav_menus)
/*
register_nav_menus(array(
  'common_navigation' => __('Common Navigation', 'org'),
  'connect_navigation' => __('Connect Navigation', 'org'),
));
*/


add_post_type_support( 'page', 'excerpt' );

update_option('image_default_link_type', 'none' );

add_filter('widget_text', 'do_shortcode'); 


function spl_get_network_source($ip=null) {
  $source = null;

  $ip = trim($ip);

  if ( strpos ($ip, '199.237.16') === 0 ) {
    $source = 'library'; // default
    if ( '199.237.16.1' == $ip ) {
      $source = 'minor'; // kids proxy
    } else {
      $source = 'public'; // dt public
    }
  } elseif ( strpos ($ip, '10.14') === 0 ) {
    $source = 'library'; // default
    if (strpos ($ip, '10.14.1') === 0) {
      if (strpos ($ip, '10.14.18') === 0) {
        $source = 'staff'; // hy staff
      } elseif (strpos ($ip, '10.14.19') === 0) {
        $source = 'so'; // public/staff combined
      } elseif (strpos ($ip, '10.14.118') === 0) {
        $source = 'hy'; // hy public
      } elseif (strpos ($ip, '10.14.121') === 0) {
        $source = 'es'; // es public
      } elseif (strpos ($ip, '10.14.122') === 0) {
        $source = 'sh'; // sh public
      } 
    } elseif (strpos ($ip, '10.14.2') === 0) {
      if (strpos ($ip, '10.14.200') === 0) {
        $source = 'wireless'; // all wireless networks
      } elseif (strpos ($ip, '10.14.21') === 0) {
        $source = 'staff'; // es staff
      } elseif (strpos ($ip, '10.14.22') === 0) {
        $source = 'staff'; // sh staff
      } elseif (strpos ($ip, '10.14.23') === 0) {
        $source = 'it'; // it public/staff combined
      } 
    } elseif (strpos ($ip, '10.14.5') === 0) {
      if (strpos ($ip, '10.14.50') === 0) {
        $source = 'staff';
      } elseif (strpos ($ip, '10.14.51') === 0) {
        $source = 'staff';
      }
    }
  }

  if ( is_null($source) || ('external' == $_REQUEST['rel']) ) {
    $source = 'external';
  }

  return $source;
}



//  https://gist.github.com/mkdizajn/7352469
//----------------------------------------------------------/
//  responsive images [ 1) add img-responsive class 2) remove dimensions ]
//----------------------------------------------------------/
 
function bootstrap_responsive_images( $html ){
  $classes = 'img-responsive img-rounded'; // separated by spaces, e.g. 'img image-link'
 
  // check if there are already classes assigned to the anchor
  if ( preg_match('/<img.*? class="/', $html) ) {
    $html = preg_replace('/(<img.*? class=".*?)(".*?\/>)/', '$1 ' . $classes . ' $2', $html);
  } else {
    $html = preg_replace('/(<img.*?)(\/>)/', '$1 class="' . $classes . '" $2', $html);
  }
  // remove dimensions from images,, does not need it!
  $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
  return $html;
}
add_filter( 'the_content','bootstrap_responsive_images',10 );
add_filter( 'post_thumbnail_html', 'bootstrap_responsive_images', 10 );


function spl_resources( $params ) {
  global $post; 

  $orderby = 'title';
  if ( $params['orderby'] ) {
    $orderby = $params['orderby'];
  }

  $sort = 'ASC';
  if ( $params['sort'] ) {
    $sort = $params['sort'];
  }

  //query subpages  
  $args = array(  
      'post_parent' => $post->ID
    , 'post_type' => 'page'  
    , 'orderby' => $orderby
    , 'order' => $sort
  );  
  $subpages = new WP_query($args);  

  // create output  
  if ($subpages->have_posts()) :  
    $i = 1;
      $nav = '<ul class="nav nav-pills nav-stacked">'.PHP_EOL;
      
      $dropdown = '<div class="btn-group btn-block">'.PHP_EOL;
      $dropdown .= '<button type="button" class="btn btn-block btn-primary dropdown-toggle" data-toggle="dropdown">Choose a Topic <span class="caret"></span></button>'.PHP_EOL;
      $dropdown .= '<ul class="dropdown-menu" role="menu">'.PHP_EOL;

      $output = '';  
      $panels = '';
      while ($subpages->have_posts()) : $subpages->the_post();  
          $active = '';
          if ( 1 == $i++ ) :
              //$active = 'active';
          endif;

          $link = array();
          $title = '';
          $link['text'] = get_post_meta( $post->ID, '_cmb_secondary_proxy_text', true );
          $link['url'] = get_post_meta( $post->ID, '_cmb_secondary_proxy_url', true );
          /*
          if ( is_array($link) && !empty($link['url']) ) {
            if ( empty($link['text']) ) {

              $link['text'] = get_the_title();
            }
            $title .= '<a href="'.$link['url'].'">'.$link['text'].'</a> <small>&rarr;</small>'.PHP_EOL;
          } else {
            $title = get_the_title();
          }
          */
          if ( empty($link['text'])) {
            $link['text'] = get_the_title();
          }

          if ( empty($link['url'])) {
            $title = get_the_title();
          } else {
             $title .= '<a href="'.$link['url'].'">'.$link['text'].'</a> <small>&rarr;</small>'.PHP_EOL;
          }


          $nav .= '<li role="menuitem" class="'. $active . '"><a href="#'.$post->post_name.'">'. get_the_title() . '</a></li>'.PHP_EOL;
          $dropdown .= '<li role="menuitem"><a href="#'.$post->post_name.'">'. get_the_title() . '</a></li>'.PHP_EOL;

          /*
          $output .= '
                      <div class="panel panel-default" id="'.$post->post_name.'">
                      <div class="panel-heading">
                      <div class="panel-title">
                      <h4 class="text-primary">'.get_the_title().'</h4> 
                      </div>
                      </div>
                      <div class="panel-body">
                      '.$proxy.do_shortcode( get_the_content() ).''.PHP_EOL.
                      '</div>'.PHP_EOL.
                      '<div class="panel-footer text-right">'.PHP_EOL.
                      '<a class="btn btn-sm btn-primary" href="#top">Top <small class="glyphicon glyphicon-arrow-up"></small></a>'.PHP_EOL.
                      '</div>'.PHP_EOL.
                      '</div>'.PHP_EOL;  
          */
          $img = null;
          $featured = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'thumbnail' );
          $image_url = $featured[0];
          if ( !empty($image_url) ) {
            $img = '<a href="'.$link['url'].'" class="">
                      <img src="'.$image_url.'" class="img-responsive img-rounded" alt="'.$post->post_name.'">
                    </a>'.PHP_EOL;
            //$img = $image_url;
          }


          $panels .= '<div class="panel panel-primary">'.PHP_EOL;
          $panels .= '<div class="panel-body">'.PHP_EOL;
          $panels .= '<h4>'.PHP_EOL;
          $panels .= '<a href="#" class="" data-toggle="collapse" data-target="#'.$post->post_name.'">'.$link['text'].' <span class="caret"></span></a>' . PHP_EOL;
          $panels .= '</h4>'.PHP_EOL;
          $panels .= '</div>'.PHP_EOL;
          $panels .= '</div>'.PHP_EOL;
          
          $panels .= '<div class="collapse" id="'.$post->post_name.'">  
                        <div class="row">
                          <div class="col-md-11 col-md-offset-1">
                          '. apply_filters('the_content', get_the_content() ).''.PHP_EOL.'
                          <hr>
                          </div>
                        </div>
                      </div>'.PHP_EOL; 


          $output .= '
                      <div class="col-md-6">
                      <div class="panel panel-default" id="'.$post->post_name.'">
                      <div class="panel-heading panel-transparent">
                      <h4>
                      '.$title.PHP_EOL.'
                      </h4>
                      </div>
                      <div class="panel-body">
                        <div class="row">
                          <div class="col-md-3">
                          '.$img.'
                          </div>
                          <div class="col-md-9">
                          '. apply_filters('the_content', get_the_content() ).''.PHP_EOL.'
                          </div>
                        </div>
                      </div>
                      <!--
                      <div class="panel-footer clearfix">
                      <a class="btn btn-sm btn-primary pull-right" href="#top">Top <small class="glyphicon glyphicon-arrow-up"></small></a>
                      </div>
                      -->
                      </div>
                      </div>'.PHP_EOL;  

      endwhile; 
      $nav .= '</ul>'.PHP_EOL; 

      $dropdown .= '</ul>'.PHP_EOL; 
      $dropdown .= '</div>'.PHP_EOL; 

      $output .= '';  
      
      $tutorial .= '<div class="row">'.PHP_EOL;
      $tutorial .= '<div class="col-xs-12">'.PHP_EOL;
      $tutorial .= '<div class="panel panel-default">'.PHP_EOL;
      $tutorial .= $dropdown.PHP_EOL;
      $tutorial .= '</div>'.PHP_EOL;
      $tutorial .= '</div>'.PHP_EOL;
      $tutorial .= '</div>'.PHP_EOL;
      

      
      $tutorial .= '<div class="row">'.PHP_EOL;
      
      $tutorial .= '<div class="col-sm-8">'.PHP_EOL;
      $tutorial .= $output.PHP_EOL;
      $tutorial .= '</div>'.PHP_EOL;

      $tutorial .= '<div class="col-sm-4">'.PHP_EOL;
      $tutorial .= '<div class="scrollspy-nav hidden-xs" data-spy="affix">'.PHP_EOL;
      $tutorial .= $nav.PHP_EOL;
      $tutorial .= '</div>'.PHP_EOL;
      $tutorial .= '</div>'.PHP_EOL;
      
      $tutorial .= '</div>'.PHP_EOL;

      if ( in_array('nav', $params) ) {
          $output = $nav;
      } elseif ( in_array('dropdown', $params) ) {
          $output = $dropdown;
      } elseif ( in_array('content', $params) ) {
          $output = $output;
      }  elseif ( in_array('panels', $params) ) {
          $output = $panels;
      } else {
          $output = $tutorial;
      }
  else :  
      $output = '<p>No subpages found.</p>';  
  endif;  

    
  // reset the query  
  wp_reset_postdata();  
    
  // return something  
  return $output;  

}
add_shortcode('spl_resources', 'spl_resources'); 

function spl_scrollspy($params) {  
    global $post;  
    
    //query subpages  
    $args = array(  
        'post_parent' => $post->ID
      , 'post_type' => 'page'  
      , 'orderby' => 'menu_order'
      , 'order' => 'ASC'
    );  
    $subpages = new WP_query($args);  
      
    // create output  
    if ($subpages->have_posts()) :  
      $i = 1;
        $nav = '<ul class="nav nav-pills nav-stacked">'.PHP_EOL;
        
        $dropdown = '<div class="btn-group btn-block">'.PHP_EOL;
        $dropdown .= '<button type="button" class="btn btn-block btn-primary dropdown-toggle" data-toggle="dropdown">Choose a Topic <span class="caret"></span></button>'.PHP_EOL;
        $dropdown .= '<ul class="dropdown-menu" role="menu">'.PHP_EOL;

        $output = '';  
        while ($subpages->have_posts()) : $subpages->the_post();  
            $active = '';
            if ( 1 == $i++ ) :
                //$active = 'active';
            endif;

            $link = array();
            $proxy = '';
            $link['text'] = get_post_meta( $post->ID, '_cmb_secondary_proxy_text', true );
            $link['url'] = get_post_meta( $post->ID, '_cmb_secondary_proxy_url', true );
            if ( is_array($link) && !empty($link['url']) ) {
              if ( empty($link['text']) ) {
                $link['text'] = $link['url'];
              }
              $proxy .= '<p>' . PHP_EOL;
              $proxy .= '<a href="'.$link['url'].'">'.$link['text'].'</a>' . PHP_EOL;
              $proxy .= '</p>' . PHP_EOL;
            }


            $nav .= '<li role="menuitem" class="'. $active . '"><a href="#'.$post->post_name.'">'. get_the_title() . '</a></li>'.PHP_EOL;
            $dropdown .= '<li role="menuitem"><a href="#'.$post->post_name.'">'. get_the_title() . '</a></li>'.PHP_EOL;

            $output .= '<div class="panel panel-default" id="'.$post->post_name.'">
                        <div class="panel-heading">
                        <div class="panel-title">
                        <h4 class="text-primary">'.get_the_title().'</h4> 
                        </div>
                        </div>
                        <div class="panel-body">
                        '.apply_filters('the_content', get_the_content() ).''.PHP_EOL.
                        '</div>'.PHP_EOL.
                        '<div class="panel-footer text-right">'.PHP_EOL.
                        '<a class="btn btn-sm btn-primary" href="#top">Top <small class="glyphicon glyphicon-arrow-up"></small></a>'.PHP_EOL.
                        '</div>'.PHP_EOL.
                        '</div>'.PHP_EOL;  
        endwhile; 
        $nav .= '</ul>'.PHP_EOL; 

        $dropdown .= '</ul>'.PHP_EOL; 
        $dropdown .= '</div>'.PHP_EOL; 

        $output .= '';  
        
        $tutorial .= '<div class="row visible-xs">'.PHP_EOL;
        $tutorial .= '<div class="col-xs-12">'.PHP_EOL;
        $tutorial .= '<div class="panel panel-default">'.PHP_EOL;
        $tutorial .= $dropdown.PHP_EOL;
        $tutorial .= '</div>'.PHP_EOL;
        $tutorial .= '</div>'.PHP_EOL;
        $tutorial .= '</div>'.PHP_EOL;
        

        
        $tutorial .= '<div class="row">'.PHP_EOL;
        
        $tutorial .= '<div class="col-sm-8">'.PHP_EOL;
        $tutorial .= $output.PHP_EOL;
        $tutorial .= '</div>'.PHP_EOL;

        $tutorial .= '<div class="col-sm-4">'.PHP_EOL;
        $tutorial .= '<div class="scrollspy-nav" data-spy="affix">'.PHP_EOL;
        $tutorial .= $nav.PHP_EOL;
        $tutorial .= '</div>'.PHP_EOL;
        $tutorial .= '</div>'.PHP_EOL;
        
        $tutorial .= '</div>'.PHP_EOL;

        if ( in_array('nav', $params) ) {
            $output = $nav;
        } elseif ( in_array('dropdown', $params) ) {
            $output = $dropdown;
        } elseif ( in_array('content', $params) ) {
            $output = $output;
        } else {
            $output = $tutorial;
        }
    else :  
        $output = '<p>No subpages found.</p>';  
    endif;  

      
    // reset the query  
    wp_reset_postdata();  
      
    // return something  
    return $output;  
} 

add_shortcode('spl_scrollspy', 'spl_scrollspy'); 

function spl_subpages() {  
    global $post;  
    
    $orderby = 'title';
    if ( $params['orderby'] ) {
      $orderby = $params['orderby'];
    }

    $sort = 'ASC';
    if ( $params['sort'] ) {
      $sort = $params['sort'];
    }

    //query subpages  
    $args = array(  
        'post_parent' => $post->ID
      , 'post_type' => 'page'  
      , 'orderby' => $orderby
      , 'order' => $sort
    );   
    $subpages = new WP_query($args);  
      
    // create output  
    if ($subpages->have_posts()) :  
        $output = '<ul class="list-group">';  
        while ($subpages->have_posts()) : $subpages->the_post();  
            $output .= '<li class="list-group-item">
                        <h4><a href="'.get_permalink().'">'.get_the_title().'</a> <small>&rarr;</small></h4> 
                        <p>'.get_the_excerpt().'</p>'.
                        '</li>';  
        endwhile;  
        $output .= '</ul>';  
    else :  
        $output = '<p>No subpages found.</p>';  
    endif;  
      
    // reset the query  
    wp_reset_postdata();  
      
    // return something  
    return $output;  
} 

add_shortcode('spl_subpages', 'spl_subpages'); 

function spl_menupage() {  
    global $post;  
    
    $orderby = 'menu_order'; //title
    if ( $params['orderby'] ) {
      $orderby = $params['orderby'];
    }

    $sort = 'ASC';
    if ( $params['sort'] ) {
      $sort = $params['sort'];
    }

    //query subpages  
    $args = array(  
        'post_parent' => $post->ID
      , 'post_type' => 'page'  
      , 'orderby' => $orderby
      , 'order' => $sort
    );   
    $subpages = new WP_query($args);  
      
    $menu = null;

    // create output  
    if ($subpages->have_posts()) :  
        
        $menu .= '
        <div class="panel panel-primary">
        <div class="panel-body">
        <ul class="nav nav-pills">'.PHP_EOL;  
        
        while ($subpages->have_posts()) : $subpages->the_post(); 
            $menu .= '
            <li>
              <a href="#'.$post->post_name.'">'.get_the_title().' <small class="text-muted">&rarr;</small></a>
            </li>'.PHP_EOL;

            $page .= '
            <div class="panel panel-default" id="'.$post->post_name.'">
              <div class="panel-heading">
              <h4 class="panel-title">'.get_the_title().'</h4>
              </div>
              <div class="panel-body">
              '.wpautop(get_the_content()).'
              <p class="text-right">
                <a class="btn btn-sm btn-default" href="#top">Top <small>&uarr;</small></a>
              </p>
              </div>
            </div>'.PHP_EOL;  
        endwhile;  
        $menu .= '
        </div>
        </div>
        </ul>'.PHP_EOL; 
        $output = $menu.$page; 
    else :  
        $output = '<p>No subpages found.</p>';  
    endif;  
      
    // reset the query  
    wp_reset_postdata();  
      
    // return something  
    return $output;  
} 

add_shortcode('spl_menupage', 'spl_menupage'); 


function spl_secondary_metaboxes( $meta_boxes ) {
  $prefix = '_cmb_'; // Prefix for all fields

  $meta_boxes[] = array('id' => 'spl_secondary_proxy'
                      , 'title' => 'External Link'
                      , 'pages' => array('page') // post type
                      , 'show_on' => array( 'key' => 'page-template', 'value' => 'template-proxy.php' )
                      , 'context' => 'normal'
                      , 'priority' => 'high'
                      , 'show_names' => true // Show field names on the left
                      , 'fields' => array(
                                          array('name' => ''
                                              , 'desc' => 'Configure Offsite Link'
                                              , 'id' => $prefix . 'secondary_proxy_description'
                                              , 'type' => 'title'
                                          ),
                                          array('name' => 'Link Text'
                                              , 'desc' => ''
                                              , 'id' => $prefix . 'secondary_proxy_text'
                                              , 'type' => 'text'
                                          ),
                                          array('name' => 'Link URL'
                                              , 'desc' => ''
                                              , 'id' => $prefix . 'secondary_proxy_url'
                                              , 'type' => 'text'
                                          )
                                    )
                  );

  $meta_boxes[] = array('id' => 'spl_secondary_intro'
                      , 'title' => 'Callout Box'
                      , 'pages' => array('page') // post type
                      , 'show_on' => array( 'key' => 'page-template', 'value' => 'template-callout.php' )
                      , 'context' => 'normal'
                      , 'priority' => 'high'
                      , 'show_names' => true // Show field names on the left
                      , 'fields' => array(
                                          array('name' => ''
                                              , 'desc' => 'Customize the callout box. These fields are optional.'
                                              , 'id' => $prefix . 'secondary_intro_title'
                                              , 'type' => 'title'
                                          ),
                                          array('name' => 'Headline'
                                              , 'desc' => ''
                                              , 'id' => $prefix . 'secondary_intro_headline'
                                              , 'type' => 'text_medium'
                                          ),
                                          array('name' => 'Callout Text'
                                              , 'desc' => ''
                                              , 'id' => $prefix . 'secondary_intro_text'
                                              , 'type' => 'textarea_small'
                                          ),
                                          array('name' => 'Button Text'
                                              , 'desc' => 'Only appears if secondary content exits. Defaults to "Read More".'
                                              , 'id' => $prefix . 'secondary_intro_btn'
                                              , 'type' => 'text_medium'
                                          )
                                    )
                  );
  
  $meta_boxes[] = array('id' => 'spl_secondary_content'
                      , 'title' => 'Secondary Content Panel'
                      , 'pages' => array('page') // post type
                      , 'show_on' => array( 'key' => 'page-template', 'value' => 'template-callout.php' )
                      , 'context' => 'normal'
                      , 'priority' => 'high'
                      , 'show_names' => false // Show field names on the left
                      , 'fields' => array(
                                          array('name' => 'Secondary Title'
                                              , 'desc' => 'Enter a title for this content panel (optional).'
                                              , 'id' => $prefix . 'secondary_content_title'
                                              , 'type' => 'text'
                                          ),
                                          array('name' => 'Secondary Subtitle'
                                              , 'desc' => 'Enter a subtitle for this content panel (optional).'
                                              , 'id' => $prefix . 'secondary_content_subtitle'
                                              , 'type' => 'text'
                                          ),
                                          array('name' => 'Secondary Content'
                                              , 'desc' => ''
                                              , 'id' => $prefix . 'secondary_content'
                                              , 'type' => 'wysiwyg'
                                              , 'options' => array(

                                                )
                                          )
                                    )
                  );
    
  return $meta_boxes;
}

add_filter( 'cmb_meta_boxes', 'spl_secondary_metaboxes' );

// Initialize the metabox class

add_action( 'init', 'be_initialize_cmb_meta_boxes', 9999 );
function be_initialize_cmb_meta_boxes() {
  if ( !class_exists( 'cmb_Meta_Box' ) ) {
    require_once( get_template_directory() . '/templates/metabox/init.php' );
  }
}

?>