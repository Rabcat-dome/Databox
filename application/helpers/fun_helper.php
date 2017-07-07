<?php
function ldap_login($username,$password,$goback_url){  //usernameกับpass ควรทำเป็นsessionไว้เช็คในหน้าที่บังคับ  ส่วนgoback url คือหน้าที่ให้ไปล๊อกอินใหม่

//server ที่ติดตั้งต้องเปิด ldap ก่อนนะจ๊ะ
$ldap_host = 'ldap://apricot.j3.mil';
$conn = ldap_connect($ldap_host);
$ldap_user = $username;
$ldap_pass = $password;
$ldaprdn = 'j3' . "\\" . $ldap_user;

    ldap_set_option($conn, LDAP_OPT_PROTOCOL_VERSION, 3);
    ldap_set_option($conn, LDAP_OPT_REFERRALS, 0);

 	$bind = @ldap_bind($conn,$ldaprdn,$ldap_pass);
//ตรงนี้มันมีปัญหาว่า เวลาไม่ใส่อะไรเลย  ดันเข้าได้เฉยเลย  ดังนั้นต้องย้อนกลับมาตรวจสอบค่าว่างอีกที

 				if ($bind&&$ldap_pass!="") {
       				$filter="(sAMAccountName=$ldap_user)";
        			$result = ldap_search($conn,"dc=j3,dc=mil",$filter);
        			ldap_sort($conn,$result,"sn");
        			$info = ldap_get_entries($conn, $result);

     if($info[0]["samaccountname"][0]==$ldap_user){}else{ redirect($goback_url, 'refresh');}
        @ldap_close($conn);
    } else {
      redirect($goback_url, 'refresh');  //ย้อนกลับไปที่ url login
    }}

function ldap_check($username,$password){  //usernameกับpass ควรทำเป็นsessionไว้เช็คในหน้าที่บังคับ  ส่วนgoback url คือหน้าที่ให้ไปล๊อกอินใหม่

//server ที่ติดตั้งต้องเปิด ldap ก่อนนะจ๊ะ
$ldap_host = 'ldap://apricot.j3.mil';
$conn = ldap_connect($ldap_host);
$ldap_user = $username;
$ldap_pass = $password;
$ldaprdn = 'j3' . "\\" . $ldap_user;

    ldap_set_option($conn, LDAP_OPT_PROTOCOL_VERSION, 3);
    ldap_set_option($conn, LDAP_OPT_REFERRALS, 0);

  $bind = @ldap_bind($conn,$ldaprdn,$ldap_pass);
//ตรงนี้มันมีปัญหาว่า เวลาไม่ใส่อะไรเลย  ดันเข้าได้เฉยเลย  ดังนั้นต้องย้อนกลับมาตรวจสอบค่าว่างอีกที

        if ($bind&&$ldap_pass!="") {
              $filter="(sAMAccountName=$ldap_user)";
              $result = ldap_search($conn,"dc=j3,dc=mil",$filter);
              ldap_sort($conn,$result,"sn");
              $info = ldap_get_entries($conn, $result);

     if($info[0]["samaccountname"][0]==$ldap_user){return true;}else{ return false;}
        @ldap_close($conn);
    } else {
        return false; //ย้อนกลับไปที่ url login
    }

}



//  เผื่อไว้ถ้าพี่เต้ยแกทำ syslog ไว้ให้
# replace PAPERTRAIL_HOSTNAME and PAPERTRAIL_PORT
# see http://help.papertrailapp/ for additional PHP syslog options

function send_remote_syslog($message, $component = "INTRANET", $program = "OUTDOOR") {
  $sock = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
  foreach(explode("\n", $message) as $line) {
    $syslog_message = "<38>"  . $program . ' ' . $component . ': ' . $line;
    socket_sendto($sock, $syslog_message, strlen($syslog_message), 0,'log.j3.mil', 514);
  }
  socket_close($sock);
}

//send_remote_syslog("Test"."asdasd"."asdas");
# send_remote_syslog("Any log message");
# send_remote_syslog("Something just happened", "other-component");
# send_remote_syslog("Something just happened", "a-background-job-name", "whatever-app-name");
?>

