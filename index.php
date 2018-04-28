<?php
/**
 * Developed by AVA - A.Avetisov.
 * Date: 20.09.2015
 * Time: 20:46
 */
if(isset($_GET['search'])) {
	$url = "get_users.php?search=" . $_GET['search'];
	$searchS = $_GET['search'];
}
else {
	$url = "get_users.php";
	$searchS = '';
}


include 'conn.php';

$sql = "SELECT MAX(modified) FROM persons";
$result = mysql_query($sql);
$row = mysql_fetch_array($result);
if($row)
 $modified =  $row[0];
else
 $modified = "";

?>





<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>LRD - მოლოდინის სია</title>
	<link rel="stylesheet" type="text/css" href="css/themes/easyui.css">
	<link rel="stylesheet" type="text/css" href="css/themes/icon.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<script type="text/javascript" src="js/jquery-1.6.min.js"></script>
	<script type="text/javascript" src="js/jquery.easyui.min.js"></script>
	<script type="text/javascript" src="js/jquery.edatagrid.js"></script>
	<script type="text/javascript" src="js/datagrid-detailview.js"></script>


	<script type="text/javascript">
		$(function(){
			$('#dg').edatagrid({

				url: '<?php echo $url;?>',

				saveUrl: 'save_user.php',
				updateUrl: 'update_user.php',
				destroyUrl: 'destroy_user.php'
			});
		});
	</script>
</head>
<body>
	<h2>მოლოდინის სია</h2>
	<div class="demo-info" style="margin-bottom:10px">
		<div class="demo-tip icon-tip">&nbsp;</div>
		<div>ტექსტის რედაქტირებისათვის ორჯერ დაწკაპუნებთ სასურველ ველზე.</div>

		<div style="padding: 10px">
		    <div style="float: left; margin-right: 5px"> <input id="ss" style="width: 200px" value="<?php echo $searchS; ?>"></input>
            <!--
			   <div id="mm" style="width:120px">
				   <div data-options="name:'all'">ყველა</div>
				   <div data-options="name:'donor',iconCls:'icon-ok'">დონორი</div>
			   </div>
            -->
		    </div>
		    <div style="float: left; margin-top: -2px; margin-right: 5px;"><a href="#" class="easyui-linkbutton" onclick="javascript:window.location.href='index.php'">გადატვირთვა</a></div>
			<div style="float: left; margin-top: -2px; margin-left: 100px; margin-right: 10px;"><a href="#" id="excel" class="easyui-linkbutton" iconCls="icon-export-excel"  >ქსპორტი ექსელში</a></div>
            <div id="xls" style="float: left; visibility: hidden; margin-right: 5px;" ><span class="icon-excel icon" ></span> <a href="lrd.xls" download="lrd_<?php echo date("Y-m-d H_i_s") ?>.xls" />ჩამოტვირთვა</a> </div>
            <div id="logout" style="float: right;  margin-right: 5px;" ><span class="icon-logout icon" ></span><a href="/" onclick="javascript:window.location.href='http://user:user@transplantation.ge/list/logout/'">&#4306;&#4304;&#4321;&#4309;&#4314;&#4304;</a> </div>
		</div>
	</div>



	<!--class="easyui-datagrid"-->
	<table id="dg"  title="ღვიძლის გადანერგვის კანდიდატები ცოცხალი ნათესავი დონორიდან" style="width:3210px;height:490px"
			toolbar="#toolbar" pagination="true" idField="id"
			rownumbers="true" fitColumns="true" singleSelect="true">
		<thead>
		    <tr>
				<th colspan="23" style="border-right: 1px black solid">ინფორმაცია რეციპიენტზე</th>
				<th colspan="8">ინფორმაცია დონორზე</th>
			</tr>
			<tr>
				<th field="ddate" width="20" sortable="true" editor="{type:'datebox'}">თარიღი</th>
				<th field="doctor" width="40" sortable="true" editor="text">ვის მიერაა კანდიდატი შეყვანილი მოლოდინის სიაში</th>
				<th field="recipient" width="40" sortable="true" editor="{type:'textbox'}">რეციპიენტის გვარი, სახელი</th>
				<th field="rec_pid" width="30" sortable="true" editor="text">პირადი ნომერი</th>
				<th field="rec_age" width="10" sortable="true" editor="text" style="text-align: center">ასაკი</th>
				<th field="rec_address" width="20" sortable="true" editor="text">მისამართი</th>
				<th field="rec_phone" width="20" sortable="true" editor="text">ტელეფონი</th>
				<th field="diagnosis" width="40" sortable="true" editor="text">დიაგნოზი</th>
				<th field="rhesus" width="20" sortable="true" editor="text">სისხლის ჯგუფი და რეზუსი</th>
				<th field="fibrosis" width="20" sortable="true" editor="text">ფიბროზის ხარისხი</th>
				<th field="bilirubin" width="20" sortable="true" editor="text">Bilirubin (Total)</th>
				<th field="ast" width="20" sortable="true" editor="text">AST</th>
				<th field="alt" width="20" sortable="true" editor="text">ALT</th>
				<th field="ggt" width="20" sortable="true" editor="text">GGT</th>
				<th field="cr" width="20" sortable="true" editor="text">Cr</th>
				<th field="inr" width="20" sortable="true" editor="text">INR</th>
				<th field="albumin" width="20" sortable="true" editor="text">ალბუმინი</th>
				<th field="ascites" width="20" sortable="true" editor="text">ასციტი</th>
				<th field="encephalopathy" width="20" sortable="true" editor="text">ენცეფალოპათია</th>
				<th field="bleeding" width="20" sortable="true" editor="text">სისხლდენა</th>
				<th field="child" width="20" sortable="false" editor="text">CHILD<br><a href="http://www.hepatitisc.uw.edu/page/clinical-calculators/ctp" style="font-size: smaller" target="_blank" > Calculator</a></th>
				<th field="meld" width="20" sortable="false" editor="text">MELD<br><a href="http://www.hepatitisc.uw.edu/page/clinical-calculators/meld" style="font-size: smaller" target="_blank" > Calculator</a></th>
				<th field="rec_details" width="40" sortable="true" editor="{type:'textarea'}">დამატებითი ინფორმაცია (მკურნალი ექიმის გვარი, ტელეფონი, სხვა ინფო)</th>
				<th field="donor" width="20" sortable="true" editor="text">დონორის გვარი, სახელი</th>
				<th field="don_pid" width="30" sortable="true" editor="text">პირადი ნომერი</th>
				<th field="don_age" width="10" sortable="true" editor="text">ასაკი</th>
				<th field="relationship" width="40" sortable="true" editor="text">ნათესავური კავშირი</th>
				<th field="don_address" width="20" sortable="true" editor="text">მისამართი</th>
				<th field="don_phone" width="20" sortable="true" editor="text">ტელეფონი</th>
				<th field="don_rhesus" width="20" sortable="true" editor="text">სისხლის ჯგუფი და რეზუსი</th>
				<th field="don_details" width="40" sortable="true" editor="{type:'textarea'}">დამატებითი ინფორმაცია</th>
			</tr>
		</thead>
	</table>
	<div id="toolbar">
		<a href="#" class="easyui-linkbutton" iconCls="icon-add" plain="true" onclick="javascript:$('#dg').edatagrid('addRow')">ახალი</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-remove" plain="true" onclick="javascript:$('#dg').edatagrid('destroyRow')">წაშლა</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-save" plain="true" onclick="javascript:$('#dg').edatagrid('saveRow'); $('.datagrid-row-collapse').click();">შენახვა</a>
		<a href="#" class="easyui-linkbutton" iconCls="icon-undo" plain="true" onclick="javascript:$('#dg').edatagrid('cancelRow')">გაუქმება</a>
	</div>
	<div style="padding: 5px">ბოლო ცვლილება: <?php echo $modified;?></div>

	<script type="text/javascript">

		$(function(){



			$('#dg').datagrid({
				remoteSort:false,
				view: detailview,
				detailFormatter:function(index,row){
					return '<div class="ddv"></div>';
				},
				onExpandRow: function(index,row){
					var ddv = $(this).datagrid('getRowDetail',index).find('div.ddv');
					ddv.panel({
						border:false,
						cache:true,
						encoding:"UTF-8",
						href:'show_form.php?index='+index + '&id='+ row.id,
						onLoad:function(){
							$('#dg').datagrid('fixDetailRowHeight',index);
							$('#dg').datagrid('selectRow',index);
							$('#dg').datagrid('getRowDetail',index).find('form').form('load',row);
						}
					});
					$('#dg').datagrid('fixDetailRowHeight',index);
				}
			});

			$('#ss').searchbox({
				searcher:function(value,name){
					window.location.href = "index.php?search="+value;   //+"&range="+name;
				},
				/*menu:'#mm',*/
				prompt:'ძებნა'
			});

			$("div.datagrid-cell-c2-rec_details").parent().css('border-right','1px solid black');
			$(".datagrid-header-row td").eq(2).css({'background-color':'#9b9b9b', 'color':'white'});
			//$(".datagrid-cell-c2-rec_details").parent().css('border-right','1px solid black');

		});



		$('#excel').click(function () {
			$.ajax({
				url: 'export.php',
				type: "post",
				cache: false,
				success: function () {
                  $('#xls').css('visibility','visible');
			   }
		   });
		});



</script>
	
</body>
</html>