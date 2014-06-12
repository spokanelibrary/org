<?php
$spl_network_source = spl_get_network_source($_SERVER['REMOTE_ADDR']);
?>

<div class="row">
	<div class="col-sm-6">
		<div class="alert alert-info">
			<p class="lead">
				<b>Returning Users:</b> IT Academy Login
			</p>
			<p>
        <a href="https://itacademy.microsoft.com?whr=uri:MicrosoftAccount"
          rel="external"
          class="btn btn-block btn-info"
          title="For returning users"
          ><b>I have already signed up for Microsoft IT Academy</b>
          &rarr;</a>
      </p>
      <span class="help-block">
        Use this link <b>only</b> if you have <em>already</em> signed up.
      </span>
		</div><!-- ./alert -->
	</div><!-- ./col -->
	<div class="col-sm-6">
		<div class="alert alert-success" id="spl-it-academy-links">
      <b>Please wait</b>: loading registration&hellip;
    </div><!-- ./alert -->
	</div><!-- ./col -->
</div><!-- ./row -->

<div id="spl-network-source" data-source="<?php echo $spl_network_source; ?>"></div>
<script id="spl-it-academy-link-tmpl" type="text/x-handlebars-template">
  <p class="lead">
    <b>New Users:</b> IT Academy Registration
  </p>
  {{#with msit}}
    {{#if login}}
        <p>
        <button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#spl-login-modal">
          <i class="glyphicon glyphicon-user"></i>
          <b>Login to My Account &rarr;</b>
        </button>
        </p>
        <span class="help-block">Login to your Library account to get started.</span>

    {{else}}
      {{#each codes}}
        <p>
          <a href="https://itacademy.microsoft.com/AccessCodeRedemption/EnrollmentCode?whr=uri:MicrosoftAccount&key={{code}}"
          rel="external"
          class="btn btn-block btn-success"
          title="Microsoft IT Academy Login"
          ><b>I would like to register for Microsoft IT Academy &rarr;</b>
          </a>
        </p>
      {{/each}}
      <span class="help-block">
        Use this link <strong>only</strong> if you have <em>not yet</em> signed up.
      </span>
    {{/if}}
  {{/with}}
</script>

<!-- END REGISTRATION -->

<img src="/assets/img/logos/mslogo.png" alt="MS Logo"/>

<p class="lead">
  <b>IT Academy:</b>
  digital curriculum &amp; training on fundamental technology skills
</p>

<div class="row">
  <div class="col-sm-6">
    <blockquote>
      <p>
        <em>Microsoft IT Academy</em> provides libraries and their patrons access to online courseware for technology training at <strong class="text-success">no cost</strong>.
      </p>
      <p>
      Courses cover a variety of Microsoft products and skill levels &ndash; ranging from beginner users to advanced technical courses that qualify for Microsoft Certification testing.
      </p>
    </blockquote>
    <p class="lead">
      How do I access IT Academy?
    </p>
    <p>
      Register for IT Academy using the <strong class="text-success">New Users</strong> link at the top of this page.
      Follow the instructions provided at IT Academy to select courses that interest you.
    </p>
    <p>
      <a href="http://www.spokanelibrary.org/pdf/Patron-Steps-ITA-Online-Learning-via-Enrollment-Link.pdf"
        class="btn btn-warning"><strong>More detailed instructions</strong> (.pdf)
        <i class="icon-white icon-arrow-right"></i>
      </a>
    </p>
    <p>
      The IT Academy Help page also provides instructions for registering and accessing your courses, as well as answers to many frequently asked questions.
    </p>
    <p>
      <a href="http://itacademy.microsoft.com/home/help"
        class="btn btn-warning"><strong>Read the IT Academy Help page</strong>
        <i class="icon-white icon-arrow-right"></i>
      </a>
    </p>
  </div><!-- ./col -->
  <div class="col-sm-6">
    <p class="lead">
      What will I need to get started?
    </p>

    <ul>  
      <li>
        <strong>A <em>valid</em> <a href="http://www.spokanelibrary.org/librarycards">Spokane Public Library card number</a> and PIN</strong>
      </li>  
      <li>
        <strong>A personal email account</strong>
        <br />
        <a href="https://signup.live.com">Create a new Microsoft email account</a> or you can use an address you already have as your Microsoft username. 
        You will need an email address to create a Microsoft Windows Live ID.
      </li>  
      <li>
        <strong>A Windows Live ID</strong>
        <br />
        <a href="http://windows.microsoft.com/en-us/windows-live/sign-up-create-account-how">Obtain a Windows Live ID.</a>
      </li> 
      <li>
        <strong>Headphones or earphones</strong> (in the Library)
        <br />
        Please be courteous when accessing courses with sound from inside the Library.
      </li>
    </ul>

    <div class="well well-small">
      <span class="help-block">
        <strong class="text-error">Did you know:</strong>
        <a href="http://www.microsoft.com/about/corporatecitizenship/citizenship/giving/programs/up/digitalliteracy/default.mspx"><strong>Microsoft's Digital Literacy program</strong></a> 
        has easy multimedia courses on computer basics, the Internet, and online safety &ndash; no sign-in required.
        If you are new to using computers you may wish to start here and return to IT Academy later.
      </span>
    </div>

    <p class="lead">
      What if I don't have a library card?
    </p>

    <p>
      If you are a Washington state resident, but do not have a valid library card, you can still <a href="http://www.sos.wa.gov/library/libraries/projects/ita/info.aspx">sign up through the State Library</a>.
    </p>
  </div><!-- ./col -->
</div><!-- ./row -->

<p class="lead">
  What are the system requirements to access these courses?
</p>

<div class="row">
  <div class="col-sm-6">
    <strong>If you are using a Library computer</strong>
    <p>
      Our computer management reservation system will only allow 60-minute sessions. 
      Your Windows Live ID is tied to the courses you select; if you need to continue beyond time allowed, the course will remember the point at which you finished, and you can resume at the same point when you log in again.
    </p>
    <p>
      <a href="http://www.spokanelibrary.org/index.php?page=internetreservations">Reserve a library computer in advance</a>
    </p>
  </div><!-- ./col -->
  <div class="col-sm-6">
    <strong>If you are taking the courses at home</strong>
    <p>
      Please make sure your computer complies with Microsoft’s requirements for these courses. 
      Each course has its own set of system requirements you can view to ensure your system meets the minimum requirements to play the course.
      <!--      
      <br />
      <a href="http://itacademy.microsoftelearning.com/help/systemRequirements.aspx">See the requirements</a>
      -->
    </p>
    <ul>
      <li>Once you have located a course of interest, click the course title.</li>
      <li>On the resulting course detail page, click System requirements.</li>
    </ul>
  </div><!-- ./col -->
</div><!-- ./row -->

<div class="row">
  <div class="col-sm-6">
    <p class="lead">
      What courses are available?
    </p>
    <p>
      <strong>Course topics include:</strong>
    </p>

    <div class="row">
      <div class="col-sm-4">
        <ul class="nav">
          <li class="nav-header">Server</li>
          <li>Windows Server</li>
          <li>Exchange Server</li>
          <li>Lync Server</li>
          <li>Sharepoint</li>
          <li>Virtualization</li>
          <li>System Center</li>
        </ul>
      </div><!-- /.col -->
      <div class="col-sm-4">
        <ul class="list-unstyled">
          <li><b>Desktop</b></li>
          <li>Windows</li>
          <li>Microsoft Dynamics</li>
        </ul>
      </div><!-- /.col -->
      <div class="col-sm-4">
        <ul class="nav">
          <li class="nav-header">Office</li>
          <li>Office</li>
          <li>Office 365</li>
        </ul>
      </div><!-- /.col -->
      <div class="col-sm-4">
        <ul class="nav">
          <li class="nav-header">Database</li>
          <li>SQL Server</li>
        </ul>
      </div><!-- /.col -->
      <div class="col-sm-4">
        <ul class="nav">
          <li class="nav-header">Developer</li>
          <li>Visual Studio</li>
          <li>Windows Azure</li>
          <li>Windows Phone</li>
        </ul>
      </div><!-- /.col -->
    </div><!-- /.row -->

  </div><!-- ./col -->
  <div class="col-sm-6">
    <p class="lead">
      Certifications &amp; Test Centers
    </p>
    <p>
      IT Academy training courses will prepare you for certification in several areas, including:
    </p>
    <ul>
      <li>MOS Certification</li>
      <li>MTA (Microsoft Technology Associate)</li>
      <li>MCP (Microsoft Certified Professional) </li>
    </ul>
    <p>
      Once you have completed your courses, you can apply for Microsoft Certification testing. 
      You will be responsible for any costs associated with testing.
      The following locators give test locations for particular courses:
    </p>
    <p>
      <a href="http://www.certiport.com/Locator">Certiport testing locator</a>
      (for academic outlets) 
      <br />
      <a href="http://www.register.prometric.com/Index.asp?tcl=1">Prometric testing locator</a>
      (for commercial outlets)
    </p>
  </div><!-- ./col -->
</div><!-- ./row -->
