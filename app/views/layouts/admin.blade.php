<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="/themes/bootphp/css/bootphp.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="/assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="/assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="/assets/ico/favicon.png">
  </head>

  <body>

<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a href="/admin" class="brand">Bootphp <span class='label label-success'>Beta</span></a>
          <div class="nav-collapse">
            <ul class="nav boot-mainmenu">
              <li><a href="/admin">Dashboard</a></li>
              <li><a href="/admin/users">Users</a></li>
              <li><a href="/admin/posts">Posts</a></li>
            </ul>
            <?php if(Auth::guest()){ ?>
            <form class="navbar-form pull-right" action="/api/login" method="POST">
              <input class="span2" type="hidden" name="redir" value="{{ $redir }}">
              <input class="span2" type="text" name="username" placeholder="Email">
              <input class="span2" type="password" name="password" placeholder="Password">
              <button type="submit" class="btn">Sign in</button>
            </form>
            <?php }else{ ?>
            <ul class="nav pull-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class='icon-user'></i> jaequery@gmail.com <b class='caret'></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="/admin/profile">My Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="/api/logout" data-method="delete" rel="nofollow">Sign Out</a></li>
                  </ul>
                </li>
            </ul>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>

    <div class="container">

      <?php echo $content; ?>

      <hr>

      <footer>
        <p>&copy; Bootphp CMS 2013</p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.0.5/angular.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
    <script src="/assets/js/admin.js"></script>
  </body>
</html>
