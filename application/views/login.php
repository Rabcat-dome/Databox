<html>
<head>
	<?php $this->load->view('java/javascript_head.php'); ?>
	<title></title>
</head>
	<?php echo form_open('mainFunction/index');?>

<div class='main'>
	<div class="signblog">
    <div class="signblog-bg"></div>
    <div class="signblog-content">
<div class="hbox"></div>
<div class="tbox"><input type="text" name="txt_username" id="txt_username" placeholder="username" value="<?php echo set_value('txt_username'); ?>"></div>
<div class="tbox"  style='text-align:center;color:red;'><input type="password" name="txt_password" id="txt_password" placeholder="password" value="<?php echo set_value('txt_password'); ?>"><?php echo form_error('txt_username'); ?><?php echo form_error('txt_password'); ?><?php echo $this->session->flashdata('msg'); ?></div>
<div class="tip"></div>
<div ><input type="submit" id="btn_login" name="btn_login" value="Login" class="btn"></div>
    </div>
	</div>
</div>
	<?php echo form_close(); ?>
</body>
</html>