<?php
require_once '../units/functions.php';
require_once '../units/grid.php';
require_once '../units/cards.php';
?>

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
$creature_results = get_creatures();

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
?>

<div class="div" id="license">All the characters are under the <a href="http://creativecommons.org/licenses/by-sa/3.0/" target="_blank"><b>CC-BY-SA 3.0</b></a> license. You can use them however you like, even for commercial projects, as long as you credit / link the project and mention the original artist(s), similar to the next example: <i>from Ancient Beast game project http://AncientBeast.com - character (or artwork) created by Awesome_Dude</i></div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
