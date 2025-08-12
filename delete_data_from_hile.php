<?php
	$dbhost = "localhost";
	$dbuser = "erp";
	$dbpass = "aries12171219";
	$dbname = "hiles-04-05-2021";
	$conn 	= mysql_connect($dbhost,$dbuser,$dbpass) or die("Error in mysql connection");
	$selecteddb = mysql_select_db($dbname);
$date = date('Y-m-d',strtotime('-30 day'));
$sql = " SELECT id,project_no FROM rbi_project_details WHERE sarveydate<'2019-01-01'
";

//AND enquiry_date > '".$date."'
$result = mysql_query($sql);
while($row=mysql_fetch_assoc($result)) {
	$project_id = $row['id'];
	$project_no = $row['project_no'];
	
	 print $sqlimg = "SELECT * FROM ".$project_no ."_image_details WHERE project_id=".$project_id;
	print("<br/>");
					$rslt = mysql_query($sqlimg);
					while($row_img = mysql_fetch_assoc($rslt)) {
						for($no=1;$no<=15;$no++) {
							if(is_file('../RBI/upload_images/original/'.$row_img['image'.$no])) {
						print 'RBI/upload_images/'.$row_img['image'.$no];
						//print("<br/>");
					unlink('../RBI/upload_images/original/'.$row_img['image'.$no]);
							}
						}
						}
/*print("<br/>");
print " DROP TABLE  IF EXISTS ".$project_no ."_low_pressure_image_details;";
print("<br/>");
print " DROP TABLE  IF EXISTS ".$project_no ."_low_pressure_struct_option;";
print("<br/>");
print " DELETE FROM  rbi_low_pressure_project_details WHERE id= ".$project_id.";";
print("<br/>");*/
				//	mysql_query(" DROP TABLE ".$project_no ."_low_pressure_image_details");
					print("<br/>");
					//mysql_query(" DROP TABLE ".$project_no ."_low_pressure_struct_option");
}

exit;
?>