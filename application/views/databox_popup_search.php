

					<!-- Start Post Attachments -->
                   <div class="modal fade" id="uploader">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">✕</button>
                          <br>
                         
                        </div>
                        <div class="modal-body">
                          <form action="" >                      
                   		  <div class="dz-default dz-message">
			

						         ค้นหาเรื่อง <select style="width:100%;" onchange="myFunction('x','m')" >
							
								   <?php   

  	                     $databox	= $_POST['data'];	
						
							foreach ($box as $row) {  
                       
						if($databox==$row['group_Id']){
						
						echo "<option value='".$row['databox_id']."'>".$row['subject']."</option>";	
						
						         } 
						} ?>
							</select>		
										
					 
				     <div id="Person-1" class="box">
                        <div class="box-header">
                            <i class="icon-user iconิ-large"></i>
                            <h5>บทสรุปผู้บริหาร</h5>
                            
                        </div>
                        <div class="box-content box-table">
                        <table class="table table-hover tablesorter">
                            <thead>
                                <tr>
                                    <th>เวลา</th>
                                    <th>ชื่อ</th>
                                </tr>
                            </thead>
                             <tbody>
                            
                                
                            <?php   
  	                     $databox	= $_POST['data'];	
						
							foreach ($box as $row) {  
                       
						if($databox==$row['group_Id']){
						echo "<tr>";
						echo "<td  width='20%'>".$row['date_upload']."</td>";	
						echo "<td>".$row['subject']."</td>";
					    
						echo "</tr>";
						} 
						} ?>
                                
                            
                            </tbody>
                        </table>
                        </div>
							</table>
							</div>
							</div>
                          
                         
						
		<?php


?>


                                
                            
                      
                          </div>
                          </form>
                         </div>
                          <div class="modal-footer">
                          <button type="button" class="btn btn-default attachtopost" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  <!-- /.modal -->
  <!-- End Post Attachments -->
   