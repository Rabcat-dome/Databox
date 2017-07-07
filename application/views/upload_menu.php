        <?php $this->load->view('header/header_title'); ?>
        <?php $this->load->view('menu/menu'); ?>
        <?php $this->load->view('menu/meunright_upload'); ?>
		<?php $this->load->view('java/javascript_head.php'); ?>
	    <?php $attributes = array('id' => 'myform');
        echo form_open('http://localhost/databoxx/index.php/mainFunction/save', $attributes);?>
                <div class="span8">

					<div class="container-signin">
                            <legend>Upload File</legend>
                            <form action='dashboard.html' method='POST' id='loginForm' class='form-signin' autocomplete='off'>
                                <div class="form-inner">

								 <div class="input-prepend">
                                        
                                        <span class="add-on"><i class="icon-pencil"></i>  เรื่อง</span>
                                        <input type='password' class='span4' id='password'/>
                                    </div>
                                    <div class="input-prepend">
                             <div style="position:relative;">
		                     <a class='' href='javascript:;'>

			                  
			              <span class="add-on"><i class="icon-book"></i></span>
						
										<select class='span4'>
													 <option value=""></option>	
										</select>
							  
              
								 </div>				

                                    </div>

										<div style ='background-color: #ffffff;'>

									
										<?php    foreach ($upload_menu as $row) { 
										echo "<input type='checkbox' > </input>";
										echo "".$row['class_name']."";
										} ?>
										 
										</div >

                                    <div class="input-prepend">

                                
                                   
                                    </div>
									
                                       <?php $this->load->view('menu/menu_edit'); ?>

										<ul id="sortable">
										<?php    foreach ($upload_menu_type as $row) { 
										echo "<li class='ui-state-default'>".$row['type_name']."</li>";
										echo "<ul>";
										echo "<li class='ui-state-default'>".$row['type_name']."</li>";
										echo "</ul>";
										} ?>
										
									
                                    </label>
                                </div>
                                <footer class="signin-actions">
                                    <input class="btn btn-primary" type='submit' id="submit" value='บันทึก'/>
                                </footer>
                            </form>
                        </div>
																												
                </div>
		
        </div>
        </div>
        </div>

	
		 <?php echo form_close(); ?>
        <?php $this->load->view('footer/footer'); ?>
                    