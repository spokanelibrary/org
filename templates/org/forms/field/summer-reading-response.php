<div class="panel panel-primary"  style="background-image:url('/assets/img/spl-touch-bg.png');background-position:400px 0px;background-repeat:no-repeat">
  <div class="panel-heading">
    <h3 class="panel-title">Thank You <?php if( !empty($crass->request['name']) ) : ?> <?php echo ' '.ucfirst($crass->request['name']); ?><?php endif; ?>!</h3>
  </div><!-- /.panel-heading -->

  <div class="panel-body">
    <p>&nbsp;</p>
    <p>
      <i class="glyphicon glyphicon-download-alt text-muted"></i>
      <?php if( 'adult' == $crass->request['age'] ) : ?>
      <a href="/assets/pdf/spl-summer-reading-log-2015-adult.pdf">
      <?php else: ?>
      <a href="/assets/pdf/spl-summer-reading-log-2015.pdf">
      <?php endif; ?>
      <b>Open your summer reading log&hellip;</b>
      </a>
    </p>
    <p>&nbsp;</p>
  </div><!-- /.panel-body -->
</div><!-- /.panel -->

<?php
/*
echo '<pre>';
//print_r($crass);
//print_r($crass->result);
print_r($crass->request); 
echo '</pre>';
*/
?>