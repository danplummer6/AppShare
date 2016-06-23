<?php echo validation_errors('<p class="text-error">'); ?>
	<?php echo form_open('apps/add'); ?>
	
	<div class="form-group">
		<?php echo form_label('<span class="white">App Name</span>'); ?>
		<?php
		$data = array('name'		=>	'app_name',
					  'class'		=>	'form-control',
					  'value'		=>	set_value('app_name'),
					  'required' 	=> 'required'
					  );
		?>
		<?php echo form_input($data); ?>
	</div>

	<div class="form-group">
		<?php echo form_label('<span class="white">App Description</span>'); ?>
		<?php
		$data = array('name'		=>	'app_body',
					  'class'		=>	'form-control',
					  'value'		=>	set_value('app_body'),
					  'placeholder'	=>	'Describe your app idea. Include things such as features, target audience, platform (mobile, tablet, web), cost, and anything you can imagine. There is no requirement on how long or short the description can be so the sky is the limit!',
					  'required' 	=> 	'required'
					  );
		?>
		<?php echo form_textarea($data); ?>
	</div>

	<div class="form-group">
		<?php
		$data = array('name'	=>	'submit',
					  'class'	=>	'btn btn-default green-button',
					  'value'	=>	'Create');
		?>
		<?php echo form_submit($data); ?>
	</div>

<?php echo form_close(); ?>