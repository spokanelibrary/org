<?php
/*
 *  Build a simple TOC w/ DOM replacement
 *  lifted from this great SO question:
 *  http://stackoverflow.com/questions/18156164/parse-html-and-get-all-h3s-after-an-h2-before-the-next-h2-using-php
 */

class SPL_DOM_TOC {
  
  function __construct($content, $trigger=3, $prefix='spl-dom-toc') {
    $this->content = $content;
    $this->trigger = $trigger;
    $this->prefix = $prefix;

    $this->dom = new DOMDocument;
    $this->dom->loadHTML($this->content);

    $this->levels = array(1=>'h1'
                        , 2=>'h2'
                        , 3=>'h3'
                        , 4=>'h4'
                        , 5=>'h5'
                        , 6=>'h6');

    $this->setHeadings();
    $this->parseDOM();
    $this->renderHTML();
    $this->renderMenu();

    $domtoc = new StdClass();
    $domtoc->menu = $this->menu;
    $domtoc->html = $this->html;

    return $domtoc;
  }

  protected function setHeadings() {    
    foreach( $this->levels as $tag) {
      foreach($this->dom->getElementsByTagName($tag) as $node) {
          $matches[$node->getLineNo()] = $this->dom->saveHtml($node);
      }
    }
    ksort($matches);
    $this->headings = $matches;
  }

  protected function parseDOM() {
    $this->html = $this->content;

    if ( is_array($this->headings) ){
      foreach ( $this->headings as $h => $heading ) {
        // does DOMDocument support injecting ids, anchors, etc?
        foreach ( $this->levels as $l => $level ) {
          if ( stristr($heading, '<'.$level ) && !stristr($heading, 'href') ) {
            $id = str_ireplace('<'.$level
                              ,'<'.$level.' style="margin-top:-30px; padding-top:30px;" id="'.$this->prefix.'-'.$level.'-'.$h.'"'
                              ,$heading);
            $this->html = str_ireplace($heading, $id, $this->html);
            
            $this->toc[] = '<a href="#'.$this->prefix.'-'.$level.'-'.$h.'">'.str_ireplace('<'.$level, '<'.$level.' style="margin:6px 0; padding:0;"', $heading).'</a>';

          }  
        }       
      }
    } 

  }

  protected function renderHTML() {
    if ( function_exists('wpautop') ) {
      $this->html = wpautop($this->html);  
    }
  }

  protected function renderMenu() {
    $this->menu = null;
    if ( is_array($this->toc) 
      && !empty($this->toc) 
      && $this->trigger <= count($this->toc) ) {
      //$this->menu .= '<div class="panel panel-primary">'.PHP_EOL;
      //$this->menu .= '<div class="panel-body">'.PHP_EOL;
      $this->menu .= '<div class="alert alert-info">'.PHP_EOL;
      $this->menu .= '<div class="row">'.PHP_EOL;
      $this->menu .= '<div class="col-sm-6 col-md-4">'.PHP_EOL;
      $this->menu .= '
      <div class="dropdown">
        <button class="btn btn-block btn-info dropdown-toggle" type="button" id="'.$this->prefix.'-menu'.'" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          <i class="glyphicon glyphicon-list"></i> 
          <b>Quick Links</b>
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" aria-labelledby="'.$this->prefix.'-menu'.'">
      ';
      foreach ( $this->toc as $toc ) {
        $this->menu .= '<li>'.$toc.'</li>'.PHP_EOL;
      }
      $this->menu .= '
        </ul>
      </div>
      ';
      $this->menu .= '</div>'.PHP_EOL;
      $this->menu .= '</div>'.PHP_EOL;
      $this->menu .= '</div>'.PHP_EOL;
      //$this->menu .= '</div>'.PHP_EOL;
      //$this->menu .= '</div>'.PHP_EOL;
      //$this->menu .= '<hr>'.PHP_EOL;
    }
  }
  
  
} // SPL_Heading_Level_DOM_TOC
?>
<?php while(have_posts()) : ?>
<?php the_post(); ?>
<?php kbe_set_post_views(get_the_ID()); ?>

<div class="page-header">
  <h1>
    <?php the_title(); ?>
  </h1>
</div>

<?php

/*
$content = get_the_content();
$toc = null;
$dom = new DOMDocument;
$dom->loadHTML($content);
*/


/*
foreach($dom->getElementsByTagName('h2') as $node) {
    $matches['heading-two'][] = $dom->saveHtml($node);
}
*/



/*
foreach($dom->getElementsByTagName('h3') as $node) {
    $matches['h3'][] = $dom->saveHtml($node);
}
*/

/*
foreach($dom->getElementsByTagName('h2') as $node) {
    $key = $dom->saveHtml($node);
    $matches[$key] = array();
    while(($node = $node->nextSibling) && $node->nodeName !== 'h2') {
        if($node->nodeName == 'h3') {
            $matches[$key][] = $dom->saveHtml($node);   
        }
    }
}
*/

/*
$toc = '';
if ( $matches && $matches['h3'] ){
  foreach ( $matches['h3'] as $h => $three ) {
    $str = '<h3 id="h3-'.$h.'"';
    $id = substr_replace('<h3', $str);
    //$content = substr_replace(string, replacement, start)
    $toc .= '<a href="#h3-'.$h.'">'.$three.'</a>';
  }
  //print_r($matches);
}
*/
?>

<div class="row">
  <div class="col-md-8 col-md-9">
    <?php
    $domtoc = new SPL_DOM_TOC(get_the_content());

    echo $domtoc->menu;
    echo $domtoc->html;
    //echo '<pre>';
    //print_r($domtoc);
    //echo '</pre>';
    ?>
    <?php //echo wpautop(get_the_content()); ?>
    <?php //the_content(); ?>
    <?php //echo $toc; ?>
  </div><!-- /.col -->
  <div class="col-md-4 col-lg-3">

    <div class="panel spl-hero-intranet spl-hero-brand-blue-c">
      <div class="panel-heading">
        <h4 class="">Related Articles</h4>
      </div>
      <div class="panel-body">
        <?php echo spl_kbe_get_related_categories_by_post_id(get_the_ID()); ?>    
      </div>
    </div>

  </div><!-- /.col -->
</div><!-- /.row -->



<?php endwhile; ?>
<?php kbe_get_post_views(get_the_ID()); ?>

<?php

function spl_kbe_get_related_categories_by_post_id($id) {
  $html = null;

  $terms = wp_get_post_terms($id, KBE_POST_TAXONOMY);
  
  if ( is_array($terms) ) {
    foreach ( $terms as $term ) {
      $html .= '<h4 class="uppercase">';
      $html .= '<a href="'.get_term_link($term->slug, 'kbe_taxonomy').'">';
      $html .= $term->name;
      $html .= '</a>';
      $html .= '<span class="label label-success pull-right">';
      $html .= $term->count;
      $html .= '</span>';
      $html .= '</h4>';
      $html .= spl_kbe_get_related_articles_by_term_id($term->term_id, 10);
    }
 
  }

  return $html;
}

function spl_kbe_get_related_articles_by_term_id($id, $limit=-1) {
  if ( $id ) { 
    $args = array(
                  'post_type' => KBE_POST_TYPE,
                  'posts_per_page' => $limit,
                  'orderby' => 'menu_order',
                  'order' => 'ASC',
                  'tax_query' => array(
                    array(
                          'taxonomy' => KBE_POST_TAXONOMY,
                          'field' => 'term_id',
                          'terms' => $id,
                          'include_children' => false
                    )
                  )
              );
    $query = new WP_Query($args);

    if($query->have_posts()) {
      $html .= '<ul class="nav nav-pills">';
      while( $query->have_posts() ) {
        $query->the_post();
        $html .= '<li>';
        $html .= '<a href="'.get_the_permalink().'" rel="bookmark">';
        $html .= '<small class="text-muted glyphicon glyphicon-list-alt"></small> ';
        $html .= get_the_title();
        $html .= '</a>';
        $html .= '</li>';
      }
      $html .= '</ul>';
    }
  }

  return $html;
}

?>