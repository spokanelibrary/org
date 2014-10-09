
<div class="row-fluid">

  <div class="span6">
    <div class="alert alert-info">
      <p class="lead">
        <strong>Returning Users:</strong> IT Academy Login
      </p>
      <p>
      <a href="https://itacademy.microsoft.com?whr=uri:MicrosoftAccount"
        rel="external"
        class="btn btn-block btn-info"
        title="For returning users"
        ><strong>I have already signed up for Microsoft IT Academy</strong>
        <i class="icon-white icon-arrow-right"></i>
      </a>
      </p>
      <span class="help-block">
        Use this link <strong>only</strong> if you have <em>already</em> signed up.
      </span>
    </div>
  </div><!-- /.span -->
  <div class="span6">

    <form class="spl-form" style="background:transparent;" method="post" id="spl-form-it-academy" autocomplete="off">
      <div class="alert alert-success">
        <?php include 'common/crass-response.php'; ?>
        <input type="hidden" id="spl-form-id" name="spl-form[id]" value="it-academy" />
        <input type="hidden" 
              id="spl-form-ip" 
              name="spl-form[ip]" 
              value="<?php echo $_SERVER['REMOTE_ADDR']; ?>"
              />
        <?php
          $spl_network_source = spl_get_network_source($_SERVER['REMOTE_ADDR']);
          if ( 'external' == $spl_network_source ) :
            $reveal = 'hide';
        ?>
          <div id="spl-it-academy-login">
            <p class="lead">
              <strong>New Users:</strong> Login to get started
            </p>
            <?php include 'common/user-login.php'; ?>
          </div>
        <?php
          endif;
        ?>
        <div id="spl-it-academy-reveal" class="<?php echo $reveal; ?>">
          <div id="spl-it-academy-link">
            <p class="lead">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ajax-loader.gif" />
              Please wait&hellip;
            </p>
            <p>
              We are generating your IT Academy access code.
            </p>
          </div>
        </div>

      </div><!-- /.alert -->
    </form>

  </div><!-- /.span -->

</div><!-- /.row-fluid -->

<div class="row-fluid">

  <div class="span3">
    <p>
      <span class="">
        <img src="http://connect.spokanelibrary.org/hosted/img/mslogo.png" alt="MS Logo"/>
      </span>
    </p>
  </div><!-- /.span -->

  <div class="span9">

  </div><!-- /.span -->

</div><!-- /.row-fluid -->

<p class="lead">
<strong>
IT Academy:
</strong>
digital curriculum &amp; training on fundamental technology skills
</p>



<div class="row-fluid">
  <div class="span6">
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

  </div><!-- /.span -->

  <div class="span6">
    
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

  </div><!-- /.span -->

</div><!-- /.row-fluid -->

<div class="row-fluid">
  
  <div class="span12">
    <p class="lead">
      What are the system requirements to access these courses?
    </p>
  </div>

</div>

<div class="row-fluid">
  
  <div class="span6">
    <strong>If you are using a Library computer</strong>
    <p>
      Our computer management reservation system will only allow 60-minute sessions. 
      Your Windows Live ID is tied to the courses you select; if you need to continue beyond time allowed, the course will remember the point at which you finished, and you can resume at the same point when you log in again.
    </p>
    <p>
      <a href="http://www.spokanelibrary.org/index.php?page=internetreservations">Reserve a library computer in advance</a>
    </p>
  </div><!-- /.span -->

  <div class="span6">
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
  </div><!-- /.span -->

</div><!-- /.row-fluid -->

<hr />

<div class="row-fluid">
  
  <div class="span6">
    <p class="lead">
      What courses are available?
    </p>
    <p>
      <strong>Course topics include:</strong>
    </p>

    <div class="row-fluid">
      <div class="span4">
        <ul class="nav">
          <li class="nav-header">Server</li>
          <li>Windows Server</li>
          <li>Exchange Server</li>
          <li>Lync Server</li>
          <li>Sharepoint</li>
          <li>Virtualization</li>
          <li>System Center</li>
        </ul>
      </div><!-- /.span -->
      <div class="span4">
        <ul class="nav">
          <li class="nav-header">Desktop</li>
          <li>Windows</li>
          <li>Microsoft Dynamics</li>
        </ul>
      </div><!-- /.span -->
      <div class="span4">
        <ul class="nav">
          <li class="nav-header">Office</li>
          <li>Office</li>
          <li>Office 365</li>
        </ul>
      </div><!-- /.span -->
      <div class="span4">
        <ul class="nav">
          <li class="nav-header">Database</li>
          <li>SQL Server</li>
        </ul>
      </div><!-- /.span -->
      <div class="span4">
        <ul class="nav">
          <li class="nav-header">Developer</li>
          <li>Visual Studio</li>
          <li>Windows Azure</li>
          <li>Windows Phone</li>
        </ul>
      </div><!-- /.span -->
    </div><!-- /.row-fluid -->
  </div><!-- /.span -->

  <div class="span6">
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
  </div><!-- /.span -->

</div><!-- /.row-fluid -->




<div id="spl-network-source" data-source="<?php echo $spl_network_source; ?>"></div>

<script id="spl-it-academy-link-tmpl" type="text/x-handlebars-template">
  <p class="lead">
  <strong>New Users:</strong> IT Academy Registration
  </p>
  {{#each codes}}
    <p>
      <a href="https://itacademy.microsoft.com/AccessCodeRedemption/EnrollmentCode?whr=uri:MicrosoftAccount&key={{code}}"
      rel="external"
      class="btn btn-block btn-success"
      title="Microsoft IT Academy Login"
      ><strong>I would like to register for Microsoft IT Academy</strong>
      <i class="icon-white icon-arrow-right"></i>
      </a>
    </p>
  {{/each}}
  <span class="help-block">
    Use this link <strong>only</strong> if you have <em>not yet</em> signed up.
  </span>
</script>


<?php

//echo ucfirst(spl_get_network_source($_SERVER['REMOTE_ADDR']));
//echo $_SERVER['REMOTE_ADDR'];

function spl_get_network_source($ip=null) {
  $source = null;

  $ip = trim($ip);


  if ( strpos ($ip, '199.237.16') === 0 ) {
    $source = 'library'; // default
    if ( '199.237.16.1' == $ip ) {
      $source = 'minor'; // kids proxy
    } else {
      $source = 'public'; // dt public
    }
  } elseif ( strpos ($ip, '10.14') === 0 ) {
    $source = 'library'; // default
    if (strpos ($ip, '10.14.1') === 0) {
      if (strpos ($ip, '10.14.18') === 0) {
        $source = 'staff'; // hy staff
      } elseif (strpos ($ip, '10.14.19') === 0) {
        $source = 'so'; // public/staff combined
      } elseif (strpos ($ip, '10.14.118') === 0) {
        $source = 'hy'; // hy public
      } elseif (strpos ($ip, '10.14.121') === 0) {
        $source = 'es'; // es public
      } elseif (strpos ($ip, '10.14.122') === 0) {
        $source = 'sh'; // sh public
      } 
    } elseif (strpos ($ip, '10.14.2') === 0) {
      if (strpos ($ip, '10.14.200') === 0) {
        $source = 'wireless'; // all wireless networks
      } elseif (strpos ($ip, '10.14.21') === 0) {
        $source = 'staff'; // es staff
      } elseif (strpos ($ip, '10.14.22') === 0) {
        $source = 'staff'; // sh staff
      } elseif (strpos ($ip, '10.14.23') === 0) {
        $source = 'it'; // it public/staff combined
      } 
    } elseif (strpos ($ip, '10.14.5') === 0) {
      if (strpos ($ip, '10.14.50') === 0) {
        $source = 'staff';
      } elseif (strpos ($ip, '10.14.51') === 0) {
        $source = 'staff';
      }
    }
  }

  if ( is_null($source) || ('external' == $_REQUEST['rel']) ) {
    $source = 'external';
  }

  return $source;
}
  
?>