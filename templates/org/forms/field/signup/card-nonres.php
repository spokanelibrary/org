<div class="panel panel-warning">
  <div class="panel-heading clearfix">
    <a class="btn btn-sm btn-warning pull-right" href="<?php echo $_SERVER['REQUEST_URI'] ;?>"><i class="glyphicon glyphicon-refresh"></i> Start over</a>
    <h4 class="panel-title">
      Library Card Application for Non-Residents
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
      <?php include 'shared/card-guardian.php'; ?>
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
        Your primary mailing address
      </legend>
      <?php include 'shared/card-address.php'; ?>
    </fieldset>

    <fieldset>
      <legend class="text-muted">
        <small class="glyphicon glyphicon-"></small>
        Library card eligibility
      </legend>
      <?php include 'shared/card-eligible.php'; ?>
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