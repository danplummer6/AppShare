<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <meta name="description" content="Appshare is place for anyone to share and view ideas for web or mobile applications. You can find ideas for an app, or submit your own idea for an app.">
    
    <title>AppShare | Find, share, and create ideas for web and mobile applications</title>

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Ubuntu:400,500,700' rel='stylesheet' type='text/css'>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    
    <!-- Custom css -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" />


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>home">
                    <img src="<?php echo base_url(); ?>assets/img/nav-logo.png" alt="AppShare Logo">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?php echo base_url(); ?>home">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>about">About</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>explore">Explore</a>
                    </li>
                    <?php if(!$this->session->userdata('logged_in')) : ?>
                    <li>
                        <a href="<?php echo base_url(); ?>users/register">Sign Up</a>
                    </li>
                    <?php endif; ?>

                    <?php if($this->session->userdata('logged_in')) : ?>
                    <li>
                        <a href="<?php echo base_url(); ?>apps">My Apps</a>
                    </li>
                    <?php endif; ?>
                </ul>
                
                <!-- Navbar Right Login/Logout -->
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <?php if($this->session->userdata('logged_in')) : ?>
                        <p class="navbar-text pull-right nav-username"><span class="green">Hello,</span> <span class="light-grey"><?php echo $this->session->userdata('username'); ?></span></p>
                    <li>
                        <a href="<?php echo base_url(); ?>users/logout">logout</a>
                    </li>
                        <?php else : ?>
                    </li>
                    <li>
                        <a href="#" data-toggle="modal" data-target="#myModal">Login</a>
                        <?php endif; ?>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Login Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="modal-x">&times;</span></button>
            <h1 class="modal-title" id="myModalLabel" align="center">Welcome Back!</h1>
          </div>
          <div class="modal-body">
            <!-- Login Form -->
            <br>
            <?php $this->load->view('users/login'); ?>
            <br>  
        </div>
          <div class="modal-footer">
            <h3>Not a Member?</h3>
            <h4 id="modal-cta">Become One Today</h4>
            <a class="btn btn-default green-button" href="<?php echo base_url(); ?>users/register">Join Now!</a>
            <br>
            <br>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Main Content -->

    <?php $this->load->view($main_content); ?>

    <!-- Google Analytics Tracking Script -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-76694543-1', 'auto');
      ga('send', 'pageview');

    </script>

    <!-- UserSnap Feedback Script -->
    <script type="text/javascript">
        (function() {
        var s = document.createElement("script");
        s.type = "text/javascript";
        s.async = true;
        s.src = '//api.usersnap.com/load/'+
                '6e35db43-b1bb-4a37-bc6a-6358564603f6.js';
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
        })();
    </script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>