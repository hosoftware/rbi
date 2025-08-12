<?php

		$employees[] = array(
			'leave_id'=>'',
			'employee_id'=>$employee_id,
			'prev_join'=>'',
			'start_date'=>'',
			'end_date'=>'',
			'leave_taken'=>'',
			'eligible_leave'=>'',
			'leave_reason'=>'',
			'leave_remarks'=>'',
			'prev_bal'=>'',
			'rejoin_date'=>'',
			'leave_balance'=>'',
		'deduction'=>'true',
				'settlement_status'=>'NA',
			
			'total_balance'=>''
			);
	echo json_encode($employees);
?>