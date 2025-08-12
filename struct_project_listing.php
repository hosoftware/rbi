<?php
include_once "add_struct.class.php";
if(isset($_REQUEST['project_id'])) {
	$rslt = $objstruct->display();
	$row = mysql_fetch_assoc($rslt);
}
$_REQUEST['txtproject'] = "";
if(!empty($row['project'])) {
	$_REQUEST['txtproject'] = $row['project'];
}
$_REQUEST['txtjobno'] = "";
if(!empty($row['jobno'])) {
	$_REQUEST['txtjobno'] = $row['jobno'];
}
$_REQUEST['txtlocation'] = "";
if(!empty($row['location'])) {
	$_REQUEST['txtlocation'] = $row['location'];
}
$_REQUEST['txttank'] = "";
if(!empty($row['tank'])) {
	$_REQUEST['txttank'] = $row['tank'];
}
$_REQUEST['txtreference'] = "";
if(!empty($row['reference'])) {
	$_REQUEST['txtreference'] = $row['reference'];
}
$_REQUEST['txtincharge'] = "";
if(!empty($row['incharge'])) {
	$_REQUEST['txtincharge'] = $row['incharge'];
}
$_REQUEST['txtyear'] = "";
if(!empty($row['year'])) {
	$_REQUEST['txtyear'] = $row['year'];
}
$_REQUEST['text_date_of_sarvey'] = "";
if(!empty($row['date_of_sarvey'])) {
	 $_REQUEST['text_date_of_sarvey'] = $row['date_of_sarvey'];
}
$_REQUEST['txtsarveydate'] = "";
if(!empty($row['sarveydate'])) {
	$_REQUEST['txtsarveydate'] = $row['sarveydate'];
}
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
 <HEAD>
  <TITLE> New Document </TITLE>
  <META NAME="Generator" CONTENT="EditPlus">
  <META NAME="Author" CONTENT="">
  <META NAME="Keywords" CONTENT="">
  <META NAME="Description" CONTENT="">
  <link href='css/style.css' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="jqwidgets/styles/jqx.base.css" type="text/css" />
  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="jqwidgets/jqxcore.js"></script>
	<script type="text/javascript" src="jqwidgets/jqxdata.js"></script> 
	<script type="text/javascript" src="jqwidgets/jqxbuttons.js"></script>
	<script type="text/javascript" src="jqwidgets/jqxscrollbar.js"></script>
	<script type="text/javascript" src="jqwidgets/jqxmenu.js"></script>
	<script type="text/javascript" src="jqwidgets/jqxgrid.js"></script>
	<script type="text/javascript" src="jqwidgets/jqxgrid.edit.js"></script>
	<script type="text/javascript" src="jqwidgets/jqxgrid.selection.js"></script> 
	<script type="text/javascript" src="jqwidgets/jqxgrid.aggregates.js"></script> 
	<script type="text/javascript" src="jqwidgets/jqxcheckbox.js"></script>
	<script type="text/javascript" src="js/gettheme.js"></script>
	 <script type="text/javascript" src="jqwidgets/jqxgrid.columnsresize.js"></script>
	 <script type="text/javascript" src="jqwidgets/jqxgrid.columnsreorder.js"></script>
	<script type="text/javascript" src="jqwidgets/jqxcalendar.js"></script>
	<script type="text/javascript" src="jqwidgets/jqxdatetimeinput.js"></script>
	<script type="text/javascript" src="jqwidgets/jqxgrid.pager.js"></script>
	<script type="text/javascript" src="jqwidgets/jqxmaskedinput.js"></script>
	<script type="text/javascript" src="jqwidgets/jqxnumberinput.js"></script>
	<script type="text/javascript" src="jqwidgets/jqxdropdownlist.js"></script>
	<script type="text/javascript" src="jqwidgets/jqxlistbox.js"></script>
	<script type="text/javascript" src="jqwidgets/globalization/globalize.js"></script>
	<script type="text/javascript" src="jqwidgets/jqxgrid.filter.js"></script>
	<script type="text/javascript" src="jqwidgets/jqxgrid.sort.js"></script>
	 <script type="text/javascript" src="jqwidgets/jqxcore.js"></script>
	 <script type="text/javascript" src="jqwidgets/jqxdropdownlist.js"></script>
		 <script type="text/javascript" src="jqwidgets/jqxcombobox.js"></script>
	<script type="text/javascript" src="jqwidgets/jqxinput.js"></script>
	<script type="text/javascript" src="jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript">
	function deleteProject(project_id) {
		
		if(confirm('Are you sure to delete?')) {
			location.href="struct_project_listing.php?doAction=DeleteProject&project_id="+project_id;
		}
	}
        $(document).ready(function () {
            var theme = "";

            // prepare the data
            var source =
            {
				datatype: "json",
					datafields:
                [
                    { name: 'project', type: 'string' },
					{ name: 'jobno', type: 'string' },
					{ name: 'tank', type: 'string' },
					{ name: 'location', type: 'string' },
					{ name: 'reference', type: 'string' },
					{ name: 'incharge', type: 'string' },
					{ name: 'edit', type: 'string' },
					{ name: 'download', type: 'date' },
					{ name: 'copy_project', type: 'date' },
					{ name: 'delete_project', type: 'string' },
					{ name: 'copy_blank_project', type: 'string' }
                ],
				method:'get',
				url: "project_data.php",
                updaterow: function (rowid, rowdata, commit) {
                    // synchronize with the server - send update command
                    // call commit with parameter true if the synchronization with the server is successful 
                    // and with parameter false if the synchronization failder.
					
					 
					}
				};
            var dataAdapter = new $.jqx.dataAdapter(source);

            // initialize jqxGrid
            $("#jqxgrid").jqxGrid(
            {
                width: 1160,
                source: dataAdapter,
                editable: false,
                theme: theme,
					showfilterrow: true,
					 showstatusbar: true,
				 filterable: true,
				columnsresize: true,
					pageable: true,
                autoheight: true,
                selectionmode: 'multiplecellsadvanced',
                columns: [
					{ text: 'delete_project', columntype: 'textbox', datafield: 'delete_project', width: 40},
                  { text: 'Project', columntype: 'textbox', datafield: 'project', width:150,editable: true },
                  { text: 'Job No', datafield: 'jobno', columntype: 'textbox', width:100 },
                  { text: 'Location', columntype: 'textbox', datafield: 'location', width: 150},
                  { text: 'Tank/Space Description', columntype: 'textbox', datafield: 'tank', width: 200},
				  { text: 'Drawing Reference No', columntype: 'textbox', datafield: 'reference', width: 200,columngroup: 'ProductDetails'},
				  { text: 'Project In Charge', columntype: 'textbox', datafield: 'incharge', width: 150,columngroup: 'ProductDetails'},
				  { text: 'Edit', columntype: 'textbox', datafield: 'edit', width: 25,align:'center'},
				  { text: 'Download', columntype: 'textbox', datafield: 'download', width: 25},
				  { text: 'Blank Copy', columntype: 'textbox', datafield: 'copy_blank_project', width: 70,columngroup: 'ProductDetails',cellformat:'d/m/Y'},
				  { text: 'Copy', columntype: 'textbox', datafield: 'copy_project', width: 50,columngroup: 'ProductDetails',cellformat:'d/m/Y'}
                ],
            });

            
        });
    </script>
</HEAD>

 <BODY>
  <div class='main'>
	<div class="heading">
		<div class="logo">
			<img src='images/a.png' height='50' width='200'/>
		</div><?php
		include_once "navigation.php";
	?>
	</div>
	<div class='container'>
		<div class='sect1'>
			<span class='h1'><strong>HULL INTEGRITY AND LIFE EXPECTANCY SURVEY</strong></span><br />
			<span class='h1'><strong>TM ANALYSIS WITH ANTICIPATED THICKNESS FOR NEXT 05 YEARS</strong></span>
			<form method='post' action=''>
			<input type='hidden' name='doAction' id='doAction' value='Add_New_Project'/>
				<input type='submit' name='Add' id='Add' value='Add New Project'/>
			</form>
			<div class='clear'></div>
		</div><?php
		
			?><!-- Grid Section Start -->
			<div class='sect2'>
				 <div id='jqxWidget'>
					<div id="jqxgrid"></div>
				</div>
			</div>
			
			<!-- Grid Section End --><?php
		
	?></div>
  </div>
 </BODY>
</HTML>
