<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h3 class="page-title"><?php echo get_phrase('list_students'); ?></h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page"><?php echo get_phrase('admin'); ?></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo get_phrase('list_students'); ?></li>
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
                        <div class="panel panel-info">
                            <div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('list_students'); ?></div>
                            <div class="panel-wrapper in" aria-expanded="true">
                                <div class="panel-body table-responsive">

                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <select id="class_id" class="form-control">
                                                <option value=""><?php echo get_phrase('select_class'); ?></option>

                                                <?php $class =  $this->db->get('class')->result_array();
                                                foreach ($class as $key => $class) : ?>
                                                    <option value="<?php echo $class['class_id']; ?>" <?php if ($class_id == $class['class_id']) echo 'selected'; ?>><?php echo $class['name']; ?></option>
                                                <?php endforeach; ?>
                                            </select>

                                        </div>
                                    </div>
                                    <button type="button" id="find" class="btn btn-success btn-rounded btn-sm btn-block">Get Student</button>
                                    <hr>

                                    <!-- PHP that includes table for subject starts here  ------>
                                    <div id="data">
                                        <?php include 'showStudentClasswise.php'; ?>
                                    </div>
                                    <!-- PHP that includes table for subject ends here  ------>


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


<script type="text/javascript">
    $(document).ready(function() {
        $('#class_id').select2();
        $('#find').on('click', function() {
            var class_id = $('#class_id').val();
            if (class_id == "") {
                $.toast({
                    text: 'Please select class before clicking get student button',
                    position: 'top-right',
                    loaderBg: '#f56954',
                    icon: 'warning',
                    hideAfter: 3500,
                    stack: 6
                })
                return false;
            }
            $.ajax({
                url: '<?php echo site_url('admin/getStudentClasswise/'); ?>' + class_id
            }).done(function(response) {
                console.log(response)
                $('#data').html(response);
            });
        });

      });
</script>