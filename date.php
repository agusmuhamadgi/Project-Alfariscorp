<!DOCTYPE html>
<html>
<head>
<!--Kalender -->
		<link type="text/css" rel="stylesheet" href="development-bundle/themes/ui-lightness/ui.all.css" />
	
		<script src="development-bundle/jquery-1.8.0.min.js"></script>
		<script src="development-bundle/ui/ui.core.js"></script>
		<script src="development-bundle/ui/ui.datepicker.js"></script>
		<script src="development-bundle/ui/i18n/ui.datepicker-id.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
			$("#tanggal").datepicker({
				dateFormat : "yy-mm-dd",
				changeMonth : true,
				changeYear : true
			});
		});
		</script>

		<!-- Confirm Delete-->
</head>
<body></body>
</html>