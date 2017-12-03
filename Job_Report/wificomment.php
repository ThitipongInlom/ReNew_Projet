<? include("../config.php");
include("../function.php");
if (!authen($menu,1)){ echo $msg_cannotaccess; exit();}

$dpath="../";
$systemname="wificomment";
$systemcode="wificomment";
$table="yes_comment";
$field_id="Yes_comment_id";

$department="IT";

$id=$task_id;
$status_type="tasks";
$field_status="Yes_comment_status";

$urlpost=$systemcode."_action.php?act=post&menu=$menu&status_type=$systemcode&row_id=$row_id&row_type=$row_type";
$urlload=$systemcode."_action.php?act=load&menu=$menu&status_type=$systemcode&row_id=$row_id&row_type=$row_type";
$urlgrid =$systemcode."_action.php?act=grid&menu=$menu&status_type=$systemcode&row_id=$row_id&row_type=$row_type";
$urldel=$systemcode."_action.php?act=del";


$task_date=Date("Y-m-d");

$fields="
            {name: 'Yes_comment_id' , type: 'int' }, 
            {name: 'Yes_comment_level' , type: 'string'}, 
            {name: 'Yes_comment_username' , type: 'string' },
            {name: 'Yes_comment_name' , type: 'string' }, 
            {name: 'Yes_comment_room' , type: 'string' },
            {name: 'Yes_comment_roombox' , type: 'string' },
            {name: 'Yes_comment_spa' , type: 'string' }, 
            {name: 'Yes_comment_fitness' , type: 'string' },
            {name: 'Yes_comment_restaurant' , type: 'string' },
            {name: 'Yes_comment_other' , type: 'string' },
            {name: 'Yes_comment_grop' , type: 'string' }, 
            {name: 'Yes_comment_emp_id' , type: 'string' }, 
            {name: 'Yes_comment_country' , type: 'string' }, 
            {name: 'Yes_comment_instay' , type: 'string' }, 
            {name: 'Yes_comment_web' , type: 'string' }, 
            {name: 'Yes_comment_time' , type: 'date' }, 
            {name: 'Yes_comment_mac' , type: 'string' },
            {name: 'Yes_comment_status' , type: 'string' },
            {name: 'Yes_comment_detail' , type: 'string' },
            {name: 'Yes_comment_type' , type: 'string' },
            {name: 'Yes_comment_text_other' , type: 'string' },
            {name: 'comment_room' , type: 'string' },
            {name: 'comment_spa' , type: 'string' },
            {name: 'comment_fitness' , type: 'string' },
            {name: 'comment_restaurant' , type: 'string' },
            {name: 'comment_other' , type: 'string' },
            {name: 'see1date' , type: 'string' },
            {name: 'see1by' , type: 'string' }

";

$filters="
            {dataIndex: 'Yes_comment_id' , type: 'string' }, 
            {dataIndex: 'Yes_comment_level' , type: 'string' }, 
            {dataIndex: 'Yes_comment_username' , type: 'string' },
            {dataIndex: 'Yes_comment_name' , type: 'string' }, 
            {dataIndex: 'Yes_comment_room' , type: 'string' }, 
            {dataIndex: 'Yes_comment_roombox' , type: 'string' }, 
            {dataIndex: 'Yes_comment_spa' , type: 'string' },
            {dataIndex: 'Yes_comment_fitness' , type: 'string' }, 
            {dataIndex: 'Yes_comment_restaurant' , type: 'string' }, 
            {dataIndex: 'Yes_comment_other' , type: 'string' }, 
            {dataIndex: 'Yes_comment_grop' , type: 'string' }, 
            {dataIndex: 'Yes_comment_emp_id' , type: 'string' }, 
            {dataIndex: 'Yes_comment_country' , type: 'string' }, 
            {dataIndex: 'Yes_comment_instay' , type: 'string' }, 
            {dataIndex: 'Yes_comment_web' , type: 'string' }, 
            {dataIndex: 'Yes_comment_time' , type: 'date'}, 
            {dataIndex: 'Yes_comment_mac' , type: 'string' },
            {dataIndex: 'Yes_comment_status' , type: 'string' }, 
            {dataIndex: 'Yes_comment_detail' , type: 'string' }, 
            {dataIndex: 'Yes_comment_type' , type: 'string' },
            {dataIndex: 'Yes_comment_text_other' , type: 'string' },
            {dataIndex: 'comment_room' , type: 'string' },
            {dataIndex: 'comment_spa' , type: 'string' },
            {dataIndex: 'comment_fitness' , type: 'string' },
            {dataIndex: 'comment_restaurant' , type: 'string' },
            {dataIndex: 'comment_other' , type: 'string' },
            {dataIndex: 'see1date' , type: 'string' },
            {dataIndex: 'see1by' , type: 'string' }
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
        	var hp = '<img src="../images/16/3.png"  height="16" width="16">';
        	return '<div class="control" control="popup" ><span style="color:green;font-weight:bold">' + hp + '</span></div>';}
    	if(v==='2')
        { 
        	var s = '<img src="../images/16/2.png"  height="16" width="16">';
        	return '<div class="control" control="popup" ><span style="color:Blue;font-weight:bold">' + s + '</span></div>';}
    	if(v==='1')
        { 
        	var bad = '<img src="../images/16/1.png"  height="16" width="16">';
        	return '<div class="control" control="popup" ><span style="color:red;font-weight:bold">' + bad + '</span></div>';}
    }

    var check_pro = function (v,para,r) {
    	var pro = r.data['Yes_comment_type'];
    	if (pro =='1') 
    	{
    		var text = 'พบปัญหา';
    		return '<div class="control" control="popup" ><span style="color:red;font-weight:bold">' + text + '</span></div>';
    	}
    	if (pro =='0') 
    	{
    		var text = 'ไม่พบปัญหา';
    		return '<div class="control" control="popup" ><span style="color:green;font-weight:bold">' + text + '</span></div>';
    	}
    }

    var check_status = function(v,para,r) {
    	var room = r.data['Yes_comment_roombox'];
    	var spa  = r.data['Yes_comment_spa'];
    	var fitness = r.data['Yes_comment_fitness'];
    	var restaurant = r.data['Yes_comment_restaurant'];
    	var other = r.data['Yes_comment_other'];
    	var text_otherText = r.data['Yes_comment_text_other'];
    	if (room =='1') 
    		{
    			var text_room = '[Room]';
    		}else{
    			var text_room = '';
    		}
    	if (spa =='1') 
    		{
    			var text_spa = '[Spa]';
    		}else{
    			var text_spa = '';
    		}	
    	if (fitness =='1') 
    		{
    			var text_fitness = '[Fitness]';
    		}else{
    			var text_fitness = '';
    		}	
    	if (restaurant =='1') 
    		{
    			var text_restaurant = '[Restaurant]';
    		}else{
    			var text_restaurant = '';
    		}	
    	if (other =='1') 
    		{
    			var text_other = '[Other]';
    		}else{
    			var text_other = '';
    		}	
    	return '<div class="control" control="popup" ><span style="color:red;font-weight:bold">'+ text_room + text_spa + text_fitness + text_restaurant + text_other +'</span></div>';	
    }

    var status_click = function (v,para,r) {
    	var status = r.data['Yes_comment_status'];
    	if (status == '') {
    		return '<div class="control" control="popup"><span style="color:DarkViolet;font-weight:bold">N<span></div>';
    	}
    	if (status == 'P') {
    		return '<div class="control" control="popup"><span style="color:MediumBlue;font-weight:bold">P<span></div>';
    	}
    	if (status == 'D') {
    		return '<div class="control" control="popup"><span style="color:LimeGreen;font-weight:bold">D<span></div>';
    	}
    	if (status == 'W') {
    		return '<div class="control" control="popup"><span style="color:FireBrick;font-weight:bold">W<span></div>';
    	}
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
		reader: new Ext.data.JsonReader( { root: 'data',totalProperty: 'Yes_comment_id'}, [<?=$fields;?>]),
		remoteSort: true, sortInfo:{field: 'Yes_comment_id', direction: "DESC"}
    });
    var filters = new Ext.ux.grid.GridFilters({local: false,filters:[<?=$filters;?>]}); 
	var progress= new Ext.ux.ProgressBarPager();
				
    var createColModel = function (){
        var columns = [       
			 {dataIndex: 'Yes_comment_id',id: 'Yes_comment_id',width:5,header: 'ID', renderer:show_click},
			 {dataIndex: 'Yes_comment_time', id: 'Yes_comment_time', width:12, header: 'วันที่แจ้งปัญหา',xtype: 'datecolumn', format:'d-m-Y H:i', renderer:show_click},
			 {dataIndex: 'Yes_comment_name', id: 'Yes_comment_name', width:20, header: 'ชื่อลูกค้า', renderer:show_click},
			 {dataIndex: 'Yes_comment_room', id: 'Yes_comment_room', width:4, header: 'ห้อง', renderer:show_click},
			 {dataIndex: 'Yes_comment_country', id: 'Yes_comment_country', width:4, header: 'สัญชาติ', renderer:show_click},
			 {dataIndex: 'Yes_comment_level', id: 'Yes_comment_level', width:3, header: 'สถานะแสดงความพึงพอใจ', renderer:show_color},
			 {dataIndex: 'Yes_comment_type', id: 'Yes_comment_type', width:8, header: 'ปัญหา', renderer:check_pro},
			 {dataIndex: 'Yes_comment_id', id: 'Yes_comment_id', width:25, header: 'สถานที่มีปัญหา', renderer:check_status},	
			 {dataIndex: 'Yes_comment_detail', id: 'Yes_comment_detail', width:29, header: 'รายระเอียด', renderer:show_click},	
			 {dataIndex: 'see1by', id: 'see1by', width:10, header: 'ผู้ติดต่อผสานงาน', renderer:show_click},	
			 {dataIndex: 'Yes_comment_status', id: 'Yes_comment_status', width:2, header: 'สถานะ', renderer:status_click},	
			 			{
                xtype: 'actioncolumn',
				header:'Action',
                width: 7,menuDisabled:true,
                items:[{
					getClass: function(v, meta, rec) { 
						if(rec.data["Yes_comment_status"]=='') {
							this.items[0].tooltip = 'ปัญหายังไม่ได้แก้ไข (ปัญหาหมายเลขที่ '+rec.data["Yes_comment_id"]+')';
							//console.log(v, meta, rec);
							return 'waiting';
						}
						else{
							this.items[0].tooltip = 'สถานะ : แก้ปัญหาเรียบร้อย';
							//console.log(rec);
							return 'enable';
						}
					},handler:function(grid, rowIndex, colIndex) {
							var s = grid.getStore().getAt(rowIndex);
							var id=	s.get('<?=$field_id;?>');
							if (s.data['Yes_comment_status']=='') {
								loadFormman(id);
							}
					}	

				},{
                    tooltip: 'แก้ไขข้อมูล',
					icon   : '../images/16/24.png', 
                    handler:function(grid, rowIndex, colIndex) {
							var s = grid.getStore().getAt(rowIndex);
							var id=	s.get('<?=$field_id;?>');
							loadFormman(id);
                    }
				}]	
			}
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
							enableNoGroups: true
						}),	
				viewConfig: {  
						getRowClass: function(record, index, rowParams){
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
					var id = s.Yes_comment_id;
					if( c=="popup"){  
					loadFormman(id);	
					//console.log(s); 
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

   

// Form Add   **********************************************************	
	var formedit={
            layout:'form',
			bodyStyle:'padding:10px 10px 0 10px;',
            border:false,
			items:[{
					layout:'column',
					border:false,
					items:[{
							columnWidth:.50,
							layout: 'form',labelWidth:50,border:false,defaults: {anchor:'-5'},
							items:[{
								xtype: 'compositefield',anchor:'-20',
								fieldLabel: 'วันที่',
								items:[{
									flex:3,
									xtype:'combo',
									mode: 'remote',minChars : 0,
									typeAhead: false,editable:false,
									forceSelection:true,triggerAction: 'all',		
									xtype: 'datefield',
							        name: 'Yes_comment_time',
							        format:'d-m-Y H:i',
							        //disabled: true,
								}]
							}]
						},{
							columnWidth:.50,
							layout: 'form',labelWidth:50,border:false,defaults: {anchor:'-5'},
							items:[{
								xtype:'combo',
								anchor:'-20',
								fieldLabel: 'สัญชาติ',
								xtype: 'textfield',
							    name: 'Yes_comment_country',
							    //disabled: true,	
							}]
					}]	
			},{
					layout:'column',
					border:false,
					items:[{
							columnWidth:.70,
							layout: 'form',labelWidth:50,border:false,defaults: {anchor:'-5'},
							items:[{	
								xtype: 'compositefield',anchor:'-20',
								fieldLabel:'ชื่อลูกค้า',
								items:[{
									flex:3,
									xtype:'combo',
									fieldLabel: 'Name',
									xtype: 'textfield',
							        name: 'Yes_comment_name',
							        //disabled: true,
								}]
							}]
						},{
							columnWidth:.30,
							layout: 'form',labelWidth:50,border:false,defaults: {anchor:'-5'},
							items:[{
								xtype:'combo',
								anchor:'-20',
								fieldLabel: 'ห้อง',
								xtype: 'textfield',
							    name: 'Yes_comment_room',
							    //disabled: true,	
							}]
					}]	
			},{
					layout:'column',
					border:false,
					items:[{
							columnWidth:0.14,
							layout: 'form',labelWidth:5,border:false,defaults: {anchor:'-5'},
							items:[{
								xtype:'fieldset',anchor:'100%',
								title: 'Room',
								readOnly:true,	
								border:true,						
								collapsed: false,
								items:[{
									xtype: 'checkbox', 
									id: 'Yes_comment_roombox', 
									name: 'Yes_comment_roombox', 
									boxLabel: 'Room', 
									hideLabel: true, 
									//disabled: true,
									checked: true}]
							}]
						},{
							columnWidth:0.12,
							layout: 'form',labelWidth:5,border:false,defaults: {anchor:'-5'},
							items:[{
								xtype:'fieldset',anchor:'100%',
								title: 'Spa',
								readOnly:true,	
								border:true,						
								collapsed: false,
								items:[{
									xtype: 'checkbox', 
									id: 'Yes_comment_spa', 
									name: 'Yes_comment_spa', 
									boxLabel: 'Spa', 
									hideLabel: true, 
									//disabled: true,
									checked: true}]
							}]
						},{
							columnWidth:0.15,
							layout: 'form',labelWidth:5,border:false,defaults: {anchor:'-5'},
							items:[{
								xtype:'fieldset',anchor:'100%',
								title: 'Fitness',
								readOnly:true,	
								border:true,						
								collapsed: false,
								items:[{
									xtype: 'checkbox', 
									id: 'Yes_comment_fitness', 
									name: 'Yes_comment_fitness', 
									boxLabel: 'Fitness', 
									hideLabel: true, 
									//disabled: true,
									checked: true}]
							}]
						},{
							columnWidth:0.20,
							layout: 'form',labelWidth:5,border:false,defaults: {anchor:'-5'},
							items:[{
								xtype:'fieldset',anchor:'100%',
								title: 'Restaurant',
								readOnly:true,	
								border:true,						
								collapsed: false,
								items:[{
									xtype: 'checkbox', 
									id: 'Yes_comment_restaurant', 
									name: 'Yes_comment_restaurant', 
									boxLabel: 'Restaurant', 
									hideLabel: true, 
									//disabled: true,
									checked: true,}]
							}]
						},{
							columnWidth:0.14,
							layout: 'form',labelWidth:5,border:false,defaults: {anchor:'-5'},
							items:[{
								xtype:'fieldset',anchor:'100%',
								title: 'Other',
								readOnly:true,	
								border:true,						
								collapsed: false,
								items:[{
									xtype: 'checkbox', 
									id: 'Yes_comment_other', 
									name: 'Yes_comment_other', 
									boxLabel: 'Other', 
									hideLabel: true, 
									//disabled: true,
									checked: true},]
							}]
						},{
							columnWidth:0.23,
							layout: 'form',labelWidth:5,border:false,defaults: {anchor:'-5'},
							items:[{
								xtype:'fieldset',
								title: 'Other',
								border:true,						
								collapsed: false,
								items:[{
									xtype:'textfield',
									id : 'Yes_comment_text_other',
									name: 'Yes_comment_text_other',
									anchor:'0'
								}]
							}]
						}]	
			},{
					layout:'column',
					border:false,
					items:[{
							columnWidth:1,
							layout: 'form',labelWidth:5,border:false,defaults: {anchor:'-5'},
							items:[{
								xtype:'fieldset',anchor:'100%',
								title: 'รายละเอียด',
								height:100,
								//autoHeight:true,
								readOnly:true,									
								collapsed: false,
								items:[{
								xtype:'textarea',
			                    name: 'Yes_comment_detail',
								anchor:'100% 100%',
								border:false,
								//disabled: true,	
								}]

							}]
						}]	
			},{
					layout:'column',
					border:false,//bodyStyle:'padding:10px',
					items:[{
							columnWidth:1,
							layout: 'form',labelWidth:70,border:false,defaults: {anchor:'-5'},
							items:[{
								xtype:'fieldset',anchor:'100%',
								title: 'สถานที่มีปัญหา - วิธีแก้ไขปัญหา - ผแนก - ผู้รับเรื่อง - เวลา',
								autoHeight:true,readOnly:true,
								defaults: {anchor:'-5'},
								defaultType: 'textfield',											
								collapsed: false,
								items:[{
									xtype:'textfield',
									fieldLabel: 'Room',
									name: 'comment_room',
									id : 'comment_room',
									anchor:'-20'
								},{
									xtype:'textfield',
									fieldLabel: 'Spa',
									name: 'comment_spa',
									id : 'comment_spa',
									anchor:'-20'
								},{
									xtype:'textfield',
									fieldLabel: 'Fitness',
									name: 'comment_fitness',
									id : 'comment_fitness',
									anchor:'-20'
								},{
									xtype:'textfield',
									fieldLabel: 'Restaurant',
									name: 'comment_restaurant',
									id : 'comment_restaurant',
									anchor:'-20'
								},{
									xtype:'textfield',
									fieldLabel: 'Other',
									name: 'comment_other',
									id : 'comment_other',
									anchor:'-20'
								}]
							}]
						}]	
			},{
					layout:'column',
					border:false,//bodyStyle:'padding:10px',
					items:[{
							columnWidth:.50,
							layout: 'form',labelWidth:100,border:false,defaults: {anchor:'-5'},
							items:[{
								xtype: 'compositefield',anchor:'-20',
								fieldLabel: 'ผู้ติดต่อผสานงาน',
								items:[{
									flex:1.5,
									listWidth:300,
									xtype:'combo',
									name: 'see1by',
									hiddenName: 'see1by',
									id : 'see1by',
									emptyText: 'ผู้ติดต่อประสานงาน',
									displayField:'type_code',
									valueField:'type_code',
									mode: 'remote',
									minChars : 0,
									typeAhead: false,
									editable:false,
									forceSelection:true,
									triggerAction: 'all',
									store:new Ext.data.JsonStore({url:'wificomment_action.php?act=settypelist&type_category=taskstaffen&type_remark=<?=$department;?>&order_by=type_code', 
									root:'data', 
									autoLoad:true,  
									fields:['type_code','type_name','type_name_en']}),
									tpl: new Ext.XTemplate('<tpl for="."><div class="x-combo-list-item"><b>{type_code}</b> : {type_name}</div></tpl>')
								}]
							}]
						},{
							columnWidth:.50,
							layout: 'form',labelWidth:150,border:false,defaults: {anchor:'-5'},
							items:[{
								xtype:'combo',
								anchor:'-20',
								fieldLabel: 'วันที่ติดต่อประสานงาน',
								xtype: 'datefield',
							    name: 'see1date',
							    id : 'see1date',
							    format:'d-m-Y',
							}]
					}]	
			},{
					layout:'column',
					border:false,//bodyStyle:'padding:10px',
					items:[{
							columnWidth:.50,
							layout: 'form',labelWidth:100,border:false,defaults: {anchor:'-5'},
							items:[{
								xtype: 'compositefield',anchor:'-20',
								fieldLabel: 'สถานะของงาน',
								items:[{
									flex:1.5,
									listWidth:300,
									xtype:'combo',
									name: '',
									hiddenName: 'Yes_comment_status',
									id : '',
									emptyText: 'สถานะ',
									displayField:'status_code',
									valueField:'status_code',
									mode: 'remote',
									minChars : 0,
									typeAhead: false,
									editable:false,
									forceSelection:true,
									triggerAction: 'all',
									store:new Ext.data.JsonStore({url:'wificomment_action.php?act=status',root:'data', autoLoad:true,  
										fields:['status_code','status_name']}),
									tpl: new Ext.XTemplate('<tpl for="."><div class="x-combo-list-item"><b>{status_code}</b> : {status_name}</div></tpl>')
								}]
							}]
						}]	
			},{
				xtype:'hidden',
				name:'Yes_comment_id'
			}]
	};


    var formman = new Ext.FormPanel({
        labelWidth: 70,
		border:false,
		iconCls:'card',
		defaults:{autoScroll:true},
		autoScroll:true,
		monitorValid:true,
		frame:false,
		bodyStyle:'padding:10px;margin:0',
		reader: new Ext.data.JsonReader ({root: 'data',totalProperty: 'Yes_comment_id',fields: [<?=$fields;?>]}),
        items: [formedit], 
    fbar:[{
								text: 'บันทึกการอ่าน',
								iconCls:'save',						
								handler: function(){
											formman.getForm().submit({	
												url: '<?=$urlpost;?>', 
	                    						waitMsg: 'บันทึก...',		
												success: function(form, action){
													console.log(form, action);			
													win.hide();
													search_data();
												},
											});
								}
							},{
								text: 'ปิด',
								iconCls:'close',					
								handler: function(){
			                        formman.getForm().reset(); 
			                        Ext.getCmp('comment_room').setValue('');
			                        Ext.getCmp('comment_spa').setValue('');
			                        Ext.getCmp('comment_fitness').setValue('');
			                        Ext.getCmp('comment_restaurant').setValue('');
			                        Ext.getCmp('comment_other').setValue('');
									win.hide();}
							}
				]
    });
	
	formman.on({	actioncomplete: function(form, action){
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
		win.show();	
	}

    var win;
    if(!win){
            win = new Ext.Window({
				iconCls	:'note',
				title:'ดูข้อมูลความพึงพอใจของลูกค้า',
                layout:'fit',
                width:600,
                height:550,
				border:true,
				autoRender: true,
                closeAction:'hide',
                plain: true,
				resizable:false,
				maximizable : true,
				modal: true,
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
	
});  
</script>
</head>
<body>
</body>
</html>
