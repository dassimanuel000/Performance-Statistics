<?php $select_circular = $this->db->get_where('circular', array('circular_id' => $param2))->result_array();

foreach ($select_circular as $key => $circular) :
?>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="me-auto">
                        <h3 class="page-title"><?php echo get_phrase('update_circular'); ?></h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item" aria-current="page"><?php echo get_phrase('admin'); ?></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?php echo get_phrase('update_circular'); ?></li>
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
                                        <div class="panel-heading"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('update_circular'); ?></div>
                                        <div class="panel-body table-responsive">


                                            <?php echo form_open(base_url() . 'admin/circular/update/' . $circular['circular_id'], array('class' => 'form-horizontal form-groups-bordered validate')); ?>

                                            <!----CREATION FORM STARTS---->

                                            <div class="form-group">
                                                <label class="col-md-12" for="example-text"><?php echo get_phrase('circular_title'); ?></label>
                                                <div class="col-sm-12">


                                                    <input name="title" type="text" class="form-control" value="<?php echo $circular['title']; ?>">
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-md-12" for="example-text"><?php echo get_phrase('reference_no'); ?></label>
                                                <div class="col-sm-12">

                                                    <input type="text" class="form-control" name="reference" value="<?php echo $circular['reference']; ?>">
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-md-12" for="example-text"><?php echo get_phrase('content'); ?></label>
                                                <div class="col-sm-12">

                                                    <textarea type="text" class="form-control" name="content"><?php echo $circular['content']; ?></textarea>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-md-12" for="example-text"><?php echo get_phrase('circular_date'); ?></label>
                                                <div class="col-sm-12">
                                                    <input class="form-control m-r-10" name="date" type="date" value="<?php echo $circular['date']; ?>" id="example-date-input" required>


                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <button type="submit" class="btn btn-info btn-sm btn-block btn-rounded"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('update_circular'); ?></button>
                                            </div>
                                            <?php echo form_close(); ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!----CREATION FORM ENDS-->
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->

        </div>
    </div>

<?php endforeach; ?>