<div class="panel-group" id="spl-form-request-panels" style="margin:0; padding:0;">
  <div class="panel" style="border:none; margin:0; padding:0;">

    <div class="panel-collapse collapse spl-form-request-generic"
          id="spl-form-panel-request-book">
      <p>
        <button type="button" 
                class="btn btn-lg btn-block btn-primary"
                data-toggle="collapse"
                data-target="#spl-form-request-panel-choose">
                <i class="glyphicon glyphicon-book"></i> 
                Book
                </button>
      </p>
    </div><!-- /.collapse -->

    <div class="panel-collapse collapse spl-form-request-generic"
          id="spl-form-panel-request-cd-audio-book">
      <p>
        <button type="button" 
                class="btn btn-lg btn-block btn-primary"
                data-toggle="collapse"
                data-target="#spl-form-request-panel-choose">
                <i class="glyphicon glyphicon-volume-up"></i>
                Book on CD
                </button>
      </p>
    </div><!-- /.collapse -->

    <div class="panel-collapse collapse spl-form-request-generic spl-form-request-download"
          id="spl-form-panel-request-ebook">
      <p>
        <button type="button" 
                class="btn btn-lg btn-block btn-primary"
                data-toggle="collapse"
                data-target="#spl-form-request-panel-choose">
                <i class="glyphicon glyphicon-phone"></i>
                ebook
                </button>
      </p>
    </div><!-- /.collapse -->

    <div class="panel-collapse collapse spl-form-request-generic spl-form-request-download"
          id="spl-form-panel-request-dl-audio-book">
      <p>
        <button type="button" 
                class="btn btn-lg btn-block btn-primary"
                data-toggle="collapse"
                data-target="#spl-form-request-panel-choose">
                <i class="glyphicon glyphicon-headphones"></i>
                Audio Book <small>(download)</small>
                </button>
      </p>
    </div><!-- /.collapse -->

    <div class="panel-collapse collapse spl-form-request-generic"
          id="spl-form-panel-request-cd">
      <p>
        <button type="button" 
                class="btn btn-lg btn-block btn-primary"
                data-toggle="collapse"
                data-target="#spl-form-request-panel-choose">
                <i class="glyphicon glyphicon-music"></i> 
                Music CD
                </button>
      </p>
    </div><!-- /.collapse -->

    <div class="panel-collapse collapse spl-form-request-generic"
          id="spl-form-panel-request-dvd">
      <p>
        <button type="button" 
                class="btn btn-lg btn-block btn-primary"
                data-toggle="collapse"
                data-target="#spl-form-request-panel-choose">
                <i class="glyphicon glyphicon-film"></i> 
                DVD
                </button>
      </p>
    </div><!-- /.collapse -->

    <div class="panel-collapse collapse spl-form-request-generic"
          id="spl-form-panel-request-other">
      <p>
        <button type="button" 
                class="btn btn-lg btn-block btn-primary"
                data-toggle="collapse"
                data-target="#spl-form-request-panel-choose">
                <i class="glyphicon glyphicon-pencil"></i> 
                Other <small>(specify)</small>
                </button>
      </p>
    </div><!-- /.collapse -->

    <div class="panel-collapse collapse spl-form-request-specific"
          id="spl-form-panel-request-genealogy">
      <p>
        <button type="button" 
                class="btn btn-lg btn-block btn-default"
                data-toggle="collapse"
                data-target="#spl-form-request-panel-choose">
                Genealogy <small>(research copies)</small>
                </button>
      </p>
      <div class="panel panel-default"> 
        <div class="panel-body">
          My Request
        </div><!-- /.panel-body -->
      </div><!-- /.panel -->
    </div><!-- /.collapse -->

    <div class="panel-collapse collapse spl-form-request-specific"
          id="spl-form-panel-request-page-copy">
      <p>
        <button type="button" 
                class="btn btn-lg btn-block btn-default"
                data-toggle="collapse"
                data-target="#spl-form-request-panel-choose">
                Newspaper <small>(microfilm)</small>
                </button>
      </p>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            News request
          </h4>
        </div><!-- /.panel-heading -->  
        <div class="panel-body">
          My Request
        </div><!-- /.panel-body -->
      </div><!-- /.panel -->
    </div><!-- /.collapse -->

    <div class="panel-collapse collapse spl-form-request-specific"
          id="spl-form-panel-request-periodical">
      <p>
        <button type="button" 
                class="btn btn-lg btn-block btn-default"
                data-toggle="collapse"
                data-target="#spl-form-request-panel-choose">
                Magazine <small>or</small> Journal
                </button>
      </p>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            Mag request
          </h4>
        </div><!-- /.panel-heading -->  
        <div class="panel-body">
          My Request
        </div><!-- /.panel-body -->
      </div><!-- /.panel -->
    </div><!-- /.collapse -->

  </div><!-- /.panel - required here for bs3 -->
</div><!-- /.panel-group -->

<div class="panel-collapse collapse"
      id="spl-form-panel-request"> 
  <div class="panel panel-primary">
    <div class="panel-body">

      <div class="form-group">
        <label for="spl-form-title" class="col-sm-4 col-md-3 control-label">Requested Title</label>
        <div class="col-sm-8 col-md-9">
          <input type="text" class="form-control" id="spl-form-title" name="spl-form[title]" title="Don't forget to tell us the title you are looking for!">
        </div>
      </div>

      <div class="form-group">
        <label for="" class="col-sm-4 col-md-3 control-label">Search WorldCat</label>
        <div class="col-sm-8 col-md-9">
          <p>
            <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#spl-form-request-search">
              I would like to search for this title
              <span class="caret"></span>
            </button>
          </p>
          <div id="spl-form-request-search" class="collapse">
            <div class="well">
              Search box
            </div>
          </div>
        </div>
      </div>

      <div id="spl-form-request-submit-item" class="">
        Submit w/ hold &amp; ill (only for residents, etc.)
      </div>

      <div id="spl-form-request-submit-download" class="collapse">
        Submit only
      </div>

    </div><!-- /.panel-body -->
  </div><!-- /.panel -->
</div><!-- /.collapse -->

