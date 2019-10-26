<?php
require_once 'grid.php';
require_once 'cards.php';
?>

<script>document.title = "Ancient Beast - Sets";</script>

<!-- Grid Adjustments -->
<style type="text/css">
#creaturegrid .vignette,
.vignette div.border,
.vignette div.overlay {height: 128px; width: 128px;}
#creaturegrid {width: 896px; height: 896px;}
</style>

<link rel="stylesheet" href="progress.css">
<?php creatureGrid($creature_results); ?>
<br>

<?php
// Cards
$i = 0;
foreach ($creature_results as $r) {
	$underscore = str_replace(' ', '_', $r['name']);
	echo '<div class="div center" id="' . $underscore . '">';
	cards($r);
	echo '<br>';
	progress($r['progress'],$r);
	echo '</div>';
	$i++;
}
echo $license;
?>
