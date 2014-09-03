<?php
$data->result_array();
$data = $data->result_array[0];
?>
<form class="form-horizontal" role="form" method="post" action="<?php echo site_url(); ?>staffs/jobtypes/edit/<?php
echo $data['sta_job_id'];
echo '/' . $this->uri->segment(5); // segment(5) for pagination
?>">
	<div class="toolbar col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
		<div class="left">
			<!--For icon: http://getbootstrap.com/components/-->
			<a href="<?php echo site_url(); ?>staffs/jobtypes/index/<?php echo $this->uri->segment(5); ?>" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-arrow-left"></i> Back</a>
			<button type="submit" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-ok-circle"></i> Update</button>
			<button type="reset" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-ban-circle"></i> Reset</button>
		</div>
		<div class="right">
			<h1><?php echo $title; ?></h1>
		</div>
	</div>
	<div class="content">
		<div class="row">
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Edit Job Type</h3>
					</div>
					<div class="panel-body">
						<div class="form-group">
							<label for="sta_job_title" class="col-sm-2 control-label">Title in Latin</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="sta_job_title" placeholder="Title in latin" name="sta_job_title" value="<?php echo set_value('sta_job_title', $data['sta_job_title']); ?>"  pattern=".{2,50}" required title="Allow enter from 2 to 50 characters">
								<?php echo form_error('sta_job_title'); ?>
							</div>
						</div>
						<div class="form-group">
							<label for="sta_job_title_kh" class="col-sm-2 control-label">Title in Khmer</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="sta_job_title_kh" placeholder="Title in khmer" name="sta_job_title_kh" value="<?php echo set_value('sta_job_title_kh', $data['sta_job_title_kh']); ?>"  pattern=".{2,50}" title="Allow enter from 2 to 50 characters">
								<?php echo form_error('sta_job_title_kh'); ?>
							</div>
						</div>
						<div class="form-group">
							<label for="sta_job_description" class="col-sm-2 control-label">Description</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="sta_job_description" id="sta_job_description" value="<?php echo set_value('sta_job_description', $data['sta_job_description']); ?>" pattern=".{1,250}" title="Allow enter from 1 to 250 characters" />
							</div>
						</div>
						<div class="form-group">
							<label for="sta_job_status" class="col-sm-2 control-label">Enable</label>
							<div class="col-sm-10">
								<div class="checkbox">
									<label><input type="checkbox" name="sta_job_status" id="sta_job_status" value="1" <?php echo set_checkbox('sta_job_status', 1, ($data['sta_job_status'] == 1) ? TRUE : FALSE); ?>> Check to enable this staff position</label>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>