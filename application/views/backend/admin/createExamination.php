<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h3 class="page-title"><?php echo get_phrase('add_exam'); ?></h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page"><?php echo get_phrase('admin'); ?></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo get_phrase('add_exam'); ?></li>
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
                            <div class="col-sm-5">
                                <div class="panel panel-info">
                                    <div class="panel-heading"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('add_exam'); ?></div>

                                    <?php echo form_open(base_url() . 'admin/createExamination/create', array('class' => 'form-horizontal form-goups-bordered validate')); ?>
                                    <div class="panel-body table-responsive">

                                        <div class="form-group">
                                            <label class="col-md-12" for="example-text"><?php echo get_phrase('Title'); ?></label>
                                            <div class="col-sm-12">


                                                <input name="name" type="text" class="form-control" / required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-12" for="example-text"><?php echo get_phrase('description'); ?></label>
                                            <div class="col-sm-12">


                                                <textarea rows="3" class="form-control" name="comment" required></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-12" for="example-text"><?php echo get_phrase('date'); ?></label>
                                            <div class="col-sm-12">
                                                <input class="form-control m-r-10" name="timestamp" type="date" value="<?php echo date('Y-m-d'); ?>" id="example-date-input" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-block btn-info btn-rounded btn-sm "><i class="fa fa-plus"></i>&nbsp;<?php echo get_phrase('add_exam'); ?></button>
                                        </div>
                                        <?php echo form_close(); ?>
                                    </div>
                                </div>
                            </div>
                            <!----CREATION FORM ENDS-->

                            <div class="col-sm-7">
                                <div class="panel panel-info">
                                    <div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('list_exam'); ?></div>



                                    <div class="panel-wrapper in" aria-expanded="true">
                                        <div class="panel-body table-responsive">

                                            <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                                                <thead>


                                                    <tr>
                                                        <th>
                                                            <div>#</div>
                                                        </th>
                                                        <th>
                                                            <div><?php echo get_phrase('Title'); ?></div>
                                                        </th>
                                                        <th>
                                                            <div><?php echo get_phrase('description'); ?></div>
                                                        </th>
                                                        <th>
                                                            <div><?php echo get_phrase('date'); ?></div>
                                                        </th>
                                                        <th>
                                                            <div><?php echo get_phrase('options'); ?></div>
                                                        </th>
                                                    </tr>

                                                </thead>
                                                <tbody>

                                                    <?php $count = 1;
                                                    $exams = $this->db->get('exam')->result_array();
                                                    foreach ($exams as $key => $exam) : ?>
                                                        <tr>
                                                            <td><?php echo $count++; ?></td>
                                                            <td><?php echo $exam['name']; ?></td>
                                                            <td><?php echo $exam['comment']; ?></td>
                                                            <td><?php echo $exam['timestamp']; ?></td>
                                                            <td>

                                                                <a onclick="showAjaxModal('<?php echo base_url(); ?>modal/popup/edit_exam/<?php echo $exam['exam_id']; ?>')" class="btn btn-info btn-circle btn-xs"><i class="fa fa-edit"></i></a>
                                                                <a href="<?php echo base_url(); ?>admin/createExamination/delete/<?php echo $exam['exam_id']; ?>" onclick="return confirm('Are you sure want to delete?');" class="btn btn-danger btn-circle btn-xs" style="color:white"><i class="fa fa-times"></i></a>



                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!----TABLE LISTING ENDS--->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->

    </div>
</div>