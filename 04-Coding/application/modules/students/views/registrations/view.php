<?php
$data->result_array();
$data = $data->result_array[0];
?>
<div class="toolbar col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2">
	<div class="left">
		<!--For icon: http://getbootstrap.com/components/-->
		<a href="<?php echo site_url(); ?>students/registrations/index/<?php echo $this->uri->segment(5); ?>" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-arrow-left"></i> Back</a>
		<a href="<?php echo site_url(); ?>students/registrations/add/<?php echo $this->uri->segment(5); ?>" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-plus-sign"></i> Create</a>
		<a href="<?php echo site_url(); ?>students/registrations/edit/<?php echo $this->uri->segment(4); ?>" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-plus-sign"></i> Edit</a>
	</div>
	<div class="right">
		<h1><?php echo $title; ?></h1>
	</div>
</div>
<div class="content">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">View Staff</h3>
		</div>
		<div class="panel-body">
			<dl class="dl-horizontal">
				<dt>Student ID</dt>
				<dd><?php echo ($data['stu_card_id']); ?></dd>
				<dt>English Name:</dt>
				<dd><?php echo $data['stu_en_firstname']." ".$data['stu_en_lastname']; ?></dd>
				<dt>Name in Khmer</dt>
				<dd><?php echo $data['stu_kh_firstname']." ". $data['stu_kh_firstname']; ?></dd>
				<dt>Sex</dt>
				<dd><?php echo strtoupper($data['stu_gender']); ?></dd>
				<dt>Place Of Birth:</dt>
				<dd><?php echo $data['stu_pob']; ?></dd>
				<dt>Date of birth</dt>
				<dd><?php echo $data['stu_dob']; ?></dd>
				<dt>Mobile Phone</dt>
				<dd><i class="glyphicon glyphicon-phone"></i> <?php echo $data['stu_tel']; ?></dd>
				<dt>Email</dt>
				<dd><i class="glyphicon glyphicon-envelope"></i> <?php echo $data['stu_email']; ?></dd>
				<dt>Address</dt>
				<dd><?php echo $data['stu_current_address']; ?></dd>
<!--				<dt>Started Date</dt>-->
<!--				<dd><i class="glyphicon glyphicon-calendar"></i> <?php echo get_date_string($data['sta_start_date']); ?></dd>
				<dt>Created</dt>
				<dd><i class="glyphicon glyphicon-calendar"></i> <?php echo get_date_string($data['sta_created']); ?></dd>
				<dt>Modified</dt>
				<dd><i class="glyphicon glyphicon-calendar"></i> <?php echo get_date_string($data['sta_modified']); ?></dd>-->
			</dl>
		</div>
	</div>
</div>