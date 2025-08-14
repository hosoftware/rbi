<?php
include_once "add_struct.class.php";
$dbcon = mysqli_connect("localhost", "erp", "aries12171219", "hiles", 3306)
    or die("Error in mysql connection");
if(!empty($_REQUEST['update'])) { 
	if(empty($_REQUEST['corrosion_mm'])) {
		$_REQUEST['corrosion_mm'] = '0.17';
	}
	if(empty($_REQUEST['item'])||$_REQUEST['item']=='null')
		$_REQUEST['item'] = '';
	if(empty($_REQUEST['material'])||$_REQUEST['material']=='null')
		print $_REQUEST['material'] = '';
	if(empty($_REQUEST['grade'])||$_REQUEST['grade']=='null')
		$_REQUEST['grade'] = '';
	if(empty($_REQUEST['original_thickness']) ||$_REQUEST['original_thickness']=='null')
		$_REQUEST['original_thickness'] = '';
	if(empty($_REQUEST['allowance']) ||$_REQUEST['allowance']=='null')
		$_REQUEST['allowance'] = '';
	if(empty($_REQUEST['thick_in_mm1']) ||$_REQUEST['thick_in_mm1']=='null')
		$_REQUEST['thick_in_mm1'] = '';
	if(empty($_REQUEST['thick_in_mm2']) ||$_REQUEST['thick_in_mm2']=='null')
		$_REQUEST['thick_in_mm2'] = '';
	if(empty($_REQUEST['diff_prev_cur_thick']) ||$_REQUEST['diff_prev_cur_thick']=='null')
		$_REQUEST['diff_prev_cur_thick'] = '';
	if(empty($_REQUEST['corrosion_mm']) ||$_REQUEST['corrosion_mm']=='null')
		$_REQUEST['corrosion_mm'] = '';
	if(empty($_REQUEST['length1']) ||$_REQUEST['length1']=='null')
		$_REQUEST['length1'] = '';
	if(empty($_REQUEST['length2']) ||$_REQUEST['length2']=='null')
		$_REQUEST['length2'] = '';
	if(empty($_REQUEST['length3']) ||$_REQUEST['length3']=='null')
		$_REQUEST['length3'] = '';
	if(empty($_REQUEST['remarks']) ||$_REQUEST['remarks']=='null')
		$_REQUEST['remarks'] = '';
	if(!empty($_REQUEST['doAction'])&&$_REQUEST['doAction']=='Delete_Struct') { print "delete";
		$struct_id = $_REQUEST['struct_id'];
		 $sql_del = "DELETE FROM struct_option WHERE id=".$struct_id;
		mysqli_query($dbcon,$sql_del);
		$struct_options = $objstruct->get_stuct_option();

		echo json_encode($struct_options);
	}
	else if(!empty($_REQUEST['struct_id'])) {
		$sql_upd = "UPDATE IGNORE  struct_option
		SET item='".addslashes($_REQUEST['item'])."',
		material='".addslashes($_REQUEST['material'])."',
		grade='".addslashes($_REQUEST['grade'])."',
		original_thickness='".addslashes($_REQUEST['original_thickness'])."',
		allowance='".addslashes($_REQUEST['allowance'])."',
		thick_in_mm1='".addslashes($_REQUEST['thick_in_mm1'])."',
		thick_in_mm2='".addslashes($_REQUEST['thick_in_mm2'])."',
		diff_prev_cur_thick='".addslashes($_REQUEST['diff_prev_cur_thick'])."',
		corrosion_mm='".addslashes($_REQUEST['corrosion_mm'])."',
		length1='".addslashes($_REQUEST['length1'])."',
		breadth1='".addslashes($_REQUEST['breadth1'])."',
		length2='".addslashes($_REQUEST['length2'])."',
		breadth2='".addslashes($_REQUEST['breadth2'])."',
		length3='".addslashes($_REQUEST['length3'])."',
		breadth3='".addslashes($_REQUEST['breadth3'])."',
		project_id='".addslashes($_REQUEST['project_id'])."',
		remarks='".addslashes($_REQUEST['remarks'])."'
		WHERE id = '".addslashes($_REQUEST['struct_id'])."'";
		mysqli_query($dbcon,$sql_upd);
	}
	else if(!empty($_REQUEST['doAction'])&&$_REQUEST['doAction']=='add_new') {
		$sort_order = $_REQUEST['sort_order']+1;
		$updsort_order = $_REQUEST['sort_order']+1;
		$sql_ins = "INSERT IGNORE INTO struct_option(project_id,item,material,grade,original_thickness,allowance,thick_in_mm1,thick_in_mm2,diff_prev_cur_thick,corrosion_mm,length1,breadth1,length2,breadth2,length3,breadth3,remarks,sort_order)
		VALUES('".addslashes($_REQUEST['project_id'])."',
		'".addslashes($_REQUEST['item'])."',
		'".addslashes($_REQUEST['material'])."',
		'".addslashes($_REQUEST['grade'])."',
		'".addslashes($_REQUEST['original_thickness'])."',
		'".addslashes($_REQUEST['allowance'])."',
		'".addslashes($_REQUEST['thick_in_mm1'])."',
		'".addslashes($_REQUEST['thick_in_mm2'])."',
		'".addslashes($_REQUEST['diff_prev_cur_thick'])."',
		'".addslashes($_REQUEST['corrosion_mm'])."',
		'".addslashes($_REQUEST['length1'])."',
		'".addslashes($_REQUEST['breadth1'])."',
		'".addslashes($_REQUEST['length2'])."',
		'".addslashes($_REQUEST['breadth2'])."',
		'".addslashes($_REQUEST['length3'])."',
		'".addslashes($_REQUEST['breadth3'])."',
		'".addslashes($_REQUEST['remarks'])."',
		'".addslashes($sort_order)."'
		)";
		mysqli_query($dbcon,$sql_ins);
		$id=mysqli_insert_id($dbcon);
		$sql="SELECT id FROM struct_option WHERE sort_order>=".$sort_order." and project_id=".$_REQUEST['project_id']." order by sort_order";
		$sort_order++;
		$result = mysqli_query($dbcon,$sql);
		while($row = mysqli_fetch_assoc($result)) {
			$sql_update = 'UPDATE struct_option SET sort_order='.$sort_order.' where id='.$row['id'];
			mysqli_query($dbcon,$sql_update);
			$sort_order++;
		}
		 $sql_update1 = 'UPDATE struct_option SET sort_order='.$updsort_order.' where id='.$id;
		mysqli_query($dbcon,$sql_update1);
	}
	else{
		if(empty($_REQUEST['item'])) {
			$_REQUEST['item'] == '';
		}
		if(empty($_REQUEST['item'])) {
			$_REQUEST['item'] == '';
		}
		$sort_order = 0;
		$sql_ins = "INSERT IGNORE INTO struct_option(project_id,item,material,grade,original_thickness,allowance,thick_in_mm1,thick_in_mm2,diff_prev_cur_thick,corrosion_mm,length1,breadth1,length2,breadth2,length3,breadth3,remarks)
		VALUES('".addslashes($_REQUEST['project_id'])."',
		'".addslashes($_REQUEST['item'])."',
		'".addslashes($_REQUEST['material'])."',
		'".addslashes($_REQUEST['grade'])."',
		'".addslashes($_REQUEST['original_thickness'])."',
		'".addslashes($_REQUEST['allowance'])."',
		'".addslashes($_REQUEST['thick_in_mm1'])."',
		'".addslashes($_REQUEST['thick_in_mm2'])."',
		'".addslashes($_REQUEST['diff_prev_cur_thick'])."',
		'".addslashes($_REQUEST['corrosion_mm'])."',
		'".addslashes($_REQUEST['length1'])."',
		'".addslashes($_REQUEST['breadth1'])."',
		'".addslashes($_REQUEST['length2'])."',
		'".addslashes($_REQUEST['breadth2'])."',
		'".addslashes($_REQUEST['length3'])."',
		'".addslashes($_REQUEST['breadth3'])."',
		'".addslashes($_REQUEST['remarks'])."'
		)";
		mysqli_query($dbcon,$sql_ins);
		$id=mysqli_insert_id($dbcon);
		$sql="SELECT max(sort_order) sort_order FROM struct_option WHERE project_id=".$_REQUEST['project_id'];
		$result = mysqli_query($dbcon,$sql);
		$row = mysqli_fetch_assoc($result);
		if(empty($row['sort_order'])) $row['sort_order']=0;
		$row['sort_order'] = $row['sort_order']+1;
		 $sql_update1 = 'UPDATE struct_option SET sort_order='.$row['sort_order'].' where id='.$id;
		mysqli_query($dbcon,$sql_update1);
	}
	$struct_options = $objstruct->get_stuct_option();

	echo json_encode($struct_options);
}
else {
	$struct_options = $objstruct->get_stuct_option();
	if (!is_array($struct_options)) {
		$struct_options = [];
	}
	
	$struct_options[] = array(
					'struct_id'=>'',
					'item'=>'',
					'material'=>'',
					'grade'=>'',
					'original_thickness'=>'',
					'allowance'=>'',
					'renewal_thickness'=>'',
					'sub_corrosion'=>'',
					'thick_in_mm1'=>'',
					'diminution1'=>'',
					'thick_in_mm2'=>'',
					'diminution2'=>'',
					'diff_prev_cur_thick'=>'',
						'diff_diminution'=>'',
						'corrosion_mm'=>'',
						'next_2year'=>'',
						'next_5year'=>'',
						'length1'=>'',
						'breadth1'=>'',
						'renewal_ton1'=>'' ,
						'length2'=>'',
						'breadth2'=>'',
						'renewal_ton2'=>'' ,
						'length3'=>'',
						'breadth3'=>'',
						'renewal_ton3'=>'',
						'remarks'=>'',
						'delete_struct'=>'',
						'add_struct'=>'',
					);
	echo json_encode($struct_options);
}
?>