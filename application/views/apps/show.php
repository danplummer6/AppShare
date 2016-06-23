<div class="container">
	<h1><?php echo $app->app_name; ?></h1>
	<p><?php echo $app->app_body; ?></p>
	<ul>
		<h4>App Actions</h4>
		<li><a href="<?php echo base_url(); ?>apps/edit/<?php echo $app->id; ?>">Edit App</a></li>
		<li><a onclick="return confirm('Are you sure?')" href="<?php echo base_url(); ?>apps/delete/<?php echo $app->id; ?>">Delete App</a></li>
	</ul>
<!-- /container -->
</div>