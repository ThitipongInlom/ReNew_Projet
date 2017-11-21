
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
</head>
<?php  ?>
<body class="hold-transition login-page">
<div class="row">
	<div class="col-md-6">
		<div class="box box-danger">
            <div class="box-header with-border">
              <h3 class="box-title">ตั้งค่า WiFi Show Grop</h3>
            </div>
            <div class="box-body">
	        <?php  
	        $host = '172.16.0.240';
	        $username = 'root';
	        $password = '';
	        $db = 'new_projet'; 
	        $conn = new mysqli($host, $username, $password, $db);
	        $sql="SELECT * from set_level_below";
	        $result = $conn->query($sql);
	        ?>    	
	    <div style="padding-bottom: 10px;">
	    	<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-add">
                <span class="glyphicon glyphicon-plus"></span>เพื่ม Grop
             </button>
	    </div>    
        <table id="wifishowgrop" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Grop</th>
                <th>Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Grop</th>
                <th>Action</th>
            </tr>
        </tfoot>
        <tbody>
        		<?php $i='0'; while($row = $result->fetch_assoc()) { $i++ ?>
            	<tr>
                <td align="center"><?php echo $i; ?></td>
                <td align="center"><?php echo $row['Level_Below_data']; ?></td>
                <td align="center">
                <button type="button" class="btn btn-sm btn-danger" id="<?php echo $row['Level_Below_id']; ?>" onclick="get_no(this.id);">
                <span class="glyphicon glyphicon-minus"></span>
              </button></td>
            	</tr>
            	<?php } ?>
        </tbody>
    </table>
            </div>
        </div>
	</div>
	<div class="col-md-6">
		<div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">ตั้งค่า Promotion</h3>
            </div>
            <div class="box-body">
      <?php  
      $sql="SELECT * from promotion";
      $result = $conn->query($sql);
      ?>       
      <div style="padding-bottom: 10px;">
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-Promotion">
        <span class="glyphicon glyphicon-plus"></span>เพื่ม Promotion
      </button>
      </div>
      <div class="overlay">
      <table id="promotion" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>ชื่อโปรโมชั่นไทย</th>
                <th>ชื่อโปรโมชั่นอังกฤษ</th>
                <th>รูปภาพ</th>
                <th>Action</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>ชื่อโปรโมชั่นไทย</th>
                <th>ชื่อโปรโมชั่นอังกฤษ</th>
                <th>รูปภาพ</th>
                <th>Action</th>
            </tr>
        </tfoot>
        <tbody>
        <?php $i='0'; while($row = $result->fetch_assoc()) { $i++ ?>
              <tr>
                <td align="center"><?php echo $i; ?></td>
                <td align="center"><?php echo $row['promotion_head_th']; ?></td>
                <td align="center"><?php echo $row['promotion_head_en']; ?></td>
                <td align="center"><img src="http://172.16.0.129/renew/assets/promotion/<?php echo $row['promotion_img']; ?>" alt="Test" style="width: 50px; height: 50px;"></td>
                <td align="center"></td>
              </tr>
        <?php } ?>      
        </tbody>
    </table>
              
            <i class="fa fa-refresh fa-spin"></i>
            </div>
            </div>
        </div>
	</div>
</div>

        <div class="modal fade" id="modal-add">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">เพื่ม Grop</h4>
              </div>
              <div class="modal-body">
                <div>
                	<div class="form-group">
	                  <label for="newgrop">New Grop</label>
	                  <input type="text" class="form-control" id="newgrop" placeholder="Name New Grop" name="newgrop">
	                </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">ปิด</button>
                <button type="button" class="btn btn-success" id="add-grop">เพิ่มGrop</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="modal-Promotion">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">เพื่ม Promotion</h4>
              </div>
              <div class="modal-body">
                <form action="" method="post" accept-charset="utf-8">
                <div>
                  <div class="form-group">
                    <label for="newgrop">ชื่อโปรโมชั่นไทย</label>
                    <input type="text" class="form-control" id="promotion_head_th" placeholder="ชื่อโปรโมชั่นไทย Grop" name="promotion_head_th">
                  </div>
                  <div class="form-group">
                    <label for="newgrop">ชื่อโปรโมชั่นอังกฤษ</label>
                    <input type="text" class="form-control" id="promotion_head_en" placeholder="ชื่อโปรโมชั่นอังกฤษ Grop" name="promotion_head_en">
                  </div>
                  <div class="form-group">
                  <label for="promotion_img">รูปภาพ</label>
                  <input type="file" id="promotion_img" accept="image/*">
                  </div>
                </div>
              </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">ปิด</button>
                <button type="button" class="btn btn-success" id="add-Promotion">เพิ่มPromotion</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="modal-view">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">ลบรายชื่อ</h4>
              </div>
              <div class="modal-body">
                <?php echo $row['Level_Below_id'];?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>       
<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>              
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
    $('#wifishowgrop').DataTable();
    $('#promotion').DataTable();
  });
  function get_no(argument) {
  alert('ยืนยันการลบ Grop');
  var datasrting = 'id='+ argument;
  $.ajax({
    type: "POST",
    url: "wificomment_setting_action.php",
    data: datasrting,
    success: function(result){
      //console.log(result);
      setTimeout("window.location.href = '';", 500);
    }});
  }
  $("#add-grop").click(function() {
    var newgrop = $("#newgrop").val();
    alert('ยืนยันการสร้าง Grop');
    var datasrting = 'add='+ newgrop;
  $.ajax({
    type: "POST",
    url: "wificomment_setting_action.php",
    data: datasrting,
    success: function(result){
      //console.log(result);
      setTimeout("window.location.href = '';", 500);
    }});
  });

  $("#add-Promotion").click(function() {
    var file_data = $('#promotion_img').prop('files')[0];
    console.log(file_data);
    var datasrting = 'file='+ file_data;
    $.ajax({
    type: "POST",
    url: "wificomment_setting_action.php",
    data: datasrting,
    success: function(result){
      console.log(result);
      //setTimeout("window.location.href = '';", 500);
    }});
  });
</script>
</body>
</html>
