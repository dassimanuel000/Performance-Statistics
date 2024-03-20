<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h3 class="page-title"><?php echo get_phrase('list_enquiry'); ?></h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page"><?php echo get_phrase('admin'); ?></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo get_phrase('list_enquiry'); ?></li>
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
                                    <div class="panel-heading"><i class="fa fa-list"></i>&nbsp; <?php echo get_phrase('list_enquiry'); ?></div>
                                    <div class="panel-wrapper in" aria-expanded="true">
                                        <div class="panel-body table-responsive">

                                            <table id="example23" class="display nowrap" cellspacing="0" width="100%">

                                                <thead>
                                                    <tr>

                                                        <th>category</th>
                                                        <th>mobile</th>
                                                        <th>purpose</th>
                                                        <th>name</th>
                                                        <th>who to see</th>
                                                        <th>content</th>
                                                        <th>email</th>
                                                        <th>date submitted</th>
                                                        <th>option</th>
                                                    </tr>
                                                </thead>

                                                <tbody>

                                                    <?php
                                                    foreach ($select_enquiry as $key => $select_enquiry) : ?>
                                                        ?>

                                                        <tr>
                                                            <td><?php echo $select_enquiry['category']; ?></td>
                                                            <td><?php echo $select_enquiry['mobile']; ?></td>
                                                            <td><?php echo $select_enquiry['purpose']; ?></td>
                                                            <td><?php echo $select_enquiry['name']; ?></td>
                                                            <td><?php echo $select_enquiry['whom_to_meet']; ?></td>
                                                            <td><?php echo $select_enquiry['content']; ?></td>
                                                            <td><?php echo $select_enquiry['email']; ?></td>
                                                            <td><?php echo $select_enquiry['date']; ?></td>
                                                            <td>

                                                                <a href="<?php echo base_url(); ?>admin/list_enquiry/delete/<?php echo $select_enquiry['enquiry_id']; ?>" onclick="return confirm('Are you sure want to delete?');" class="btn btn-danger btn-circle btn-xs" style="color:white"><i class="fa fa-times"></i></a>

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
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->

    </div>
</div>