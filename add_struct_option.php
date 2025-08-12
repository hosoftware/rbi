<?php
include_once "add_struct.class.php";
if(!empty($_REQUEST['project_id'])) {
	$rslt = $objstruct->display();
	$row = mysql_fetch_assoc($rslt);
}
else {
	$_REQUEST['project_id']=0;
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
 <style>
        .green:not(.jqx-grid-cell-hover):not(.jqx-grid-cell-selected), .jqx-widget .green:not(.jqx-grid-cell-hover):not(.jqx-grid-cell-selected) {
            color: black;
            background-color: #b6ff00;
        }
        .yellow:not(.jqx-grid-cell-hover):not(.jqx-grid-cell-selected), .jqx-widget .yellow:not(.jqx-grid-cell-hover):not(.jqx-grid-cell-selected) {
            color: black;
            background-color: yellow;
        }
        .red:not(.jqx-grid-cell-hover):not(.jqx-grid-cell-selected), .jqx-widget .red:not(.jqx-grid-cell-hover):not(.jqx-grid-cell-selected) {
            color: black;
            background-color: #e83636;
        }

        .resign{
            color: red;
            font-size:20 px !important;
            font-weight:bold;
        }
         .other{
            color: red;
            font-size:20 px !important;
            font-weight:bold;
        }
    </style>
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
	<link href="css/calendarstyle.css" rel="stylesheet" type="text/css" />
	<script src="js/calendar_new.js" type="text/javascript"></script>
    <script type="text/javascript">
	//<![CDATA[

	function deleteStuct(project_id,struct_id) {

		if(confirm('Are you sure to delete?')) {
			//location.href="add_struct_option.php?doAction=DeleteStruct&project_id="+project_id+"&struct_id="+struct_id;
			var commit = $("#jqxgrid").jqxGrid('deleterow', struct_id);
			var source =
							{
								datatype: "json",
									datafields:
								[
									{ name: 'struct_id', type: 'number' },
									{ name: 'item'},
									{ name: 'material'},
									{ name: 'grade' },
									{ name: 'original_thickness'},
									{ name: 'allowance' },
									{ name: 'renewal_thickness' },
									{ name: 'sub_corrosion' },
									{ name: 'thick_in_mm1'},
									{ name: 'diminution1' },
									{ name: 'thick_in_mm2' },
									{ name: 'diminution2' },
									{ name: 'diff_prev_cur_thick' },
									{ name: 'diff_diminution' },
									{ name: 'corrosion_mm' },
									{ name: 'next_2year'},
									{ name: 'next_5year'},
									{ name: 'length1' },
									{ name: 'breadth1'},
									{ name: 'renewal_ton1' },
									{ name: 'length2'},
									{ name: 'breadth2'},
									{ name: 'renewal_ton2'},
									{ name: 'renewal_ton3'},
									{ name: 'length3'},
									{ name: 'breadth3'},
									{ name: 'renewal_ton3'},
									{ name: 'remarks', type: 'string' },
									{ name: 'delete_struct', type: 'string' }
								],
								method:'post',
								url: 'struct_data.php'
								};
								 source.localdata = source;
								 $("#jqxgrid").jqxGrid('updatebounddata', 'cells');
		}

	}
	function deleteImage(project_id,imageno) {
		location.href="add_struct_option.php?project_id="+project_id+"&doAction=DeleteImage"+"&image_no="+imageno;
	}
	function showCal(dos, dte){
	showCalendar(dos, dte);
	}

	function  add_struct(project_id,sort_order) {
		 var datarow = {};
		 datarow['sort_order']=sort_order;
		 datarow['doAction']='add_new';
		var commit = $("#jqxgrid").jqxGrid('addrow', '2', datarow);
	}
        $(document).ready(function () {
            var theme = "";

            // prepare the data
            var source =
            {
				datatype: "json",
					datafields:
                [
                    { name: 'struct_id', type: 'number' },
                    { name: 'item', type: 'string' },
                    { name: 'material', type: 'string' },
                    { name: 'grade', type: 'string' },
                    { name: 'original_thickness', type: 'number' },
                    { name: 'allowance', type: 'number' },
                    { name: 'renewal_thickness', type: 'number' },
                    { name: 'sub_corrosion', type: 'number' },
					{ name: 'thick_in_mm1', type: 'number' },
					{ name: 'diminution1', type: 'number' },
					{ name: 'thick_in_mm2', type: 'number' },
					{ name: 'diminution2', type: 'number' },
					{ name: 'diff_prev_cur_thick', type: 'number' },
					{ name: 'diff_diminution', type: 'number' },
					{ name: 'corrosion_mm', type: 'number' },
					{ name: 'next_2year', type: 'number' },
					{ name: 'next_5year', type: 'number' },
					{ name: 'length1', type: 'number' },
					{ name: 'breadth1', type: 'number' },
					{ name: 'renewal_ton1', type: 'number' },
					{ name: 'length2', type: 'number' },
					{ name: 'breadth2', type: 'number' },
					{ name: 'renewal_ton2', type: 'number' },
					{ name: 'renewal_ton3', type: 'number' },
					{ name: 'length3', type: 'number' },
					{ name: 'breadth3', type: 'number' },
					{ name: 'renewal_ton3', type: 'number' },
					{ name: 'remarks', type: 'string' },
					{ name: 'delete_struct', type: 'string' },
					{ name: 'add_struct', type: 'string' }
                ],
				method:'post',
				url: "struct_data.php?project_id=<?php print($_REQUEST['project_id'])?>",
                updaterow: function (rowid, rowdata, commit) {
                    // synchronize with the server - send update command
                    // call commit with parameter true if the synchronization with the server is successful
                    // and with parameter false if the synchronization failder.
					 var data = "update=true&struct_id=" + rowdata.struct_id + "&item=" + rowdata.item;
					data = data + "&material=" + rowdata.material + "&grade=" + rowdata.grade;
					data = data + "&original_thickness=" + rowdata.original_thickness + "&allowance=" + rowdata.allowance;
					  data = data + "&thick_in_mm1=" + rowdata.thick_in_mm1 + "&thick_in_mm2=" + rowdata.thick_in_mm2;
					  data = data + "&diff_prev_cur_thick=" + rowdata.diff_prev_cur_thick + "&corrosion_mm=" + rowdata.corrosion_mm;
					  data = data + "&length1=" + rowdata.length1 + "&breadth1=" + rowdata.breadth1;
					  data = data + "&length2=" + rowdata.length2 + "&breadth2=" + rowdata.breadth2;
					  data = data + "&length3=" + rowdata.length3 + "&breadth3=" + rowdata.breadth3;
					  data = data + "&remarks=" + rowdata.remarks+"&project_id="+<?php print($_REQUEST['project_id'])?> ;
					  $.ajax({
							dataType: 'json',
							url: 'struct_data.php',
							data: data,
							method:'post',
							success: function (data, status, xhr) {
								  var source =
							{
								datatype: "json",
									datafields:
								[
									{ name: 'struct_id', type: 'number' },
									{ name: 'item'},
									{ name: 'material'},
									{ name: 'grade' },
									{ name: 'original_thickness'},
									{ name: 'allowance' },
									{ name: 'renewal_thickness' },
									{ name: 'sub_corrosion' },
									{ name: 'thick_in_mm1'},
									{ name: 'diminution1' },
									{ name: 'thick_in_mm2' },
									{ name: 'diminution2' },
									{ name: 'diff_prev_cur_thick' },
									{ name: 'diff_diminution' },
									{ name: 'corrosion_mm' },
									{ name: 'next_2year'},
									{ name: 'next_5year'},
									{ name: 'length1' },
									{ name: 'breadth1'},
									{ name: 'renewal_ton1' },
									{ name: 'length2'},
									{ name: 'breadth2'},
									{ name: 'renewal_ton2'},
									{ name: 'renewal_ton3'},
									{ name: 'length3'},
									{ name: 'breadth3'},
									{ name: 'renewal_ton3'},
									{ name: 'remarks', type: 'string' },
									{ name: 'delete_struct', type: 'string' }
								],
								method:'post',
								url: 'struct_data.php'
								};
								 source.localdata = source;
								 $("#jqxgrid").jqxGrid('updatebounddata', 'cells');
							}

						});
					},
					addrow: function (rowid, rowdata, position, commit) {
                    // synchronize with the server - send update command
                    // call commit with parameter true if the synchronization with the server is successful
                    // and with parameter false if the synchronization failder.
					 var data = "update=true&project_id="+<?php print($_REQUEST['project_id'])?> + "&sort_order=" + rowdata.sort_order  + "&doAction=" + rowdata.doAction;
					  $.ajax({
							dataType: 'json',
							url: 'struct_data.php',
							data: data,
							method:'get',
							success: function (data, status, xhr) {
								  var source =
							{
								datatype: "json",
									datafields:
								[
									{ name: 'struct_id', type: 'number' },
									{ name: 'item'},
									{ name: 'material'},
									{ name: 'grade' },
									{ name: 'original_thickness'},
									{ name: 'allowance' },
									{ name: 'renewal_thickness' },
									{ name: 'sub_corrosion' },
									{ name: 'thick_in_mm1'},
									{ name: 'diminution1' },
									{ name: 'thick_in_mm2' },
									{ name: 'diminution2' },
									{ name: 'diff_prev_cur_thick' },
									{ name: 'diff_diminution' },
									{ name: 'corrosion_mm' },
									{ name: 'next_2year'},
									{ name: 'next_5year'},
									{ name: 'length1' },
									{ name: 'breadth1'},
									{ name: 'renewal_ton1' },
									{ name: 'length2'},
									{ name: 'breadth2'},
									{ name: 'renewal_ton2'},
									{ name: 'renewal_ton3'},
									{ name: 'length3'},
									{ name: 'breadth3'},
									{ name: 'renewal_ton3'},
									{ name: 'remarks', type: 'string' },
									{ name: 'delete_struct', type: 'string' }
								],
								method:'post',
								url: 'struct_data.php'
								};
								 source.localdata = source;
								 $("#jqxgrid").jqxGrid('updatebounddata', 'cells');
							}

						});
					},
					 deleterow: function (rowid, commit) {
						 // synchronize with the server - send update command
                    // call commit with parameter true if the synchronization with the server is successful
                    // and with parameter false if the synchronization failder.
					 var data = "update=true&project_id="+<?php print($_REQUEST['project_id'])?> +"&struct_id="+rowid+"&doAction=Delete_Struct";
					  $.ajax({
							dataType: 'json',
							url: 'struct_data.php',
							data: data,
							method:'get',
							success: function (data, status, xhr) {
								  var source1 =
							{
								datatype: "json",
									datafields:
								[
									{ name: 'struct_id', type: 'number' },
									{ name: 'item'},
									{ name: 'material'},
									{ name: 'grade' },
									{ name: 'original_thickness'},
									{ name: 'allowance' },
									{ name: 'renewal_thickness' },
									{ name: 'sub_corrosion' },
									{ name: 'thick_in_mm1'},
									{ name: 'diminution1' },
									{ name: 'thick_in_mm2' },
									{ name: 'diminution2' },
									{ name: 'diff_prev_cur_thick' },
									{ name: 'diff_diminution' },
									{ name: 'corrosion_mm' },
									{ name: 'next_2year'},
									{ name: 'next_5year'},
									{ name: 'length1' },
									{ name: 'breadth1'},
									{ name: 'renewal_ton1' },
									{ name: 'length2'},
									{ name: 'breadth2'},
									{ name: 'renewal_ton2'},
									{ name: 'renewal_ton3'},
									{ name: 'length3'},
									{ name: 'breadth3'},
									{ name: 'renewal_ton3'},
									{ name: 'remarks', type: 'string' },
									{ name: 'delete_struct', type: 'string' }
								]
								};
								 source.localdata = source1;
								 $("#jqxgrid").jqxGrid('updatebounddata', 'cells');
							}

						});
						//commit(true);
					}
				};
            var dataAdapter = new $.jqx.dataAdapter(source);

				var cellclass1 = function (row, columnfield, value,rowdata) {
					if(parseFloat(rowdata.thick_in_mm1)>parseFloat(rowdata.renewal_thickness) && parseFloat(rowdata.thick_in_mm1)<parseFloat(rowdata.sub_corrosion) && parseFloat(rowdata.renewal_thickness)>0 && parseFloat(rowdata.thick_in_mm1)>0) {

						return 'yellow';
					}
					if(parseFloat(rowdata.thick_in_mm1)<parseFloat(rowdata.renewal_thickness) && parseFloat(rowdata.thick_in_mm1)>0){
						return 'red';
					}


	            }
				var cellclass2 = function (row, columnfield, value,rowdata) {


					if(rowdata.thick_in_mm2>rowdata.renewal_thickness && rowdata.thick_in_mm2<=rowdata.sub_corrosion) {

						return 'yellow';
					}
					if(rowdata.thick_in_mm2<=rowdata.renewal_thickness){
						return 'red';
					}


	            }
				var cellclass3 = function (row, columnfield, value,rowdata) {


					if(rowdata.next_2year>rowdata.renewal_thickness && rowdata.next_2year<=rowdata.sub_corrosion) {

						return 'yellow';
					}
					if(rowdata.next_2year<=rowdata.renewal_thickness){
						return 'red';
					}
	            }
				var cellclass4 = function (row, columnfield, value,rowdata) {

					if(rowdata.next_5year>rowdata.renewal_thickness && rowdata.next_5year<=rowdata.sub_corrosion) {

						return 'yellow';
					}
					if(rowdata.next_5year<=rowdata.renewal_thickness){
						return 'red';
					}
	            }

            // initialize jqxGrid
            $("#jqxgrid").jqxGrid(
            {
                width: 1170,
                source: dataAdapter,
                editable: true,
                theme: theme,
				 showstatusbar: true,
				 filterable: true,
				columnsresize: true,
					showfilterrow: true,
                selectionmode: 'multiplecellsadvanced',
					 enablehover: false,
					pageable: true,
                autoheight: true,
				pagesizeoptions: ['50', '100', '150', '200', '250', '300', '350', '400', '450', '500', '550', '600','1000'],
                columns: [

				  { text: 'Delete', columntype: 'textbox', datafield: 'delete_struct', width: 40,align: 'center',editable: false,pinned:true},
				  { text: 'Add', columntype: 'textbox', datafield: 'add_struct', width: 20,align: 'center',editable: false,pinned:true},
                  { text: 'Items', columntype: 'textbox',filtertype: 'textbox', datafield: 'item', width: 150,editable: true ,pinned:true},
                  { text: 'Material', datafield: 'material', columntype: 'textbox', width: 50 },
                  { text: 'Grade', columntype: 'textbox', datafield: 'grade', width: 80},
                  { text: '(mm)', columntype: 'textbox', datafield: 'original_thickness', width: 80,columngroup: 'ProductDetails'},
                  { text: '(%)', columntype: 'textbox', datafield: 'allowance', width: 80,columngroup: 'wastage_allowance'},
                  { text: 'Renewal<br/>Thickness(mm)', columntype: 'textbox', datafield: 'renewal_thickness', width: 80 ,editable: false},
                  { text: 'Subs<br/>Corrosion', columntype: 'textbox', datafield: 'sub_corrosion', width: 80 ,editable: false},
                  { text: '(Thickness in mm)', columntype: 'textbox', datafield: 'thick_in_mm1', width: 80,columngroup: 'prev_guage_thickness' ,cellclassname: cellclass1},
                  { text: '(Diminution in %)', columntype: 'textbox', datafield: 'diminution1', width: 80,columngroup: 'prev_guage_thickness' ,editable: false},
                  { text: '(Thickness in mm)', columntype: 'textbox', datafield: 'thick_in_mm2', width: 80,columngroup: 'pres_guage_thickness',cellclassname: cellclass2},
				{ text: '(Diminution in %)', columntype: 'textbox', datafield: 'diminution2', width: 80,columngroup: 'pres_guage_thickness',editable: false},
				{ text: 'Dimi. diff. btw prev and present tck', columntype: 'textbox', datafield: 'diff_prev_cur_thick', width: 80,columngroup: 'dem_calculation',ailign: 'center',editable: false},
				{ text: 'Dimi. Difference in %', columntype: 'textbox', datafield: 'diff_diminution', width: 80,columngroup: 'dem_calculation',align: 'center',editable: false},
				{ text: 'Corrosion Rate in (mm)', columntype: 'textbox', datafield: 'corrosion_mm', width: 80,columngroup: 'dem_calculation',align: 'center'},
				{ text: 'Next 2.5 years', columntype: 'textbox', datafield: 'next_2year', width: 80,columngroup: 'yearly_dim',align: 'center',cellclassname: cellclass3,editable: false},
				{ text: 'Next 5 years', columntype: 'textbox', datafield: 'next_5year', width: 80,columngroup: 'yearly_dim',align: 'center',cellclassname: cellclass4,editable: false},
				{ text: 'Length', columntype: 'textbox', datafield: 'length1', width: 80,columngroup: 'present_condition',align: 'center'},
				{ text: 'Breath', columntype: 'textbox', datafield: 'breadth1', width: 80,columngroup: 'present_condition',align: 'center'},
				{ text: 'Renewal in Ton', columntype: 'textbox', datafield: 'renewal_ton1', width: 80,columngroup: 'present_condition',align: 'center',editable: false},
				{ text: 'Length', columntype: 'textbox', datafield: 'length2', width: 80,columngroup: 'after_2year',align: 'center'},
				{ text: 'Breath', columntype: 'textbox', datafield: 'breadth2', width: 80,columngroup: 'after_2year',align: 'center'},
				{ text: 'Renewal in Ton', columntype: 'textbox', datafield: 'renewal_ton2', width: 80,columngroup: 'after_2year',align: 'center',editable: false},
				{ text: 'Length', columntype: 'textbox', datafield: 'length3', width: 80,columngroup: 'after_5year',align: 'center'},
				{ text: 'Breath', columntype: 'textbox', datafield: 'breadth3', width: 80,columngroup: 'after_5year',align: 'center'},
				{ text: 'Renewal in Ton', columntype: 'textbox', datafield: 'renewal_ton3', width: 80,columngroup: 'after_5year',ailign: 'center',editable: false},
				{ text: 'Remarks', columntype: 'textbox', datafield: 'remarks', width: 180,align: 'center'}
                ],
				columngroups:
                [
                  { text: 'Original<br/> Thickness<br/>', align: 'top', name: 'ProductDetails' ,height:100},
                  { text: 'Wastage Allowance', align: 'center', name: 'wastage_allowance' },
                  { text: 'Previous Guaged Thickness', align: 'center', name: 'prev_guage_thickness' },
				  { text: 'Present Guaged Thickness', align: 'center', name: 'pres_guage_thickness' },
				  { text: 'Diminution Calculation', align: 'center', name: 'dem_calculation' },
				  { text: 'Anticipated Thickness in mm ', ailign: 'center', name: 'anti_thickness' },
				  { text: 'Ref Yearly dim% ', align: 'center', name: 'yearly_dim' , parentgroup:'anti_thickness'},
				  { text: 'Estimated Renewal', align: 'center', name: 'estimated_renewal' },
				  { text: 'Present condition', align: 'center', name: 'present_condition',parentgroup:'estimated_renewal' },
				  { text: 'After 2.5 Years', align: 'center', name: 'after_2year',parentgroup:'estimated_renewal' },
				  { text: 'After 5 Years', align: 'center', name: 'after_5year',parentgroup:'estimated_renewal' },
                 // { text: 'Order Details', parentgroup: 'ProductDetails', align: 'center', name: 'OrderDetails' },
                  //{ text: 'Location', align: 'center', name: 'Location' }
                ]
            });

        });
		/*function for submitting the form*/
		function frmsubmit(objFrm2) {

			var objFrom1 = document.getElementById('frm_project');
			objFrm2.txtproject.value = objFrom1.txtproject.value;
			objFrm2.txtlocation.value = objFrom1.txtlocation.value;
			objFrm2.txtjobno.value = objFrom1.txtjobno.value;
			objFrm2.txttank.value = objFrom1.txttank.value;
			objFrm2.txtreference.value = objFrom1.txtreference.value;
			objFrm2.text_date_of_sarvey.value = objFrom1.text_date_of_sarvey.value;
			objFrm2.txtsarveydate.value = objFrom1.txtsarveydate.value;
			objFrm2.txtyear.value = objFrom1.txtyear.value;
			objFrm2.txtincharge.value = objFrom1.txtincharge.value;
			if(objFrm2.txtheight.value=='') {
				objFrm2.txtheight.focus();
				alert("Please enter height");
				return false;
			}
			if(objFrm2.txtweight.value=='') {
				objFrm2.txtweight.focus();
				alert("Please enter weight");
				return false;
			}

		}
		//]]>
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
			<form method='post' name='frm_project' id='frm_project' >
				<ul class='lst-disp'>
				<li class='lst-item'>
					<div class='label1'>Project:</div><span class='span_txt'><input type='text' name='txtproject' id='txtproject' value='<?php print($_REQUEST['txtproject'])?>' size="25"/></span>

				</li>
				<div class='clear'></div>
				<li class='lst-item'>
					<label class='label1'>Job No:</label><span class='span_txt'><input type='text' name='txtjobno' id='txtjobno' value='<?php print($_REQUEST['txtjobno'])?>' size="25"/></span>
				</li>
				<div class='clear'></div>
				<li class='lst-item'>
					<label class='label1'>Project Location:</label><span class='span_txt'><input type='text' name='txtlocation' id='txtlocation' value='<?php print($_REQUEST['txtlocation'])?>' size="25"/></span>
				</li>
				</ul>
				<ul class='lst-disp'>
				<li class='lst-item'>
					<label class='label1'>Tank/Space Description:</label><span class='span_txt'><input type='text' name='txttank' id='txttank' value='<?php print($_REQUEST['txttank'])?>' size="25"/></span>
				</li>
				<div class='clear'></div>
				<li class='lst-item'>
					<label class='label1'>Drawing Reference No:</label><span class='span_txt'><input type='text' name='txtreference' id='txtreference' value='<?php print($_REQUEST['txtreference'])?>' size="25"/></span>
				</li>
				<div class='clear'></div>
				<li class='lst-item'>
					<label class='label1'>Project In Charge:</label><span class='span_txt'><input type='text' name='txtincharge' id='txtincharge' value='<?php print($_REQUEST['txtincharge'])?>' size="25"/></span>
				</li>
				</ul>
				<ul class='lst-disp'>
				<li class='lst-item'>
					<label class='label1'>Year Of Build:</label><span class='span_txt'><input type='text' name='txtyear' id='txtyear' value='<?php print($_REQUEST['txtyear'])?>' size="25"/></span>
				</li>
				<div class='clear'></div>
				<li>
					<label class='label1'>Date Of Last Survey:</label><span class='span_txt'><input type='text' name='text_date_of_sarvey' id='text_date_of_sarvey' value='<?php print($_REQUEST['text_date_of_sarvey'])?>' size="20"/> <img
									title="Calendar" style="vertical-align: middle;"
									src="images/calendar0.gif"
									onClick="return showCal('text_date_of_sarvey', 'y-mm-dd');" border="0"></span>
				</li>
				<div class='clear'></div>
				<li class='lst-item'>
					<label class='label1'>Servey Date:</label><span class='span_txt'><input type='text' name='txtsarveydate' id='txtsarveydate' value='<?php print($_REQUEST['txtsarveydate'])?>' size="20"/> <img
									title="Calendar" style="vertical-align: middle;"
									src="images/calendar0.gif"
									onClick="return showCal('txtsarveydate', 'y-mm-dd');" border="0"></span>
				</li>
				</ul>
			<?php
			if(empty($_REQUEST['project_id'])) {
				?><span class='btn_submit'><input type='submit' name='add_project' value='Add Project'/></span><?php
			}
			?>
			<input type='hidden' name='doAction' value='AddProject'/>
			</form>
			<div class='clear'></div>
		</div><?php
		if(!empty($_REQUEST['project_id'])) {
			?><!-- Grid Section Start -->
			<div class='sect2'>
				 <div id='jqxWidget'>
					<div id="jqxgrid"></div>
				</div>
			</div>
			<div class='sect2'><?php

				$result = $objstruct->displayImageDetails($_REQUEST['project_id']);
				$row = mysql_fetch_assoc($result);
				$_REQUEST['txtheight'] = "200";
				if(!empty($row['height'])) {
					$_REQUEST['txtheight'] = $row['height'];
				}
				$_REQUEST['txtwidth'] = "300";
				if(!empty($row['width'])) {
					$_REQUEST['txtwidth'] = $row['width'];
				}
				for($i=1;$i<=16;$i++) {
					$_REQUEST['txttitle'.$i] = "";
					if(!empty($row['title'.$i])) {
						$_REQUEST['txttitle'.$i] = $row['title'.$i];
					}

					$_REQUEST['txtdescription'.$i] = " ";
					if(!empty($row['description'.$i])) {
						$_REQUEST['txtdescription'.$i] = $row['description'.$i];
					}
					if($i<=4){
						$_REQUEST['txtrating'.$i] = "";
						if(!empty($row['rating'.$i])) {
							$_REQUEST['txtrating'.$i] = $row['rating'.$i];
						}
						$_REQUEST['txtobservations'.$i] = "";
						if(!empty($row['observations'.$i])) {
							$_REQUEST['txtobservations'.$i] = $row['observations'.$i];
						}
						$_REQUEST['txtrecommendations'.$i] = "";
						if(!empty($row['recommendations'.$i])) {
							$_REQUEST['txtrecommendations'.$i] = $row['recommendations'.$i];
						}
					}
				}

					?><form name='frm_projectdetails' id='frm_projectdetails' enctype='multipart/form-data' method='post' onsubmit=' return frmsubmit(this);'>
				<div class="leftside">
					<table align='center'>
						<tr>
							<td>Image Height</td>
							<td><input type='test' name='txtheight' id='txtheight' value='<?php print($_REQUEST['txtheight'])?>'/></td>
						</tr>
						<tr>
							<td>Image Width</td>
							<td><input type='test' name='txtwidth' id='txtwidth' value='<?php print($_REQUEST['txtwidth'])?>'/></td>
						</tr>
						<tr>
							<td colspan='2'>COATING CONDITION OF PLATING</td>
						</tr>
						<tr>
							<td>Title1</td>
							<td><input type='test' name='txttitle1' id='txttitle1' value='<?php print($_REQUEST['txttitle1'])?>'/></td>
						</tr>
						<tr>
							<td>Description1</td>
							<td><textarea name='txtdescription1' id='txtdescription1' cols='20' rows='3'><?php print($_REQUEST['txtdescription1'])?></textarea></td>
						</tr>
						<tr>
							<td>Image1</td>
							<td><input type='file' name='txtfile1' id='txtfile1' value=''/><br/><?php
						if(!empty($row['image1'])) {
						$path1 = 'upload_images/'.$row['image1'];
						?><img src="<?php print($path1)?>" height="100" width="100"/><a href="javascript:deleteImage('<?php print($_REQUEST['project_id'])?>','1')">delete image</a><?php

						}
						?></td>
						</tr>
						<tr>
							<td>Title2</td>
							<td><input type='test' name='txttitle2' id='txttitle2' value='<?php print($_REQUEST['txttitle2'])?>'/></td>
						</tr>
						<tr>
							<td>Description2</td>
							<td><textarea name='txtdescription2' id='txtdescription2' cols='20' rows='3'><?php print($_REQUEST['txtdescription2'])?></textarea></td>
						</tr>
						<tr>
							<td>Image2</td>
							<td><input type='file' name='txtfile2' id='txtfile2' value=''/><br/><?php
						if(!empty($row['image2'])) {
						$path1 = 'upload_images/'.$row['image2'];
						?><img src="<?php print($path1)?>" height="100" width="100"/><a href="javascript:deleteImage('<?php print($_REQUEST['project_id'])?>','2')">delete image</a><?php

						}
						?></td>
						</tr>
						<tr>
							<td>Title3</td>
							<td><input type='test' name='txttitle3' id='txttitle3' value='<?php print($_REQUEST['txttitle3'])?>'/></td>
						</tr>
						<tr>
							<td>Description3</td>
							<td><textarea name='txtdescription3' id='txtdescription3' cols='20' rows='3'><?php print($_REQUEST['txtdescription3'])?></textarea></td>
						</tr>
						<tr>
							<td>Image3</td>
							<td><input type='file' name='txtfile3' id='txtfile3' value=''/><br/><?php
						if(!empty($row['image3'])) {
						$path1 = 'upload_images/'.$row['image3'];
						?><img src="<?php print($path1)?>" height="100" width="100"/><a href="javascript:deleteImage('<?php print($_REQUEST['project_id'])?>','3')">delete image</a><?php

						}
						?></td>
						</tr>
						<tr>
							<td>Title4</td>
							<td><input type='test' name='txttitle4' id='txttitle4' value='<?php print($_REQUEST['txttitle4'])?>'/></td>
						</tr>
						<tr>
							<td>Description4</td>
							<td><textarea name='txtdescription4' id='txtdescription4' cols='20' rows='3'><?php print($_REQUEST['txtdescription4'])?></textarea></td>
						</tr>
						<tr>
							<td>Image4</td>
							<td><input type='file' name='txtfile4' id='txtfile4' value=''/><br/><?php
						if(!empty($row['image4'])) {
						$path1 = 'upload_images/'.$row['image4'];
						?><img src="<?php print($path1)?>" height="100" width="100"/><a href="javascript:deleteImage('<?php print($_REQUEST['project_id'])?>','4')">delete image</a><?php

						}
						?></td>
						</tr>
						<tr>
							<td>Rating</td>
							<td><input type='text' name='txtrating1' id='txtrating1' value='<?php print($_REQUEST['txtrating1'])?>'/></td>
						</tr>
						<tr>
							<td>Observations</td>
							<td><textarea name='txtobservations1' id='txtobservations1' cols='20' rows='3'><?php print($_REQUEST['txtobservations1'])?></textarea></td>
						</tr>
						<tr>
							<td>Recommendations</td>
							<td><textarea name='txtrecommendations1' id='txtrecommondations1' cols='20' rows='3'><?php print($_REQUEST['txtrecommendations1'])?></textarea></td>
						</tr>
					</table>
					<div class='clear'></div>
				</div>
				<div class="rightside">
					<table align='center'>
						<tr>
							<td colspan='2'>COATING CONDITION OF INTERNALS</td>
						</tr>
						<tr>
							<td>Title1</td>
							<td><input type='test' name='txttitle5' id='txttitle5' value='<?php print($_REQUEST['txttitle5'])?>'/></td>
						</tr>
						<tr>
							<td>Description1</td>
							<td><textarea name='txtdescription5' id='txtdescription5' cols='20' rows='3'><?php print($_REQUEST['txtdescription5'])?></textarea></td>
						</tr>
						<tr>
							<td>Image1</td>
							<td><input type='file' name='txtfile5' id='txtfile5' value=''/><br/><?php
						if(!empty($row['image5'])) {
						$path1 = 'upload_images/'.$row['image5'];
						?><img src="<?php print($path1)?>" height="100" width="100"/><a href="javascript:deleteImage('<?php print($_REQUEST['project_id'])?>','5')">delete image</a><?php

						}
						?></td>
						</tr>
						<tr>
							<td>Title2</td>
							<td><input type='test' name='txttitle6' id='txttitle6' value='<?php print($_REQUEST['txttitle6'])?>'/></td>
						</tr>
						<tr>
							<td>Description2</td>
							<td><textarea name='txtdescription6' id='txtdescription6' cols='20' rows='3'><?php print($_REQUEST['txtdescription6'])?></textarea></td>
						</tr>
						<tr>
							<td>Image2</td>
							<td><input type='file' name='txtfile6' id='txtfile6' value=''/><br/><?php
						if(!empty($row['image6'])) {
						$path1 = 'upload_images/'.$row['image6'];
						?><img src="<?php print($path1)?>" height="100" width="100"/><a href="javascript:deleteImage('<?php print($_REQUEST['project_id'])?>','6')">delete image</a><?php

						}
						?></td>
						</tr>
						<tr>
							<td>Title3</td>
							<td><input type='test' name='txttitle7' id='txttitle7' value='<?php print($_REQUEST['txttitle7'])?>'/></td>
						</tr>
						<tr>
							<td>Description3</td>
							<td><textarea name='txtdescription7' id='txtdescription7' cols='20' rows='3'><?php print($_REQUEST['txtdescription7'])?></textarea></td>
						</tr>
						<tr>
							<td>Image3</td>
							<td><input type='file' name='txtfile7' id='txtfile7' value=''/><br/><?php
						if(!empty($row['image7'])) {
						$path1 = 'upload_images/'.$row['image7'];
						?><img src="<?php print($path1)?>" height="100" width="100"/><a href="javascript:deleteImage('<?php print($_REQUEST['project_id'])?>','7')">delete image</a><?php

						}
						?></td>
						</tr>
						<tr>
							<td>Title4</td>
							<td><input type='test' name='txttitle8' id='txttitle8' value='<?php print($_REQUEST['txttitle8'])?>'/></td>
						</tr>
						<tr>
							<td>Description4</td>
							<td><textarea name='txtdescription8' id='txtdescription8' cols='20' rows='3'><?php print($_REQUEST['txtdescription8'])?></textarea></td>
						</tr>
						<tr>
							<td>Image4</td>
							<td><input type='file' name='txtfile8' id='txtfile8' value=''/><br/><?php
						if(!empty($row['image8'])) {
						$path1 = 'upload_images/'.$row['image8'];
						?><img src="<?php print($path1)?>" height="100" width="100"/><a href="javascript:deleteImage('<?php print($_REQUEST['project_id'])?>','8')">delete image</a><?php

						}
						?></td>
						</tr>
						<tr>
							<td>Rating</td>
							<td><input type='text' name='txtrating2' id='txtrating2' value='<?php print($_REQUEST['txtrating2'])?>'/></td>
						</tr>
						<tr>
							<td>Observations</td>
							<td><textarea name='txtobservations2' id='txtobservations2' cols='20' rows='3'><?php print($_REQUEST['txtobservations2'])?></textarea></td>
						</tr>
						<tr>
							<td>Recommendations</td>
							<td><textarea name='txtrecommendations2' id='txtrecommendations2' cols='20' rows='3'><?php print($_REQUEST['txtrecommendations2'])?></textarea></td>
						</tr>
					</table>
				</div>
				<div class='clear'></div><?php
				if(!empty($_REQUEST['doAction']) && $_REQUEST['doAction']=='Copy'){
					?><input type='hidden' name='doAction' value='CopyProject'/><?php
				}
				else if(!empty($_REQUEST['doAction']) && $_REQUEST['doAction']=='BlankCopy') {
					?><input type='hidden' name='doAction' value='CopyBlankProject'/><?php
				}
				else {
					?><input type='hidden' name='doAction' value='UpdateProject'/><?php
				}
				?>

				<input type='hidden' name='txtproject' id='txtproject' value='<?php print($_REQUEST['txtproject'])?>'/>
				<input type='hidden' name='txtjobno' id='txtjobno' value='<?php print($_REQUEST['txtjobno'])?>'/>
				<input type='hidden' name='txtlocation' id='txtlocation' value='<?php print($_REQUEST['txtlocation'])?>'/>
				<input type='hidden' name='txttank' id='txttank' value='<?php print($_REQUEST['txttank'])?>'/>
				<input type='hidden' name='txtreference' id='txtreference' value='<?php print($_REQUEST['txtreference'])?>'/>
				<input type='hidden' name='txtincharge' id='txtincharge' value='<?php print($_REQUEST['txtincharge'])?>'/>
				<input type='hidden' name='txtyear' id='txtyear' value='<?php print($_REQUEST['txtyear'])?>'/>
				<input type='hidden' name='text_date_of_sarvey' id='text_date_of_sarvey' value='<?php print($_REQUEST['text_date_of_sarvey'])?>'/>
				<input type='hidden' name='txtsarveydate' id='txtsarveydate' value='<?php print($_REQUEST['txtsarveydate'])?>'/>
				<input type='hidden' name='project_id' id='project_id' value='<?php print($_REQUEST['project_id'])?>'/>

			<div class="leftside">
					<table align='center'>
						<tr>
							<td colspan='2'>STRUCTURAL ASSESSMENT OF PLATING</td>
						</tr>
						<tr>
							<td>Title1</td>
							<td><input type='test' name='txttitle9' id='txttitle9' value='<?php print($_REQUEST['txttitle9'])?>'/></td>
						</tr>
						<tr>
							<td>Description1</td>
							<td><textarea name='txtdescription9' id='txtdescription1' cols='20' rows='3'><?php print($_REQUEST['txtdescription9'])?></textarea></td>
						</tr>
						<tr>
							<td>Image1</td>
							<td><input type='file' name='txtfile9' id='txtfile9' value=''/><br/><?php
						if(!empty($row['image9'])) {
						$path1 = 'upload_images/'.$row['image9'];
						?><img src="<?php print($path1)?>" height="100" width="100"/><a href="javascript:deleteImage('<?php print($_REQUEST['project_id'])?>','9')">delete image</a><?php

						}
						?></td>
						</tr>
						<tr>
							<td>Title2</td>
							<td><input type='test' name='txttitle10' id='txttitle10' value='<?php print($_REQUEST['txttitle10'])?>'/></td>
						</tr>
						<tr>
							<td>Description2</td>
							<td><textarea name='txtdescription10' id='txtdescription10' cols='20' rows='3'><?php print($_REQUEST['txtdescription10'])?></textarea></td>
						</tr>
						<tr>
							<td>Image2</td>
							<td><input type='file' name='txtfile10' id='txtfile10' value=''/><br/><?php
						if(!empty($row['image10'])) {
						$path1 = 'upload_images/'.$row['image10'];
						?><img src="<?php print($path1)?>" height="100" width="100"/><a href="javascript:deleteImage('<?php print($_REQUEST['project_id'])?>','10')">delete image</a><?php

						}
						?></td>
						</tr>
						<tr>
							<td>Title3</td>
							<td><input type='test' name='txttitle11' id='txttitle11' value='<?php print($_REQUEST['txttitle11'])?>'/></td>
						</tr>
						<tr>
							<td>Description3</td>
							<td><textarea name='txtdescription11' id='txtdescription11' cols='20' rows='3'><?php print($_REQUEST['txtdescription11'])?></textarea></td>
						</tr>
						<tr>
							<td>Image3</td>
							<td><input type='file' name='txtfile11' id='txtfile11' value=''/><br/><?php
						if(!empty($row['image11'])) {
						$path1 = 'upload_images/'.$row['image11'];
						?><img src="<?php print($path1)?>" height="100" width="100"/<a href="javascript:deleteImage('<?php print($_REQUEST['project_id'])?>','11')">delete image</a>><?php

						}
						?></td>
						</tr>
						<tr>
							<td>Title4</td>
							<td><input type='test' name='txttitle12' id='txttitle12' value='<?php print($_REQUEST['txttitle12'])?>'/></td>
						</tr>
						<tr>
							<td>Description4</td>
							<td><textarea name='txtdescription12' id='txtdescription12' cols='20' rows='3'><?php print($_REQUEST['txtdescription12'])?></textarea></td>
						</tr>
						<tr>
							<td>Image4</td>
							<td><input type='file' name='txtfile12' id='txtfile12' value=''/><br/><?php
						if(!empty($row['image12'])) {
						$path1 = 'upload_images/'.$row['image12'];
						?><img src="<?php print($path1)?>" height="100" width="100"/><a href="javascript:deleteImage('<?php print($_REQUEST['project_id'])?>','12')">delete image</a><?php

						}
						?></td>
						</tr>
						<tr>
							<td>Rating</td>
							<td><input type='text' name='txtrating3' id='txtrating3' value='<?php print($_REQUEST['txtrating3'])?>'/></td>
						</tr>
						<tr>
							<td>Observations</td>
							<td><textarea name='txtobservations3' id='txtobservations3' cols='20' rows='3'><?php print($_REQUEST['txtobservations3'])?></textarea></td>
						</tr>
						<tr>
							<td>Recommendations</td>
							<td><textarea name='txtrecommendations3' id='txtrecommondations3' cols='20' rows='3'><?php print($_REQUEST['txtrecommendations3'])?></textarea></td>
						</tr>
					</table>
					<div class='clear'></div>
				</div>
				<div class="rightside">
					<table align='center'>
						<tr>
							<td colspan='2'>STRUCTURAL ASSESSMENT OF INTERNALS</td>
						</tr>
						<tr>
							<td>Title1</td>
							<td><input type='test' name='txttitle13' id='txttitle13' value='<?php print($_REQUEST['txttitle13'])?>'/></td>
						</tr>
						<tr>
							<td>Description1</td>
							<td><textarea name='txtdescription13' id='txtdescription13' cols='20' rows='3'><?php print($_REQUEST['txtdescription13'])?></textarea></td>
						</tr>
						<tr>
							<td>Image1</td>
							<td><input type='file' name='txtfile13' id='txtfile13' value=''/><br/><?php
						if(!empty($row['image13'])) {
						$path1 = 'upload_images/'.$row['image13'];
						?><img src="<?php print($path1)?>" height="100" width="100"/><a href="javascript:deleteImage('<?php print($_REQUEST['project_id'])?>','13')">delete image</a><?php

						}
						?></td>
						</tr>
						<tr>
							<td>Title2</td>
							<td><input type='test' name='txttitle14' id='txttitle14' value='<?php print($_REQUEST['txttitle14'])?>'/></td>
						</tr>
						<tr>
							<td>Description2</td>
							<td><textarea name='txtdescription14' id='txtdescription14' cols='20' rows='3'><?php print($_REQUEST['txtdescription14'])?></textarea></td>
						</tr>
						<tr>
							<td>Image2</td>
							<td><input type='file' name='txtfile14' id='txtfile14' value=''/><br/><?php
						if(!empty($row['image14'])) {
						$path1 = 'upload_images/'.$row['image14'];
						?><img src="<?php print($path1)?>" height="100" width="100"/><a href="javascript:deleteImage('<?php print($_REQUEST['project_id'])?>','14')">delete image</a><?php

						}
						?></td>
						</tr>
						<tr>
							<td>Title3</td>
							<td><input type='test' name='txttitle15' id='txttitle15' value='<?php print($_REQUEST['txttitle15'])?>'/></td>
						</tr>
						<tr>
							<td>Description3</td>
							<td><textarea name='txtdescription15' id='txtdescription15' cols='20' rows='3'><?php print($_REQUEST['txtdescription15'])?></textarea></td>
						</tr>
						<tr>
							<td>Image3</td>
							<td><input type='file' name='txtfile15' id='txtfile15' value=''/><br/><?php
						if(!empty($row['image15'])) {
						$path1 = 'upload_images/'.$row['image15'];
						?><img src="<?php print($path1)?>" height="100" width="100"/><a href="javascript:deleteImage('<?php print($_REQUEST['project_id'])?>','15')">delete image</a><?php

						}
						?></td>
						</tr>
						<tr>
							<td>Title4</td>
							<td><input type='test' name='txttitle16' id='txttitle16' value='<?php print($_REQUEST['txttitle16'])?>'/></td>
						</tr>
						<tr>
							<td>Description4</td>
							<td><textarea name='txtdescription16' id='txtdescription16' cols='20' rows='3'><?php print($_REQUEST['txtdescription16'])?></textarea></td>
						</tr>
						<tr>
							<td>Image4</td>
							<td><input type='file' name='txtfile16' id='txtfile16' value=''/><br/><?php
						if(!empty($row['image16'])) {
						$path1 = 'upload_images/'.$row['image16'];
						?><img src="<?php print($path1)?>" height="100" width="100"/><a href="javascript:deleteImage('<?php print($_REQUEST['project_id'])?>','16')">delete image</a><?php

						}
						?></td>
						</tr>
						<tr>
							<td>Rating</td>
							<td><input type='text' name='txtrating4' id='txtrating4' value='<?php print($_REQUEST['txtrating4'])?>'/></td>
						</tr>
						<tr>
							<td>Observations</td>
							<td><textarea name='txtobservations4' id='txtobservations4' cols='20' rows='3'><?php print($_REQUEST['txtobservations4'])?></textarea></td>
						</tr>
						<tr>
							<td>Recommendations</td>
							<td><textarea name='txtrecommendations4' id='txtrecommendations4' cols='20' rows='3'><?php print($_REQUEST['txtrecommendations4'])?></textarea></td>
						</tr>
					</table>
				</div>
				<div class='clear'></div>
					<input type='submit' value='UPDATE'/>
			</form>
			</div>
			<!-- Grid Section End --><?php
		}
	?></div>
  </div>
 </BODY>
</HTML>
