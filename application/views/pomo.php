<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Promotion</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?php echo base_url().'assets/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css'; ?>">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url().'assets/adminlte/bower_components/font-awesome/css/font-awesome.min.css'; ?>">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?php echo base_url().'assets/adminlte/bower_components/Ionicons/css/ionicons.min.css'; ?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url().'assets/adminlte/dist/css/AdminLTE.min.css'; ?>">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
	       folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?php echo base_url().'assets/adminlte/dist/css/skins/_all-skins.min.css'; ?>">
	<!-- iCheck -->
	<link rel="stylesheet" href="<?php echo base_url().'assets/adminlte/plugins/iCheck/square/blue.css'; ?>">
	<!-- include the style -->
	<link rel="stylesheet" href="<?php echo base_url().'assets/alertify/css/alertify.min.css'; ?>" />
	<!-- include a theme -->
	<link rel="stylesheet" href="<?php echo base_url().'assets/alertify/css/themes/bootstrap.min.css'; ?>" />
	<link rel="shortcut icon" href="<?php echo base_url().'assets/icon/icon.ico'; ?>" /> 
</head>
<body class="hold-transition login-page">
	<div class="row">
		<div class="col-md-12">
			<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><?php echo $this->lang->line('promotion'); ?></h3>
              <div class="box-tools pull-right">
                <button class="btn float-left
                <?php  
                if($this->session->site_lang == 'english'){echo 'btn-info';}
                else{echo 'btn-default';}
                ?>" type="button" id="english" style="margin-bottom: 5px;">
                  <img src="<?php echo base_url().'assets/icon/en.png'; ?>" class="rounded" width="20" height="20">
                </button>
                <button class="btn float-left
                <?php  
                if($this->session->site_lang == 'thai'){echo 'btn-info';}
                else{echo 'btn-default';}
                ?>" type="button" id="thai" style="margin-bottom: 5px;">
                  <img src="<?php echo base_url().'assets/icon/th.png'; ?>" class="rounded" width="20" height="20">
                </button> 
              </div>
            </div>
            <div class="box-body">
              <a href="http://www.thezignhotel.com/">	
              <img src="<?php echo base_url().'assets/promotion/1.jpg'; ?>" alt="Promotion" class="img-thumbnail img-responsiv"></a>
            </div>
          </div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div align="center">
				<?php  
				if ($checkrow =='1') {
				echo 
				'<a href="'.site_url('index.php/Pomo/blackcomment').'">
				<button type="button" class="btn btn-danger">'.$this->lang->line("Problem_Found").'</button>
				</a>';
				}
				?>
				<a href="http://www.thezignhotel.com/">
				<button type="button" class="btn btn-info"><?php echo $this->lang->line('goweb'); ?></button>
				</a>
			</div>
		</div>	
	</div>
	<!-- jQuery 3 Online -->
	<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
	<!-- jQuery 3 -->
	<script src="<?php echo base_url().'assets/adminlte/bower_components/jquery/dist/jquery.min.js'; ?>"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="<?php echo base_url().'assets/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js'; ?>"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url().'assets/adminlte/dist/js/adminlte.min.js'; ?>"></script>
	<!-- iCheck 1.0.1 -->
	<script src="<?php echo base_url().'assets/adminlte/plugins/iCheck/icheck.min.js'; ?>"></script>
	<!-- JS Lang -->
	<script src="<?php echo base_url().'assets/js_ajax/ajax_lang2.js'; ?>"></script>
</body>
</html>