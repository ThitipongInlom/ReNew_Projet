<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>IOS || Test</title>
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
</head>
<body>
	<button type="button" class="btn btn-danger btn-flat" id="alert">Alert</button>
	<?php  
	$browser = $this->agent->browser();
	$mobile = $this->agent->mobile();
	$platform = $this->agent->platform();

	echo $browser;
	echo '<br>';
	echo $mobile;
	echo '<br>';
	echo $platform;
	echo '<pre>';
	print_r($this->session->all_userdata());

	?>
	<!-- jQuery 3 -->
	<script src="<?php echo base_url().'assets/adminlte/bower_components/jquery/dist/jquery.min.js'; ?>"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="<?php echo base_url().'assets/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js'; ?>"></script>
	<!-- AdminLTE App -->
	<script src="<?php echo base_url().'assets/adminlte/dist/js/adminlte.min.js'; ?>"></script>
	<!-- iCheck 1.0.1 -->
	<script src="<?php echo base_url().'assets/adminlte/plugins/iCheck/icheck.min.js'; ?>"></script>
	<!-- include the script -->
	<script src="<?php echo base_url().'assets/alertify/alertify.min.js'; ?>"></script>
	<script type="text/javascript">
		$('#alert').click(function(event) {
	    alertify.defaults.theme.ok = "btn btn-primary";
		alertify.defaults.theme.cancel = "btn btn-danger";
		alertify.alert('Test ios','ทดสอบ Alert');
		});
	</script>
</body>
</html>