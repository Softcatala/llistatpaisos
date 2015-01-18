<?php include('include/header.php'); ?>
<?php require( 'lib/class/countrycode.php' );

$object = new CountryCode();
$names = $object->generateTable();

?>
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

<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#example2').dataTable({
					paging: false,
					language: {
				        search: "Cerca:"
				    }
				});
			} );
		</script>
</html>
