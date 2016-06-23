<body class="dark-body">
<section class="">
        <div class="container">
            <h1 class="join-head">Become A Member Today!</h1>
            <h3 class="join-head"><span class="light-grey">Fill Out Your Information Below</span></h3>
            <div class="row">

<?php echo validation_errors('<p class="alert alert-dismissible alert-danger">'); ?>
<?php echo form_open('users/register'); ?>

<div class="form-group col-md-6">
<p><span class="green">*</span> <span class="light-grey">Indicates required field.</span></p>
	<?php echo form_label('First Name <span class="green">*</span>'); ?>
	<?php
	$data = array('name'		=>	'first_name',
				  'class'		=>	'form-control',
				  'value'		=>	set_value('first_name'),
				  'required' 	=> 'required'
				  );
	?>
	<?php echo form_input($data); ?>

<br>

	<?php echo form_label('Last Name <span class="green">*</span>'); ?>
	<?php
	$data = array('name'		=>	'last_name',
				  'class'		=>	'form-control',
				  'value'		=>	set_value('last_name'),
				  'required' 	=> 'required'
				  );
	?>
	<?php echo form_input($data); ?>

<br>

	<?php echo form_label('Email <span class="green">*</span>'); ?>
	<?php
	$data = array('name'		=>	'email',
				  'class'		=>	'form-control',
				  'value'		=>	set_value('email'),
				  'required' 	=> 'required'
				  );
	?>
	<?php echo form_input($data); ?>

<br>

	<?php echo form_label('Username <span class="green">*</span>'); ?>
	<?php
	$data = array('name'		=>	'username',
				  'class'		=>	'form-control',
				  'value'		=>	set_value('username'),
				  'required' 	=> 'required'
				  );
	?>
	<?php echo form_input($data); ?>

<br>

	<?php echo form_label('Password <span class="green">*</span>'); ?>
	<?php
	$data = array('name'		=>	'password',
				  'class'		=>	'form-control',
				  'value'		=>	set_value('password'),
				  'required' 	=> 'required'
				  );
	?>
	<?php echo form_password($data); ?>

<br>

	<?php echo form_label('Confirm Password <span class="green">*</span>'); ?>
	<?php
	$data = array('name'		=>	'password2',
				  'class'		=>	'form-control',
				  'value'		=>	set_value('password2'),
				  'required' 	=> 'required'
				  );
	?>
	<?php echo form_password($data); ?>

<br>

	<?php
	$data = array('name'	=>	'submit',
				  'class'	=>	'btn btn-default green-button',
				  'value'	=>	'Join Now!');
	?>
	<?php echo form_submit($data); ?>

</div>
<?php echo form_close(); ?>

<div class="col-sm-6">
                    <h2 class="green">Member Benefits</h2>
                    <p class="white">The Benefits of becoming an appshare member are endless. By becoming a member you can start creating your app ideas and storing them on our site.
                    	When you sign up you are given your own personal dashboard where you can add, edit, and delete your ideas. As well as view all of your existing app ideas all in one convienient spot.</p>
                    <p class="white">When you become a member of the AppShare club you are doing more than just registering for a website, you are now part of a club that
                    	is helping create and spread new and exciting ideas with everyone around the world. Join now to start sharing your ideas with the world and be part of the AppShare club!</p>

                    <img src="<?php echo base_url(); ?>assets/img/logo.png" class="img-responsive join-logo" alt="AppShare Logo">
                </div>
            </div>
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
<!-- /.body-dark -->
</body>