<? include("../config.php");
include("../function.php");
if (!authen($menu,1)){ echo $msg_cannotaccess; exit();}

$dpath="../";
$systemname="wificomment";
$systemcode="wificomment";
$table="yes_comment";
$field_id="Yes_comment_id";

$department=($mode!="")?$s_users_dept=$_SESSION["login"]["dept"]:"";

$id=$task_id;
$status_type="tasks";

$urlpost=$systemcode."_action.php?act=post&menu=$menu&status_type=$systemcode&row_id=$row_id&row_type=$row_type";
$urlload=$systemcode."_action.php?act=load&menu=$menu&status_type=$systemcode&row_id=$row_id&row_type=$row_type";
$urlgrid =$systemcode."_action.php?act=grid&menu=$menu&status_type=$systemcode&row_id=$row_id&row_type=$row_type";
$urldel  =$systemcode."_action.php?act=del";


$task_date=Date("Y-m-d");

$fields="
            {name: 'Yes_comment_id' , type: 'int' }, 
            {name: 'Yes_comment_level' , type: 'string'}, 
            {name: 'Yes_comment_name' , type: 'string' }, 
            {name: 'Yes_comment_username' , type: 'string' },
            {name: 'Yes_comment_room' , type: 'string' }, 
            {name: 'Yes_comment_grop' , type: 'string' }, 
            {name: 'Yes_comment_emp_id' , type: 'string' }, 
            {name: 'Yes_comment_country' , type: 'string' }, 
            {name: 'Yes_comment_instay' , type: 'string' }, 
            {name: 'Yes_comment_web' , type: 'string' }, 
            {name: 'Yes_comment_time' , type: 'string' }, 
            {name: 'Yes_comment_mac' , type: 'string' }

";

$filters="
            {dataIndex: 'Yes_comment_id' , type: 'string' }, 
            {dataIndex: 'Yes_comment_level' , type: 'string' }, 
            {dataIndex: 'Yes_comment_name' , type: 'string' }, 
            {dataIndex: 'Yes_comment_username' , type: 'string' },
            {dataIndex: 'Yes_comment_room' , type: 'string' }, 
            {dataIndex: 'Yes_comment_grop' , type: 'string' }, 
            {dataIndex: 'Yes_comment_emp_id' , type: 'string' }, 
            {dataIndex: 'Yes_comment_country' , type: 'string' }, 
            {dataIndex: 'Yes_comment_instay' , type: 'string' }, 
            {dataIndex: 'Yes_comment_web' , type: 'string' }, 
            {dataIndex: 'Yes_comment_time' , type: 'string' }, 
            {dataIndex: 'Yes_comment_mac' , type: 'string' } 
";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<? include("../head_script.php"); 

?>
		 
<script>
Ext.onReady(function(){
	
	var playSound = document.createElement('audio');
        playSound.setAttribute('src', '../js/beep.mp3');  
        playSound.setAttribute('autoplay:false', 'autoplay');
        $.get();
        playSound.addEventListener("load",function(){playSound.play();}, true);

	var show_click=function(v,para,r){ 
		return '<div class="control" control="popup" >'+v+'</div>'; }

	var show_color=function(v,para,r){
        if(v==='3')
        { 
        	var hp = 'พึ่งพอใจมาก';
        	return '<div class="control" control="popup" ><span style="color:green;font-weight:bold">' + hp + '</span></div>';}
    	if(v==='2')
        { 
        	var s = 'เฉยๆ';
        	return '<div class="control" control="popup" ><span style="color:Blue;font-weight:bold">' + s + '</span></div>';}
    	if(v==='1')
        { 
        	var bad = 'แย่';
        	return '<div class="control" control="popup" ><span style="color:red;font-weight:bold">' + bad + '</span></div>';}
    }

	Ext.QuickTips.init();
	Ext.state.Manager.setProvider(new Ext.state.CookieProvider());
	Ext.form.Field.prototype.msgTarget = "side"; //under  side
	Ext.override(Ext.ux.form.LovCombo, {beforeBlur: Ext.emptyFn});
	
	var cmd_action=function(urlman){
		Ext.getBody().mask('In progress...', 'x-mask-loading');
		Ext.Ajax.request({
			url : urlman , 
			params : {manneo:'manneo'},
			method: 'GET',
			success: function ( result, request ) { 
				//Ext.MessageBox.alert('Success', 'Data return from the server: '+ result.responseText); 
				Ext.getBody().unmask();
				search_data();				
			},
			failure: function ( result, request) { 
				//Ext.MessageBox.alert('Failed', result.responseText); 
			} 
		});
	}

  var summary = new Ext.ux.grid.GroupSummary();
						
//********************************************  Grid Store *********************************************
	var mydatastore = new Ext.data.GroupingStore({
		proxy: new Ext.data.HttpProxy({url: '<?=$urlgrid;?>',method: 'POST'}),
		reader: new Ext.data.JsonReader( { root: 'data',totalProperty: 'data_id'}, [<?=$fields;?>]),
		remoteSort: true, sortInfo:{field: 'Yes_comment_id', direction: "DESC"}
    });
    var filters = new Ext.ux.grid.GridFilters({local: false,filters:[<?=$filters;?>]}); 
	var progress= new Ext.ux.ProgressBarPager();
				
    var createColModel = function (){
        var columns = [         
			 {dataIndex: 'Yes_comment_id',id: 'Yes_comment_id',width:5,header: 'ID',summaryType: 'count',summaryRenderer: function(v, params, data){ return '('+v+')';} },
			 {dataIndex: 'Yes_comment_time', id: 'Yes_comment_time', width:13, header: 'วันที่แจ้งปัญหา', renderer:show_click},
			 {dataIndex: 'Yes_comment_name', id: 'Yes_comment_name', width:20, header: 'ชื่อลูกค้า', renderer:show_click},
			 {dataIndex: 'Yes_comment_username', id: 'Yes_comment_username', width:20, header: 'Username', renderer:show_click},
			 {dataIndex: 'Yes_comment_room', id: 'Yes_comment_room', width:15, header: 'ลูกค้าห้อง', renderer:show_click},
			 {dataIndex: 'Yes_comment_country', id: 'Yes_comment_country', width:15, header: 'สัญชาติ', renderer:show_click},
			 {dataIndex: 'Yes_comment_level', id: 'Yes_comment_level', width:15, header: 'สถานะแสดงความพึงพอใจ', renderer:show_color},
			 {dataIndex: 'Yes_comment_mac', id: 'Yes_comment_mac', width:50, header: 'data_option', renderer:show_click},	
		];
        return new Ext.grid.ColumnModel({ columns: columns, defaults: {sortable: true} });
    };


//*************************************** Page Grid *****************************************************	
	var	pageSizeCombo = new Ext.form.ComboBox({
		name : 'perpage',width: 50,mode : 'local',value: '50',listWidth: 50,
		store: new Ext.data.ArrayStore({ fields: ['perpageid'],data  : [['50'],['100'],['150'],['200'],['300'],['500'],['1000']]}),
		triggerAction : 'all',displayField :'perpageid',valueField:'perpageid',editable : false,forceSelection: true
	});
	var bbar=new Ext.PagingToolbar({
		store: mydatastore,pageSize:50,plugins: [filters,progress],emptyMsg: "No data",
		displayInfo: true,items:['-','Per Page: ',pageSizeCombo]		
	});
	pageSizeCombo.on('select', function(pageSizeCombo, record) {
	  bbar.pageSize = parseInt(record.get('perpageid'), 10); bbar.doLoad(bbar.cursor);
	}, this);

//*************************************** Grid *****************************************************		
  	var DocData = new Ext.data.GroupingStore({
		proxy: new Ext.data.HttpProxy({url: '<?=$urlgrid;?>',method: 'POST'}),
		reader: new Ext.data.JsonReader( { root: 'data',totalProperty: 'total'}, [<?=$fields;?>]),
		//groupField:'project_title'  ,  
		remoteSort: true, sortInfo:{field: 'Yes_comment_id', direction: "DESC"}
    });
    var filters = new Ext.ux.grid.GridFilters({local: false,filters:[<?=$filters;?>]}); 
	var progress= new Ext.ux.ProgressBarPager();

	var search_DocData=function(){
        //alert DocData.baseParams;
		DocData.baseParams = { keyword: Ext.getCmp('DocKeyword').getValue() };
		DocData.load();
	} 
	
	var reset_DocData=function(){
		Ext.getCmp('DocKeyword').setValue('');
		search_DocData();
	}


function myFunction() {
    location.reload();
}

var loadDocData2Form = function(id){	
		DocForm.getForm().load({ url: '<?=$urlload?>', params:{id:id}, waitMsg: 'กำลังโหลดข้อมูล...' });
		folderData.reload();
	}

	var grid = new Ext.grid.GridPanel({
				border: false,
				store: mydatastore,
				stripeRows: true,
				colModel: createColModel(),
				loadMask: true,
				plugins: [filters],
				view:	new Ext.grid.GroupingView({
							forceFit:true,
							markDirty: true,
							hideGroupedColumn: true,
							showGroupName: false,
							//startCollapsed: true,
							//groupTextTpl: '{text}({[values.rs.length]})',
							//groupTextTpl: '{text} ({[values.rs.length]} {[values.rs.length > 1 ? "Items" : "Item"]})',
							//groupTextTpl: '{text}',
							enableNoGroups: true
						}),	
				viewConfig: {  
						//forceFit:false, 
						getRowClass: function(record, index, rowParams){
							 //return (Math.floor(index / 5.0) % 2 == 0) ? 'rowClass1' : 'rowClass2';
						}
				},
				autoExpandColumn: 'type_name',
				tbar:[ 
						{xtype:'tbseparator'},{
									xtype:'textfield',
									fieldLabel:'Search',
									name: 'keyword',
									id:'keyword',
									listeners: { 'render': function(c){
										c.getEl().on('keypress', function(e) {
											if(e.getKey() == e.ENTER && this.getValue().length > 0) {
												search_data();
											 }
										},
										Ext.QuickTips.register({
												target: c.getEl(),
												text: 'keyword'
										}),c);
									}} 
						},{xtype:'tbseparator'},{
									xtype:'button',
									text: 'Search',
									iconCls:'search',
									handler: function() { search_data(); }
						},{xtype:'tbseparator'},{
									xtype:'button',
									text: 'Refresh',
									iconCls:'refresh',
									handler: function() { reset_data(); }
						}				
				],
				listeners: { render: { fn: function(){ mydatastore.load(); } } },bbar: bbar 
	});

   grid.on('click', function(e) {
			var btn = e.getTarget('.control'); 
			if(btn){   
					var c  = btn.getAttribute('control');
					var s  = this.getSelectionModel().getSelected().data;
					var id = s.data_id;
					if( c=="popup"){  
					loadFormman(id);	 
					//alert('ok');
				}
		  }
    });	

		var search_data=function(){
		mydatastore.baseParams = {keyword: $('#keyword').attr('value')};
		mydatastore.load();
	} 
	
	var reset_data=function(){
		$('#keyword').attr('value','');
		search_data();
	} 
	
	/*    	
	var search_data=function(){
		mydatastore.load();
	} 
	*/

var formman = new Ext.FormPanel({
		labelWidth: 80,border:true,iconCls:'card',
		
		autoScroll:true,monitorValid:true,layout:'form',frame:false,
 });

    var viewport = new Ext.Viewport({
        layout:'border',
		margins: '0 0 0 0',
		border:false,
        items:[{
				id: 'content-panel',
				region: 'center', 
				layout: 'fit',
				margins: '0 0 0 0',
				title:'<?=$title;?>',
				border: false,
				items: {
						id:'main-view',
						layout:'fit',
						border: false,
						items:grid
				}
		}]

    });	

        var cmd_count=function(){
		var total=Ext.getCmp('data_id');
		var all=((total.getValue()*1)>0)?total.getValue()*1:0;
		Ext.Ajax.request({
			method: 'GET',url:'<?=$urlaction;?>&act=count',
			success: function(result,request){ 
				if((result.responseText*1) != all){
					total.setValue(result.responseText*1);
					if(all>0){
						playSound.play();
						top.Ext.showMan.msg('Hi.. ',' Please check your job list, there are some new job now.');
					}
					search_data();
				}else{
				}
			}
		});
	}


    var formman = new Ext.FormPanel({
        labelWidth: 90,
		border:true,
		iconCls:'card',
		defaults:{autoScroll:true},
		autoScroll:true,
		monitorValid:true,
        //width: 600,
        //height: 400,
		//layout:'form',
		//frame:false,
		bodyStyle:'padding:10px;margin:0',
		reader: new Ext.data.JsonReader ({root: 'data',fields: [<?=$fields;?>]}),
        items: [{
            layout:'form',
            border:false,
			items:[{
				xtype:'textfield',
				name : "Yes_comment_id",anchor:'-5',
				fieldLabel : "ปัญหาหมายเลข",
				disabled:true,
				allowBlank: false
			},{
				xtype: 'datefield',anchor:'-5',
				format:'H:i d-m-Y',
				name : "Yes_comment_id",
				disabled:true,
				fieldLabel : "วันที่แจ้งปัญหา"
			},{
				xtype: 'textfield',anchor:'-5',
				name : "Yes_comment_id",
				disabled:true,
				fieldLabel : "Userที่ใช้ล็อกอิน"
			},{
				xtype: 'textfield',anchor:'-5',
				name : "Yes_comment_id",
				disabled:true,
				fieldLabel : "ชื่อลูกค้า"
			},{
				xtype: 'textfield',anchor:'-5',
				name : "Yes_comment_id",
				disabled:true,
				fieldLabel : "ลูกค้าห้อง"
			},{
				xtype: 'textfield',anchor:'-5',
				name : "Yes_comment_id",
				disabled:true,
				fieldLabel : "สัญชาติ"
			},{
				xtype: 'textfield',anchor:'-5',
				name : "Yes_comment_id",
				fieldLabel : "Note"
			},{
				xtype:'hidden',
				name:'Yes_comment_id'
			}]
	}],
        fbar:[{
								text: 'บันทึกการอ่าน',
								iconCls:'save',								
								handler: function(){
											formman.getForm().submit({	
												url: '<?=$urlpost;?>', 
	                    						waitMsg: 'บันทึก...',				
												success: function(form, action){	
													var mm = action.result.data;	
													win.hide();
													search_data();
												},
											});
								}
							},{
								text: 'ปิด',
								iconCls:'close',								
								handler: function(){win.hide();}
							}
				]
    });
	
	formman.on({	actioncomplete: function(form, action){
					var mm = action.result.data;
					if(action.type == 'load'){ } 
					if(action.type == 'submit'){ }					
					
				}
	});

	var loadFormman = function(id){
		if(id>0){
			formman.getForm().load({ url: '<?=$urlload;?>', params:{id:id}, waitMsg: 'กำลังโหลดข้อมูล...' });
				
		}else{
			formman.getForm().reset();
		}
		//addTab(id);
		win.show();	
	}
	var addTab=function(rowid){
		var TabPanelman = Ext.getCmp('tab-job');
		var tabidman = TabPanelman.findById('tab-document');
        if(tabidman){ 			
			TabPanelman.remove('tab-document', true); 
			TabPanelman.remove('tab-comment', true); 
		}
		//if(rowid){
			TabPanelman.add({
				title: 'Comment',id:'tab-comment',iconCls: 'note',
				layout:'fit',bodyStyle:'padding:0;', 
				items:[new Ext.ux.IFrameComponent({id:"comment-"+rowid,url:'../notes/note.php?menu=<?=$menu?>&row_type=<?=$systemcode;?>&row_id='+rowid,frameBorder:0})]
			}).show();	
			TabPanelman.add({
				title: 'Attach files',id:'tab-document',iconCls: 'attach',
				layout:'fit',bodyStyle:'padding:0;',  
				items:[new Ext.ux.IFrameComponent({id:"document"+rowid,url:'../document/document.php?menu=<?=$menu?>&row_type=<?=$systemcode;?>&row_id='+rowid,frameBorder:0})]
			}).show();
			TabPanelman.doLayout();	
			TabPanelman.setActiveTab(0);
		//}
	}

    var win;

    if(!win){
            win = new Ext.Window({
				iconCls	:'note',
				title:'ดูข้อมูลความพึงพอใจของลูกค้า',
                layout:'fit',
                width:400,
                height:400,
				border:false,
                closeAction:'hide',
                plain: true,
				resizable:false,
				maximizable : false,
				//modal: true,
				items:formman
            });
      }
	var runner;
	var autoRefresh=function(t){
		t=(t>0)?t:60000; // 1000 = 1 second
		runner = new Ext.util.TaskRunner();
		runner.start({run: search_data,interval:t});
	}
	autoRefresh();
	var viewport = new Ext.Viewport({
        layout:'border',
		margins: '0 0 0 0',
		border:false,
        items:[
					
				  {
						id: 'content-panel',
						region: 'center', 
						layout: 'card',
						margins: '0 0 0 0',
						title:'<?=$title;?>',
						activeItem: 0,
						border: false,
						items: {
							id:'main-view',
							layout:'fit',
							border: false,
							items:DocGrid
						}
				  }
         ]
    });		
});  
</script>
</head>
<body>
</body>
</html>
