<div class="container">
<?php if($this->session->flashdata('app_created')) : ?>
	<div class="alert alert-success alert-dismissible" role="alert">
	    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	    <?php echo $this->session->flashdata('app_created'); ?>
	</div>
<?php endif; ?>

<?php if($this->session->flashdata('app_updated')) : ?>
	<div class="alert alert-success alert-dismissible" role="alert">
	    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	    <?php echo $this->session->flashdata('app_updated'); ?>
	</div>
<?php endif; ?>

<?php if($this->session->flashdata('app_deleted')) : ?>
	<div class="alert alert-danger alert-dismissible" role="alert">
	    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	    <?php echo $this->session->flashdata('app_deleted'); ?>
	</div>
<?php endif; ?>

<!-- Page Content -->
<div class="my-apps-head">
	<h1>My App Ideas</h1>
	<p>These are your current apps</p>
	<a class="btn btn-default btn-lg black-button" data-toggle="modal" data-target="#myModal2" href="#">Create a new app</a>
</div>
	
	<?php foreach($apps as $app) : ?>
	            <div class="col-md-6 show-apps">
	                <h4><?php echo $app->app_name; ?></h4>
	                <p><?php echo $app->app_body; ?></p>
	                <a href="<?php echo base_url(); ?>apps/edit/<?php echo $app->id; ?>">Edit App</a>
	                <br>
					<a onclick="return confirm('Are you sure?')" href="<?php echo base_url(); ?>apps/delete/<?php echo $app->id; ?>">Delete App</a>
	        	</div>
	<?php endforeach; ?>



<!-- Add App Modal -->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="modal-x">&times;</span></button>
            <h1 class="modal-title" id="myModalLabel" align="center">Create New App</h1>
          </div>
          <div class="modal-body">
            <!-- Add App Form -->
            <br>
            <?php $this->load->view('apps/add_app'); ?>
            <br>  
        </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>


