<div class="panel panel-default">
  <div class="panel-heading">
    <h4 class="panel-title clearfix">
      Library Card Application
      <a class="btn btn-sm btn-default pull-right" style="margin:0;" href="<?php echo $_SERVER['REQUEST_URI'] ;?>"><i class="glyphicon glyphicon-refresh"></i> Start over</a>
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