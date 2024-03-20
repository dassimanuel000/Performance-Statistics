<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h3 class="page-title"><?php echo get_phrase('All Categories'); ?></h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page"><?php echo get_phrase('admin'); ?></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo get_phrase('All Categories'); ?></li>
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
                                    <div class="panel-heading"> <?php echo get_phrase('All Categories'); ?>

                                        <button onclick="showAjaxModal('<?php echo base_url(); ?>modal/popup/add_enquiry_category');" class="btn btn-info btn-xs pull-right">
                                            <i class="fa fa-plus"></i><?php echo get_phrase('add_category'); ?>
                                        </button>

                                    </div>
                                    <div class="panel-body table-responsive">


                                        <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th><?php echo get_phrase('category'); ?></th>
                                                    <th><?php echo get_phrase('purpose'); ?></th>
                                                    <th><?php echo get_phrase('whom'); ?></th>
                                                    <th><?php echo get_phrase('option'); ?></th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach ($enquiry_category as $key => $row) : ?>
                                                    <tr>
                                                        <td><?php echo $row['enquiry_category_id']; ?></td>
                                                        <td><?php echo $row['category']; ?></td>
                                                        <td><?php echo $row['purpose']; ?></td>
                                                        <td><?php echo $row['whom']; ?></td>
                                                        <td>

                                                            <a onclick="showAjaxModal('<?php echo base_url(); ?>modal/popup/edit_enquiry_category/<?php echo $row['enquiry_category_id']; ?>')" class="btn btn-info btn-circle btn-xs"><i class="fa fa-edit"></i></a>
                                                            <a href="<?php echo base_url(); ?>admin/enquiry_category/delete/<?php echo $row['enquiry_category_id']; ?>" onclick="return confirm('Are you sure want to delete?');" class="btn btn-danger btn-circle btn-xs" style="color:white"><i class="fa fa-times"></i></a>


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
        </section>
        <!-- /.content -->

    </div>
</div>