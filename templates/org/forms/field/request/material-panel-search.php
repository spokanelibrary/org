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
      <div class="well" style="margin-bottom:0;">
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
          </div><!-- /.col -->
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
          </div><!-- /.col -->
        </div><!-- /.row -->
        <span class="help-block">
          We want to respond to your request as quickly and accurately as possible. 
          You can search for a keyword (or title, author, subject, etc.) in <a href="http://www.worldcat.org/" title="WorldCat">WorldCat</a>, the world's largest bibliographic database. 
          If you find the title you are looking for press Select and we will automatically fill out the author, ISBN, and more.
          If you do not find the title you are looking for, try an <a href="http://www.worldcat.org/advancedsearch" title="Advanced WorldCat Search">Advanced WorldCat Search</a>.
        </span>
        <div id="spl-form-request-holding"></div>
      </div><!-- /.well -->
    </div><!-- /.collapse -->
  </div><!-- /.col -->
</div><!-- /.form-group -->