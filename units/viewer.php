<link rel="stylesheet" href="carousel.css">
<link rel="stylesheet" href="progress.css">

<!-- Carousel -->
<?php
// Get the selected ID or pick a random valid id
$id = isset($_GET['id']) ? $_GET['id'] : $random;

// Calculate the total number of existing units
$total_units = count($creature_results);

// Make sure random id is within range or that the passed in $id is in range.
while($id == $random || !in_array($id, $creature_results) {
	$id = rand(1, $total_units);
}
?>
<script>
	var selectedUnit = <?php echo $id; ?>;
	var siteUrl = "<?php echo $site_url; ?>";
</script>
<script type="text/javascript" src="carousel.js"></script>

<div id="carousel"></div>

<div class="div center">
<?php
// Cards
// TODO: Sort these by set / realm / level instead of id
require_once 'cards.php';
$r = $creature_results[$id];
if ($r) {
	$page_title = 'Ancient Beast - ' . $r['name'];
?>
	<!-- Use unit name as page title -->
	<script>document.title = "<?php echo $page_title; ?>";</script>
<?php
	cards($r);
	echo '<br>';
	progress($r['progress'], $r);
	// TODO: Add left and right arrow hotkeys
	// TODO: Add card flip eyecandy animation
	echo '</div>';
	// TODO: Fix Disqus page title
	disqus($page_title);
	}
}

// TODO: Show unit drop along with its modifiers
echo "</div>";
disqus($page_title);
?>
<script>ABCarousel.updatePageDetails(<?php echo $id; ?>);</script>
