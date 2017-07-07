<?php
$db_username = 'root';
$db_password = '';
$db_name = 'j3databox';
$db_host = 'localhost';
$item_per_page = 10;

$mysqli = new mysqli($db_host, $db_username, $db_password, $db_name);
//Output any connection error
if ($mysqli->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
$mysqli->set_charset("utf8");
//include config file
//sanitize post value
$page_number = filter_var($_POST["page"], FILTER_SANITIZE_NUMBER_INT, FILTER_FLAG_STRIP_HIGH);

//throw HTTP error if page number is not valid
if(!is_numeric($page_number)){
	header('HTTP/1.1 500 Invalid page number!');
	exit();
}
//get current starting point of records
$position = ($page_number * $item_per_page);

//Limit our results within a specified range. 
$results = $mysqli->prepare("SELECT databox_id,date_upload,groupname,subject,short_division FROM databox_upload left join data_group left join division on division.group_Id = data_group.group_Id on data_group.group_Id = databox_upload.group_Id ORDER BY databox_upload.databox_id DESC LIMIT $position, $item_per_page");
$results->execute(); //Execute prepared Query
$results->bind_result($databox_id, $date_upload, $groupname,$subject,$short_division); 
//$results->bind_result($id, $name, $message); //bind variables to prepared statement

//output results from database

while($results->fetch()){ //fetch values
	echo "<li><div id='".$databox_id."'  align='left' class='message_box' >";
 	echo "<p class='news-item-preview'><table width='100%' border='0'>
								<tr>
								  <td width='10%' align='left'>".$date_upload."</td>
								  <td width='20%' align='left'>".$groupname."</td>
								  <td width='80%' align='left'>".$subject."</td>
							    <td>".$short_division."</td>
								</tr>
								</table> 
								</p>";
                               echo  "</div>";    
                               echo  "</li>";	
 					}

?>


