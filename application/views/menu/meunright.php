        <section class="page container">
            <div class="row">
                <div class="span6">
                    <div class="blockoff-right">
                        <ul id="person-list" class="nav nav-list">
                            <li class="nav-header">Data Box</li>
                            <li class="active">
                                     <li>
                              

										  <?php  foreach ($data_type as $row) {  
													 echo "<li>";
													 echo "<i class='icon-chevron-right pull-right'></i>";
													 echo "<a href='#'>".$row['type_name']."</a>";
													 echo "</li>";
													
													 }
													?>

											   <li>


											   	  <?php  foreach ($division_group as $row) {  
													 echo "<li>";
													 echo "<i class='icon-chevron-right pull-right'></i>";
													 if(){
													 echo "<a href='#'>".$row['group_title']."".$row['divisname']."</a>";
													 echo "</li>";
													 }
													
													 }
													?>

											   <li>
                                  

                                                 </ul>
												 </ul>

                                    </a>
                                </li>


                                      
                                                 </ul>
												 </ul>
                                         </li>
                                </li>
								<li>
                               

                                                 </ul>
												 </ul>
                                    </a>
                                </li>
                            
                        </ul>
                    </div>
                </div>