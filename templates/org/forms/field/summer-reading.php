
    <div class="panel panel-primary" style="background-image:url('/assets/img/spl-touch-bg.png');background-position:-20px -20px;background-repeat:no-repeat">
      <div class="panel-body">
        <form class="form-horizontal spl-form" id="spl-form-summer" method="post" role="form">
          
          <?php include 'common/crass-response.php'; ?>
      
          <input type="hidden" id="spl-form-id" name="spl-form[id]" value="summer" />
          
          <input type="hidden" 
                id="spl-form-ip" 
                name="spl-form[ip]" 
                value="<?php echo $_SERVER['REMOTE_ADDR']; ?>"
                />

          <fieldset>
            
            <legend class="text-muted">
              <small class="glyphicon glyphicon-pencil"></small>
              Sign up for Summer Reading
            </legend>
            
            <div class="form-group">
              <label for="spl-form-name" class="col-sm-4 control-label">What is your name?</label>
              <div class="col-sm-8 col-md-6">
                <input type="text" class="form-control input-lg required" id="spl-form-name" name="spl-form[name]" placeholder="">
              </div>
            </div>

            <div class="form-group">
              <label for="spl-form-name" class="col-sm-4 control-label">How old are you?</label>
              <div class="col-sm-8 col-md-6">
                <select 
                    name="spl-form[age]" 
                    id="spl-form-age"
                    class="form-control input-lg"
                    title="Please select your age."
                    >
                    <option value="0">Your Age...</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="adult">18 years or older</option>
                </select>
              </div>
            </div>

            <div class="form-group form-group-lg">
              <label for="spl-form-name" class="col-sm-4 control-label">Which branch do you visit most?</label>
              <div class="col-sm-8 col-md-6">
                <select 
                    name="spl-form[branch]" 
                    id="spl-form-branch"
                    class="form-control input-lg"
                    title="Please select a library branch."
                    >
                    <option value="">Your Library Branch...</option>
                    <option value="dt">Downtown</option>
                    <option value="es">East Side</option>
                    <option value="hy">Hillyard</option>
                    <option value="it">Indian Trail</option>
                    <option value="sh">Shadle</option>
                    <option value="so">South Hill</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-offset-4 col-sm-8 col-md-6">
                <button type="submit" class="btn btn-block btn-success">
                  <small class="glyphicon glyphicon-check"></small>
                  Get Your Reading Log Now &rarr;
                </button>
              </div>
            </div>

          </fieldset>
        </form>
      </div><!-- /.panel-body -->
    </div><!-- /.panel -->


