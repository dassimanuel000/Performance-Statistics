<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h3 class="page-title"><?php echo get_phrase('add_circular'); ?></h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page"><?php echo get_phrase('admin'); ?></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo get_phrase('add_circular'); ?></li>
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
                                    <div class="panel-heading"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('add_circular'); ?></div>
                                    <div class="panel-body table-responsive">


                                        <?php echo form_open(base_url() . 'admin/circular/insert', array('class' => 'form-horizontal form-groups-bordered validate')); ?>

                                        <!----CREATION FORM STARTS---->

                                        <div class="form-group">
                                            <label class="col-md-12" for="example-text"><?php echo get_phrase('circular_title'); ?></label>
                                            <div class="col-sm-12">
                                                <input name="title" type="text" class="form-control" / required>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-12" for="example-text"><?php echo get_phrase('reference_no'); ?></label>
                                            <div class="col-sm-12">
                                                <input type="text" class="form-control" name="reference" / required>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-12" for="example-text"><?php echo get_phrase('content'); ?></label>
                                            <div class="col-sm-12">
                                                <textarea type="text" class="form-control" name="content" required></textarea>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label class="col-md-12" for="example-text"><?php echo get_phrase('circular_date'); ?></label>
                                            <div class="col-sm-12">
                                                <input class="form-control m-r-10" name="date" type="date" value="<?php echo date('Y-m-d'); ?>" id="example-date-input" required>


                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <button type="submit" class="btn btn-info btn-sm btn-block btn-rounded"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('add_circular'); ?></button>
                                        </div>
                                        <?php echo form_close(); ?>

                                    </div>
                                </div>
                            </div>
                            <!----CREATION FORM ENDS-->

                            <div class="col-sm-7">
                                <div class="panel panel-info">
                                    <div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('list_circular'); ?></div>



                                    <div class="panel-wrapper in" aria-expanded="true">
                                        <div class="panel-body table-responsive">

                                            <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <div>#</div>
                                                        </th>
                                                        <th>
                                                            <div><?php echo get_phrase('title'); ?></div>
                                                        </th>
                                                        <th>
                                                            <div><?php echo get_phrase('reference'); ?></div>
                                                        </th>
                                                        <th>
                                                            <div><?php echo get_phrase('content'); ?></div>
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
                                                    <?php

                                                    $count = 1;
                                                    foreach ($select_circular as $key => $circular) :

                                                    ?>
                                                        <tr>
                                                            <td><?php echo $count++; ?></td>
                                                            <td><?php echo $circular['title']; ?></td>
                                                            <td><?php echo $circular['reference']; ?></td>
                                                            <td><?php echo $circular['content']; ?></td>
                                                            <td><?php echo $circular['date']; ?></td>
                                                            <td>

                                                                <a onclick="showAjaxModal('<?php echo base_url(); ?>modal/popup/edit_circular/<?php echo $circular['circular_id']; ?>')" class="btn btn-info btn-circle btn-xs"><i class="fa fa-edit"></i></a>
                                                                <a href="<?php echo base_url(); ?>admin/circular/delete/<?php echo $circular['circular_id']; ?>" onclick="return confirm('Are you sure want to delete?');" class="btn btn-danger btn-circle btn-xs" style="color:white"><i class="fa fa-times"></i></a>

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