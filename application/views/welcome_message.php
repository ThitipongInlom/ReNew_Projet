<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Thezignhotel</title>
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

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<style type="text/css" media="screen">
.cc-selector input{
    margin:0;padding:0;
    -webkit-appearance:none;
       -moz-appearance:none;
            appearance:none;
}
.happy{background-image:url(<?php echo base_url().'assets/icon/4_New.png' ; ?>);}
.confused{background-image:url(<?php echo base_url().'assets/icon/3.png'; ?>);}
.sad{background-image:url(<?php echo base_url().'assets/icon/2_New.png'; ?>);}

.cc-selector input:active +.drinkcard-cc{opacity: .9;}
.cc-selector input:checked +.drinkcard-cc{
    -webkit-filter: none;
       -moz-filter: none;
            filter: none;
}
.drinkcard-cc{
    cursor:pointer;
    background-size:contain;
    background-repeat:no-repeat;
    display:inline-block;
    width:100px;height:70px;
    -webkit-transition: all 100ms ease-in;
       -moz-transition: all 100ms ease-in;
            transition: all 100ms ease-in;
    -webkit-filter: brightness(75%) opacity(75%) grayscale(75%);
       -moz-filter: brightness(75%) opacity(75%) grayscale(75%);
            filter: brightness(75%) opacity(75%) grayscale(75%);
}
.drinkcard-cc:hover{
    -webkit-filter: brightness(1.2) grayscale(.5) opacity(.9);
       -moz-filter: brightness(1.2) grayscale(.5) opacity(.9);
            filter: brightness(1.2) grayscale(.5) opacity(.9);
}
</style>
<link rel="shortcut icon" href="<?php echo base_url().'assets/icon/icon.ico'; ?>" /> 
</head>
<body class="hold-transition" style="background: black;" >
<!-- Head -->  
<div class="box box-solid">
            <div class="box-header with-border" style="background-color: #ce5008;">
            <div class="row"> 
            <div class="col-md-2 col-xs-7 col-sm-6">

                <!--
                <a class="btn float-left 
                <?php  
                if($this->session->site_lang == 'english'){echo 'btn-info';}
                else{echo 'btn-default';}
                ?>" href="<?php echo base_url(); ?>Language/switchLang/english" role="button" type="submit" name="lang" value="en" id="english">
                <img src="<?php echo base_url().'assets/icon/en.png'; ?>" class="rounded" width="24" height="24"></a>
                -->

                <button class="btn float-left
                <?php  
                if($this->session->site_lang == 'english'){echo 'btn-info';}
                else{echo 'btn-default';}
                ?>" type="button" id="english">
                  <img src="<?php echo base_url().'assets/icon/en.png'; ?>" class="rounded" width="24" height="24">
                </button>  
                <!--
                <a class="btn float-left 
                <?php  
                if($this->session->site_lang == 'thai'){echo 'btn-info';}
                else{echo 'btn-default';}
                ?>" href="<?php echo base_url(); ?>Language/switchLang/thai" role="button" type="submit" name="lang" value="th" id="thai">
                <img src="<?php echo base_url().'assets/icon/th.png'; ?>" class="rounded logo" width="24" height="24"></a>
                -->

                <button class="btn float-left
                <?php  
                if($this->session->site_lang == 'thai'){echo 'btn-info';}
                else{echo 'btn-default';}
                ?>" type="button" id="thai">
                  <img src="<?php echo base_url().'assets/icon/th.png'; ?>" class="rounded" width="24" height="24">
                </button> 

            </div>
            <div class="col-md-1 col-md-offset-9  col-xs-2 col-xs-offset-1 col-sm-2 col-sm-offset-4">
              <img src="<?php echo base_url().'assets/icon/logo.png'; ?>" alt="Logo" width="80">
            </div>
            </div> 
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="background-color: #ff5500;">
            <div class="col-md-4 col-md-offset-4 col-xs-12">
                <div class="box box-info">
            <div class="box-body" align="center">
              <?php echo $this->lang->line('hi'); echo ' '; echo $this->session->Data_Web['firstname'];?>
            </div>
            <!-- /.box-body -->
            </div>
              </div>
            </div>
            <!-- /.box-body -->
</div>
<!-- Body -->
<div class="cc-selector">
        <div align="center">
        <h4 style="color: #ffffff;"><?php echo $this->lang->line('select_one_of_satisfactory_level_below'); ?>
</h4><br>
        <input id="happy" type="radio" name="levelbelow" value="happy" />
        <label class="drinkcard-cc happy changed" for="happy"></label>
        <input id="confused" type="radio" name="levelbelow" value="confused" />
        <label class="drinkcard-cc confused" for="confused"></label>
        <input id="sad" type="radio" name="levelbelow" value="sad" />
        <label class="drinkcard-cc sad" for="sad"></label>
        </div>
</div>
<hr style="background: #ffffff">
<div align="center">
  <h4 style="color: #ffffff;"><?php echo $this->lang->line('Problem_Found'); ?>
</h4><br>
<button type="button" class="btn btn-success btn-lg" id="yes_open_model" ><?php echo $this->lang->line('yes'); ?></button>
<button type="button" class="btn btn-danger btn-lg" id="no"><?php echo $this->lang->line('no'); ?></button>
</div>
<hr style="background: #ffffff">
<div align="center">
  <h4 style="color: #ffffff;"><?php echo $this->lang->line('promotion'); ?>
</div>
<div class="row">  
<div class="col-md-12 col-xs-12  col-sm-12">
<?php foreach ($promotion as $row)
{ ?>  
<div class="col-md-4 col-xs-12  col-sm-4">
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-fw fa-tags"></i>
                <?php  
                if ($this->session->site_lang == 'thai') {
                  echo $row->promotion_head_th;
                }else{
                  echo $row->promotion_head_en;
                }
                ?>
                </h3>
            </div>
            <div class="box-body">
             <div align="center"> 
            <img src="<?php echo base_url().'assets/promotion/'.$row->promotion_img.''; ?>" alt="..." class="img-responsive">
             </div>
            </div>
</div>            
</div>
<?php } ?>
<div>
</div>

<!-- Modal -->
<div class="modal fade" id="Yes" tabindex="-1" role="dialog" aria-labelledby="titlemodal" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="titlemodal"><?php echo $this->lang->line('Problem_Found'); ?></h4>
      </div>
      <div class="modal-body">
      <div class="box box-info">
            <div class="box-header with-border">
              <label for="fitness" style="padding-left: 10px; font-size: 18px;"><?php echo $this->lang->line('texttatable'); ?></label>
            </div>
          <div class="box-body">
            <div class="row">
              <div class="col-md-6 col-xs-6">
                <!-- checkbox liet -->
                <div class="checkbox icheck">
                    <input type="checkbox" class="check_data" id="room">
                    <label for="room" style="padding-left: 10px; font-size: 18px;"><?php echo $this->lang->line('room'); ?></label>
                </div>
                <div class="checkbox icheck">
                    <input type="checkbox" class="check_data" id="fitness">
                    <label for="fitness" style="padding-left: 10px; font-size: 18px;"><?php echo $this->lang->line('fitness'); ?></label>
                </div>
                <div class="checkbox icheck">
                    <input type="checkbox" class="check_data" id="other">
                    <label for="other" style="padding-left: 10px; font-size: 18px;"><?php echo $this->lang->line('other'); ?></label>
                </div>
              </div>
              <div class="col-md-6 col-xs-6">
                <!-- checkbox right -->
                 <div class="checkbox icheck">
                    <input type="checkbox" class="check_data" id="Spa">
                    <label for="Spa" style="padding-left: 10px; font-size: 18px;"><?php echo $this->lang->line('spa'); ?></label>
                </div>
                <div class="checkbox icheck">
                    <input type="checkbox" class="check_data" id="restaurant">
                    <label for="restaurant" style="padding-left: 10px; font-size: 18px;"><?php echo $this->lang->line('restaurant'); ?></label>
                </div>
              </div>
            </div>
          <div class="form-group">
                  <label><?php echo $this->lang->line('detail'); ?></label>
                  <textarea class="form-control" id="detail" rows="3" placeholder="<?php echo $this->lang->line('detail');echo ' ...';?>"></textarea>
          </div>
          </div>
      </div>
      </div>
      <div class="modal-footer">
        <div align="center">
          <button type="button" class="btn btn-primary" id="send_data"><?php echo $this->lang->line('senddata'); ?></button>
        </div>
      </div>
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
<!-- Js Check No Send -->
<script src="<?php echo base_url().'assets/js_ajax/ajax_no_data.js'; ?>"></script>
<!-- Js Check Yes Send -->
<script src="<?php echo base_url().'assets/js_ajax/ajax_yes_data.js'; ?>"></script>
<!-- JS Click_ Yes -->
<script src="<?php echo base_url().'assets/js_ajax/Click_yes.js'; ?>"></script>
<!-- JS Lang -->
<script src="<?php echo base_url().'assets/js_ajax/ajax_lang.js'; ?>"></script>
<!-- include the script -->
<script src="<?php echo base_url().'assets/alertify/alertify.min.js'; ?>"></script>
<script type="text/javascript">
$(function () {
    $('.check_data').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
