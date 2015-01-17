<?php 

require( 'lib/db.php' );
require( 'lib/class/countrycode.php' );

$object = new CountryCode();
$names = $object->generateTable();

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<title>DataTables jQuery UI example</title>

		<link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/3cfcc339e89/integration/jqueryui/dataTables.jqueryui.css">
		<link rel="stylesheet" type="text/css" href="css/styles.css">

		<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
		<script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/3cfcc339e89/integration/jqueryui/dataTables.jqueryui.js"></script>
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#example2').dataTable({
					paging: false
				});
			} );
		</script>
	</head>
	<body>
		<div class="container">

		<table id="example2" cellspacing='0'> <!-- cellspacing='0' is important, must stay -->
		<thead>
			<tr>
				<th>Codi alfa2</th>
			<?php foreach($names['sources'] as $source): ?>
				<th><?php echo $source ?></th>
			<?php endforeach; ?>
			</tr>
		</thead>
		<tbody>
			<?php foreach($names['codes'] as $key => $name): ?>
				<tr>
				<td><?php echo $key ?></td>
				<?php foreach($names['sources'] as $source): ?>
					<?php if(isset($name[$source])): ?>
						<td><?php echo $name[$source] ?></td>
					<?php else: ?>
						<td></td>
					<?php endif; ?>
				<?php endforeach;?>
				</tr>
			<?php endforeach; ?>
		</tbody>
</table>
	
		</div>
	</body>
</html>