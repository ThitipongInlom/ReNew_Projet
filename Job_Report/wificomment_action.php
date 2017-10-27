<? 
include("../config.php");
include("../function.php");
    
    $connect_mysql253="mysqlwifi129";   

    $users_date_id=$_SESSION["login"]["id"];
    $users_date=$datetimenow;
    $users_date_by=$_SESSION["login"]["name"];
    $users_update_id=$_SESSION["login"]["id"];
    $users_update=$datetimenow;
    $users_update_by=$_SESSION["login"]["name"];
    $s_users_dept=$_SESSION["login"]["dept"];
    $s_id=$PHPSESSID;


$start  = isset($_REQUEST['start'])  ? $_REQUEST['start']  : 0;
$count  = isset($_REQUEST['limit'])  ? $_REQUEST['limit']  : 50;
$sort   = isset($_REQUEST['sort'])   ? $_REQUEST['sort']   : '';
$dir    = isset($_REQUEST['dir'])    ? $_REQUEST['dir']    : 'ASC';
$filters = isset($_REQUEST['filter']) ? $_REQUEST['filter'] : null;
if (is_array($filters)) { $encoded = false;} else {  $encoded = true;  $filters = json_decode($filters);}
$qs = '';
if (is_array($filters)) {
    for ($i=0;$i<count($filters);$i++){
        $filter = $filters[$i];
        if ($encoded) {
            $field = $filter->field;
            $value = $filter->value;
            $compare = isset($filter->comparison) ? $filter->comparison : null;
            $filterType = $filter->type;
        } else {
            $field = $filter['field'];
            $value = $filter['data']['value'];
            $compare = isset($filter['data']['comparison']) ? $filter['data']['comparison'] : null;
            $filterType = $filter['data']['type'];
        }
        switch($filterType){
            case 'string' : $qs .= " AND ".$field." LIKE '%".$value."%'"; Break;
            case 'list' :
                if (strstr($value,',')){
                    $fi = explode(',',$value);
                    for ($q=0;$q<count($fi);$q++){
                        $fi[$q] = "'".$fi[$q]."'";
                    }
                    $value = implode(',',$fi);
                    $qs .= " AND ".$field." IN (".$value.")";
                }else{
                    $qs .= " AND ".$field." = '".$value."'";
                }
            Break;
            case 'boolean' : $qs .= " AND ".$field." = ".($value); Break;
            case 'numeric' :
                switch ($compare) {
                    case 'eq' : $qs .= " AND ".$field." = ".$value; Break;
                    case 'lt' : $qs .= " AND ".$field." < ".$value; Break;
                    case 'gt' : $qs .= " AND ".$field." > ".$value; Break;
                }
            Break;
            case 'date' :
                switch ($compare) {
                    case 'eq' : $qs .= " AND ".$field." = '".date('Y-m-d',strtotime($value))."'"; Break;
                    case 'lt' : $qs .= " AND ".$field." < '".date('Y-m-d',strtotime($value))."'"; Break;
                    case 'gt' : $qs .= " AND ".$field." > '".date('Y-m-d',strtotime($value))."'"; Break;
                }
            Break;
        }
    }
    $where = $qs;
}   

if($_REQUEST['act']=="load"){
    $con_add=($id!="")?" and data_id='$id' ":"";
    $sql="SELECT * from data where 0=0 $con_add ";
    $q=new dbMan(trim(text_get($connect_mysql253)));        
    $q->query($sql);
    $data=json_encode($q->fetch_object());
    echo '{data:'.$data.'}';
    exit();
}

if($_GET["act"]=='grid'){
    
    $k=trim($_POST["keyword"]);
    $where.=($k!='')?" and (Yes_comment_name like '%$k%' or Yes_comment_room like '%$k%' or Yes_comment_grop like '%$k%' or Yes_comment_web like '%$k%' 
        or Yes_comment_mac like '%$k%' or Yes_comment_id like '%$k%') ":""; 
    $sql="select * from yes_comment where 0=0 $where ";
    $sql_sort=($sort != "")?" ORDER BY ".$sort." ".$dir:"";
    $sql_limit=($nolimit != "")?"":" LIMIT ".$start.",".$count;
        
    $q=new dbMan(trim(text_get($connect_mysql253)));        
    $q->query("select * from ($sql) a where 0=0 $where $sql_sort $sql_limit");
    $data=($q->fetch_array());
    $datashow = json_encode($data);
    $sql_total="select count(1) from ($sql) a where 0=0 $where $sql_sort ";
    $q->query($sql_total);
    $total = $q->fetch_array();
    echo '{"total":"'.$total[0][0].'","data":'.$datashow.'}';
    $q->close();
    exit();
}

if($_GET["act"]=="del"){
        $f=$_REQUEST["file"];
        if(is_file($f)){
                        if(unlink($f)){
                                echo " Success !! ";
                        }else{
                                echo " Error.. ";
                        }           
        }else{
            echo " No file !! ";
        }
}

if($act=="count"){
    $q=new dbMan(trim(text_get($connect_mysql253)));
    $all=($all=="")?0:$all; 
    $q = mysql_query("select count(data_id) from data");
    $total = mysql_result($q,0,0);
    echo $total;
    exit();
}

?>