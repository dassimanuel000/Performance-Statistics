<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h3 class="page-title"><?php echo get_phrase('hostel_room'); ?></h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page"><?php echo get_phrase('admin'); ?></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo get_phrase('hostel_room'); ?></li>
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
                                    <div class="panel-heading"> <i class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo get_phrase('add'); ?></div>
                                    <div class="panel-wrapper in" aria-expanded="true">
                                        <div class="panel-body table-responsive">

                                            <!----CREATION FORM STARTS---->

                                            <?php echo form_open(base_url() . 'admin/hostel_room/create', array('class' => 'form-horizontal form-groups-bordered validate', 'target' => '_top')); ?>
                                            <div class="form-group">
                                                <label class="col-md-12" for="example-text"><?php echo get_phrase('name'); ?></label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="name" / required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-12" for="example-text"><?php echo get_phrase('room_type'); ?></label>
                                                <div class="col-sm-12">
                                                    <input type="text" class="form-control" name="room_type" / required>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-md-12" for="example-text"><?php echo get_phrase('num_of_bed'); ?></label>
                                                <div class="col-sm-12">
                                                    <input type="number" class="form-control" name="num_bed" / required>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-md-12" for="example-text"><?php echo get_phrase('cost_bed'); ?></label>
                                                <div class="col-sm-12">
                                                    <input type="number" class="form-control" name="cost_bed" / required>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-md-12" for="example-text"><?php echo get_phrase('description'); ?></label>
                                                <div class="col-sm-12">
                                                    <textarea class="form-control" name="description"></textarea>
                                                </div>
                                            </div>




                                            <div class="form-group">
                                                <button type="submit" class="btn btn-info btn-block btn-rounded btn-sm"><i class="fa fa-plus"></i>&nbsp;<?php echo get_phrase('save'); ?></button>
                                            </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!----CREATION FORM ENDS-->

                            <div class="col-sm-7">
                                <div class="panel panel-info">
                                    <div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('list'); ?></div>
                                    <div class="panel-wrapper in" aria-expanded="true">
                                        <div class="panel-body table-responsive">

                                            <table id="example23" class="display nowrap" cellspacing="0" width="100%">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <div>#</div>
                                                        </th>
                                                        <th>
                                                            <div><?php echo get_phrase('name'); ?></div>
                                                        </th>
                                                        <th>
                                                            <div><?php echo get_phrase('room_type'); ?></div>
                                                        </th>
                                                        <th>
                                                            <div><?php echo get_phrase('num_of_bed'); ?></div>
                                                        </th>
                                                        <th>
                                                            <div><?php echo get_phrase('cost_bed'); ?></div>
                                                        </th>
                                                        <th>
                                                            <div><?php echo get_phrase('description'); ?></div>
                                                        </th>
                                                        <th>
                                                            <div><?php echo get_phrase('actions'); ?></div>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php $counter = 1;
                                                    $hostel_rooms =  $this->db->get('hostel_room')->result_array();
                                                    foreach ($hostel_rooms as $key => $hostel_room) : ?>
                                                        <tr>
                                                            <td><?php echo $counter++; ?></td>
                                                            <td><?php echo $hostel_room['name']; ?></td>
                                                            <td><?php echo $hostel_room['room_type']; ?></td>
                                                            <td><?php echo $hostel_room['num_bed']; ?></td>
                                                            <td><?php echo $hostel_room['cost_bed']; ?></td>
                                                            <td><?php echo $hostel_room['description']; ?></td>
                                                            <td>

                                                                <a href="#" onclick="showAjaxModal('<?php echo base_url(); ?>modal/popup/edit_hostel_room/<?php echo $hostel_room['hostel_room_id']; ?>');"><button type="button" class="btn btn-info btn-circle btn-xs"><i class="fa fa-pencil"></i></button></a>
                                                                <a href="#" onclick="confirm_modal('<?php echo base_url(); ?>admin/hostel_room/delete/<?php echo $hostel_room['hostel_room_id']; ?>');"><button type="button" class="btn btn-danger btn-circle btn-xs"><i class="fa fa-times"></i></button></a>



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