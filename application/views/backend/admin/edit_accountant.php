<?php
$select_accountant = $this->db->get_where('accountant', array('accountant_id' => $param2))->result_array();
foreach ($select_accountant as $key => $accountant) :  ?>



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h3 class="page-title"><?php echo get_phrase('New Accountant'); ?></h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item" aria-current="page"><?php echo get_phrase('admin'); ?></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?php echo get_phrase('New Accountant'); ?></li>
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
                                        <div class="panel-heading">
                                            <?php echo get_phrase('New Accountant'); ?></div>
                                        <div class="panel-body">

                                            <?php echo form_open(base_url() . 'admin/accountant/update/' . $accountant['accountant_id'], array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data')); ?>

                                            <div class="form-group">
                                                <label class="col-md-12" for="example-text"><?php echo get_phrase('Name'); ?></label>

                                                <div class="col-sm-12">
                                                    <input type="text" name="name" value="<?php echo $accountant['name']; ?>" class="form-control">
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-md-12" for="example-text"><?php echo get_phrase('DOB'); ?></label>
                                                <div class="col-sm-12">
                                                    <input class="form-control m-r-10" name="birthday" type="date" value="<?php echo $accountant['birthday']; ?>" id="example-date-input" required>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-md-12" for="example-text"><?php echo get_phrase('Sex'); ?></label>
                                                <div class="col-sm-12">
                                                    <select class="form-control select2" name="sex">

                                                        <option value="Male" <?php if ($accountant['sex'] == 'Male') echo 'selected;' ?>><?php echo get_phrase('Male'); ?></option>
                                                        <option value="Female" <?php if ($accountant['sex'] == 'Female') echo 'selected;' ?>><?php echo get_phrase('Female'); ?></option>
                                                    </select>

                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-md-12" for="example-text"><?php echo get_phrase('Religion'); ?></label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="religion" value="<?php echo $accountant['religion']; ?>" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-12" for="example-text"><?php echo get_phrase('Blood Group'); ?></label>
                                                <div class="col-sm-12">
                                                    <input type="text" name="blood_group" value="<?php echo $accountant['blood_group']; ?>" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-12" for="example-text"><?php echo get_phrase('Email'); ?></label>
                                                <div class="col-sm-12">

                                                    <input type="email" name="email" value="<?php echo $accountant['email']; ?>" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-12" for="example-text"><?php echo get_phrase('Phone'); ?></label>
                                                <div class="col-sm-12">

                                                    <input type="text" name="phone" value="<?php echo $accountant['phone']; ?>" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-12" for="example-text"><?php echo get_phrase('Qualification'); ?></label>
                                                <div class="col-sm-12">

                                                    <input type="text" name="qualification" value="<?php echo $accountant['qualification']; ?>" class="form-control">
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-md-12" for="example-text"><?php echo get_phrase('Marital Status'); ?></label>
                                                <div class="col-sm-12">
                                                    <select class="form-control select2" name="marital_status">
                                                        <<option value="Married" <?php if ($accountant['marital_status'] == 'Married') echo 'selected;' ?>><?php echo get_phrase('Married'); ?></option>
                                                            <option value="Single" <?php if ($accountant['marital_status'] == 'Single') echo 'selected;' ?>><?php echo get_phrase('Single'); ?></option>
                                                            <option value="Other" <?php if ($accountant['marital_status'] == 'Other') echo 'selected;' ?>><?php echo get_phrase('Other'); ?></option>
                                                    </select>

                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-md-12" for="example-text"><?php echo get_phrase('Address'); ?></label>
                                                <div class="col-sm-12">

                                                    <textarea class="form-control" name="address"><?php echo $accountant['address']; ?></textarea>

                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-md-12" for="example-text"><?php echo get_phrase('Facebook'); ?></label>
                                                <div class="col-sm-12">

                                                    <input type="text" name="facebook" value="<?php echo $accountant['facebook']; ?>" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-12" for="example-text"><?php echo get_phrase('Twitter'); ?></label>
                                                <div class="col-sm-12">

                                                    <input type="text" name="twitter" value="<?php echo $accountant['twitter']; ?>" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-12" for="example-text"><?php echo get_phrase('Googleple'); ?></label>
                                                <div class="col-sm-12">

                                                    <input type="text" name="googleplus" value="<?php echo $accountant['googleplus']; ?>" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-12" for="example-text"><?php echo get_phrase('Linkedin'); ?></label>
                                                <div class="col-sm-12">

                                                    <input type="text" name="linkedin" value="<?php echo $accountant['linkedin']; ?>" class="form-control">
                                                </div>
                                            </div>




                                            <div class="form-group">
                                                <label class="col-md-12" for="example-text"><?php echo get_phrase('Image'); ?></label>
                                                <div class="col-sm-12">

                                                    <input type="file" name="userfile">
                                                    <img src="<?php echo  $this->crud_model->get_image_url('accountant', $accountant['accountant_id']); ?>" class="img-circle" width="30" height="30">
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <button type="submit" class="btn btn-info btn-block btn-rounded btn-sm"><i class="fa fa-plus"></i>&nbsp;&nbsp;Save</button>
                                            </div>
                                            <?php echo form_close(); ?>
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
<?php endforeach; ?>