<?php
include_once "add_struct.class.php";
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
    <script type="text/javascript" src="jqwidgets/jqxexpander.js"></script> 
    <script type="text/javascript" src="jqwidgets/jqxvalidator.js"></script>
	<script type="text/javascript" src="jqwidgets/jqxbuttons.js"></script>
	<link href="css/calendarstyle.css" rel="stylesheet" type="text/css" />
	<script src="js/calendar_new.js" type="text/javascript"></script>

    <style type="text/css">
        .text-input
        {
            height: 21px;
            width: 150px;
        }
        .register-table
        {
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .register-table td, 
        .register-table tr
        {
            margin: 0px;
            padding: 2px;
            border-spacing: 0px;
            border-collapse: collapse;
            font-family: Verdana;
            font-size: 12px;
        }
        h3 
        {
            display: inline-block;
            margin: 0px;
        }
    </style>
</HEAD>

 <BODY>
  <div class='main1'>
	<div class="heading">
		<div class="logo">
			
		</div><?php
		//include_once "navigation.php";
	?></div>
	<div class='login'>
		<div class='login1'>
			
			 <div id="register">
        <div><h3 style='margin-left:18%;'><img src='images/a.png' height='50' width='200'/></h3></div>
        <div>
            <form id="testForm" action="" method="post">
                <table class="register-table" style='margin-left:10%;'><?php
					if($_REQUEST['flagErr']=='Y') {
						?><tr>
                        <td colspan='2'><strong style='color:red;font-size:9px;'>Invalid username or password. Please try again</strong></td>
                        
						 </tr><?php
					}
                    ?><tr>
                        <td>Username:</td>
                        <td><input type="text" id="userInput" name="userInput" class="text-input" /></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" id="passwordInput" name="passwordInput"class="text-input" /></td>
                    </tr>
                   
                    <tr>
                        <td colspan="2" style="text-align: center;"><input type="submit" value="Send" id="sendButton" /></td>
                    </tr>
                </table>
				<input type='hidden' name='doAction' value='login'/>
            </form>
        </div>
    </div><?php
		
	?></div>
  </div>
 </BODY>
</HTML>
	<script type="text/javascript">
        $(document).ready(function () {
            var theme = '';
            $("#register").jqxExpander({ toggleMode: 'none', width: '300px', showArrow: false, theme: theme });
            $('#sendButton').jqxButton({ width: 60, height: 25, theme: theme });
            $

            $('#sendButton').on('click', function () {
                $('#testForm').jqxValidator('validate');
            });
            

            $('.text-input').jqxInput({ theme: theme });

           
            // initialize validator.
            $('#testForm').jqxValidator({
             rules: [
                    { input: '#userInput', message: 'Username is required!', action: 'keyup, blur', rule: 'required' },
                    
                    { input: '#passwordInput', message: 'Password is required!', action: 'keyup, blur', rule: 'required' },
                    ], theme: theme
            });
        });
    </script>