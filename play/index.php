<?php
/* Ancient Beast - Free Open Source Online PvP TBS: card game meets chess, with creatures.
 * Copyright (C) 2007-2019  Valentin Anastase (a.k.a. Dread Knight)
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

$page_title = "Play";

$style = '';

require_once('../header.php'); 

$beta = isset($_GET['beta']) ? 1 : 0; ?>

<!-- Hightlight active page -->
<script>document.getElementById("<?php echo $page_title; ?>").className += " active";</script>

<div id="bar" class="center" style="display: flex;">
	<div style="width: 150px;"><a onclick="if(confirm('Switch to <?php if ($beta==0) echo 'un'; ?>stable version?'))  window.location.href='<?php if ($beta==0) echo 'index.php?beta'; else echo '/play/' ?>';"><img src="power.svg" style="margin-bottom: 3px;"> Beta <?php if ($beta==0) echo "Off"; else echo "On"; ?></a></div>
	<div style="width: 650px;"></div>
	<div style="width: 150px;"><a onclick="requestFullScreen()">Fullscreen <img src="fullscreen.svg" style="margin-bottom: 3px;"></a></div>
</div>

<?php
// Display local game server if the address is localhost
$source = "http://localhost:8080/index.html";
$whitelist = array('127.0.0.1', '::1');

if(!in_array($_SERVER['REMOTE_ADDR'], $whitelist) && $beta == 0) {
	$source = "https://play.AncientBeast.com";
}

if ($beta == 1) {
	$source = "https://ancientbeast-beta.herokuapp.com";
}
?>

<div class="center">
	<iframe id="game" name="game" src="<?php echo $source; ?>" style="border: 4px ridge; border-color: grey; width: 934px; height: 525px;" seamless webkitAllowFullScreen mozAllowFullScreen allowFullScreen></iframe>
</div>

<?php
include('../footer.php'); ?>

<script src="launcher/fullscreen.js"></script>
