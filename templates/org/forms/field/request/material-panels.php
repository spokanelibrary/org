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
        <div class="panel-footer">
          Submit, ILL Policy
        </div><!-- /.panel-footer -->
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
        <div class="panel-footer">
          Submit, ILL Policy
        </div><!-- /.panel-footer -->
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
        <div class="panel-footer">
          Submit, ILL Policy
        </div><!-- /.panel-footer -->
      </div><!-- /.panel -->
    </div><!-- /.collapse -->

  </div><!-- /.panel - required here for bs3 -->
</div><!-- /.panel-group -->

<div class="panel-collapse collapse"
      id="spl-form-panel-request"> 
  <!-- <div class="panel panel-primary">-->
    <!-- <div class="panel-body">-->
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
          <p class="form-control-static">
            You can send us a link with detailed information about this title (for example, on Amazon).
          </p>
          <input type="text" class="form-control" id="spl-form-url" name="spl-form[url]">
          <span class="help-block">
            <b>Note:</b> The page you link to must contain enough information for us to clearly identify the item you are requesting. 
            Otherwise we may not be able to process your request. 
          </span>
        </div>
      </div>
      <!-- search -->
      <div class="form-group">
        <label for="" class="col-sm-4 col-md-3 control-label">Search WorldCat</label>
        <div class="col-sm-8 col-md-9">
          <p>
            <button type="button" class="btn btn-block btn-default" data-toggle="collapse" data-target="#spl-form-request-search">
              <strong class="text-success">I would like to search for this title</strong>
              <span class="caret"></span>
            </button>
          </p>
          <div id="spl-form-request-search" class="collapse">
            <div class="well">
            <div class="input-group">
              <input type="text" class="form-control" id="spl-form-search" name="spl-form[search]" title="Don't forget to enter a search term!">
              <span class="input-group-btn">
                <button type="button" class="btn btn-success" id="spl-form-oclc-search">
                  <small class="glyphicon glyphicon-search hidden-xs"></small>
                  Search
                </button>
              </span>
            </div><!-- /input-group -->
            <div class="row">
              <div class="col-md-6">
                <label for="spl-form-search-index" class="control-label">Search For:</label>
                <select class="form-control" name="spl-form[search-index]" id="spl-form-search-index">
                  <option value="kw" selected="">Keyword</option>
                  <option value="ti">Title</option>
                  <option value="au">Author</option>
                  <option value="se">Series</option>
                  <option value="su">Subject</option>
                </select>
              </div><!-- /.row -->
              <div class="col-md-6">
                <label for="spl-form-search-sort" class="control-label">Sort By:</label>
                <select class="form-control" name="spl-form[search-sort]" id="spl-form-search-sort">
                  <option value="relevance" selected="">Relevance</option>
                  <option value="LibraryCount,,0">Library Count</option>
                  <option value="Author">Author</option>
                  <option value="Title">Title</option>
                  <option value="Date,,0">Pub. Date (Newest First)</option>
                  <option value="Date">Pub. Date (Oldest First)</option>
                  <!--
                  <option value="LibraryCount">Library Count (Fewest First)</option>
                  <option value="Score">Score Ascending</option>
                  <option value="Score,,0">Score Descending</option>
                  -->
                </select>
              </div><!-- /.row -->
            </div><!-- /.row -->
            <span class="help-block">
              We want to respond to your request as quickly and accurately as possible. 
              You can search for a keyword (or title, author, subject, etc.) in <a href="http://www.worldcat.org/" title="WorldCat">WorldCat</a>, the world's largest bibliographic database. 
              If you find the title you are looking for press Select and we will automatically fill out the author, ISBN, and more.
              If you do not find the title you are looking for, try an <a href="http://www.worldcat.org/advancedsearch" title="Advanced WorldCat Search">Advanced WorldCat Search</a>.
            </span>
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
      <p class="lead">
        Any additional information you can provide helps us expedite your request:
      </p>
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

        <?php
        switch ( $_SESSION['spl']['user']->borrowerType ) {
          case 'sr':
          case 'c':
          case 'in':
          case 'ol':
            //echo 'you cannot ill';
          break;
          default:
            //echo 'you can ill';
          break;
        }
        ?>

      </div>

      <div id="spl-form-request-submit-download" class="collapse">
        Submit only (no hold or ill)
      </div>

    <!-- </div>--><!-- /.panel-body -->
  <!-- </div>--><!-- /.panel -->
</div><!-- /.collapse -->


<!-- oclc modal -->
<div class="modal fade" id="spl-form-oclc-result" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <div class="alert alert-info">
          Searching&hellip;
        </div>
      </div>
    </div>
  </div>

</div><!-- /.modal -->

  <div class="modal-dialog collapse">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>Modal body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->


