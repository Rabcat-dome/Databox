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

			                  
			                <table width="200" border="0">
							<tr>
							<td width="10"> <span class="add-on" rel="tooltip" title="Username or E-Mail Address" data-placement="top"><i class="icon-home icon-large"></i></span>
							<input type="file" style='position:absolute;z-index:2;top:0;left:0;filter: alpha(opacity=0);-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";opacity:0;background-color:transparent;color:transparent;' name="file_source" size="40"  onchange='$("#upload-file-info").html($(this).val());'></input></td>
							<td ><div class="" style='border-style:  solid;  border-color: #red; background-color:#ffffff;'> <span class='label label-info' id="upload-file-info" style=' background-color:transparent;color:blue';></span></div></td>
							</tr>
							</table>
							  
              
								 </div>				

                                    </div>

                                    <div class="input-prepend">
                                        
                                        <span class="add-on"><i class="icon-book"></i></span>
										<select class='span4'>
													 <option value=""></option>
													 <option value=""></option>
													 <option value=""></option>
													<option value=""></option>
										</select>
                                    
                                    </div>
									<div class="input-prepend">
                                        
                                         <span class="add-on"><i class="icon-book"></i></span>
										<select class='span4'>
													 <option value=""></option>
													 <option value=""></option>
													 <option value=""></option>
													<option value=""></option>
										</select>
                                    
                                    </div>
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
                    