<!-- Intro Section -->
<section id="intro" class="intro-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Register/login Alerts -->
                <?php if($this->session->flashdata('registered')) : ?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <?php echo $this->session->flashdata('registered'); ?>
                    </div>
                <?php endif; ?>
                
                <?php if($this->session->flashdata('login_success')) : ?>
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <?php echo $this->session->flashdata('login_success'); ?>
                    </div>

                <?php elseif($this->session->flashdata('login_failed')) : ?>
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <?php echo $this->session->flashdata('login_failed'); ?>
                    </div>

                <?php endif; ?>

                <?php if($this->session->flashdata('noaccess')) : ?>
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <?php echo $this->session->flashdata('noaccess'); ?>
                    </div>
                <?php endif; ?>

                <h1 class="home-head">Welcome to AppShare</h1>
                <h2>a place for ideas to grow</h2>
                <a class="btn btn-default green-button-home" href="<?php echo base_url(); ?>explore">Explore</a>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2 class="black">About AppShare</h2>
                <p>AppShare is a place for people to share their ideas for mobile or web applications with the world!</p>
                <p>You don't have to be a fancy programmer or web genius to have the next brilliant idea for an app.
                    I'll bet even YOU at some point have thought "there should be an app for that" well, AppShare is just 
                    the place to share that next big idea. So what are you waiting for? Start exploring now!</p>
                <a class="btn btn-default btn-lg black-button" href="<?php echo base_url(); ?>explore">Start Exploring</a>
            </div>

            <div class="col-sm-6">
                <h2>Why AppShare?</h2>
                <p>There are endless reasons why you should join AppShare, but the best reason is too spread ideas world wide!</p>
                <p>Unless your a developer, it's pretty tough to create, test, and market your app. So why not just
                    share your idea with someone who can make it happen. You can also rate and comment on other peoples ideas to help them
                    fine tune their ideas, and people can do that same for you. So what are you waiting for? Get started today and join the club! </p>
                <a class="btn btn-default btn-lg black-button" href="<?php echo base_url(); ?>users/register">Sign Up</a>
            </div>
        </div>
    </div>
</section>


<!-- Slideshow Section -->
<section id="slideshow" class="slideshow-section">
    <div id="text-carousel" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="row">
            <div class="col-xs-offset-3 col-xs-6">
                <div class="carousel-inner">
        
                    <div class="item active">
                        <div class="carousel-content">
                            <div>
                                <h2 class="carousel-username"><h2>Joe K.</h2>
                                <p>"I love AppShare! Sometimes I will just browse the explore page to look at peoples crazy ideas, even though no idea is crazy."</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="carousel-content">
                            <div>
                                <h2 class="carousel-username">Paige L.</h2>
                                <p>"I had an idea for a mobile app, but im not a computer person. So I posted my idea on AppShare in hopes a developer would see it."</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="carousel-content">
                            <div>
                                <h2 class="carousel-username">Jeff P.</h2>                          
                                <p>"I think AppShare is a great place for creative people to share ideas and collaborate in a non greedy enviornment."</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Controls --> 
        <a class="left carousel-control" href="#text-carousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
     
        <a class="right carousel-control" href="#text-carousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</section>

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