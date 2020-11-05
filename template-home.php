<?php
/*
Template Name: Home Page
*/
?>


<div class="row">

  <div class="col-lg-10 col-lg-offset-1">

    <?php
    // conditionally display page content
    $spl_home = $post->post_content;
    $spl_home = trim($spl_home);
    if ( !empty($spl_home) ): ;
    ?>
    <div class="panel spl-hero-panel spl-hero-news">
      <?php
      if ( $post->post_excerpt): ;
      ?>
      <h4 class="text-center hero-heading">
        <i class="glyphicon glyphicon-bullhorn"></i>
        <?php echo $post->post_excerpt; ?>
      </h4>
      <?php endif; ?>
      <div class="panel-body">
        <?php echo $post->post_content; ?>
      </div>
    </div>
<?php endif; ?>

    <div class="row">

   <!--    <div class="col-sm-4 visible-sm visible-xs">
        <div class="panel spl-hero-open">
          <a class="spl-hero-link" href="/open/">
            <h4 class="text-center hero-heading">
              <i class="glyphicon glyphicon-time"></i>
              Open Hours
            </h4>
            <div class="panel-body">
              <div class="open-promo">
                <h5 class="text-center text-success uppercase">Check library schedule</h5>
              </div>
            </div>
          </a>
        </div>
      </div> -->

      <div class="clearfix visible-sm"></div>

      <div class="col-sm-4 col-sm-push-8 col-md-3 col-md-push-9 hidden-xs spl-hero-calendar">
        <a href="https://www.spokanelibrary.org/grab-n-go/"><img src="/assets/img/promos/ReserveGrabGo.png" class="img-responsive"alt="Schedule an appointment to browse the collection"></a>
        <a href="https://www.spokanelibrary.org/computer-reservation/"><img src="/assets/img/promos/ReserveaComputer.png" class="img-responsive"alt="Reserve a computer"></a>
        <!-- <a href="http://bookings.spokanelibrary.org/reserve"><img src="/assets/img/promos/MeetingRoomButton2.png" class="img-responsive"alt="Book a meeting room"></a> -->
        <a href="https://www.spokanelibrary.org/calendar/"><img src="/assets/img/promos/CalendarButton2.png" class="img-responsive" alt="Upcoming events and programs"></a>
        <a href="https://www.spokanelibrary.org/curbside/"><img src="/assets/img/promos/CurbsideButton.png" class="img-responsive" alt="Schedule curbside pickup"></a>
      </div>

      <div class="col-sm-8 col-sm-pull-4 col-md-9 col-md-pull-3">

        <div class="panel spl-hero-panel spl-hero-muted">
          <?php echo do_shortcode('[spl_carousel_photo auto random slug=carousel]'); ?>
        </div>

      </div><!-- /.col -->

    </div><!-- /.row -->

    <div class="row">
      <div class="col-sm-10">
        <h4>SUGGESTIONS</h4>
        <p><a href="/new">Browse New Arrivals</a>, the <a href="/browse/star/">Star Collection</a>, <a href="/request">request something we don’t have</a>, or <a href="/suggested-reading/">sign-up for suggestions</a></p>
      </div>
    </div>

    <div class="panel spl-hero-panel spl-hero-browse">
      <div class="browse-promo text-center">
          <a class="hidden-xs" href="/browse/">Browse&nbsp;popular&nbsp;titles&nbsp;<small>&rarr;</small></a>
          <a class="" href="/new/">Browse&nbsp;new&nbsp;materials&nbsp;<small>&rarr;</small></a>
          <a class="hidden-xs" href="/request/">Request&nbsp;something&nbsp;we&nbsp;don't&nbsp;have&nbsp;<small>&rarr;</small></a>
        </div>
      <div class="panel-body" style="/*padding-left: 40px; padding-right: 40px;*/">

        <?php echo do_shortcode('[spl_widget home-page carousel pause control browse-group]'); ?>
      </div>

<?php if ($_SERVER['REMOTE_ADDR'] == '10.14.36.124' || $_SERVER['REMOTE_ADDR'] == '10.14.50.170'):; ?>
      <div class="panel-body" style="/*padding-left: 40px; padding-right: 40px;*/">

        <?php echo do_shortcode('[spl_widget home-page carousel pause control browse-list star]'); ?>
      </div>
<?php else:; ?>
<?php endif;?>
    </div>

<div class="row">
  <div class="col-sm-12">
    <h4>DIGITAL LIBRARY</h4>
    <div class="row">


  <div class="col-sm-2 spl-digital-library">
    <h5>eBooks</h5>
    <ul>
      <li><a href="https://spokanelibrary.overdrive.com">Overdrive</a></li>
      <li><a href="https://www.spokanelibrary.org/apps/#libby">Libby (app)</a></li>
      <li><a href="http://www.tumblebooklibrary.com/autologin.aspx?userid=NIjvaAHfTSkSZvMJikB5Fg%3d%3d">TumbleBooks</a></li>
      <li><a href="http://hoopladigital.com/">hoopla</a></li>
    </ul>
  </div>
  <div class="col-sm-2 spl-digital-library">
    <h5>Audiobooks</h5>
    <ul>
      <li><a href="https://www.rbdigital.com/spokanelibrarywa/service/magazines/landing/">RBDigital</a></li>
      <li><a href="http://hoopladigital.com/">hoopla</a></li>
    </ul>
  </div>
  <div class="col-sm-2 spl-digital-library">
    <h5>Music</h5>
    <ul>
      <li><a href="http://spokanepl.freegalmusic.com/">Freegal</a></li>
      <li><a href="http://hoopladigital.com/">hoopla</a></li>
    </ul>
  </div>
  <div class="col-sm-2 spl-digital-library">
    <h5>Magazines</h5>
    <ul>
      <li><a href="https://www.rbdigital.com/spokanelibrarywa/service/magazines/landing/">RBDigital</a></li>
    </ul>
  </div>
  <div class="col-sm-2 spl-digital-library">
    <h5>Movies &amp; TV</h5>
    <ul>
      <li><a href="http://hoopladigital.com/">hoopla</a></li>
      <li><a href="https://spokanelibrary.kanopy.com/">Kanopy</a></li>
    </ul>
  </div>


    </div>
  </div>
</div>
  </div><!-- /.col -->
</div><!-- /.row -->
<?php if ($_SERVER['REMOTE_ADDR'] == '10.14.36.106' || $_SERVER['REMOTE_ADDR'] == '10.14.50.215'):; ?>
<?php else:; ?>
<?php endif;?>
