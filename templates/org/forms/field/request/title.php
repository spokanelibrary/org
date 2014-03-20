<div class="panel panel-default">
  <div class="panel-body">
    <form class="form-horizontal spl-form" id="spl-form-request" method="post" role="form">
      
      <?php include 'common/crass-response.php'; ?>
  
      <input type="hidden" id="spl-form-id" name="spl-form[id]" value="request" />
      
      <input type="hidden" 
            id="spl-form-ip" 
            name="spl-form[ip]" 
            value="<?php echo $_SERVER['REMOTE_ADDR']; ?>"
            />

      <fieldset>
        <legend class="text-muted">
          <small class="glyphicon glyphicon-tag"></small>
          Suggest a new title or make an ILL request
        </legend>

        
        <div class="form-group">
          <label for="spl-form-message" class="col-sm-2 control-label">My message</label>
          <div class="col-sm-10">
            <textarea rows="6" class="form-control required" id="spl-form-message" name="spl-form[message]"></textarea>
          </div>
        </div>
        
        <?php //include 'common/field-contact-method.php'; ?>
        <?php //include 'common/field-login.php'; ?>
        <?php //include 'common/field-contact.php'; ?>
        <?php //include 'common/field-submit.php'; ?>
        
      </fieldset>
    </form>
  </div><!-- /.panel-body -->
</div><!-- /.panel -->
