
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>ระบบ J3 Databox</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="layout" content="main"/>
    
    <script type="text/javascript" src="http://www.google.com/jsapi"></script>

    <script src="../../asset/js/jquery/jquery-1.8.2.min.js" type="text/javascript" ></script>
       
    <link href="../../asset/css/customize-template.css" type="text/css" media="screen, projection" rel="stylesheet" />


</head>

    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <button class="btn btn-navbar" data-toggle="collapse" data-target="#app-nav-top-bar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="" class="brand"><i class="icon-data"> J3 DataBox</i></a>
                    <div id="app-nav-top-bar" class="nav-collapse" >

                        <ul class="nav" style="margin-top: 10px; " >
						
						คลังข้อมูล กรมยุทธการทหาร
                        </ul>
                        <ul class="nav pull-right">

                            <li>
							
                         <table width="200"   border="0">
						 <div  style="margin-top: 4px; ">
						  <td valign="bottom" >  
                            <select style="height: 1.5em;" data-placeholder="Choose a Country...">
                            <option value=""></option>
                      

                            </select>
							</div>
							</td>
							  <td> &nbsp;</td>
							  <td >  
							   <div  style="margin-top: -10px; ">
							  <button type="submit" class="btn btn-primary" valign="top"  >ค้นหา</button>
							  </div>
                            </li>
							</td>
                            </table>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="body-container">
            <div id="body-content">
                
                    <div class="body-nav body-nav-horizontal body-nav-fixed">
                        <div class="container">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="icon-mail icon-large"></i> เมล์ ยก.ทหาร
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-pencil-square-os icon-large"></i> ระบบสารบรรณ
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa-truck icon-large"></i>บริหารไปราชการ
                                    </a>
                                </li>
								 <li>
                                    <a href="#">
                                        <i class="fa-picture-o icon-large"></i>คลังภาพ 
                                    </a>
                                </li>
                              
                              
                                <li>
                                    <a href="#">
                                        <i class="fa-signal icon-large"></i> ลงทะเบียน
                                    </a>
                                </li>
								  <li>
                                    <a href="#">
                                        <i class="fa-group icon-large"></i>ทำเนียบกำลังพล
                                    </a>
                                </li>
								
								 
								<li style="background-color: gray;">
                                    <div style="  font-size: 32px; line-height: 32px; margin-top: 13px; width: 10%;  display: block;">
                                        <i class="fa-w icon-large"></i>
                                    </div>
									 <div style="  font-size: 11px;">
									ระบบสนับสนุน IT
									</div>
                                </li>
								
								<li style="background-color: gray;">
                                    <div style="  font-size: 32px; line-height: 32px; margin-top: 13px; width: 10%;  display: block;">
                                        <i class="fa-nod icon-large"></i> 
                                    </div>
									 <div style="  font-size: 11px;">
									NOD32
									</div>
									
                                </li>
								<li style="background-color: gray;">
                                    <div style="  font-size: 32px; line-height: 32px; margin-top: 13px; width: 10%;  display: block;">
                                        <i class="fa-time icon-large"></i>
                                    </div>
										 <div style="  font-size: 11px;">
									ระบบจัดการ
									</div>
									
                                </li>
								
                            </ul>
                        </div>
                    </div>


                
                
        <section class="nav nav-page">
        <div class="container">
            <div class="row">
                <div class="span7">
                    <header class="page-header">
                        <h3>ระบบงาน ยก.ทหาร<br/>
                            <small><?php
							 
							           $var1 =  date("Y-m-d"); 
										$dayArray = array("อาทิตย์","จันทร์","อังคาร", "พุธ", "พฤหัสบดี","ศุกร์","เสาร์");
										$monthArray = array("มกราคม","มกราคม","กุมภาพันธ์","มีนาคม", "เมษายน", "พฤษภาคม","มิถุนายน","กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน","ธันวาคม");
									    $days_yesr = $var1;
										$day=substr($days_yesr,8,3);
					                    $month=substr($days_yesr,5,2);
										$yesr=substr($days_yesr,0,4);
									    $month =$month+0;
										$day =$day+0;
									
										$month = $monthArray[$month];
										
										
										
										$daydata =  $var1;
                                        $daydata = explode("-",$daydata);
                                        $jd=cal_to_jd(CAL_GREGORIAN,$daydata[1],$daydata[2],$daydata[0]); //2011-01-29
                                        $day_text = (jddayofweek($jd,1));	    
										echo "วันที่&nbsp;";	
										echo $day;
										echo "&nbsp;";
										echo $month;
										echo "&nbsp;";
										echo $yesr+543;
										?>
										</small>
                        </h3>
                    </header>

                </div>
                <div class="page-nav-options">
                    <div class="span9"  >
                        <ul class="nav nav-pills">
                            <li>
                                <a href="page_upload"><i class="icon-home icon-large"></i></a>
                            </li>
                        </ul>
                        <ul class="nav nav-tabs" >
                            <li class="active">
                            <a href="index">หน้าแรก</a></li>
                            <li><a href="executive">ภารกิจกรม</a></li>
							</ul>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>


            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
        