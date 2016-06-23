<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>AppShare | Explore</title>

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

<!-- facebook sdk for commenting -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=1751195795164219";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- facebook Share -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=1751195795164219";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

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
    <div class="explore-banner">
      <h1 align="center">Explore</h1>
    </div>

    <div class="container">
    
      <?php foreach($apps as $app){?>
      <div class="col-md-6 explore-app">
        <h3><u><?php echo $app->app_name;?></u></h3>
        <p><?php echo $app->app_body;?></p>

        <h4>Rating</h4>
        <div class="rw-ui-container" data-urid="<?php echo $app->id;?>"></div>
        <br>
        <br>
        <div class="fb-share-button" data-href="http://localhost:8888/appshare2/<?php echo $app->id;?>" data-layout="button_count" data-mobile-iframe="true"></div>
        <br>
        <div class="fb-comments" data-href="http://localhost:8888/appshare2/<?php echo $app->id;?>" data-numposts="1" width="100%"></div>
      </div>
         
     <?php }?>  
    </div>

    <!-- Footer -->
<footer>
    <div class="row">
        <div class="col-lg-12 foot">
            <a href="https://twitter.com/" target='_blank' class="icon-button twitter"><i class="fa fa-twitter"></i><span></span></a>
            
            <a href="https://facebook.com" target='_blank' class="icon-button facebook"><i class="fa fa-facebook"></i><span></span></a>
            
            <a href="https://www.instagram.com/" target='_blank' class="icon-button instagram"><i class="fa fa-instagram"></i><span></span></a>
            
            <p class="footer-text">Made with <i class="fa fa-heart" aria-hidden="true"></i> by DNP Design Company</p>

            <p class="footer-text">Copyright &copy; AppShare 2016</p>
        </div>
    </div>
    <!-- /.row -->
</footer>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

    <script src="assets/js/comment.js"></script>

    <script type="text/javascript">(function(d, t, e, m){
    
    // Async Rating-Widget initialization.
    window.RW_Async_Init = function(){
                
        RW.init({
            huid: "309363",
            uid: "16e2adbcb6055488fdb93e7f31e5d10b",
            source: "website",
            options: {
                "advanced": {
                    "font": {
                        "size": "18px"
                    },
                    "text": {
                        "rateAwful": "",
                        "ratePoor": "",
                        "rateAverage": "",
                        "rateGood": "",
                        "rateExcellent": "",
                        "rateThis": "Rate This App"
                    }
                },
                "size": "medium",
                "style": "gray",
                "isDummy": false
            } 
        });
        RW.render();
    };
        // Append Rating-Widget JavaScript library.
    var rw, s = d.getElementsByTagName(e)[0], id = "rw-js",
        l = d.location, ck = "Y" + t.getFullYear() + 
        "M" + t.getMonth() + "D" + t.getDate(), p = l.protocol,
        f = ((l.search.indexOf("DBG=") > -1) ? "" : ".min"),
        a = ("https:" == p ? "secure." + m + "js/" : "js." + m);
    if (d.getElementById(id)) return;              
    rw = d.createElement(e);
    rw.id = id; rw.async = true; rw.type = "text/javascript";
    rw.src = p + "//" + a + "external" + f + ".js?ck=" + ck;
    s.parentNode.insertBefore(rw, s);
    }(document, new Date(), "script", "rating-widget.com/"));</script>



  </body>
</html>