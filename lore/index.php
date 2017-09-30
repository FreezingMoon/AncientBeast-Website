<?php
/* Ancient Beast - Free Open Source Online PvP TBS: card game meets chess, with creatures.
 * Copyright (C) 2007-2014  Valentin Anastase (a.k.a. Dread Knight)
 *
 * This file is part of Ancient Beast.
 *
 * Ancient Beast is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * Ancient Beast is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * https://www.AncientBeast.com
 * https://github.com/FreezingMoon/AncientBeast
 * DreadKnight@FreezingMoon.org
 */

// Display default or selected page
$view = isset($_GET['view']) ? $_GET['view'] : 'Lore';

// Set page title
$page_title = ucfirst($view);

require_once "../header.php";
require_once "../global.php";

// Display list of subpages
$sections = array(
	'info',
	'combat',	
	'input',
	'arcade',
	'tournament',
	'kingdom'
);
?>

<nav class="div center" id="navigation"><ul class="sections">

<?php
// TODO: Make this into a function and reuse it at the bottom of the page for easier navigation after reading the current page, even if there's a "Go to Top" frame title
foreach ($sections as &$sectionItem) {
	echo '<li style="display: inline;"><a href="?view=' . $sectionItem . '"  id="' . $sectionItem . '" style="padding: 2em;">' . ucfirst($sectionItem) . '</a></li>';
}
?>

</ul></nav>

<script>
// Set page title
document.title = "Ancient Beast - <?php echo ucfirst($view); ?>";

// Hightlight media page
document.getElementById("<?php echo $page_title; ?>").className += " active";
</script>

<!-- This div serves as an anchor -->
<div id="focus"></div>

<?php
switch ($view) {
	default:
		?>
		<div class="center">
			<div style="display: inline-block;" class="lighten">
				<a href="?view=info"><img src="<?php echo $site_root; ?>images/squares/info.jpg" class="frame frame-top">
				<div class="frame frame-bottom">Project Info</div></a>
			</div>
			<div style="display: inline-block;" class="lighten">
				<a href="?view=combat"><img src="<?php echo $site_root; ?>images/squares/combat.jpg" class="frame frame-top">
				<div class="frame frame-bottom">Combat Details</div></a>
			</div>
			<div style="display: inline-block;" class="lighten">
				<a href="?view=input"><img src="<?php echo $site_root; ?>images/squares/input.jpg" class="frame frame-top">
				<div class="frame frame-bottom">Input Methods</div></a>
			</div>
			<div style="display: inline-block;" class="lighten">
				<a href="?view=arcade"><img src="<?php echo $site_root; ?>images/squares/arcade.jpg" class="frame frame-top">
				<div class="frame frame-bottom">Arcade Mode</div></a>
			</div>
			<div style="display: inline-block;" class="lighten">
				<a href="?view=tournament"><img src="<?php echo $site_root; ?>images/squares/tournament.jpg" class="frame frame-top">
				<div class="frame frame-bottom">Monthly Tournament</div></a>
			</div>
			<div style="display: inline-block;" class="lighten">
				<a href="?view=kingdom"><img src="<?php echo $site_root; ?>images/squares/kingdom.jpg" class="frame frame-top">
				<div class="frame frame-bottom">Kingdom Wars</div></a>
			</div>
		</div>
		
		<?php
		break;

	case 'info':
		include 'info.php';
		break;

	case 'input':
		include 'input.php';
		break;

	case 'combat':
		include 'combat.php';
		break;

	case 'arcade':
		include 'arcade.php';
		break;

	case 'tournament':
		include 'tournament.php';
		break;

	case 'kingdom':
		include 'kingdom.php';
}
?>

<?php include("../footer.php"); ?>

<!-- Highlight active subpage -->
<script>document.getElementById("<?php echo $view; ?>").className += " active";</script>

<!-- Focus on content when clicking subpage again -->
<script>document.getElementById("<?php echo $view; ?>").href += "#focus";</script>
