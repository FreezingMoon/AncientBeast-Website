<?php
require_once '../units/functions.php';
$creature_results = get_creatures();
?>

<!-- Hightlight active page -->

<?php
require_once '../images/stats/index.php';
// TODO: Show specific unit card when clicking a row
?>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.28.14/js/jquery.tablesorter.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/floatthead/2.0.3/jquery.floatThead.min.js"></script>
<style>
	#statsTable { border-collapse: collapse; }
	#statsTable td { cursor: none; }
	#statsTable th { font-weight: 400; cursor: pointer; }
	#statsTable tr:nth-child(even), #statsTable th { background: rgba(200, 200, 200, 0.2); }
	#statsTable tr:hover, #statsTable col.hover { background: rgba(200, 200, 200, 0.4); }
	#statsTable td:hover { color: white; }
	.tablesorter > thead td,
	.tablesorter > thead th {
		cursor: pointer;
	}
</style>
<div class="div center">
<table id="statsTable" class="tablesorter" width=100%>
	<colgroup>
	<?php
	$i = 0;
	// There are 22 rows, we must loop over this once per row.
	while ($i <= 22) { echo '<col>'; $i++; }
	?>
	</colgroup>
	<thead>
		<tr style="background: rgba(0, 0, 0, 0.6); height: 32px;">
			<th class="center" style="font-size: 24px; font-weight: 400;">Unit Name</th>
			<th class="center" title="Level" style="font-size: 32px; font-weight: 400;">&#9651;</th>
			<th class="center" title="Realm" style="font-size: 32px; font-weight: 400;">&#9723;</th>
			<th class="center" title="Size" style="font-size: 32px; font-weight: 400;">&#11041;</th>
			<th class="center" title="Progress" style="font-size: 32px; font-weight: 400;">&#9719;</th>
			<th class="center" title="Health"><span class="icon health"></span></th>
			<th class="center" title="Regrowth"><span class="icon regrowth"></span></th>
			<th class="center" title="Endurance"><span class="icon endurance"></span></th>
			<th class="center" title="Energy"><span class="icon energy"></span></th>
			<th class="center" title="Meditation"><span class="icon meditation"></span></th>
			<th class="center" title="Initiative"><span class="icon initiative"></span></th>
			<th class="center" title="Offense"><span class="icon offense"></span></th>
			<th class="center" title="Defense"><span class="icon defense"></span></th>
			<th class="center" title="Movement"><span class="icon movement"></span></th>
			<th class="center" title="Pierce"><span class="icon pierce"></span></th>
			<th class="center" title="Slash"><span class="icon slash"></span></th>
			<th class="center" title="Crush"><span class="icon crush"></span></th>
			<th class="center" title="Shock"><span class="icon shock"></span></th>
			<th class="center" title="Burn"><span class="icon burn"></span></th>
			<th class="center" title="Frost"><span class="icon frost"></span></th>
			<th class="center" title="Poison"><span class="icon poison"></span></th>
			<th class="center" title="Sonic"><span class="icon sonic"></span></th>
			<th class="center" title="Mental"><span class="icon mental"></span></th>
		</tr>
	</thead>
	<tbody>
		<?php
		// TODO: Display cell tool-tip on hover
		// TODO: Add some realm related colors around
		foreach ($creature_results as $r) {
			echo '<tr>';
			// TODO: Make an array with the columns needed
			$columns = [
				$r['name'],
				$r['level'],
				$r['realm'],
				$r['size'],
				// Sum the values in the array, divide by number of items and add a % sign
				array_sum($r['progress']) / sizeof($r['progress'])
			];
			$stats = $r['stats'];
			$columns = array_merge($columns, $stats);
			foreach ($columns as $r) { echo '<td class="center">' . $r . '</td>'; } // Generate unit row using the columns array
			echo '</tr>';
		}
		?>
	</tbody>

</table>

<script>
// Float table header
var $table = $('#statsTable');
$table.tablesorter();
$table.floatThead();
$('td').hover(function() { $(this).parents('#statsTable').find('col:eq('+$(this).index()+')').toggleClass('hover'); });
</script>
</div>

<?php disqus('Ancient Beast - Table'); ?>
?>

<!-- Focus on content when clicking subpage again -->
<script>document.getElementById("<?php echo $view; ?>").href += "#focus";</script>
