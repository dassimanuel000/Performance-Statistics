
<?php  
$system_name    = $this->db->get_where('settings', array('type' => 'system_name'))->row()->description;
$system_address = $this->db->get_where('settings', array('type' => 'address'))->row()->description;
$footer         = $this->db->get_where('settings', array('type' => 'footer'))->row()->description;
$text_align     = $this->db->get_where('settings', array('type' => 'text_align'))->row()->description;
$loginType      = $this->session->userdata('login_type');
$running_year   = $this->db->get_where('settings', array('type' => 'session'))->row()->description;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url(); ?>ui/images/favicon.ico">

    <title><?php echo $page_title;?>&nbsp;|&nbsp;<?php echo $system_title;?></title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_components/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_components/perfect-scrollbar/css/perfect-scrollbar.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_components/morris.js/morris.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_components/OwlCarousel2/dist/assets/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_components/OwlCarousel2/dist/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_components/horizontal-timeline/css/horizontal-timeline.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_components/flexslider/flexslider.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_components/prism/prism.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_components/datatable/datatables.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_components/Magnific-Popup-master/dist/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_components/gallery/css/animated-masonry-gallery.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_components/lightbox-master/dist/ekko-lightbox.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_components/jvectormap/lib2/jquery-jvectormap-2.0.2.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_components/x-editable/dist/bootstrap3-editable/css/bootstrap-editable.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_components/sweetalert/sweetalert.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_components/bootstrap-markdown-master/css/bootstrap-markdown.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_components/dropzone/dropzone.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_components/select2/dist/css/select2.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_components/bootstrap-daterangepicker/daterangepicker.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_components/bootstrap-select/dist/css/bootstrap-select.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_components/raty-master/lib/jquery.raty.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_components/ion-rangeSlider/css/ion.rangeSlider.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_components/ion-rangeSlider/css/ion.rangeSlider.skinModern.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_components/gridstack/gridstack.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_components/jquery-toast-plugin-master/src/jquery.toast.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_components/nestable/nestable.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_components/bootstrap-switch/switch.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_components/c3/c3.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_components/chartist-js-develop/chartist.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_plugins/bootstrap-slider/slider.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_plugins/iCheck/flat/blue.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_plugins/iCheck/all.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_plugins/timepicker/bootstrap-timepicker.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_plugins/pace/pace.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_components/fullcalendar/fullcalendar.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_components/fullcalendar/fullcalendar.print.min.css" media="print">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_components/weather-icons/weather-icons.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/css/color_theme.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/css/style_rtl.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/icons/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/icons/Ionicons/css/ionicons.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/icons/themify-icons/themify-icons.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/icons/linea-icons/linea.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/icons/glyphicons/glyphicon.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/icons/flag-icon-css/css/flag-icon.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/icons/material-design-iconic-font/css/materialdesignicons.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/icons/simple-line-icons/css/simple-line-icons.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/icons/cryptocoins-master/cryptocoins.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/icons/weather-icons/css/weather-icons.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/icons/iconsmind/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/icons/icomoon/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/assets/vendor_components/animate/animate.css">
    

    

	  
	<!-- Style-->  
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/css/skin_color.css">	
	<link rel="stylesheet" href="<?php echo base_url(); ?>ui/css/custom.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<body class="hold-transition light-skin sidebar-mini theme-primary fixed">
	
<div class="wrapper">
	<div id="loader"></div>
	<?php include('application/views/backend/topbar.php') ?>
	
    
	<?php include $loginType.'/navigation.php';?>
	
	<?php include $loginType.'/'.$page_name.'.php';?>
		

  <!-- /.content-wrapper -->
 
  <?php include 'footer.php'; ?>

  
  
</div>
<!-- ./wrapper -->
	

	
	<div id="chat-box-body">
		<div id="chat-circle" class="waves-effect waves-circle btn btn-circle btn-lg btn-warning l-h-70">
            <div id="chat-overlay"></div>
            <span class="icon-Group-chat fs-30"><span class="path1"></span><span class="path2"></span></span>
		</div>

		<div class="chat-box">
            <div class="chat-box-header p-15 d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button class="waves-effect waves-circle btn btn-circle btn-primary-light h-40 w-40 rounded-circle l-h-45" type="button" data-bs-toggle="dropdown">
                      <span class="icon-Add-user fs-22"><span class="path1"></span><span class="path2"></span></span>
                  </button>
                  <div class="dropdown-menu min-w-200">
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Color me-15"></span>
                        New Group</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Clipboard me-15"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></span>
                        Contacts</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Group me-15"><span class="path1"></span><span class="path2"></span></span>
                        Groups</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Active-call me-15"><span class="path1"></span><span class="path2"></span></span>
                        Calls</a>
                    <a class="dropdown-item fs-16" href="#">
                        <span class="icon-Settings1 me-15"><span class="path1"></span><span class="path2"></span></span>
                        Settings</a>
                    <div class="dropdown-divider"></div>
					<a class="dropdown-item fs-16" href="#">
                        <span class="icon-Question-circle me-15"><span class="path1"></span><span class="path2"></span></span>
                        Help</a>
					<a class="dropdown-item fs-16" href="#">
                        <span class="icon-Notifications me-15"><span class="path1"></span><span class="path2"></span></span> 
                        Privacy</a>
                  </div>
                </div>
                <div class="text-center flex-grow-1">
                    <div class="text-dark fs-18">Mayra Sibley</div>
                    <div>
                        <span class="badge badge-sm badge-dot badge-primary"></span>
                        <span class="text-muted fs-12">Active</span>
                    </div>
                </div>
                <div class="chat-box-toggle">
                    <a id="chat-box-toggle" class="waves-effect waves-circle btn btn-circle btn-danger-light h-40 w-40 rounded-circle l-h-45" href="#">
                      <span class="icon-Close fs-22"><span class="path1"></span><span class="path2"></span></span>
                    </a>                    
                </div>
            </div>
            <div class="chat-box-body">
                <div class="chat-box-overlay">   
                </div>
                <div class="chat-logs">
                    <div class="chat-msg user">
                        <div class="d-flex align-items-center">
                            <span class="msg-avatar">
                                <img src="<?php echo base_url(); ?>ui/images/avatar/2.jpg" class="avatar avatar-lg">
                            </span>
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary fw-bold">Mayra Sibley</a>
                                <p class="text-muted fs-12 mb-0">2 Hours</p>
                            </div>
                        </div>
                        <div class="cm-msg-text">
                            Hi there, I'm Jesse and you?
                        </div>
                    </div>
                    <div class="chat-msg self">
                        <div class="d-flex align-items-center justify-content-end">
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary fw-bold">You</a>
                                <p class="text-muted fs-12 mb-0">3 minutes</p>
                            </div>
                            <span class="msg-avatar">
                                <img src="<?php echo base_url(); ?>ui/images/avatar/3.jpg" class="avatar avatar-lg">
                            </span>
                        </div>
                        <div class="cm-msg-text">
                           My name is Anne Clarc.         
                        </div>        
                    </div>
                    <div class="chat-msg user">
                        <div class="d-flex align-items-center">
                            <span class="msg-avatar">
                                <img src="<?php echo base_url(); ?>ui/images/avatar/2.jpg" class="avatar avatar-lg">
                            </span>
                            <div class="mx-10">
                                <a href="#" class="text-dark hover-primary fw-bold">Mayra Sibley</a>
                                <p class="text-muted fs-12 mb-0">40 seconds</p>
                            </div>
                        </div>
                        <div class="cm-msg-text">
                            Nice to meet you Anne.<br>How can i help you?
                        </div>
                    </div>
                </div><!--chat-log -->
            </div>
            <div class="chat-input">      
                <form>
                    <input type="text" id="chat-input" placeholder="Send a message..."/>
                    <button type="submit" class="chat-submit" id="chat-submit">
                        <span class="icon-Send fs-22"></span>
                    </button>
                </form>      
            </div>
		</div>
	</div>
	
	<!-- Page Content overlay -->
	
	
	<!-- Vendor JS -->
	<script src="<?php echo base_url(); ?>ui/js/vendors.min.js"></script>
	<script src="<?php echo base_url(); ?>ui/js/pages/chat-popup.js"></script>
    <script src="<?php echo base_url(); ?>ui/assets/icons/feather-icons/feather.min.js"></script>	
	
	<!-- EduAdmin App -->
	<script src="<?php echo base_url(); ?>ui/js/template.js"></script>
 
	<script src="<?php echo base_url(); ?>optimum/plugins/bower_components/toast-master/js/jquery.toast.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>

	

</body>
 <?php include 'modal.php'; ?>
</html>

<?php 
/*
$system_name    = $this->db->get_where('settings', array('type' => 'system_name'))->row()->description;
$system_address = $this->db->get_where('settings', array('type' => 'address'))->row()->description;
$footer         = $this->db->get_where('settings', array('type' => 'footer'))->row()->description;
$text_align     = $this->db->get_where('settings', array('type' => 'text_align'))->row()->description;
$loginType      = $this->session->userdata('login_type');
$running_year   = $this->db->get_where('settings', array('type' => 'session'))->row()->description;
?>
<?php include 'css.php'; ?>

    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
    

	<?php include 'header.php'; ?>
	<?php include $loginType.'/navigation.php';?>
	<?php include 'page_info.php';?>
	<?php include $loginType.'/'.$page_name.'.php';?>
		
       			
	<?php // include 'dashboard.php'; ?>
				
				
                
				
                <!-- .right-sidebar -->
                <div class="right-sidebar" style="background:url(<?php echo base_url(); ?>assets/images/10.png); opacity: 0.9;">
                    <div class="slimscrollright">
                        <div class="rpanel-title">Current Mesage Thread<span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                          
                            <ul class="m-t-20 chatonline">

                            <?php 
                            $user_array = ['admin', 'student', 'teacher', 'parent', 'hrm', 'hostel', 'accountant', 'librarian'];
                            for($i= 0; $i < sizeof($user_array); $i++):
                            $user_lists = $this->db->get($user_array[$i])->result_array();
                            ?>
                        <?php foreach($user_lists as $key => $user_list):?>
                            <?php $login_status = $user_list['login_status'];?>
                                <li>
                                   <?php echo $user_list['name'];?>
                                   <span class="pull-right">
                                   <?php if($login_status == '1'): ?>
                                   <?php echo '<i class="fa fa-circle" style="color:green"></i>';?>
                                   <?php endif;?>
                                   <?php if($login_status == '2'): ?>
                                   <?php echo '<i class="fa fa-circle" style="color:red"></i>';?>
                                   <?php endif;?>
                                   
                                   
                                   </span>
                                </li>
                        <?php endforeach;?>
                        <?php endfor;?>

                            
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.right-sidebar -->
            </div>
            <!-- /.container-fluid -->
			
			
			
					
  
  
         <?php include 'footer.php'; ?>
		 

		
        </div>
        <!-- /#page-wrapper -->
    </div>
 <?php include 'modal.php'; ?>
 <?php include 'js.php'; */?>