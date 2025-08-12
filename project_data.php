<?php
include_once "add_struct.class.php";

	$struct_options = $objstruct->get_project_list();
		
	echo json_encode($struct_options);
?>