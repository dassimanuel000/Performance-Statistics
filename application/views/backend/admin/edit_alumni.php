<?php
$edit_alumni		=	$this->db->get_where('alumni', array('alumni_id' => $param2))->result_array();
foreach ($edit_alumni as $key => $row) :
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
    <!-- Content Header (Page header) -->	  
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h3 class="page-title"><?php echo get_phrase('edit_alumni'); ?></h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page"><?php echo get_phrase('admin'); ?></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo get_phrase('edit_alumni'); ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
                
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-info">
				<div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('edit_alumni'); ?></div>
				<div class="panel-wrapper in" aria-expanded="true">
					<div class="panel-body table-responsive">
						<?php echo form_open(base_url() . 'admin/alumni/update/' . $row['alumni_id'], array('class' => 'form-horizontal form-groups-bordered validate', 'target' => '_top', 'enctype' => 'multipart/form-data')); ?>

						<div class="form-group">
							<label class="col-sm-12"><?php echo get_phrase('browse_image'); ?>*</label>
							<div class="col-sm-12">
								<input type='file' class="form-control" name="userfile" />
								<img id="blah" src="<?php echo $this->crud_model->get_image_url('alumni', $row['alumni_id']); ?>" alt="" height="200" width="200" />

							</div>
						</div>

						<div class="form-group">
							<label class="col-md-12" for="example-text"><?php echo get_phrase('name'); ?></label>
							<div class="col-sm-12">
								<input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>" autofocus>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-12" for="example-text"><?php echo get_phrase('Sex'); ?></label>
							<div class="col-sm-12">
								<select class="form-control select2" name="sex">

									<option value="Male" <?php if ($row['sex'] == 'male') echo 'selected;' ?>><?php echo get_phrase('Male'); ?></option>
									<option value="Female" <?php if ($row['sex'] == 'female') echo 'selected;' ?>><?php echo get_phrase('Female'); ?></option>
								</select>

							</div>
						</div>


						<div class="form-group">
							<label class="col-md-12" for="example-text"><?php echo get_phrase('phone'); ?></label>
							<div class="col-sm-12">
								<input type="text" class="form-control" name="phone" value="<?php echo $row['phone']; ?>">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-12" for="example-text"><?php echo get_phrase('email'); ?></label>
							<div class="col-sm-12">
								<input type="email" class="form-control" name="email" value="<?php echo $row['email']; ?>">
							</div>
						</div>


						<div class="form-group">
							<label class="col-md-12" for="example-text"><?php echo get_phrase('address'); ?></label>
							<div class="col-sm-12">
								<textarea type="text" class="form-control" name="address"><?php echo $row['address']; ?></textarea>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-12" for="example-text"><?php echo get_phrase('profession'); ?></label>
							<div class="col-sm-12">
								<input type="text" class="form-control" name="profession" value="<?php echo $row['profession']; ?>">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-12" for="example-text"><?php echo get_phrase('marital_status'); ?></label>
							<div class="col-sm-12">
								<select class="form-control select2" name="marital_status">

									<option value="married" <?php if ($row['marital_status'] == 'married') echo 'selected;' ?>><?php echo get_phrase('Married'); ?></option>
									<option value="single" <?php if ($row['marital_status'] == 'single') echo 'selected;' ?>><?php echo get_phrase('Single'); ?></option>
									<option value="divorced" <?php if ($row['marital_status'] == 'divorced') echo 'selected;' ?>><?php echo get_phrase('Divorced'); ?></option>
								</select>

							</div>
						</div>


						<div class="form-group">
							<label class="col-md-12" for="example-text"><?php echo get_phrase('graduation_date'); ?></label>
							<div class="col-sm-12">
								<input type="text" class="datepicker form-control" name="g_year" value="<?php echo $row['g_year']; ?>" />
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-12" for="example-text"><?php echo get_phrase('Club'); ?></label>
							<div class="col-sm-12">
								<select name="club_id" class="form-control select2" style="width:100%" required>
									<option value=""><?php echo get_phrase('select'); ?></option>
									<?php
									$club = $this->db->get('club')->result_array();
									foreach ($club as $row3) :
									?>
										<option value="<?php echo $row3['club_id']; ?>" <?php if ($row['club_id'] == $row3['club_id']) echo 'selected'; ?>>
											<?php echo $row3['club_name']; ?>
										</option>
									<?php
									endforeach;
									?>
								</select>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-12" for="example-text"><?php echo get_phrase('interest'); ?></label>
							<div class="col-sm-12">
								<input type="text" class="form-control" name="interest" value="<?php echo $row['interest']; ?>">
							</div>
						</div>


						<div class="form-group">
							<button type="submit" class="btn btn-info btn-rounded btn-block btn-sm"><i class="fa fa-pencil"></i>&nbsp;<?php echo get_phrase('edit_alumni'); ?></button>
						</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    
    </div>
</div>

<?php
endforeach;
?>