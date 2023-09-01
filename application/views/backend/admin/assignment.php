<div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-info">
                            <div class="panel-heading">
							
							NEW ASSIGNMENT
						   
						   
                                <div class="pull-right"><a href="#" data-perform="panel-collapse"><i class="fa fa-plus"></i>&nbsp;&nbsp;ADD NEW ASSIGNMENT HERE<i class="btn btn-info btn-xs"></i></a> <a href="#" data-perform="panel-dismiss"></a> </div>
                            </div>
                            <div class="panel-wrapper collapse out" aria-expanded="true">
                                <div class="panel-body">
                <?php echo form_open(base_url().'assignment/assignment/insert' , array('class' => 'form-horizontal form-groups-bordered validate', 'enctype' => 'multipart/form-data'));?>
	


                <div class="form-group">
                 	<label class="col-md-12" for="example-text"><?php echo get_phrase('name');?></label>
                    <div class="col-sm-12">
                                    <input type="text" class="form-control" name="name" / required>
                        </div>
                    </div>


                    <div class="form-group">
                 	<label class="col-md-12" for="example-text"><?php echo get_phrase('class');?></label>
                    <div class="col-sm-12">
                    <select name="class_id" id="class_id" class="form-control select2" onchange="return get_class_subject(this.value)">
                    <option value=""><?php echo get_phrase('select_class');?></option>

                    <?php $class =  $this->db->get('class')->result_array();
                    foreach($class as $key => $class):?>
                    <option value="<?php echo $class['class_id'];?>"><?php echo $class['name'];?></option>
                    <?php endforeach;?>
                   </select>

                  </div>
                 </div>

								
					<div class="form-group">
                 	<label class="col-md-12" for="example-text"><?php echo get_phrase('subject');?></label>
                    <div class="col-sm-12">
                    <select name="subject_id" class="form-control" id="subject_selector_holder">
                    <option value=""><?php echo get_phrase('select_subject');?></option>
                    </select>
                  </div>
                 </div>


						<div class="form-group">
                 	<label class="col-md-12" for="example-text"><?php echo get_phrase('select_date');?></label>
                    <div class="col-sm-12">

                 	<input type="date" name="timestamp" value="2018-08-19" class="form-control datepicker" id="example-date-input" required>
				   
                    </div>
                </div>

               <div class="form-group">
                 	<label class="col-md-12" for="example-text"><?php echo get_phrase('select_teacher');?></label>
                    <div class="col-sm-12">
                       
					   <select name="teacher_id" class="form-control select2" style="width:100%;" required>
										<option value=""><?php echo get_phrase('select');?></option>

                           <?php $teacher =  $this->db->get('teacher')->result_array();
                                    foreach($teacher as $key => $teacher):?>         	
                                    		<option value="<?php echo $teacher['teacher_id'];?>"><?php echo $teacher['name'];?></option>
                            <?php endforeach;?>
                                     
                                    </select>              
					    
						
                    </div> 
                </div>


                <div class="form-group">
                 	<label class="col-md-12" for="example-text"><?php echo get_phrase('file_type');?></label>
                    <div class="col-sm-12">
                       
					   <select name="file_type" class="form-control select2" style="width:100%;" required>
										<option value=""><?php echo get_phrase('file_type');?></option>

                           
                                    		<option value="pdf">PDF</option>
                                            <option value="xlsx">Excel</option>
                                            <option value="docx">Word Document</option>
                                            <option value="img">Image</option>
                                            <option value="txt">Text File</option>
                          
                                     
                                    </select>              
					    
						
                    </div> 
                </div>


				
				
				<div class="form-group">
                 	<label class="col-md-12" for="example-text"><?php echo get_phrase('description');?></label>
                    <div class="col-sm-12">
                                <textarea  name="description" class="form-control textarea_editor"></textarea>
                            </div>
                        </div>
				
				
							
					<div class="form-group">
                 	<label class="col-md-12" for="example-text"><?php echo get_phrase('select_document');?></label>
                    <div class="col-sm-12">
                    <input type="file" name="file_name" class="dropify" required>
                    </div></div>
							
						

                    
                    <div class="form-group">
							<button type="submit" class="btn btn-info btn-block btn-sm btn-rounded"> <i class="fa fa-plus"></i>&nbsp;<?php echo get_phrase('add_assignment');?></button>
					</div>
					<br>
                <?php echo form_close();?>	
									
									
                                </div>
                            </div>
                        </div>
                    </div>
				</div>  
  
  
  
  
  <div class="row">
                    <div class="col-sm-12">
				  	<div class="panel panel-info">
                            <div class="panel-heading"> <i class="fa fa-list"></i>&nbsp;&nbsp;<?php echo get_phrase('list');?></div>
                            <div class="panel-wrapper in" aria-expanded="true">
                                <div class="panel-body table-responsive">
								
<table id="example23" class="display nowrap" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>#</th>
            <th><?php echo get_phrase('file_type');?></th>
            <th><?php echo get_phrase('title');?></th>
            <th><?php echo get_phrase('class');?></th>
            <th><?php echo get_phrase('subject');?></th>
            <th><?php echo get_phrase('teacher');?></th>
            <th><?php echo get_phrase('description');?></th>
            <th><?php echo get_phrase('options');?></th>
        </tr>
    </thead>

    <tbody>

    <?php $counter = 1; $assignment = $this->db->get('assignment')->result_array();
                foreach($assignment as $key => $assignment):?>
            <tr>
                <td><?php echo $counter++;?></td>
                <td>
                <?php if($assignment['file_type']=='img' || $assignment['file_type']== 'jpg' || $assignment['file_type']== 'png'){?>
                <img src="<?php echo base_url();?>optimum/images/image.png" style="max-height:40px;">
                <?php }?>
                <?php if($assignment['file_type']=='docx'){?>
                <img src="<?php echo base_url();?>optimum/images/doc.jpg" style="max-height:40px;">
                <?php }?>
                <?php if($assignment['file_type']=='pdf'){?>
                <img src="<?php echo base_url();?>optimum/images/pdf.jpg" style="max-height:40px;">
                <?php }?>
                <?php if($assignment['file_type']=='xlsx'){?>
                <img src="<?php echo base_url();?>optimum/images/text.png" style="max-height:40px;">
                <?php }?>
                <?php if($assignment['file_type']=='txt'){?>
                <img src="<?php echo base_url();?>optimum/images/text.png" style="max-height:40px;">
                <?php }?>

              
                </td>
                <td><?php echo $assignment['name'];?></td>
                <td><?php echo $this->db->get_where('class', array('class_id' => $assignment['class_id']))->row()->name;?></td>
                <td><?php echo $this->db->get_where('subject', array('subject_id' => $assignment['subject_id']))->row()->name;?></td>
                <td><?php echo $this->db->get_where('teacher', array('teacher_id' => $assignment['teacher_id']))->row()->name;?></td>
                <td><?php echo $assignment['description'];?></td>
                <td>
                <a href="<?php echo base_url().'uploads/assignment/'. $assignment['file_name'];?>"><button type="button" class="btn btn-info btn-circle btn-xs" ><i class="fa fa-download"></i></button></a>
                    <a  onclick="showAjaxModal('<?php echo base_url();?>modal/popup/assignment_edit/<?php echo $assignment['assignment_id'];?>');" ><button type="button" class="btn btn-success btn-circle btn-xs"><i class="fa fa-pencil"></i></button></a>
					 <a href="<?php echo base_url();?>assignment/assignment/delete/<?php echo $assignment['assignment_id'];?>" ><button type="button" class="btn btn-danger btn-circle btn-xs" onclick="return confirm('Are you sure to delete?');"><i class="fa fa-times"></i></button></a>
					
                   
                </td>
            </tr>
    <?php endforeach;?>
    </tbody>
</table>
</div>
</div>
</div>
</div>
</div>

<script type="text/javascript">
function get_class_subject(class_id){
    $.ajax({
        url:        '<?php echo base_url();?>admin/get_class_subject/' + class_id,
        success:    function(response){
            jQuery('#subject_selector_holder').html(response);
        } 

    });
}
</script>
