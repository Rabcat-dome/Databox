									    <?php $this->load->view('header/header_title'); ?>
										<?php $this->load->view('menu/menu'); ?>
									    <?php $this->load->view('menu/meunright_detail'); ?>
										<?php $this->load->view('java/javascript_head.php'); ?>
                <div class="span10">
                Unit
				<select>
  <option value="">----</option>
      <option value="">---</option>
     <option value="">--</option>
    <option value="">---</option>
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
                            
                                
                            <?php    foreach ($box as $row) {  
                          
						
						echo "<tr>";
						echo "<td  width='20%'>".$row['date_upload']."</td>";	
						echo "<td>".$row['subject']."</td>";
				
						echo "</tr>";
						
						} ?>
                                
                            
                            </tbody>
                        </table>
                        </div>

                    </div>
                
                  
                        </div>

                    </div>
                
                </div>
            </div>
                    
                    <?php $this->load->view('footer/footer'); ?>
                    