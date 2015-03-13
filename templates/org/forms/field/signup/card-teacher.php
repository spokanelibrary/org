<div class="panel panel-success">
  <div class="panel-heading">
		<h4 class="panel-title">
			Library Card Application for Teachers &amp; Librarians
			<small class="pull-right">
        <i class="glyphicon glyphicon-refresh"></i>
        <a href="<?php echo $_SERVER['REQUEST_URI'] ;?>"><span class="text-muted">Start over</span></a>
      </small>
		</h4>
	</div>
	<div class="panel-body">
  	
    <fieldset>
      <legend class="text-muted">
        <small class="glyphicon glyphicon-"></small>
        Let's get started
      </legend>
      <?php include 'shared/card-name.php'; ?>
      <?php include 'shared/card-pin-bday.php'; ?>
      <?php include 'shared/card-location.php'; ?>
    </fieldset>

    <fieldset>
      <legend class="text-muted">
        <small class="glyphicon glyphicon-"></small>
        Tell us how to reach you
      </legend>
      <?php include 'shared/card-contact.php'; ?>
    </fieldset>

    <fieldset>
      <legend class="text-muted">
        <small class="glyphicon glyphicon-"></small>
        Tell us about your school
      </legend>
      <?php include 'shared/card-school-info.php'; ?>
    </fieldset>

    <fieldset>
      <legend class="text-muted">
        <small class="glyphicon glyphicon-"></small>
        Your home address
      </legend>
      <?php include 'shared/card-address.php'; ?>
    </fieldset>

    <fieldset>
      <legend class="text-muted">
        <small class="glyphicon glyphicon-"></small>
        Complete your application
      </legend>
      <?php include 'shared/card-apply.php'; ?>
    </fieldset>

  </div><!-- /.panel-body -->
</div><!-- /.panel -->