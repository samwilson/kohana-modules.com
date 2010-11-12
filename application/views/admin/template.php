<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

  <title><?php echo HTML::chars($title) ?>Admin | KohanaModules.com</title>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />

  <link rel="stylesheet" href="/css/screen.css" type="text/css" media="screen, projection" />
  <link rel="stylesheet" href="/css/print.css" type="text/css" media="print" />
  <!--[if IE]>
    <link rel="stylesheet" href="/css/ie.css" type="text/css" media="screen, projection" />
  <![endif]-->
  <link rel="stylesheet" href="/css/admin.css" type="text/css" media="screen, projection" />

</head>

<body>

  <div class="container">
      
    <div id="header" class="span-24">
      <ul id="navigation">
          <li><a href="/admin/dashboard">Dashboard</a></li>
          <li class="active">
              <a href="/admin/modules">Modules</a>
              <ul>
                  <li><a href="/admin/modules/queue">Approval Queue</a></li>
                  <li><a href="/admin/modules/ignored">Ignored</a></li>
                  <li><a href="/admin/modules/pending_deletion">Pending Deletion</a></li>
              </ul>
          </li>
      </ul>
      
      <div id="site-links">
          Hello, andrew.hutchings@gmail.com |
          <a href="/">Visit Site</a> |
          <a href="/user/logout">Logout</a>
      </div>
      
      <ul id="breadcrumbs">
      </ul>
    </div><!-- end #header -->
    
    <div id="main" class="span-24">
        <?php echo $content ?>
    </div><!-- end #main -->

  </div> <!-- end .container -->

</body>
</html>