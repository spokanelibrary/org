      
    <div class="panel panel-default">
      <div class="panel-body">
        <form class="form-horizontal spl-form" id="spl-form-3d" method="post" role="form">
          
          <?php include 'common/crass-response.php'; ?>
      
          <input type="hidden" id="spl-form-id" name="spl-form[id]" value="3d" />
          
          <input type="hidden" 
                id="spl-form-ip" 
                name="spl-form[ip]" 
                value="<?php echo $_SERVER['REMOTE_ADDR']; ?>"
                />

          <fieldset>
            <legend class="text-muted">
              <small class="glyphicon glyphicon-calendar"></small>
              Schedule an appointment
            </legend>

            <p>
              Please let us know where you would like to meet and a general topic, so we can route your request.
            </p>
            <div class="form-group">
              <label for="spl-form-appt-location" class="col-sm-4 control-label">
                I would like to pickup at
              </label>
              <div class="col-sm-8">
                <select class="form-control" id="spl-form-pickup-location" name="spl-form[pickup-location]">
                  <option value="Downtown" selected>Downtown Library</option>
                  <option value="East Side">East Side Library</option>
                  <option value="Hillyard">Hillyard Library</option>
                  <option value="Indian Trail">Indian Trail Library</option>
                  <option value="Shadle">Shadle Library</option>
                  <option value="South Hill">South Hill Library</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="spl-form-query-type" class="col-sm-4 control-label">
                Choose a filament color
              </label>
              <div class="col-sm-8">
                <select class="form-control" id="spl-form-pla-color" name="spl-form[pla-color]">
                  <option value="Black">Black</option>
                  <option value="Blue">Blue</option>
                  <option value="Blue-Fluorescence">Blue, Fluorescence</option>
                  <option value="Blue-Opaque">Blue, Opaque</option>
                  <option value="Brown-Dark">Brown, Dark</option>
                  <option value="Glow-Dark">Glow in the Dark</option>
                  <option value="Glow-Green">Glow in the Green</option>
                  <option value="Green">Green</option>
                  <option value="Green-Grass">Green, Grass</option>
                  <option value="Grey">Grey</option>
                  <option value="Orange">Orange</option>
                  <option value="Purple-Dark">Purple, Dark</option>
                  <option value="Purple-Solid">Purple, Solid</option>
                  <option value="Red">Red</option>
                  <option value="Red-Translucent">Red, Translucent</option>
                  <option value="Violet">Violet</option>
                </select>
                <hr>
              </div>
            </div>


            <p>
              Please give us a brief idea of what you would like to accomplish in a one-hour session.
            </p>
            <div class="form-group">
              <label for="spl-form-message" class="col-sm-4 control-label">
                I would like to discuss
              </label>
              <div class="col-sm-8">
                <textarea rows="6" class="form-control required" id="spl-form-message" name="spl-form[message]"></textarea>
                <hr>
              </div>
            </div>
            
            <?php include 'common/field-login.php'; ?>
            <?php include 'common/field-contact-no-mail.php'; ?>
            <?php include 'common/field-contact-method-no-mail.php'; ?>
            
            <hr>

            <div class="form-group">
              <label for="" class="col-sm-4 control-label">
                &nbsp;
              </label>
              <div class="col-sm-8">
                <p>
                  Appointments are subject to staff availability. 
                  <br>
                  <b>We will contact you to confirm your appointment.</b>
                </p>
              </div>
            </div>

            

            <?php include 'common/field-submit.php'; ?>
            
          </fieldset>
        </form>
      </div><!-- /.panel-body -->
    </div><!-- /.panel -->
