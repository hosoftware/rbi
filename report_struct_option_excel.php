<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Style;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use PhpOffice\PhpSpreadsheet\Worksheet\PageSetup;
require_once('../vendor/autoload.php');
$path_to_root="..";
include_once "add_struct.class.php";
//print 1;exit;
$reslt = $objstruct->display();
$row_project = mysqli_fetch_assoc($reslt);
$objPHPExcel = new Spreadsheet();

$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setName('Times New Roman');
$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setSize(12);
$objPHPExcel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
//$objPHPExcel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(Alignment::VERTICAL_CENTER);
//$objPHPExcel->getActiveSheet()->mergeCells('A1:G1');

$sharedStyle1 = new Style();
$objPHPExcel->getActiveSheet()->getPageSetup()->setFitToWidth(1);
$objPHPExcel->getActiveSheet()->getPageSetup()->setFitToHeight(1);

$objPHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(35);
	$objPHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(6);
	$objPHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(6);
	$objPHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(6);
	$objPHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(6);
	$objPHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(6);
	$objPHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(6);
	$objPHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(6);
	$objPHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(6);
	$objPHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(6);
	$objPHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(6);
	$objPHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(6);
	$objPHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(6);
	$objPHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(6);
	$objPHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(6);
	$objPHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(6);
	$objPHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(6);
	$objPHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(6);
	$objPHPExcel->getActiveSheet()->getColumnDimension('S')->setWidth(6);
	$objPHPExcel->getActiveSheet()->getColumnDimension('T')->setWidth(6);
	$objPHPExcel->getActiveSheet()->getColumnDimension('U')->setWidth(6);
	$objPHPExcel->getActiveSheet()->getColumnDimension('V')->setWidth(6);
	$objPHPExcel->getActiveSheet()->getColumnDimension('W')->setWidth(6);
	$objPHPExcel->getActiveSheet()->getColumnDimension('X')->setWidth(6);
	$objPHPExcel->getActiveSheet()->getColumnDimension('Y')->setWidth(6);
	$objPHPExcel->getActiveSheet()->getColumnDimension('Z')->setWidth(30);
$sharedStyle1->applyFromArray(
		array('fill' 	=> array(
				'type'		=> Fill::FILL_SOLID,
				'color'		=> array('argb' => 'FFFFFF00')
		),
				'font'=>array(
						'name'=>'Times New Roman',
						'size'=>14,
						'bold'=>true
				),
				'alignment'=>array(
						'horizontal'=>Alignment::VERTICAL_CENTER
				),


		  'borders' => array(
		  		'bottom'	=> array('style' => Border::BORDER_MEDIUM),
		  		'right'		=> array('style' => Border::BORDER_MEDIUM),
		  		'left'		=> array('style' => Border::BORDER_MEDIUM),
		  		'top'		=> array('style' => Border::BORDER_MEDIUM),
		  )
		));

$totalformat=
array(
		'font'=>array(
				'name'=>'Times New Roman',
				'size'=>11,
				'bold'=>true
		),
		'alignment'=>array(
				'horizontal'=>Alignment::HORIZONTAL_RIGHT
		),


		'borders' => array(
				'bottom'	=> array('style' => Border::BORDER_MEDIUM),
				'right'		=> array('style' => Border::BORDER_MEDIUM),
				'left'		=> array('style' => Border::BORDER_MEDIUM),
				'top'		=> array('style' => Border::BORDER_MEDIUM),
		)
);
$totalborder=
array(
		'font'=>array(
				'name'=>'Times New Roman',
				'size'=>11,
				'bold'=>true
		),
		'alignment'=>array(
				'horizontal'=>Alignment::HORIZONTAL_RIGHT
		),
		'alignment'=>array(
				'horizontal'=>Alignment::HORIZONTAL_RIGHT
		),
		'numberformat'=>array(
				'code'=>NumberFormat::FORMAT_NUMBER_00
		),

		'borders' => array(
				'bottom'	=> array('style' => Border::BORDER_MEDIUM),
				'right'		=> array('style' => Border::BORDER_MEDIUM),
				'left'		=> array('style' => Border::BORDER_MEDIUM),
				'top'		=> array('style' => Border::BORDER_MEDIUM),
		)
);

$companyformat = array(
		'borders' => array(
				'outline' => array(
						'style' => Border::BORDER_THIN,
						'color' => array('argb' => 'FF000000'),
				),
		),
		'font'=>array(
				'name'=>'Times New Roman',
				'size'=>11,
				'bold'=>true
		),
);

$tableheader = array(
		'borders' => array(
				'allborders' => array(
						'style' => Border::BORDER_THIN,
						'color' => array('argb' => 'FF000000'),
				),

				'bottom'		=> array('style' => Border::BORDER_THIN),
		),
		'alignment'=>array(
				'horizontal'=>Alignment::HORIZONTAL_CENTER,
				'vertical'=>Alignment::VERTICAL_CENTER

		),
		'fill' => array(
				'type' => Fill::FILL_SOLID,
				'color' => array('rgb'=>'0091D3'),
		),

		'font'=>array(
				'name'=>'Times New Roman',
				'size'=>11,
				'bold'=>true
		),
);
$tableheader1 = array(
		'borders' => array(
				'allBorders' => array(
						'borderStyle' => Border::BORDER_THIN,
						'color' => array('argb' => 'FF000000'),
				),
				'fill' => array(
				'fillType' => Fill::FILL_SOLID,
				'color' => array('rgb'=>'00CBD3'),
				),
				'bottom'		=> array('borderStyle' => Border::BORDER_THIN),
		),

	'alignment'=>array(
				'horizontal'=>Alignment::VERTICAL_CENTER
		),

		'font'=>array(
				'name'=>'Times New Roman',
				'size'=>8,
				'bold'=>true

		),
);
$tableheader3 = array(
		'borders' => array(
				'allBorders' => array(
						'borderStyle' => Border::BORDER_THIN,
						'color' => array('argb' => 'FF000000'),
				),

				'bottom'		=> array('borderStyle' => Border::BORDER_THIN),
		),


		'font'=>array(
				'name'=>'Times New Roman',
				'size'=>8,
				'bold'=>true
		),
);
$datacell = array(
		'borders' => array(
				'allBorders' => array(
						'borderStyle' => Border::BORDER_THIN,
						'color' => array('argb' => 'FF000000'),
				),

				'bottom'		=> array('style' => Border::BORDER_THIN),

		),



		'font'=>array(
				'name'=>'Times New Roman',
				'size'=>8,

		),
);
$tableborder = array(
		'borders' => array(


				'bottom'		=> array('style' => Border::BORDER_THIN),
				'right'		=> array('style' => Border::BORDER_THIN)
		),



		'font'=>array(
				'name'=>'Times New Roman',
				'size'=>11,
				'bold'=>true
		),
);

$datacell_border = array(
		'borders' => array(


				'bottom'		=> array('style' => Border::BORDER_THIN),
				'right'		=> array('style' => Border::BORDER_THIN)
		),

		'alignment'=>array(
				'horizontal'=>Alignment::HORIZONTAL_RIGHT
		),

		'font'=>array(
				'name'=>'Times New Roman',
				'size'=>10,


		),
		'numberformat'=>array(
				'code'=>NumberFormat::FORMAT_NUMBER_00
		),
);


$center1=
array(
		'alignment'=>array(
				'horizontal'=>Alignment::HORIZONTAL_RIGHT

		),
		'fill' => array(
				'fillType' => Fill::FILL_SOLID,
				'color' => array('rgb'=>'FFFF00'),
		),
		'font'=>array(
				'name'=>'Times New Roman',
				'size'=>11,
				'bold'=>true
		)
);

$center2=
array(
		'alignment'=>array(
				'horizontal'=>Alignment::HORIZONTAL_RIGHT

		),
		'fill' => array(
				'fillType' => Fill::FILL_SOLID,
				'color' => array('rgb'=>'F82A14'),
		),
		'font'=>array(
				'name'=>'Times New Roman',
				'size'=>11,
				'bold'=>true
		)
);

$center=
array(
		'alignment'=>array(
				'horizontal'=>Alignment::HORIZONTAL_CENTER,
				'vertical'=>Alignment::VERTICAL_CENTER
		),

);

$center3=
array(
		'alignment'=>array(
				'horizontal'=>Alignment::HORIZONTAL_RIGHT

		),
		'fill' => array(
				'fillType' => Fill::FILL_SOLID,
				'color' => array('rgb'=>'BC8F88'),
		),
		'font'=>array(
				'name'=>'Times New Roman',
				'size'=>8,
				'bold'=>true
		)
);
$center4=
array(
		'alignment'=>array(
				'horizontal'=>Alignment::HORIZONTAL_RIGHT

		),
		'fill' => array(
				'fillType' => Fill::FILL_SOLID,
				'color' => array('rgb'=>'FFFFFF'),
		),
		'font'=>array(
				'name'=>'Times New Roman',
				'size'=>8,
				'bold'=>true
		)
);

$imageborder = [
    'borders' => [
        'outline' => [
            'borderStyle' => Border::BORDER_DOUBLE
        ],
    ],
];



$border1 = [
    'borders' => [
        'outline' => [
            'borderStyle' => Border::BORDER_DOUBLE
        ],
    ],
    'alignment' => [
        'horizontal' => Alignment::HORIZONTAL_CENTER,
        'vertical'   => Alignment::VERTICAL_CENTER
    ],
    'fill' => [
        'fillType' => Fill::FILL_SOLID,
    ],
    'font' => [
        'name' => 'Times New Roman',
        'size' => 11,
        'bold' => true
    ]
];

$border2 = [
    'borders' => [
        'outline' => [
            'borderStyle' => Border::BORDER_DOUBLE
        ],
    ],
    'alignment' => [
        'horizontal' => Alignment::HORIZONTAL_CENTER,
        'vertical'   => Alignment::VERTICAL_CENTER
    ],
    'fill' => [
        'fillType' => Fill::FILL_SOLID,
    ],
    'font' => [
        'name' => 'Times New Roman',
        'size' => 11,
        'bold' => false
    ]
];



//$objPHPExcel->getActiveSheet()->getStyle('A1:G1')->applyFromArray($tableheader);
	$i=4;
	$objPHPExcel->getActiveSheet()->getPageSetup()->setRowsToRepeatAtTop(array(4,11));
	$objPHPExcel->getActiveSheet()->mergeCells('A'.$i.':Z'.$i);
	$objPHPExcel->getActiveSheet()->getStyle('A'.$i.':Z'.$i)->applyFromArray($tableheader);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$i, "HULL INTEGRITY AND LIFE EXPECTANCY  SURVEY");
	$objPHPExcel->getActiveSheet()->getStyle('A'.$i)->getAlignment()->setHorizontal(Alignment::VERTICAL_CENTER);

	$objPHPExcel->getActiveSheet()->mergeCells('A'.$i.':Z'.$i);
	$i++;
	$objPHPExcel->getActiveSheet()->mergeCells('A'.$i.':Z'.$i);
	$objPHPExcel->getActiveSheet()->getStyle('A'.$i.':Z'.$i)->applyFromArray($tableheader);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$i, "TM ANALYSIS WITH ANTICIPATED THICKNESS FOR NEXT 05 YEARS");
	$objPHPExcel->getActiveSheet()->getStyle('A'.$i)->getAlignment()->setHorizontal(Alignment::VERTICAL_CENTER);

	$objPHPExcel->getActiveSheet()->mergeCells('A'.$i.':W'.$i);
	$i++;
	$objPHPExcel->getActiveSheet()->mergeCells('A'.$i.':B'.$i);
	$objPHPExcel->getActiveSheet()->getStyle('A'.$i.':Z'.$i)->applyFromArray($tableheader1);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$i, "Project:");
	$objPHPExcel->getActiveSheet()->mergeCells('C'.$i.':H'.$i);
	$objPHPExcel->getActiveSheet()->getStyle('C'.$i.':H'.$i)->applyFromArray($tableheader1);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$i,$row_project['project']);

	$objPHPExcel->getActiveSheet()->mergeCells('I'.$i.':L'.$i);
	$objPHPExcel->getActiveSheet()->getStyle('M'.$i.':V'.$i)->applyFromArray($tableheader1);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('I'.$i, "Tank/Space Description:");
	$objPHPExcel->getActiveSheet()->mergeCells('M'.$i.':V'.$i);
	$objPHPExcel->getActiveSheet()->getStyle('M'.$i.':V'.$i)->applyFromArray($tableheader1);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('M'.$i,$row_project['tank']);

	$objPHPExcel->getActiveSheet()->mergeCells('W'.$i.':Y'.$i);
	$objPHPExcel->getActiveSheet()->getStyle('W'.$i.':Y'.$i)->applyFromArray($tableheader1);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('W'.$i, "Year of Build:");
	$objPHPExcel->getActiveSheet()->mergeCells('Z'.$i.':Z'.$i);
	$objPHPExcel->getActiveSheet()->getStyle('Z'.$i.':Z'.$i)->applyFromArray($tableheader1);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('Z'.$i,$row_project['year']);
	$i++;
	$objPHPExcel->getActiveSheet()->mergeCells('A'.$i.':B'.$i);
	$objPHPExcel->getActiveSheet()->getStyle('A'.$i.':Z'.$i)->applyFromArray($tableheader1);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$i, "Job:");
	$objPHPExcel->getActiveSheet()->mergeCells('C'.$i.':H'.$i);
	$objPHPExcel->getActiveSheet()->getStyle('C'.$i.':H'.$i)->applyFromArray($tableheader1);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$i,$row_project['jobno']);

	$objPHPExcel->getActiveSheet()->mergeCells('I'.$i.':L'.$i);
	$objPHPExcel->getActiveSheet()->getStyle('M'.$i.':V'.$i)->applyFromArray($tableheader1);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('I'.$i, "Drawing Refence No.:");
	$objPHPExcel->getActiveSheet()->mergeCells('M'.$i.':V'.$i);
	$objPHPExcel->getActiveSheet()->getStyle('M'.$i.':V'.$i)->applyFromArray($tableheader1);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('M'.$i,$row_project['reference']);

	$objPHPExcel->getActiveSheet()->mergeCells('W'.$i.':Y'.$i);
	$objPHPExcel->getActiveSheet()->getStyle('W'.$i.':Y'.$i)->applyFromArray($tableheader1);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('W'.$i, "Date of last Survey	:");
	$objPHPExcel->getActiveSheet()->mergeCells('Z'.$i.':Z'.$i);
	$objPHPExcel->getActiveSheet()->getStyle('Z'.$i.':Z'.$i)->applyFromArray($tableheader1);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('Z'.$i,date('d/m/Y',strtotime($row_project['date_of_sarvey'])));
	$i++;
	$objPHPExcel->getActiveSheet()->mergeCells('A'.$i.':B'.$i);
	$objPHPExcel->getActiveSheet()->getStyle('A'.$i.':Z'.$i)->applyFromArray($tableheader1);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$i, "Project Location:");
	$objPHPExcel->getActiveSheet()->mergeCells('C'.$i.':H'.$i);
	$objPHPExcel->getActiveSheet()->getStyle('C'.$i.':H'.$i)->applyFromArray($tableheader1);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$i,$row_project['location']);

	$objPHPExcel->getActiveSheet()->mergeCells('I'.$i.':L'.$i);
	$objPHPExcel->getActiveSheet()->getStyle('M'.$i.':V'.$i)->applyFromArray($tableheader1);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('I'.$i, "Project incharge:");
	$objPHPExcel->getActiveSheet()->mergeCells('M'.$i.':V'.$i);
	$objPHPExcel->getActiveSheet()->getStyle('M'.$i.':V'.$i)->applyFromArray($tableheader1);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('M'.$i,$row_project['incharge']);

	$objPHPExcel->getActiveSheet()->mergeCells('W'.$i.':Y'.$i);
	$objPHPExcel->getActiveSheet()->getStyle('W'.$i.':Y'.$i)->applyFromArray($tableheader1);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('W'.$i, "Survey	Date:");
	$objPHPExcel->getActiveSheet()->mergeCells('Z'.$i.':Z'.$i);
	$objPHPExcel->getActiveSheet()->getStyle('Z'.$i.':Z'.$i)->applyFromArray($tableheader1);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('Z'.$i,date('d/m/Y',strtotime($row_project['sarveydate'])));
/*
	$objPHPExcel->getActiveSheet()->getStyle('A2:B2')->applyFromArray($tableheader);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A2', "From:".$from);
	$objPHPExcel->getActiveSheet()->mergeCells('A2:B2');

	$objPHPExcel->getActiveSheet()->getStyle('C2:J2')->applyFromArray($tableheader);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('C2', "TO:".$to);
	$objPHPExcel->getActiveSheet()->mergeCells('C2:D2');
*/
//$result = db_query($sql);
$i++;

$previous_dimension = 0;

$objPHPExcel->getActiveSheet()->getColumnDimension ('Q')->setVisible(false);
$objPHPExcel->getActiveSheet()->getColumnDimension ('R')->setVisible(false);
$objPHPExcel->getActiveSheet()->getColumnDimension ('S')->setVisible(false);

$objPHPExcel->getActiveSheet()->getStyle('A'.$i.':Z'.$i)->applyFromArray($tableheader3);
$objPHPExcel->getActiveSheet()->getStyle('A'.$i.':A'.($i+2))->applyFromArray($tableheader3);
$objPHPExcel->getActiveSheet()->getStyle('B'.$i.':B'.($i+2))->applyFromArray($tableheader3);
$objPHPExcel->getActiveSheet()->getStyle('C'.$i.':C'.($i+2))->applyFromArray($tableheader3);
$objPHPExcel->getActiveSheet()->getStyle('D'.$i.':D'.($i+1))->applyFromArray($tableheader3);
$objPHPExcel->getActiveSheet()->getStyle('D'.($i+2))->applyFromArray($tableheader3);
$objPHPExcel->getActiveSheet()->getStyle('E'.$i.':E'.($i+1))->applyFromArray($tableheader3);
$objPHPExcel->getActiveSheet()->getStyle('E'.($i+2))->applyFromArray($tableheader3);
$objPHPExcel->getActiveSheet()->getStyle('F'.$i.':F'.($i+1))->applyFromArray($tableheader3);
$objPHPExcel->getActiveSheet()->getStyle('F'.($i+2))->applyFromArray($tableheader3);
$objPHPExcel->getActiveSheet()->getStyle('G'.$i.':G'.($i+1))->applyFromArray($tableheader3);
$objPHPExcel->getActiveSheet()->getStyle('G'.($i+2))->applyFromArray($tableheader3);
$objPHPExcel->getActiveSheet()->getStyle('H'.($i+1).':H'.($i+2))->applyFromArray($tableheader3);
$objPHPExcel->getActiveSheet()->getStyle('Z'.$i.':Z'.($i+2))->applyFromArray($tableheader3);

//$objPHPExcel->getActiveSheet()->getStyle('G'.($i+1))->applyFromArray($tableheader3);

//$objPHPExcel->getActiveSheet()->getStyle('W'.$i)->applyFromArray($tableborder);
$objPHPExcel->getActiveSheet()->getStyle('A'.($i+1).':Z'.($i+1))->applyFromArray($tableheader3);
$objPHPExcel->getActiveSheet()->getStyle('A'.($i+2).':Z'.($i+2))->applyFromArray($tableheader3);
$objPHPExcel->getActiveSheet()->mergeCells('A'.$i.':A'.($i+2));
$objPHPExcel->getActiveSheet()->getStyle('A'.$i.':A'.($i+2))->applyFromArray($tableheader3);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$i, "Items");
$objPHPExcel->getActiveSheet()->mergeCells('B'.$i.':B'.($i+2));
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$i, "Material");
$objPHPExcel->getActiveSheet()->mergeCells('C'.$i.':C'.($i+2));
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$i, "Grade");
$objPHPExcel->getActiveSheet()->mergeCells('D'.$i.':D'.($i+1));
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$i, "Original Thickness");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.($i+2), "(mm)");
$objPHPExcel->getActiveSheet()->mergeCells('E'.$i.':E'.($i+1));
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('E'.$i, "Wastage Allowance");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('E'.($i+2), "(%)");
$objPHPExcel->getActiveSheet()->mergeCells('F'.$i.':F'.($i+1));
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('F'.$i, "Renewal Thickness");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('F'.($i+2), "(mm)");
$objPHPExcel->getActiveSheet()->mergeCells('G'.$i.':G'.($i+1));
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('G'.$i, "Subs Corrosion");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('G'.($i+2), "(mm)");
$objPHPExcel->getActiveSheet()->mergeCells('H'.$i.':I'.$i);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('H'.$i, "Previous Guaged Thickness");
$objPHPExcel->getActiveSheet()->mergeCells('H'.($i+1).':H'.($i+2));
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('H'.($i+1), "(Thickeness in mm)");
$objPHPExcel->getActiveSheet()->mergeCells('I'.($i+1).':I'.($i+2));
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('I'.($i+1), "(Diminution  in %)");
$objPHPExcel->getActiveSheet()->mergeCells('J'.$i.':K'.$i);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('J'.$i, "Present Guaged Thickness");
$objPHPExcel->getActiveSheet()->mergeCells('J'.($i+1).':J'.($i+2));
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('J'.($i+1), "(Thickeness in mm)");
$objPHPExcel->getActiveSheet()->mergeCells('K'.($i+1).':K'.($i+2));
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('K'.($i+1), "(Diminution  in %)");
$objPHPExcel->getActiveSheet()->mergeCells('L'.$i.':N'.$i);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('L'.$i, "Diminution Calculation");
$objPHPExcel->getActiveSheet()->mergeCells('L'.($i+1).':L'.($i+2));
$objPHPExcel->getActiveSheet()->getStyle('L'.($i+1))->getAlignment()->setWrapText(true);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('L'.($i+1), "Dimi. diff. btw prev and present tck");
$objPHPExcel->getActiveSheet()->mergeCells('M'.($i+1).':M'.($i+2));
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('M'.($i+1), "Dimi. Difference in %");
$objPHPExcel->getActiveSheet()->mergeCells('N'.($i+1).':N'.($i+2));
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('N'.($i+1), "Corrosion Rate in (mm)");
$objPHPExcel->getActiveSheet()->mergeCells('O'.$i.':P'.$i);
$objPHPExcel->getActiveSheet()->getStyle('O'.$i)->getAlignment()->setWrapText(true);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('O'.$i, "Anticipated Thickness in mm");
$objPHPExcel->getActiveSheet()->mergeCells('O'.($i+1).':P'.($i+1));
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('O'.($i+1), "Ref Yearly dim%");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('O'.($i+2), "Next 2.5 years");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('P'.($i+2), "Next 5 years");
$objPHPExcel->getActiveSheet()->mergeCells('Q'.$i.':Y'.$i);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('Q'.$i, "Estimated Renewal");
$objPHPExcel->getActiveSheet()->mergeCells('Q'.($i+1).':S'.($i+1));
$objPHPExcel->getActiveSheet()->getStyle('Q'.($i+1))->getAlignment()->setWrapText(true);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('Q'.($i+1), "Present condition");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('Q'.($i+2), "Length");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('R'.($i+2), "Breath");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('S'.($i+2), "Renewal in Ton");
$objPHPExcel->getActiveSheet()->mergeCells('T'.($i+1).':V'.($i+1));
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('T'.($i+1), "After 2.5 Years");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('T'.($i+2), "Length");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('U'.($i+2), "Breath");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('V'.($i+2), "Renewal in Ton");
$objPHPExcel->getActiveSheet()->mergeCells('W'.($i+1).':Y'.($i+1));
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('W'.($i+1), "After 5 Years");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('W'.($i+2), "Length");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('X'.($i+2), "Breath");
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('Y'.($i+2), "Renewal in Ton");

$objPHPExcel->getActiveSheet()->getStyle('Z'.$i.':Z'.($i+2))->applyFromArray($tableheader3);
$objPHPExcel->getActiveSheet()->mergeCells('Z'.$i.':Z'.($i+2));
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('Z'.$i, "Remarks");
//while ($row = db_fetch($result)) {



//}

$i = $i+3;
$arr_project = $objstruct->get_stuct_option();
$total_ton1=0;
$total_ton2=0;
$count_row = 1;
foreach($arr_project as $key=>$value) {
	$objPHPExcel->getActiveSheet()->getStyle('A'.$i.':Z'.$i)->applyFromArray($datacell);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$i, $value['item']);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$i, $value['material']);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$i, $value['grade']);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$i, $value['original_thickness']);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('E'.$i, $value['allowance']);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('F'.$i, $value['renewal_thickness']);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('G'.$i, $value['sub_corrosion']);
	if($value['thick_in_mm1']!=0&& $value['thick_in_mm1']>$value['renewal_thickness'] && $value['thick_in_mm1']<$value['sub_corrosion'] && is_numeric($value['thick_in_mm1'])) {
		$objPHPExcel->getActiveSheet()->getStyle('H'.$i)->applyFromArray($center1);
	}
	if($value['thick_in_mm1']!=0&& $value['thick_in_mm1']<$value['renewal_thickness'] && is_numeric($value['thick_in_mm1'])) {
		$objPHPExcel->getActiveSheet()->getStyle('H'.$i)->applyFromArray($center2);
	}
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('H'.$i, $value['thick_in_mm1']);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('I'.$i, $value['diminution1']);
	if($value['thick_in_mm2']!=0&&$value['thick_in_mm2']>$value['renewal_thickness'] && $value['thick_in_mm2']<$value['sub_corrosion']&& is_numeric($value['thick_in_mm2'])) {
		$objPHPExcel->getActiveSheet()->getStyle('J'.$i)->applyFromArray($center1);
	}
	if($value['thick_in_mm2']!=0&&$value['thick_in_mm2']<$value['renewal_thickness']&& is_numeric($value['thick_in_mm1'])) {
		$objPHPExcel->getActiveSheet()->getStyle('J'.$i)->applyFromArray($center2);
	}
	if($value['thick_in_mm2']!=0&&$value['thick_in_mm2']>$value['original_thickness']) {
		$objPHPExcel->getActiveSheet()->getStyle('J'.$i)->applyFromArray($center4);
	}
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('J'.$i, $value['thick_in_mm2']);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('K'.$i, $value['diminution2']);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('L'.$i, $value['diff_prev_cur_thick']);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('M'.$i, $value['diff_diminution']);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('N'.$i, $value['corrosion_mm']);
	if($value['next_2year']>$value['renewal_thickness'] && $value['next_2year']<=$value['sub_corrosion']&& is_numeric($value['next_2year'])&& is_numeric($value['sub_corrosion'])) {
		$objPHPExcel->getActiveSheet()->getStyle('O'.$i)->applyFromArray($center1);
	}
	if($value['next_2year']<$value['renewal_thickness']&& is_numeric($value['next_2year'])) {
		$objPHPExcel->getActiveSheet()->getStyle('O'.$i)->applyFromArray($center2);
	}
	if($value['next_2year']>$value['original_thickness']) {
		$objPHPExcel->getActiveSheet()->getStyle('O'.$i)->applyFromArray($center4);
	}
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('O'.$i, $value['next_2year']);
	if($value['next_5year']>$value['renewal_thickness'] && $value['next_5year']<=$value['sub_corrosion']&& is_numeric($value['next_2year'])&& is_numeric($value['sub_corrosion'])) {
		$objPHPExcel->getActiveSheet()->getStyle('P'.$i)->applyFromArray($center1);
	}
	if($value['next_5year']<=$value['renewal_thickness']&& is_numeric($value['next_5year'])) {
		$objPHPExcel->getActiveSheet()->getStyle('P'.$i)->applyFromArray($center2);
	}
	if($value['next_5year']>=$value['original_thickness']) {
		$objPHPExcel->getActiveSheet()->getStyle('P'.$i)->applyFromArray($center4);
	}
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('P'.$i, $value['next_5year']);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('Q'.$i, $value['length1']);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('R'.$i, $value['breadth1']);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('S'.$i, $value['renewal_ton1']);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('T'.$i, $value['length2']);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('U'.$i, $value['breadth2']);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('V'.$i, $value['renewal_ton2']);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('W'.$i, $value['length3']);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('X'.$i, $value['breadth3']);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('Y'.$i, $value['renewal_ton3']);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('Z'.$i, $value['remarks']);
	$total_ton1=$total_ton1+(float)$value['renewal_ton2'];
	$total_ton2=$total_ton2+(float)$value['renewal_ton3'];
	if($count_row%60==0) {
		$objPHPExcel->getActiveSheet()->setBreak('A'.$i, Worksheet::BREAK_ROW);
	}
	$count_row++;
	$i++;
}
$objPHPExcel->getActiveSheet()->getStyle('A'.$i.':Z'.$i)->applyFromArray($datacell);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$i,'Legent');
// Rename worksheet

$objPHPExcel->getActiveSheet()->mergeCells('B'.$i.':N'.$i);
$objPHPExcel->getActiveSheet()->mergeCells('O'.$i.':Q'.$i);
$objPHPExcel->getActiveSheet()->getStyle('O'.$i.':Q'.$i)->applyFromArray($center4);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('O'.$i, '');
$objPHPExcel->getActiveSheet()->mergeCells('R'.$i.':T'.$i);
$objPHPExcel->getActiveSheet()->getStyle('R'.$i.':T'.$i)->applyFromArray($center4);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('R'.$i, '');
$objPHPExcel->getActiveSheet()->mergeCells('U'.$i.':W'.$i);
$objPHPExcel->getActiveSheet()->getStyle('U'.$i.':W'.$i)->applyFromArray($center4);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('U'.$i, '');
$objPHPExcel->getActiveSheet()->mergeCells('X'.$i.':Z'.$i);
$objPHPExcel->getActiveSheet()->getStyle('X'.$i.':Z'.$i)->applyFromArray($center4);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('X'.$i, '');
$i++;
$objPHPExcel->getActiveSheet()->getStyle('A'.$i.':Z'.$i)->applyFromArray($datacell);
$objPHPExcel->getActiveSheet()->getStyle('A'.$i)->applyFromArray($center1);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$i,'');
$objPHPExcel->getActiveSheet()->mergeCells('B'.$i.':E'.$i);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$i, 'Indicates Substantial Reading');
$objPHPExcel->getActiveSheet()->mergeCells('F'.$i.':N'.$i);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('F'.$i, 'Note -  ');
$objPHPExcel->getActiveSheet()->mergeCells('O'.$i.':T'.($i+1));
$objPHPExcel->getActiveSheet()->getStyle('O'.$i.':T'.$i)->applyFromArray($center3);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('O'.$i, 'Grand Total');
$objPHPExcel->getActiveSheet()->mergeCells('R'.$i.':T'.$i);
$objPHPExcel->getActiveSheet()->getStyle('R'.$i.':T'.$i)->applyFromArray($center3);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('R'.$i, '');
$objPHPExcel->getActiveSheet()->mergeCells('U'.$i.':W'.$i);
$objPHPExcel->getActiveSheet()->getStyle('U'.$i.':W'.$i)->applyFromArray($center3);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('U'.$i, 'After 2.5 Years');
$objPHPExcel->getActiveSheet()->mergeCells('X'.$i.':Y'.$i);
$objPHPExcel->getActiveSheet()->getStyle('X'.$i.':Y'.$i)->applyFromArray($center3);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('X'.$i, 'After 5 Years');
$i++;
$objPHPExcel->getActiveSheet()->getStyle('A'.$i.':Z'.$i)->applyFromArray($datacell);
$objPHPExcel->getActiveSheet()->getStyle('A'.$i)->applyFromArray($center2);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$i,'');
$objPHPExcel->getActiveSheet()->mergeCells('B'.$i.':E'.$i);
$objPHPExcel->getActiveSheet()->getStyle('B'.($i))->getAlignment()->setWrapText(true);

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('B'.$i, 'Indicates Measurements below allowable class limit');
$objPHPExcel->getActiveSheet()->mergeCells('F'.$i.':N'.$i);
$objPHPExcel->getActiveSheet()->getStyle('F'.($i))->getAlignment()->setWrapText(true);

$objPHPExcel->setActiveSheetIndex(0)->setCellValue('F'.$i, 'Anticipated Thickness derived by applying fixed percentage of corrosion, ie. 1% for bare metal and 0.4% for coated metal.  ');
$objPHPExcel->getActiveSheet()->mergeCells('O'.$i.':Q'.$i);
$objPHPExcel->getActiveSheet()->getStyle('O'.$i.':Q'.$i)->applyFromArray($center3);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('O'.$i, 'Stiffeners');
$objPHPExcel->getActiveSheet()->mergeCells('R'.$i.':T'.$i);
$objPHPExcel->getActiveSheet()->getStyle('R'.$i.':T'.$i)->applyFromArray($center3);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('R'.$i, '');
$objPHPExcel->getActiveSheet()->mergeCells('U'.$i.':W'.$i);
$objPHPExcel->getActiveSheet()->getStyle('U'.$i.':W'.$i)->applyFromArray($center3);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('U'.$i, $total_ton1);
$objPHPExcel->getActiveSheet()->mergeCells('X'.$i.':Y'.$i);
$objPHPExcel->getActiveSheet()->getStyle('X'.$i.':Y'.$i)->applyFromArray($center3);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('X'.$i, $total_ton2);
$rslt = $objstruct->displayImageDetails($_REQUEST['project_id']);
$row_img = mysqli_fetch_assoc($rslt);

$path1 = 'upload_images/'.$row_img['image1'];
$path2 = 'upload_images/'.$row_img['image2'];
$path3 = 'upload_images/'.$row_img['image3'];
$path4 = 'upload_images/'.$row_img['image4'];
$path5 = 'upload_images/'.$row_img['image5'];
$path6 = 'upload_images/'.$row_img['image6'];
$path7 = 'upload_images/'.$row_img['image7'];
$path8 = 'upload_images/'.$row_img['image8'];
$path9 = 'upload_images/'.$row_img['image9'];
$path10 = 'upload_images/'.$row_img['image10'];
$path11 = 'upload_images/'.$row_img['image11'];
$path12 = 'upload_images/'.$row_img['image12'];
$path13 = 'upload_images/'.$row_img['image13'];
$path14 = 'upload_images/'.$row_img['image14'];
$path15 = 'upload_images/'.$row_img['image15'];
$path16 = 'upload_images/'.$row_img['image16'];

$i=$i+5;
$objPHPExcel->getActiveSheet()->setBreak('A'.$i, Worksheet::BREAK_ROW);
//$objPHPExcel->getActiveSheet()->getPageSetup()->setRowsToRepeatAtTop(array(0,0));
$objPHPExcel->getActiveSheet()->mergeCells('A'.$i.':Z'.$i);
	$objPHPExcel->getActiveSheet()->getStyle('A'.$i.':Z'.$i)->applyFromArray($tableheader);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$i, "HULL INTEGRITY AND LIFE EXPECTANCY  SURVEY");
	$objPHPExcel->getActiveSheet()->getStyle('A'.$i)->getAlignment()->setHorizontal(Alignment::VERTICAL_CENTER);

	$objPHPExcel->getActiveSheet()->mergeCells('A'.$i.':Z'.$i);
	$i++;
	$objPHPExcel->getActiveSheet()->mergeCells('A'.$i.':Z'.$i);
	$objPHPExcel->getActiveSheet()->getStyle('A'.$i.':Z'.$i)->applyFromArray($tableheader);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$i, "TM ANALYSIS WITH ANTICIPATED THICKNESS FOR NEXT 05 YEARS");
	$objPHPExcel->getActiveSheet()->getStyle('A'.$i)->getAlignment()->setHorizontal(Alignment::VERTICAL_CENTER);

	/*$objPHPExcel->getActiveSheet()->mergeCells('A'.$i.':W'.$i);
	$i++;
	$objPHPExcel->getActiveSheet()->mergeCells('A'.$i.':B'.$i);
	$objPHPExcel->getActiveSheet()->getStyle('A'.$i.':Z'.$i)->applyFromArray($tableheader1);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$i, "Project:");
	$objPHPExcel->getActiveSheet()->mergeCells('C'.$i.':H'.$i);
	$objPHPExcel->getActiveSheet()->getStyle('C'.$i.':H'.$i)->applyFromArray($tableheader1);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$i,$row_project['project']);

	$objPHPExcel->getActiveSheet()->mergeCells('I'.$i.':L'.$i);
	$objPHPExcel->getActiveSheet()->getStyle('M'.$i.':V'.$i)->applyFromArray($tableheader1);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('I'.$i, "Tank/Space Description:");
	$objPHPExcel->getActiveSheet()->mergeCells('M'.$i.':V'.$i);
	$objPHPExcel->getActiveSheet()->getStyle('M'.$i.':V'.$i)->applyFromArray($tableheader1);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('M'.$i,$row_project['tank']);

	$objPHPExcel->getActiveSheet()->mergeCells('W'.$i.':Y'.$i);
	$objPHPExcel->getActiveSheet()->getStyle('W'.$i.':Y'.$i)->applyFromArray($tableheader1);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('W'.$i, "Year of Build:");
	$objPHPExcel->getActiveSheet()->mergeCells('Z'.$i.':Z'.$i);
	$objPHPExcel->getActiveSheet()->getStyle('Z'.$i.':Z'.$i)->applyFromArray($tableheader1);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('Z'.$i,$row_project['year']);
	$i++;
	$objPHPExcel->getActiveSheet()->mergeCells('A'.$i.':B'.$i);
	$objPHPExcel->getActiveSheet()->getStyle('A'.$i.':Z'.$i)->applyFromArray($tableheader1);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$i, "Job:");
	$objPHPExcel->getActiveSheet()->mergeCells('C'.$i.':H'.$i);
	$objPHPExcel->getActiveSheet()->getStyle('C'.$i.':H'.$i)->applyFromArray($tableheader1);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$i,$row_project['jobno']);

	$objPHPExcel->getActiveSheet()->mergeCells('I'.$i.':L'.$i);
	$objPHPExcel->getActiveSheet()->getStyle('M'.$i.':V'.$i)->applyFromArray($tableheader1);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('I'.$i, "Drawing Refence No.:");
	$objPHPExcel->getActiveSheet()->mergeCells('M'.$i.':V'.$i);
	$objPHPExcel->getActiveSheet()->getStyle('M'.$i.':V'.$i)->applyFromArray($tableheader1);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('M'.$i,$row_project['reference']);

	$objPHPExcel->getActiveSheet()->mergeCells('W'.$i.':Y'.$i);
	$objPHPExcel->getActiveSheet()->getStyle('W'.$i.':Y'.$i)->applyFromArray($tableheader1);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('W'.$i, "Date of last Survey	:");
	$objPHPExcel->getActiveSheet()->mergeCells('Z'.$i.':Z'.$i);
	$objPHPExcel->getActiveSheet()->getStyle('Z'.$i.':Z'.$i)->applyFromArray($tableheader1);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('Z'.$i,date('d/m/Y',strtotime($row_project['date_of_sarvey'])));
	$i++;
	$objPHPExcel->getActiveSheet()->mergeCells('A'.$i.':B'.$i);
	$objPHPExcel->getActiveSheet()->getStyle('A'.$i.':Z'.$i)->applyFromArray($tableheader1);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$i, "Project Location:");
	$objPHPExcel->getActiveSheet()->mergeCells('C'.$i.':H'.$i);
	$objPHPExcel->getActiveSheet()->getStyle('C'.$i.':H'.$i)->applyFromArray($tableheader1);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('C'.$i,$row_project['location']);

	$objPHPExcel->getActiveSheet()->mergeCells('I'.$i.':L'.$i);
	$objPHPExcel->getActiveSheet()->getStyle('M'.$i.':V'.$i)->applyFromArray($tableheader1);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('I'.$i, "Project incharge:");
	$objPHPExcel->getActiveSheet()->mergeCells('M'.$i.':V'.$i);
	$objPHPExcel->getActiveSheet()->getStyle('M'.$i.':V'.$i)->applyFromArray($tableheader1);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('M'.$i,$row_project['incharge']);

	$objPHPExcel->getActiveSheet()->mergeCells('W'.$i.':Y'.$i);
	$objPHPExcel->getActiveSheet()->getStyle('W'.$i.':Y'.$i)->applyFromArray($tableheader1);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('W'.$i, "Survey	Date:");
	$objPHPExcel->getActiveSheet()->mergeCells('Z'.$i.':Z'.$i);
	$objPHPExcel->getActiveSheet()->getStyle('Z'.$i.':Z'.$i)->applyFromArray($tableheader1);
	$objPHPExcel->setActiveSheetIndex(0)->setCellValue('Z'.$i,date('d/m/Y',strtotime($row_project['sarveydate'])));
//$objPHPExcel->getActiveSheet()->getStyle('A'.$i.':AM4')->applyFromArray($center);*/
$i=$i+2;
$objPHPExcel->getActiveSheet()->getStyle('A'.($i).':Z'.($i))->applyFromArray($tableheader);
$objPHPExcel->getActiveSheet()->mergeCells('A'.($i).':Z'.($i));
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.($i), 'COATING CONDITION OF PLATING');
$i=$i+2;

if(!empty($row_img['image1']) && is_file($path1)) {
	$objDrawing1 = new Drawing();
	$objDrawing1->setName('PHPExcel logo');
	$objDrawing1->setDescription('PHPExcel logo');
	$objDrawing1->setPath($path1);       // filesystem reference for the image file
	$objDrawing1->setHeight($row_img['height']);
	$objDrawing1->setWidth($row_img['width']);               // sets the image height to 36px (overriding the actual image height);
	$objDrawing1->setCoordinates('A'.$i);    // pins the top-left corner of the image to cell D24
	$objDrawing1->setOffsetX(15);
	$objDrawing1->setOffsetY(15);
	$objDrawing1->setWorksheet($objPHPExcel->getActiveSheet());
	$objPHPExcel->getActiveSheet()->getStyle('A'.($i).':C'.($i+12))->applyFromArray($imageborder);

}

$objPHPExcel->getActiveSheet()->getStyle('V'.$i.':Z'.$i)->applyFromArray($tableheader3);
if(!empty($row_img['image2']) && is_file($path2)) {
	$objDrawing2 = new Drawing();
	$objDrawing2->setName('PHPExcel logo');
	$objDrawing2->setDescription('PHPExcel logo');
	$objDrawing2->setPath($path2);       // filesystem reference for the image file
	$objDrawing2->setHeight($row_img['height']);
	$objDrawing2->setWidth($row_img['width']);               // sets the image height to 36px (overriding the actual image height);
	$objDrawing2->setCoordinates('D'.$i);    // pins the top-left corner of the image to cell D24
	$objDrawing2->setOffsetX(15);
	$objDrawing2->setOffsetY(15);
	$objDrawing2->setWorksheet($objPHPExcel->getActiveSheet());
	$objPHPExcel->getActiveSheet()->getStyle('D'.($i).':K'.($i+12))->applyFromArray($imageborder);
}
if(!empty($row_img['image3']) && is_file($path3)) {
	$objDrawing3 = new Drawing();
	$objDrawing3->setName('PHPExcel logo');
	$objDrawing3->setDescription('PHPExcel logo');
	$objDrawing3->setPath($path3);       // filesystem reference for the image file
	$objDrawing3->setHeight($row_img['height']);
	$objDrawing3->setWidth($row_img['width']);               // sets the image height to 36px (overriding the actual image height);
	$objDrawing3->setCoordinates('L'.$i);    // pins the top-left corner of the image to cell D24
	$objDrawing3->setOffsetX(15);
	$objDrawing3->setOffsetY(15);
	$objDrawing3->setWorksheet($objPHPExcel->getActiveSheet());
	$objPHPExcel->getActiveSheet()->getStyle('L'.($i).':V'.($i+12))->applyFromArray($imageborder);
}
if(!empty($row_img['image4']) && is_file($path4)) {
	$objDrawing4 = new Drawing();
	$objDrawing4->setName('PHPExcel logo');
	$objDrawing4->setDescription('PHPExcel logo');
	$objDrawing4->setPath($path4);       // filesystem reference for the image file
	$objDrawing4->setHeight($row_img['height']);
	$objDrawing4->setWidth($row_img['width']);               // sets the image height to 36px (overriding the actual image height);
	$objDrawing4->setCoordinates('W'.$i);    // pins the top-left corner of the image to cell D24
	$objDrawing4->setOffsetX(15);
	$objDrawing4->setOffsetY(15);
$objDrawing4->setWorksheet($objPHPExcel->getActiveSheet());
$objPHPExcel->getActiveSheet()->getStyle('W'.($i).':Z'.($i+12))->applyFromArray($imageborder);
}
$i++;
print 1;exit;
$i = $i+13;
$objPHPExcel->getActiveSheet()->getStyle('A'.($i).':C'.($i+2))->applyFromArray($imageborder);
$objPHPExcel->getActiveSheet()->mergeCells('A'.$i.':C'.$i);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$i, $row_img['title1']);

$objPHPExcel->getActiveSheet()->getStyle('D'.($i).':K'.($i+2))->applyFromArray($imageborder);
$objPHPExcel->getActiveSheet()->mergeCells('D'.$i.':K'.$i);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$i, $row_img['title2']);

$objPHPExcel->getActiveSheet()->getStyle('L'.($i).':V'.($i+2))->applyFromArray($imageborder);
$objPHPExcel->getActiveSheet()->mergeCells('L'.$i.':V'.$i);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('L'.$i, $row_img['title3']);


$objPHPExcel->getActiveSheet()->mergeCells('W'.$i.':Z'.$i);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('W'.$i, $i);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('W'.$i, $row_img['title4']);
$objPHPExcel->getActiveSheet()->getStyle('W'.($i).':Z'.($i+2))->applyFromArray($imageborder);
$i++;

$objPHPExcel->getActiveSheet()->mergeCells('A'.$i.':C'.$i);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$i, $row_img['description1']);

$objPHPExcel->getActiveSheet()->mergeCells('D'.$i.':K'.$i);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$i, $row_img['description2']);

$objPHPExcel->getActiveSheet()->mergeCells('L'.$i.':V'.$i);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('L'.$i, $row_img['description3']);


$objPHPExcel->getActiveSheet()->mergeCells('W'.$i.':Z'.$i);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('W'.$i, $row_img['description4']);

//$i = $i+$row_img['height'];
$i++;
$objPHPExcel->getActiveSheet()->getStyle('A'.($i).':C'.($i))->applyFromArray($border1);
$objPHPExcel->getActiveSheet()->mergeCells('A'.($i).':C'.($i));
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.($i), 'RATING');
$objPHPExcel->getActiveSheet()->getStyle('D'.($i).':K'.($i))->applyFromArray($border1);
$objPHPExcel->getActiveSheet()->mergeCells('D'.($i).':K'.($i));
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$i, 'OBSERVATIONS');
$objPHPExcel->getActiveSheet()->getStyle('L'.($i).':Z'.($i))->applyFromArray($border1);
$objPHPExcel->getActiveSheet()->mergeCells('L'.($i).':Z'.($i));
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('L'.($i), 'RECOMMENDATIONS');
$i++;
$objPHPExcel->getActiveSheet()->getStyle('A'.($i).':C'.($i))->applyFromArray($border1);
$objPHPExcel->getActiveSheet()->getStyle('D'.($i).':K'.($i))->applyFromArray($border2);
$objPHPExcel->getActiveSheet()->getStyle('L'.($i).':Z'.($i))->applyFromArray($border2);
$objPHPExcel->getActiveSheet()->getStyle('A'.($i))->getAlignment()->setWrapText(true);

$objPHPExcel->getActiveSheet()->getStyle('L'.($i))->getAlignment()->setWrapText(true);
$objPHPExcel->getActiveSheet()->mergeCells('A'.($i).':C'.($i));
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.($i), $row_img['rating1']);
$objPHPExcel->getActiveSheet()->mergeCells('D'.($i).':K'.($i));
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$i, $row_img['observations1']);
$objPHPExcel->getActiveSheet()->getStyle('D'.($i).':K'.($i))->getAlignment()->setWrapText(true);
$objPHPExcel->getActiveSheet()->mergeCells('L'.($i).':Z'.($i));
$objPHPExcel->getActiveSheet()->getStyle('L'.($i))->getAlignment()->setWrapText(true);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('L'.($i), $row_img['recommendations1']);
$i=$i+2;

$objPHPExcel->getActiveSheet()->getStyle('A'.($i).':Z'.($i))->applyFromArray($tableheader);
$objPHPExcel->getActiveSheet()->mergeCells('A'.($i).':Z'.($i));
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.($i), 'COATING CONDITION OF INTERNALS');

$i=$i+2;

//$objPHPExcel->getActiveSheet()->getStyle('A'.$i.':AM4')->applyFromArray($center);
if(!empty($row_img['image5']) && is_file($path5)) {
	$objDrawing5 = new Drawing();
	$objDrawing5->setName('PHPExcel logo');
	$objDrawing5->setDescription('PHPExcel logo');
	$objDrawing5->setPath($path5);       // filesystem reference for the image file
	$objDrawing5->setHeight($row_img['height']);
	$objDrawing5->setWidth($row_img['width']);               // sets the image height to 36px (overriding the actual image height);
	$objDrawing5->setCoordinates('A'.$i);    // pins the top-left corner of the image to cell D24
	$objDrawing5->setOffsetX(15);
	$objDrawing5->setOffsetY(15);
	$objDrawing5->setWorksheet($objPHPExcel->getActiveSheet());
	$objPHPExcel->getActiveSheet()->getStyle('A'.($i).':C'.($i+12))->applyFromArray($imageborder);
}
if(!empty($row_img['image6']) && is_file($path6)) {
	$objDrawing6 = new Drawing();
	$objDrawing6->setName('PHPExcel logo');
	$objDrawing6->setDescription('PHPExcel logo');
	$objDrawing6->setPath($path6);       // filesystem reference for the image file
	$objDrawing6->setHeight($row_img['height']);
	$objDrawing6->setWidth($row_img['width']);               // sets the image height to 36px (overriding the actual image height);
	$objDrawing6->setCoordinates('D'.$i);    // pins the top-left corner of the image to cell D24
	$objDrawing6->setOffsetX(15);
	$objDrawing6->setOffsetY(15);
	$objDrawing6->setWorksheet($objPHPExcel->getActiveSheet());
	$objPHPExcel->getActiveSheet()->getStyle('D'.($i).':K'.($i+12))->applyFromArray($imageborder);
}
if(!empty($row_img['image7']) && is_file($path7)) {
	$objDrawing7 = new Drawing();
	$objDrawing7->setName('PHPExcel logo');
	$objDrawing7->setDescription('PHPExcel logo');
	$objDrawing7->setPath($path7);       // filesystem reference for the image file
	$objDrawing7->setHeight($row_img['height']);
	$objDrawing7->setWidth($row_img['width']);               // sets the image height to 36px (overriding the actual image height);
	$objDrawing7->setCoordinates('L'.$i);    // pins the top-left corner of the image to cell D24
	$objDrawing7->setOffsetX(15);
	$objDrawing7->setOffsetY(15);
	$objDrawing7->setWorksheet($objPHPExcel->getActiveSheet());
	$objPHPExcel->getActiveSheet()->getStyle('L'.($i).':V'.($i+12))->applyFromArray($imageborder);
}
if(!empty($row_img['image8']) && is_file($path8)) {
	$objDrawing8 = new Drawing();
	$objDrawing8->setName('PHPExcel logo');
	$objDrawing8->setDescription('PHPExcel logo');
	$objDrawing8->setPath($path8);       // filesystem reference for the image file
	$objDrawing8->setHeight($row_img['height']);
	$objDrawing8->setWidth($row_img['width']);               // sets the image height to 36px (overriding the actual image height);
	$objDrawing8->setCoordinates('W'.$i);    // pins the top-left corner of the image to cell D24
	$objDrawing8->setOffsetX(15);
	$objDrawing8->setOffsetY(15);
	$objDrawing8->setWorksheet($objPHPExcel->getActiveSheet());
	$objPHPExcel->getActiveSheet()->getStyle('W'.($i).':Z'.($i+12))->applyFromArray($imageborder);
}
$i = $i+13;
$objPHPExcel->getActiveSheet()->getStyle('A'.($i).':C'.($i+2))->applyFromArray($imageborder);
$objPHPExcel->getActiveSheet()->mergeCells('A'.$i.':C'.$i);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$i, $row_img['title5']);

$objPHPExcel->getActiveSheet()->getStyle('D'.($i).':K'.($i+2))->applyFromArray($imageborder);
$objPHPExcel->getActiveSheet()->mergeCells('D'.$i.':K'.$i);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$i, $row_img['title6']);

$objPHPExcel->getActiveSheet()->getStyle('L'.($i).':V'.($i+2))->applyFromArray($imageborder);
$objPHPExcel->getActiveSheet()->mergeCells('L'.$i.':V'.$i);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('L'.$i, $row_img['title7']);


$objPHPExcel->getActiveSheet()->mergeCells('W'.$i.':Z'.$i);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('W'.$i, $i);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('W'.$i, $row_img['title8']);
$objPHPExcel->getActiveSheet()->getStyle('W'.($i).':Z'.($i+2))->applyFromArray($imageborder);
$i++;

$objPHPExcel->getActiveSheet()->mergeCells('A'.$i.':C'.$i);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$i, $row_img['description5']);

$objPHPExcel->getActiveSheet()->mergeCells('D'.$i.':K'.$i);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$i, $row_img['description6']);

$objPHPExcel->getActiveSheet()->mergeCells('L'.$i.':V'.$i);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('L'.$i, $row_img['description7']);


$objPHPExcel->getActiveSheet()->mergeCells('W'.$i.':Z'.$i);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('W'.$i, $row_img['description8']);

$i++;
$objPHPExcel->getActiveSheet()->getStyle('A'.($i).':C'.($i))->applyFromArray($border1);
$objPHPExcel->getActiveSheet()->mergeCells('A'.($i).':C'.($i));
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.($i), 'RATING');
$objPHPExcel->getActiveSheet()->getStyle('D'.($i).':K'.($i))->applyFromArray($border1);
$objPHPExcel->getActiveSheet()->mergeCells('D'.($i).':K'.($i));
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$i, 'OBSERVATIONS');
$objPHPExcel->getActiveSheet()->getStyle('L'.($i).':Z'.($i))->applyFromArray($border1);
$objPHPExcel->getActiveSheet()->mergeCells('L'.($i).':Z'.($i));
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('L'.($i), 'RECOMMENDATIONS');
$i++;
$objPHPExcel->getActiveSheet()->getStyle('A'.($i).':C'.($i))->applyFromArray($border1);
$objPHPExcel->getActiveSheet()->getStyle('D'.($i).':K'.($i))->applyFromArray($border2);
$objPHPExcel->getActiveSheet()->getStyle('L'.($i).':Z'.($i))->applyFromArray($border2);
$objPHPExcel->getActiveSheet()->getStyle('A'.($i))->getAlignment()->setWrapText(true);

$objPHPExcel->getActiveSheet()->getStyle('L'.($i))->getAlignment()->setWrapText(true);
$objPHPExcel->getActiveSheet()->mergeCells('A'.($i).':C'.($i));
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.($i), $row_img['rating2']);
$objPHPExcel->getActiveSheet()->mergeCells('D'.($i).':K'.($i));
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$i, $row_img['observations2']);
$objPHPExcel->getActiveSheet()->getStyle('D'.($i).':K'.($i))->getAlignment()->setWrapText(true);
$objPHPExcel->getActiveSheet()->mergeCells('L'.($i).':Z'.($i));
$objPHPExcel->getActiveSheet()->getStyle('L'.($i))->getAlignment()->setWrapText(true);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('L'.($i), $row_img['recommendations2']);
$i=$i+2;
$objPHPExcel->getActiveSheet()->getStyle('A'.($i).':Z'.($i))->applyFromArray($tableheader);
$objPHPExcel->getActiveSheet()->mergeCells('A'.($i).':Z'.($i));
$objPHPExcel->getActiveSheet()->setBreak('A'.$i, Worksheet::BREAK_ROW);
//$objPHPExcel->getActiveSheet()->getPageSetup()->setRowsToRepeatAtTopByStartAndEnd(array(4,8));
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.($i), 'STRUCTURAL ASSESSMENT OF PLATING');

$i=$i+2;

//$objPHPExcel->getActiveSheet()->getStyle('A'.$i.':AM4')->applyFromArray($center);
if(!empty($row_img['image9']) && is_file($path9) ) {
	$objDrawing9 = new Drawing();
	$objDrawing9->setName('PHPExcel logo');
	$objDrawing9->setDescription('PHPExcel logo');
	$objDrawing9->setPath($path9);       // filesystem reference for the image file
	$objDrawing9->setHeight($row_img['height']);
	$objDrawing9->setWidth($row_img['width']);               // sets the image height to 36px (overriding the actual image height);
	$objDrawing9->setCoordinates('A'.$i);    // pins the top-left corner of the image to cell D24
	$objDrawing9->setOffsetX(15);
	$objDrawing9->setOffsetY(15);
	$objDrawing9->setWorksheet($objPHPExcel->getActiveSheet());
	$objPHPExcel->getActiveSheet()->getStyle('A'.($i).':C'.($i+12))->applyFromArray($imageborder);
}
if(!empty($row_img['image10']) && is_file($path10)) {
	$objDrawing10 = new Drawing();
	$objDrawing10->setName('PHPExcel logo');
	$objDrawing10->setDescription('PHPExcel logo');
	$objDrawing10->setPath($path10);       // filesystem reference for the image file
	$objDrawing10->setHeight($row_img['height']);
	$objDrawing10->setWidth($row_img['width']);               // sets the image height to 36px (overriding the actual image height);
	$objDrawing10->setCoordinates('D'.$i);    // pins the top-left corner of the image to cell D24
	$objDrawing10->setOffsetX(15);
	$objDrawing10->setOffsetY(15);
	$objDrawing10->setWorksheet($objPHPExcel->getActiveSheet());
	$objPHPExcel->getActiveSheet()->getStyle('D'.($i).':K'.($i+12))->applyFromArray($imageborder);
}
if(!empty($row_img['image11']) && is_file($path11)) {
	$objDrawing11 = new Drawing();
	$objDrawing11->setName('PHPExcel logo');
	$objDrawing11->setDescription('PHPExcel logo');
	$objDrawing11->setPath($path11);       // filesystem reference for the image file
	$objDrawing11->setHeight($row_img['height']);
	$objDrawing11->setWidth($row_img['width']);               // sets the image height to 36px (overriding the actual image height);
	$objDrawing11->setCoordinates('L'.$i);    // pins the top-left corner of the image to cell D24
	$objDrawing11->setOffsetX(15);
	$objDrawing11->setOffsetY(15);
	$objDrawing11->setWorksheet($objPHPExcel->getActiveSheet());
	$objPHPExcel->getActiveSheet()->getStyle('L'.($i).':V'.($i+12))->applyFromArray($imageborder);
}
if(!empty($row_img['image12'])  && is_file($path12)) {
	$objDrawing12 = new Drawing();
	$objDrawing12->setName('PHPExcel logo');
	$objDrawing12->setDescription('PHPExcel logo');
	$objDrawing12->setPath($path12);       // filesystem reference for the image file
	$objDrawing12->setHeight($row_img['height']);
	$objDrawing12->setWidth($row_img['width']);               // sets the image height to 36px (overriding the actual image height);
	$objDrawing12->setCoordinates('W'.$i);    // pins the top-left corner of the image to cell D24
	$objDrawing12->setOffsetX(15);
	$objDrawing12->setOffsetY(15);
	$objDrawing12->setWorksheet($objPHPExcel->getActiveSheet());
	$objPHPExcel->getActiveSheet()->getStyle('W'.($i).':Z'.($i+12))->applyFromArray($imageborder);
}
$i = $i+13;
$objPHPExcel->getActiveSheet()->getStyle('A'.($i).':C'.($i+2))->applyFromArray($imageborder);
$objPHPExcel->getActiveSheet()->mergeCells('A'.$i.':C'.$i);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$i, $row_img['title9']);

$objPHPExcel->getActiveSheet()->getStyle('D'.($i).':K'.($i+2))->applyFromArray($imageborder);
$objPHPExcel->getActiveSheet()->mergeCells('D'.$i.':K'.$i);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$i, $row_img['title10']);

$objPHPExcel->getActiveSheet()->getStyle('L'.($i).':V'.($i+2))->applyFromArray($imageborder);
$objPHPExcel->getActiveSheet()->mergeCells('L'.$i.':V'.$i);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('L'.$i, $row_img['title11']);


$objPHPExcel->getActiveSheet()->mergeCells('W'.$i.':Z'.$i);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('W'.$i, $i);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('W'.$i, $row_img['title12']);
$objPHPExcel->getActiveSheet()->getStyle('W'.($i).':Z'.($i+2))->applyFromArray($imageborder);
$i++;

$objPHPExcel->getActiveSheet()->mergeCells('A'.$i.':C'.$i);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$i, $row_img['description9']);

$objPHPExcel->getActiveSheet()->mergeCells('D'.$i.':K'.$i);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$i, $row_img['description10']);

$objPHPExcel->getActiveSheet()->mergeCells('L'.$i.':V'.$i);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('L'.$i, $row_img['description11']);


$objPHPExcel->getActiveSheet()->mergeCells('W'.$i.':Z'.$i);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('W'.$i, $row_img['description12']);
$i++;
$objPHPExcel->getActiveSheet()->getStyle('A'.($i).':C'.($i))->applyFromArray($border1);
$objPHPExcel->getActiveSheet()->mergeCells('A'.($i).':C'.($i));
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.($i), 'RATING');
$objPHPExcel->getActiveSheet()->getStyle('D'.($i).':K'.($i))->applyFromArray($border1);
$objPHPExcel->getActiveSheet()->mergeCells('D'.($i).':K'.($i));
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$i, 'OBSERVATIONS');
$objPHPExcel->getActiveSheet()->getStyle('L'.($i).':Z'.($i))->applyFromArray($border1);
$objPHPExcel->getActiveSheet()->mergeCells('L'.($i).':Z'.($i));
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('L'.($i), 'RECOMMENDATIONS');
$i++;
$objPHPExcel->getActiveSheet()->getStyle('A'.($i).':C'.($i))->applyFromArray($border1);
$objPHPExcel->getActiveSheet()->getStyle('D'.($i).':K'.($i))->applyFromArray($border2);
$objPHPExcel->getActiveSheet()->getStyle('L'.($i).':Z'.($i))->applyFromArray($border2);
$objPHPExcel->getActiveSheet()->getStyle('A'.($i))->getAlignment()->setWrapText(true);

$objPHPExcel->getActiveSheet()->getStyle('L'.($i))->getAlignment()->setWrapText(true);
$objPHPExcel->getActiveSheet()->mergeCells('A'.($i).':C'.($i));
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.($i), $row_img['rating3']);
$objPHPExcel->getActiveSheet()->mergeCells('D'.($i).':K'.($i));
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$i, $row_img['observations3']);
$objPHPExcel->getActiveSheet()->getStyle('D'.($i).':K'.($i))->getAlignment()->setWrapText(true);
$objPHPExcel->getActiveSheet()->mergeCells('L'.($i).':Z'.($i));
$objPHPExcel->getActiveSheet()->getStyle('L'.($i))->getAlignment()->setWrapText(true);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('L'.($i), $row_img['recommendations3']);
$i=$i+2;
$objPHPExcel->getActiveSheet()->getStyle('A'.($i).':Z'.($i))->applyFromArray($tableheader);
$objPHPExcel->getActiveSheet()->mergeCells('A'.($i).':Z'.($i));
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.($i), 'STRUCTURAL ASSESSMENT OF INTERNALS');
$i=$i+2;
//$objPHPExcel->getActiveSheet()->getStyle('A'.$i.':AM4')->applyFromArray($center);
if(!empty($row_img['image13']) && is_file($path13)) {
	$objDrawing13 = new Drawing();
	$objDrawing13->setName('PHPExcel logo');
	$objDrawing13->setDescription('PHPExcel logo');
	$objDrawing13->setPath($path13);       // filesystem reference for the image file
	$objDrawing13->setHeight($row_img['height']);
	$objDrawing13->setWidth($row_img['width']);               // sets the image height to 36px (overriding the actual image height);
	$objDrawing13->setCoordinates('A'.$i);    // pins the top-left corner of the image to cell D24
	$objDrawing13->setOffsetX(15);
	$objDrawing13->setOffsetY(15);
	$objDrawing13->setWorksheet($objPHPExcel->getActiveSheet());
	$objPHPExcel->getActiveSheet()->getStyle('A'.($i).':C'.($i+12))->applyFromArray($imageborder);
}
if(!empty($row_img['image14']) && is_file($path14)) {
	$objDrawing14 = new Drawing();
	$objDrawing14->setName('PHPExcel logo');
	$objDrawing14->setDescription('PHPExcel logo');
	$objDrawing14->setPath($path14);       // filesystem reference for the image file
	$objDrawing14->setHeight($row_img['height']);
	$objDrawing14->setWidth($row_img['width']);               // sets the image height to 36px (overriding the actual image height);
	$objDrawing14->setCoordinates('D'.$i);    // pins the top-left corner of the image to cell D24
	$objDrawing14->setOffsetX(15);
	$objDrawing14->setOffsetY(15);
	$objDrawing14->setWorksheet($objPHPExcel->getActiveSheet());
	$objPHPExcel->getActiveSheet()->getStyle('D'.($i).':K'.($i+12))->applyFromArray($imageborder);
}
if(!empty($row_img['image15'])&& is_file($path15)) {
	$objDrawing15 = new Drawing();
	$objDrawing15->setName('PHPExcel logo');
	$objDrawing15->setDescription('PHPExcel logo');
	$objDrawing15->setPath($path15);       // filesystem reference for the image file
	$objDrawing15->setHeight($row_img['height']);
	$objDrawing15->setWidth($row_img['width']);               // sets the image height to 36px (overriding the actual image height);
	$objDrawing15->setCoordinates('L'.$i);    // pins the top-left corner of the image to cell D24
	$objDrawing15->setOffsetX(15);
	$objDrawing15->setOffsetY(15);
	$objDrawing15->setWorksheet($objPHPExcel->getActiveSheet());
	$objPHPExcel->getActiveSheet()->getStyle('L'.($i).':V'.($i+12))->applyFromArray($imageborder);
}
if(!empty($row_img['image16']) && is_file($path16)) {
	$objDrawing16 = new Drawing();
	$objDrawing16->setName('PHPExcel logo');
	$objDrawing16->setDescription('PHPExcel logo');
	$objDrawing16->setPath($path16);       // filesystem reference for the image file
	$objDrawing16->setHeight($row_img['height']);
	$objDrawing16->setWidth($row_img['width']);               // sets the image height to 36px (overriding the actual image height);
	$objDrawing16->setCoordinates('W'.$i);    // pins the top-left corner of the image to cell D24
	$objDrawing16->setOffsetX(15);
	$objDrawing16->setOffsetY(15);
	$objDrawing16->setWorksheet($objPHPExcel->getActiveSheet());
	$objPHPExcel->getActiveSheet()->getStyle('W'.($i).':Z'.($i+12))->applyFromArray($imageborder);
}
$i++;
$i = $i+13;
$objPHPExcel->getActiveSheet()->getStyle('A'.($i).':C'.($i+2))->applyFromArray($imageborder);
$objPHPExcel->getActiveSheet()->mergeCells('A'.$i.':C'.$i);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$i, $row_img['title13']);

$objPHPExcel->getActiveSheet()->getStyle('D'.($i).':K'.($i+2))->applyFromArray($imageborder);
$objPHPExcel->getActiveSheet()->mergeCells('D'.$i.':K'.$i);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$i, $row_img['title14']);

$objPHPExcel->getActiveSheet()->getStyle('L'.($i).':V'.($i+2))->applyFromArray($imageborder);
$objPHPExcel->getActiveSheet()->mergeCells('L'.$i.':V'.$i);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('L'.$i, $row_img['title15']);


$objPHPExcel->getActiveSheet()->mergeCells('W'.$i.':Z'.$i);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('W'.$i, $i);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('W'.$i, $row_img['title16']);
$objPHPExcel->getActiveSheet()->getStyle('W'.($i).':Z'.($i+2))->applyFromArray($imageborder);
$i++;

$objPHPExcel->getActiveSheet()->mergeCells('A'.$i.':C'.$i);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.$i, $row_img['description13']);

$objPHPExcel->getActiveSheet()->mergeCells('D'.$i.':K'.$i);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$i, $row_img['description14']);

$objPHPExcel->getActiveSheet()->mergeCells('L'.$i.':V'.$i);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('L'.$i, $row_img['description15']);


$objPHPExcel->getActiveSheet()->mergeCells('W'.$i.':Z'.$i);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('W'.$i, $row_img['description16']);
$i++;
$objPHPExcel->getActiveSheet()->getStyle('A'.($i).':C'.($i))->applyFromArray($border1);
$objPHPExcel->getActiveSheet()->mergeCells('A'.($i).':C'.($i));
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.($i), 'RATING');
$objPHPExcel->getActiveSheet()->getStyle('D'.($i).':K'.($i))->applyFromArray($border1);
$objPHPExcel->getActiveSheet()->mergeCells('D'.($i).':K'.($i));
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$i, 'OBSERVATIONS');
$objPHPExcel->getActiveSheet()->getStyle('L'.($i).':Z'.($i))->applyFromArray($border1);
$objPHPExcel->getActiveSheet()->mergeCells('L'.($i).':Z'.($i));
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('L'.($i), 'RECOMMENDATIONS');
$i++;
$objPHPExcel->getActiveSheet()->getStyle('A'.($i).':C'.($i))->applyFromArray($border1);
$objPHPExcel->getActiveSheet()->getStyle('D'.($i).':K'.($i))->applyFromArray($border2);
$objPHPExcel->getActiveSheet()->getStyle('L'.($i).':Z'.($i))->applyFromArray($border2);
$objPHPExcel->getActiveSheet()->getStyle('A'.($i))->getAlignment()->setWrapText(true);

$objPHPExcel->getActiveSheet()->getStyle('L'.($i))->getAlignment()->setWrapText(true);
$objPHPExcel->getActiveSheet()->mergeCells('A'.($i).':C'.($i));
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('A'.($i), $row_img['rating4']);
$objPHPExcel->getActiveSheet()->mergeCells('D'.($i).':K'.($i));
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('D'.$i, $row_img['observations4']);
$objPHPExcel->getActiveSheet()->getStyle('D'.($i).':K'.($i))->getAlignment()->setWrapText(true);
$objPHPExcel->getActiveSheet()->mergeCells('L'.($i).':Z'.($i));
$objPHPExcel->getActiveSheet()->getStyle('L'.($i))->getAlignment()->setWrapText(true);
$objPHPExcel->setActiveSheetIndex(0)->setCellValue('L'.($i), $row_img['recommendations4']);

$objPHPExcel->getActiveSheet()->setTitle('Struct Option');
$objPHPExcel->getActiveSheet()->getPageSetup()->setPrintArea('A1:Z'.($i));
// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);

// Set Orientation, size and scaling
$objPHPExcel->setActiveSheetIndex(0);
$objPHPExcel->getActiveSheet()->getPageSetup()->setOrientation(PageSetup::ORIENTATION_LANDSCAPE);
$objPHPExcel->getActiveSheet()->getPageSetup()->setPaperSize(PageSetup::PAPERSIZE_A4);
$objPHPExcel->getActiveSheet()->getPageSetup()->setFitToPage(true);
$objPHPExcel->getActiveSheet()->getPageSetup()->setFitToWidth(1);
$objPHPExcel->getActiveSheet()->getPageSetup()->setFitToHeight(0);
// Redirect output to a client’s web browser (Excel5)
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment;filename="Hull Intergrity Survey.xlsx"');
header('Cache-Control: max-age=0');

$writer = new Xlsx($objPHPExcel);
$writer->save('survey_report.xlsx');
//exit;

// header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
// header('Content-Disposition: attachment;filename="Salary_Report.xlsx"');
// header('Cache-Control: max-age=0');
// $objWriter = IOFactory::createWriter($objPHPExcel,'Xlsx');
// $objWriter->save('php://output');

//$objWriter = IOFactory::createWriter($objPHPExcel, 'Xlsx');
//$objWriter->save('suvey_report.xls');;
$file = 'suvey_report.xls';
if (file_exists($file)) {
	header('Content-Description: File Transfer');
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename='.basename($file));
	header('Expires: 0');
	header('Cache-Control: must-revalidate');
	header('Pragma: public');
	header('Content-Length: ' . filesize($file));
	ob_clean();
	flush();
	readfile($file);
	unlink($file);
	exit;
}
exit;