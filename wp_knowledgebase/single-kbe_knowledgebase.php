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
 *  Build a simple TOC
 *  lifted from this great SO question:
 *  http://stackoverflow.com/questions/18156164/parse-html-and-get-all-h3s-after-an-h2-before-the-next-h2-using-php
 */
error_reporting(1);
$content = get_the_content();

$domtoc = new SPL_Heading_Level_DOM_TOC($content);

class SPL_Heading_Level_DOM_TOC {

  var $toc;
  var $dom;
  var $levels = array(1=>'h1'
                    , 2=>'h2'
                    , 3=>'h3'
                    , 4=>'h4'
                    , 5=>'h5'
                    , 6=>'h6');
    
  function __construct($content) {
    $this->dom = new DOMDocument;
    $this->dom->loadHTML($content);

    return $this->getHeadings;
  }

  public function getHeadings() {
    /*
    foreach ( $this->levels as $l => $level ) {
      $this->toc[$l] = $this->getHeadingLevel($l);    
    }
    */
    foreach( $this->levels as $tag) {
      foreach($dom->getElementsByTagName($tag) as $node) {
          $matches[$node->getLineNo()] = $dom->saveHtml($node);
      }
    }
    ksort($matches);

    return $matches;
  }

  /*
  protected function getHeadingLevel($l) {
    foreach($this->dom->getElementsByTagName($this->level[$l]) as $node) {
      $key = $this->dom->saveHtml($node);
      $matches[$key] = array();
      while( ($node = $node->nextSibling) && $node->nodeName == $l+1 ) {
        $matches[$key][] = $this->dom->saveHtml($node); 
        $matches[$key][''] = $this->dom->saveHtml($node);   
      }
    }

    return $matches;
  }
  */
  
  
} // SPL_Heading_Level_DOM_TOC

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
    <?php //echo wpautop(get_the_content()); ?>
    <?php the_content(); ?>
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