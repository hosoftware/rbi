 <script type="text/javascript">
    $(document).ready(function () {
	var theme = "";
	$("#jqxMenu").jqxMenu({ width: '100%', height: '30px', theme: theme });
    
	var centerItems = function () {
	    var firstItem = $($("#jqxMenu ul:first").children()[0]);
	    firstItem.css('margin-left', 0);
	    var width = 0;
	    var borderOffset = 2;
	    $.each($("#jqxMenu ul:first").children(), function () {
		width += $(this).outerWidth(true) + borderOffset;
	    });
	    var menuWidth = $("#jqxMenu").outerWidth();
	    firstItem.css('margin-left', (menuWidth / 2 ) - (width / 2));
	}
	//centerItems();
	$(window).resize(function () {
	   // centerItems();
	});
    });
</script>
   <div id='jqxMenu' style='background-color: : #13189B !important;'>
	<ul>
	    <li><a href="struct_project_listing.php">TANK LIST</a></li><?php
		if(!empty($_SESSION['userid'])) {
		   ?><li><a href="<?php print(basename($_SERVER['PHP_SELF']))?>?doAction=logout">LOGOUT</a></li><?php
		}
	?></ul>
    </div>