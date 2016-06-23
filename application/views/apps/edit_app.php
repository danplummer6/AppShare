<div class="container">
	<h1>Edit App</h1>

	<?php echo validation_errors('<p class="text-error">'); ?>
	<?php echo form_open('apps/edit/'.$this_app->id.''); ?>
	
	<div class="form-group">
		<?php echo form_label('<span class="black">App Name</span>'); ?>
		<?php
		$data = array('name'		=>	'app_name',
					  'class'		=>	'form-control',
					  'value'		=>	$this_app->app_name
					  );
		?>
		<?php echo form_input($data); ?>
	</div>

	<div class="form-group">
		<?php echo form_label('<span class="black">App Description</span>'); ?>
		<?php
		$data = array('name'		=>	'app_body',
					  'class'		=>	'form-control',
					  'value'		=>	$this_app->app_body
					  );
		?>
		<?php echo form_textarea($data); ?>
	</div>

	<div class="form-group">
		<?php
		$data = array('name'	=>	'submit',
					  'class'	=>	'btn btn-default black-button',
					  'value'	=>	'Update');
		?>
		<?php echo form_submit($data); ?>
	</div>

<?php echo form_close(); ?>

</div>