<?php
/*
Template Name: - Home Page
*/
?>

<?php //get_template_part('templates/page', 'header'); ?>

<div class="row" style="margin-bottom:10px;">
  <div class="col-md-6">
    <?php echo do_shortcode('[spl_widget search-catalog]'); ?>
  </div><!-- /.col -->
  <div class="col-md-6 visible-md visible-lg">
    <?php echo do_shortcode('[spl_widget login-form]'); ?>
  </div><!-- /.col -->
</div><!-- /.row -->

<div class="row">
  <div class="col-md-6 col-sm-8">
    <div>
      <?php include get_template_directory().'/templates/org/pages/mobile.php'; ?>
    </div>
    <div>
      <?php echo do_shortcode('[spl_carousel]'); ?>
      <?php get_template_part('templates/content', 'page'); ?>
    </div>


    <?php
    $rss = fetch_feed( 'http://blog.spokanelibrary.org/feed/atom/' );

    if ( ! is_wp_error( $rss ) ) : // Checks that the object is created correctly

        // Figure out how many total items there are, but limit it to 5. 
        $maxitems = $rss->get_item_quantity( 9 ); 

        // Build an array of all the items, starting with element 0 (first element).
        $rss_items = $rss->get_items( 0, $maxitems );

    endif;

    ?>

    <div class="hidden-xs">
    
    <!--
    <div class="panel panel-primary panel-callout panel-callout-primary panel-transparent">
    -->
    <h4 class="text-primary" href="http://blog.spokanelibrary.org">
      <span class="glyphicon glyphicon-bullhorn text-primary"></span>
      <a href="#">Recently Posted <small>by SPL Bloggers &rarr;</small></a>
    </h4>
    <ul class="nav nav-pills">
        <?php if ( $maxitems == 0 ) : ?>
            <li><?php _e( 'No items', 'my-text-domain' ); ?></li>
        <?php else : ?>
            <?php // Loop through each feed item and display each item as a hyperlink. ?>
            <?php foreach ( $rss_items as $item ) : ?>
                <li>
                    <?php //print_r($item); ?>
                    <a href="<?php echo esc_url( $item->get_permalink() ); ?>"
                        title="<?php printf( __( 'Posted %s', 'my-text-domain' ), $item->get_date('j F Y | g:i a') ); ?>">
                        <small class="glyphicon glyphicon-comment text-muted"></small>
                        <?php echo esc_html( $item->get_title() ); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        <?php endif; ?>
    </ul>
    <!-- </div> -->
    </div>

  </div><!-- /.col -->
  <div class="col-md-6 col-sm-4">

    <div class="row">
      <div class="col-md-6">
        
        <div class="panel panel-warning panel-callout panel-callout-warning">
          <h4 class="text-warning">
            <span class="glyphicon glyphicon-download-alt"></span>
            <!--
            Check it Out:
            <br />
            -->
            <a class="text-muted" href="#"><small class="">Digital Branch &rarr;</small></a>
          </h4>
          
          <p>
            <a href="#"><img src="/assets/img/png/spl-app-icons-music.png" style="width:50px; height:50px;" /></a>
            <a href="#">Music (.mp3)</a>
          </p>

          <p>
            <a href="#"><img src="/assets/img/png/spl-app-icons-magazine.png" style="width:50px; height:50px;" /></a>
            <a href="#">Magazines</a>
          </p>

          <p>
            <a href="#"><img src="/assets/img/png/spl-app-icons-ebook.png" style="width:50px; height:50px;" /></a>
            <a href="#">eBooks</a>
          </p>

          <p>
            <a href="#"><img src="/assets/img/png/spl-app-icons-audio.png" style="width:50px; height:50px;" /></a>
            <a href="#">Audio Books</a>
          </p>
          
          <hr />

          <p>
            <a class="btn btn-primary btn-block" href="#">Start Downloading <small class="glyphicon glyphicon-cloud-download"></small></a>
          </p>

        </div>

      </div><!-- /.col -->
      
      <div class="col-md-6 hidden-sm hidden-xs">
        <div class="panel panel-default panel-callout panel-callout-default panel-transparent">
          <h4 class="text-muted">
            <span class="glyphicon glyphicon-time"></span>
            <a class="text-muted" href="#"><small class="">The Library is &rarr;</small></a>
          </h4>
          <?php echo do_shortcode('[spl_widget branch-hours]'); ?>
        </div>      
      </div><!-- /.col -->
    </div><!-- /.row -->

    <div class="panel panel-success panel-callout panel-callout-success panel-transparent">
      <h4 class="text-success">
        <span class="glyphicon glyphicon-calendar"></span>
        <a class="text-muted" href="/programs/calendar"><small>Upcoming Events &rarr;</small></a>
      </h4>
      <?php echo do_shortcode('[events_list limit="6"]<div><h4 class="text-success">#_{M} #_{d}<small> #_EVENTLINK  #_EVENTTIMES</small></h4></div>[/events_list]'); ?>
    </div>

    <div class="panel panel-info panel-callout panel-callout-info panel-transparent">
      <h4 class="text-info">
        <span class="glyphicon glyphicon-question-sign"></span>
        <a class="text-muted" href="#"><small>Frequently Asked &rarr;</small></a>
      </h4>
      <div class="btn-group btn-block">
        <button type="button" class="btn btn-block btn-primary dropdown-toggle" data-toggle="dropdown">Choose a Question <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">What were your responsibilities?</a></li>
          <li><a href="#">What major challenges and problems did you face?</a></li>
          <li><a href="#">What have you learned from your mistakes?</a></li>
          <li><a href="#">What did you like or dislike about your previous job?</a></li>
        </ul>
      </div>  
    </div>

  </div><!-- /.col -->
</div><!-- /.row -->


<div id="spl-recent-circ"></div>
<script id="spl-recent-circ-tmpl" type="text/x-handlebars-template">
  {{#if recent}}
    <div class="row">
      <div class="col-sm-12">
        <div style="border-top: 1px dotted #ccc; margin:10px 0; padding:5px 0;">
          <h4 class="text-primary">
            <span class="glyphicon glyphicon-book text-primary"></span>
            <a href="/browse">Just Checked Out <small>from the Library &rarr;</small></a>
          </h4>
        </div>
      </div><!-- /.col -->
    </div><!-- /.row -->
    <div class="row">
      {{#each recent}}
      <div class="col-sm-6 col-md-3">
        <div class="panel panel-default panel-callout panel-callout-default panel-condensed panel-transparent">

          <div class="panel-heading panel-condensed panel-transparent">
            <h5 class="normal one-liner panel-title text-primary">
              <a title="{{title}}" href="http://www.spokanelibrary.org/bib/{{bib}}">{{title}}</a>
            </h5> 
          </div><!-- /.panel-heading -->

          <div class="panel-body">
            <a href="http://www.spokanelibrary.org/bib/{{bib}}">
            <img class="img-responsive img-rounded" style="margin:auto; max-height:260px;" title="{{title}}" alt="No cover image" src="http://contentcafe2.btol.com/ContentCafe/jacket.aspx?UserID=ebsco-test&Password=ebsco-test&Return=T&Type=M&Value={{isbn}}">
            <!--
            <img class="img-responsive img-rounded" style="margin:auto;" title="{{title}}" alt="No thumbnail" src="http://www.syndetics.com/index.php?isbn={{isbn}}/mc.gif&amp;client=spokp">
            -->
            </a>
          </div><!-- /.panel-body -->

        </div><!-- /.panel -->
      </div><!-- /.col -->
    {{/each}}
  </div><!-- /.row -->
  {{/if}}
</script>

  

<div class="row">
  <div class="col-sm-12">
  </div><!-- /.col -->
</div><!-- /.row -->
