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
              <div id="spl-form-request-holding"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- message -->
      <div class="form-group">
        <label for="spl-form-message" class="col-sm-4 col-md-3 control-label">Comments or Questions</label>
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


      <div id="spl-form-request-submit-item" class="collapse">
        Submit w/ hold &amp; ill (only for residents, etc.)

        <?php
        /*
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
        */
        ?>

      </div>

      <div id="spl-form-request-submit-download" class="collapse">
        Submit only (no hold or ill)
      </div>

    <!-- </div>--><!-- /.panel-body -->
  <!-- </div>--><!-- /.panel -->
</div><!-- /.collapse -->

<!-- tmpl target: request-submit -->
<div id="spl-form-request-submit"></div>

<!-- tmpl target: oclc modal -->
<div class="modal fade" id="spl-form-oclc-result" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
</div><!-- /.modal -->

<!-- tmpl: submit -->
<script id="spl-form-request-submit-tmpl" type="text/x-handlebars-template">
  This is a submit form: {{id}}
</script>

<!-- tmpl: oclc search loading -->
<script id="oclc-search-tmpl" type="text/x-handlebars-template">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">
          <i class="glyphicon glyphicon-search"></i>
          WorldCat Search
        </h4>
      </div>
      <div class="modal-body">
        <p class="lead">
          <img src="/assets/img/ajax-loader.gif">
          Please wait&hellip;
        </p>
        <p>
          Search Term: <em>{{term}}</em>
        </p>
      </div>
    </div>
  </div>
</script>

<!-- tmpl: oclc holding found -->
<script id="spl-form-request-holding-tmpl" type="text/x-handlebars-template">
  <div class="alert alert-warning">
    <!--
    <button type="button" class="close" data-dismiss="alert">×</button>
    -->
    <h5>Wait just a minute&hellip;</h5>
    <p>
      It looks like we have that item in our catalog. 
      <br />
      We would really appreciate it if you could <a rel="external" href="http://search.spokanelibrary.org/isbn/{{isbn}}">check this link</a> before proceeding.
    </p>
    <p>
      <em>Thanks!</em>
    </p>
  </div><!-- /.alert -->
  <input type="hidden" id="spl-form-holding" name="spl-form[holding]" value="true" /> 
</script>

<!-- tmpl: oclc search results -->
<script id="oclc-results-tmpl" type="text/x-handlebars-template">
  <div class="modal-dialog">
    <div class="modal-content">
    {{#unless entry}}
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title text-danger">
          <i class="glyphicon glyphicon-exclamation-sign"></i>
          No results found
        </h3>
      </div>
      <div class="modal-body">
        <p class="lead">
          Maybe try another search?
        </p>  
        <p>
          If you are not having any luck using this search tool just fill out whatever you know about the title you are looking for.
          We apologize for the inconvenience.
        </p>
      </div>
      <div class="modal-footer">
        <p class="text-center">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </p>
      </div>
    {{else}}
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3 class="modal-title">{{title}}: <small>{{totalResults}} <em>results for</em> {{subtitle}}</small></h3>
      </div>
      <div class="modal-body">
        <p>
          Press the <span class="text-success"><i class="glyphicon glyphicon-check"></i> <strong>Select</strong></span> button to choose a title.
        </p>
        <p>
          <a class="prevent-default" data-toggle="collapse" href="#" data-target="#oclc-explain">
            What if I am not sure or the title appears more than once? 
          </a>
        </p>        
        <div id="oclc-explain" class="collapse">
          <p>
            No problem! 
            If you don't see what you're looking for <a href="#" data-dismiss="modal"><strong>close</strong></a> this dialog window and you can fill in the details you know or search for something else.
          </p>
          <p>
            If you find a title with multiple entries just pick one.
            Tell us what you know.
            We can take it from there.
          </p>
        </div>

        {{#each entry}}
        <div class="panel panel-primary" style="border-left-width:5px;">
          <div class="panel-body">
            <p class="lead">{{title}} 
              {{#if subtitle}}<small class="text-muted">{{subtitle}}</small>{{/if}}
            </p>
            <div class='row'>
              <div class="col-sm-8">
                
                <p>
                  <strong>{{author}}</strong>
                </p>

                <p>
                  <button type="button" class="btn btn-success oclc-select" 
                      data-dismiss="modal" 
                      data-ocn="{{oclc}}"
                      data-canonical="{{canonical}}" 
                      data-title="{{title}}" 
                      data-author="{{author}}"
                      data-publisher="{{publisher}}"
                      data-pubdate="{{pubdate}}" 
                      >
                    <i class="glyphicon glyphicon-check"></i> 
                    Select
                  </button>
                </p>

                <p>
                  {{#if publisher}}
                    {{publisher}}
                    <br />
                  {{/if}}

                  {{#if format}}
                    <em>{{format}}</em>
                  {{/if}}
                </p>

                {{#if language}}
                  <p>    
                    <small>{{language}}</small>
                  </p>
                {{/if}}

                {{#if summary}}
                  <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#summary-{{oclc}}">
                    <span class="caret"></span>
                    Read Summary&hellip;  
                  </button>
                {{/if}}

              </div>
              <div class="col-sm-4">
                {{#if canonical}}
                <img class="img-responsive img-rounded" style="max-height:120px; margin:auto;" alt="Cover Image" src="http://contentcafe2.btol.com/ContentCafe/jacket.aspx?UserID=ebsco-test&Password=ebsco-test&Return=T&Type=S&Value={{canonical}}">
                {{/if}}
              </div>
            </div>
            
            {{#if summary}}
              <div id="summary-{{oclc}}" class="collapse">
                <p>
                {{summary}}
                </p>
              </div>
            {{/if}}

          </div>
        </div>
        {{/each}}
      </div>
      <div class="modal-footer">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <div class="text-center">
          <ul class="pagination" style="margin:0;">
            <li {{#compare startIndex 1}}class="disabled"{{/compare}}>
              <a class="paginate-index" data-start-index="{{subtract startIndex 1}}" href="#">&larr; Prev <span class="hidden-xs">{{itemsPerPage}}</span></a>
            </li>
            <li class="active">
              <a class="paginate-index" data-start-index="{{startIndex}}" href="#"><span class="hidden-xs">Page</span> {{startIndex}}</a>
            </li>
            <li>
              <a class="paginate-index" data-start-index="{{add startIndex 1}}" href="#">Next <span class="hidden-xs">{{itemsPerPage}}</span> &rarr;</a>
            </li>
          </ul>
        </div>
      </div>
    {{/unless}}
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</script>
