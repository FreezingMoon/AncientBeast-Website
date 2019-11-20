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
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see https://www.gnu.org/licenses
 *
 * https://www.AncientBeast.com
 * https://github.com/FreezingMoon/AncientBeast
 * DreadKnight@FreezingMoon.org
 */

$style = '
.slider { tweak this again
	max-width: 300px;
	height: 200px;
	margin: 20px auto;
	position: relative;
  }
';
$stylesheet = 'features.css';

// Display default or selected page
$id = isset($_GET['id']) ? $_GET['id'] : 'Documentation';

// Set page title
$page_title = ucfirst($id);

require_once "../header.php";
require_once "../global.php";

// Display list of subpages
$sections = array(
	'info',
	'units',	
	'table',
	'modes',
	'realms',
	'wars'
);

if ($id != 'Documentation') { ?>
	<nav class="div center" id="navigation">
	<ul class="sections">
		<?php
		// TODO: Make this into a function and reuse it at the bottom of the page as well
		foreach ($sections as &$sectionItem) {
			echo '<li style="display: inline;"><a href="?id=' . $sectionItem . '"  id="' . $sectionItem . '" style="padding: 2em;">' . ucfirst($sectionItem) . '</a></li>';
		}
		?>
	</ul>
</nav>
<?php } ?>

<script>
// Hightlight page
document.getElementById("Documentation").className += " active";
</script>

<?php
switch ($id) {
	default:
		?>
		<div class="center">
			<div style="display: inline-block;" class="lighten">
				<a href="?id=<?php echo $sections[0]; ?>"><img src="<?php echo $site_root; ?>images/squares/<?php echo $sections[0]; ?>.jpg" class="frame frame-top">
				<div class="frame frame-bottom">Project Info</div></a>
			</div>
			<div style="display: inline-block;" class="lighten">
				<a href="?id=<?php echo $sections[1]; ?>"><img src="<?php echo $site_root; ?>images/squares/<?php echo $sections[1]; ?>.jpg" class="frame frame-top">
				<div class="frame frame-bottom">Playable Units</div></a>
			</div>
			<div style="display: inline-block;" class="lighten">
				<a href="?id=<?php echo $sections[2]; ?>"><img src="<?php echo $site_root; ?>images/squares/<?php echo $sections[2]; ?>.jpg" class="frame frame-top">
				<div class="frame frame-bottom">Stats Table</div></a>
			</div>
			<div style="display: inline-block;" class="lighten">
				<a href="?id=<?php echo $sections[3]; ?>"><img src="<?php echo $site_root; ?>images/squares/<?php echo $sections[3]; ?>.jpg" class="frame frame-top">
				<div class="frame frame-bottom">Arcade Modes</div></a>
			</div>
			<div style="display: inline-block;" class="lighten">
				<a href="?id=<?php echo $sections[4]; ?>"><img src="<?php echo $site_root; ?>images/squares/<?php echo $sections[4]; ?>.jpg" class="frame frame-top">
				<div class="frame frame-bottom">Faction Realms</div></a>
			</div>
			<div style="display: inline-block;" class="lighten">
				<a href="?id=<?php echo $sections[5]; ?>"><img src="<?php echo $site_root; ?>images/squares/<?php echo $sections[5]; ?>.jpg" class="frame frame-top">
				<div class="frame frame-bottom">Kingdom Wars</div></a>
			</div>

			</div>
		<?php
		break;

	case 'info':
		include 'info.php';
		break;

	case 'units':
		include 'units.php';
		break;

	case 'table':
		include 'table.php';
		break;

	case 'modes':
		include 'modes.php';
		break;

	case 'realms':
		include 'realms.php';
		break;

	case 'wars':
		include 'wars.php';
}

include("../footer.php"); ?>

<!-- Highlight active subpage -->
<script>document.getElementById("<?php echo $id; ?>").className += " active";</script>

<!-- Focus on content when clicking subpage again -->
<script>document.getElementById("<?php echo $id; ?>").href += "#focus";</script>