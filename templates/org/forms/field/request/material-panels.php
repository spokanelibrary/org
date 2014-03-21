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
      <!-- title -->
      <div class="form-group">
        <label for="spl-form-title" class="col-sm-4 col-md-3 control-label"><span class="text-danger">*</span> Requested Title</label>
        <div class="col-sm-8 col-md-9">
          <input type="text" class="form-control required" id="spl-form-title" name="spl-form[title]" title="Don't forget to tell us the title you are looking for!">
        </div>
      </div>
      <!-- author -->
      <div class="form-group">
        <label for="spl-form-author" class="col-sm-4 col-md-3 control-label">Author or Artist</label>
        <div class="col-sm-8 col-md-9">
          <input type="text" class="form-control" id="spl-form-author" name="spl-form[author]">
        </div>
      </div>
      <!-- url -->
      <div class="form-group">
        <label for="spl-form-url" class="col-sm-4 col-md-3 control-label">Link on the Web</label>
        <div class="col-sm-8 col-md-9">
          <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#spl-form-request-link">
            I have a link to this title
            <span class="caret"></span>
          </button>
          <div id="spl-form-request-link" class="collapse">
            <p class="form-control-static">
              You can just send us a link with detailed information about this title (for example, on Amazon).
            </p>
            <input type="text" class="form-control" id="spl-form-url" name="spl-form[url]">
            <span class="help-block">
              <b>Note:</b> The page you link to must contain enough information for us to clearly identify the item you are requesting. 
              Otherwise we may not be able to process your request. 
            </span>
          </div>
        </div>
      </div>
      <!-- search -->
      <div class="form-group">
        <label for="" class="col-sm-4 col-md-3 control-label">Search WorldCat</label>
        <div class="col-sm-8 col-md-9">
          <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#spl-form-request-search">
            I would like to search for this title
            <span class="caret"></span>
          </button>
          <div id="spl-form-request-search" class="collapse">
            <div class="well">
              Search box
            </div>
          </div>
        </div>
      </div>
      <!-- message -->
      <div class="form-group">
        <label for="spl-form-message" class="col-sm-4 col-md-3 control-label">Comment or Question</label>
        <div class="col-sm-8 col-md-9">
          <p class="form-control-static">
            How did you hear about this title?
          </p>
          <textarea rows="4" class="form-control required" id="spl-form-message" name="spl-form[message]"></textarea>
        </div>
      </div>
      <!-- publisher/pubdate-->
      <div class="row">
        <div class="col-sm-6">
          <label for="spl-form-publisher" class="control-label">Publisher</label>
          <input type="text" class="form-control" id="spl-form-publisher" name="spl-form[publisher]">
        </div>
        <div class="col-sm-6">
          <label for="spl-form-pubdate" class="control-label">Publication Date</label>
          <input type="text" class="form-control" id="spl-form-pubdate" name="spl-form[pubdate]">
        </div>
      </div>
      <!-- isbn/oclc -->
      <div class="row">
        <div class="col-sm-6">
          <label for="spl-form-isbn" class="control-label">ISBN / ISSN</label>
          <input type="text" class="form-control" id="spl-form-isbn" name="spl-form[isbn]">
        </div>
        <div class="col-sm-6">
          <label for="spl-form-oclc" class="control-label">OCLC #</label>
          <input type="text" class="form-control" id="spl-form-oclc" name="spl-form[oclc]">
        </div>
      </div>
      <!-- content/age -->
      <div class="row">
        <div class="col-sm-6">
          <label for="spl-form-content" class="control-label">Content</label>
          <select class="form-control" name="spl-form[content]" id="spl-form-content">
            <option value="">Optional...</option>
            <option value="fiction">Fiction</option>
            <option value="non-fiction">Non-Fiction</option>
          </select>
        </div>
        <div class="col-sm-6">
          <label for="spl-form-audience" class="control-label">Age Group</label>
          <select class="form-control" name="spl-form[audience]" id="spl-form-audience">
            <option value="">Optional...</option>
            <option value="adult">Adult</option>
            <option value="yount-adult">Young Adult</option>
            <option value="juvenile">Juvenile</option>
          </select>
        </div>
      </div>


      <br>
      <br>


      <div id="spl-form-request-submit-item" class="">
        Submit w/ hold &amp; ill (only for residents, etc.)
      </div>

      <div id="spl-form-request-submit-download" class="collapse">
        Submit only
      </div>

    </div><!-- /.panel-body -->
  </div><!-- /.panel -->
</div><!-- /.collapse -->

