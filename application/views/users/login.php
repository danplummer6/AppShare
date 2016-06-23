<!-- if session exists, display below -->
<?php if($this->session->userdata('logged_in')) : ?>
    <p>Hello, <?php echo $this->session->userdata('username'); ?></p>
    
    <!-- Log Out -->
    <?php $attributes = array('id' => 'logout_form'); ?>
    <?php echo form_open('users/logout',$attributes); ?>
    
    <!--Logout Button-->
    <?php $data = array( "value" => "Logout",
                    	   "name" => "submit",
                    	   "class" => "btn btn-primary"); ?>
    <?php echo form_submit($data); ?>
    <?php echo form_close(); ?>
<?php else : ?>

<!-- Start login Form -->
<?php $attributes = array('id' => 'login-form'); ?>
<?php echo form_open('users/login', $attributes); ?>

<div class="form-group">
	<?php echo form_label('Username'); ?>
	<?php
	$data = array('name'		=>	'username',
				  'class'		=>	'form-control',
				  'value'		=>	set_value('username'),
				  'required' 	=> 'required'
				  );
	?>
	<?php echo form_input($data); ?>
</div>

<div class="form-group">
	<?php echo form_label('Password'); ?>
	<?php
	$data = array('name'		=>	'password',
				  'class'		=>	'form-control',
				  'value'		=>	set_value('password'),
				  'required' 	=> 'required'
				  );
	?>
	<?php echo form_password($data); ?>
</div>

<div class="form-group">
	<?php
	$data = array('name'	=>	'submit',
				  'class'	=>	'btn btn-default green-button',
				  'value'	=>	'Login');
	?>
	<?php echo form_submit($data); ?>
</div>

<?php echo form_close(); ?>
<?php endif; ?>