<?php // $this->load->view('header/header_title'); ?>
<?php $this->load->view('menu/menu'); ?>
<script type="text/javascript"
src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$(".flip").click(function() {
			$(".panel_hidden").slideToggle("slow");
		});
	});
</script>

                                    <div class="span18">
                                    <div class="text-right">
                                    </div>			
                                     <div class="panel_hidden">
                                    </div>
                                    <?php $this->load->view('java/javascript_upload'); ?>
                                    <?php    ?>
                                    <?php echo form_close(); ?>
                                    <?php $attributes = array('id' => 'myform'); 
                                    echo form_open('http://localhost/databoxx/index.php/mainFunction/save', $attributes); ?>
                                    <div class="span21">
                                    <input type="hidden" name="check" id="check" ></input>
<br>
<br>
                                  
												

												<div class="box-content" >
                             <div class="box pattern pattern-sandstone">
                    <div class="box-header"  align='left'>
                        <i class="icon-list"></i>
                        <h5 >Last Update</h5>
                        <button class="btn btn-box-right" data-toggle="collapse" data-target=".box-list">
                            <i class="icon-reorder"></i>
                        </button>
                    </div>
                    <div class="box-content box-list collapse in">
                        <ul>
                           
                       <li>
                       <div>
                       <p class='news-item-preview'><table width="100%" border="0">

						</table>               
						</p>
                       <td align='left'>
                       </div> 
                       </li>   
                        

                        <?php

                               foreach ($search as $r) {
                               echo  "<li>";
                               echo  "<div>";
							   echo "<p class='news-item-preview'><table width='100%' border='0'>
								<tr>
								<td width='70%' align='left'>หัวข้อ ".$r['subject']."</td>
							    <td width='70%' align='left'>วันที่  ".$r['date_upload']."</td>
								</tr>
								<tr>
								<tr>
								<td width='10%' align='left'  rowspan='2'>รายละเอียด".$r['databox_detail']."....อ่านต่อ</td>
							    <td width='10%' align='left'>ไฟล์แนบ".$r['upload_url']."</td>
								</tr>
								<tr>
								<td width='10%' align='left'>คำค้นหา".$r['databox_search']."</td>
								</tr>
								</table> 
								</p>";
                               echo  "<td align='left'> ";
                               echo  "</div>";    
                               echo  "</li>";   
                            
	
                                       }
                            
                            ?>
                            </ul>
                        <div class="box-collapse">
                            <button class="btn btn-box" data-toggle="collapse" data-target=".more-list">
                          <a href="index1">หน้า 2</a>  
						
                            </button>
                        </div>
                        <ul class="more-list collapse out">
                            <li>
                                <div>
                                    <a href="#" class="news-item-title">หัวข้อเรื่อง</a>
                                    <p class="news-item-preview">เนื้อเรื่อง</p>
                                </div>
                            </li>
                          
                            
                        </ul>
                    </div>

                </div>
            </div>
                                                </div>
                                                </div>
                                                </div>
                                                </div>
<?php echo form_close(); ?>
<?php $this->load->view('footer/footer'); ?>


       
