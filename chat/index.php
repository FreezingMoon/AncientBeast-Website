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

$page_title = "Chat";
$style = '
#discord {
	display: inline;
	vertical-align: top;
	margin-top: 5px;
}
';

require_once("../header.php");
?>
<!-- Hightlight active page -->
<script>document.getElementById("<?php echo $page_title; ?>").className += " active";</script>

<div class="div center" id="focus" style="display: inline-block; width: 530px; height: 460px;">
<p>Feel free to join us in our Discord server, a place where both developers and fans of the project hang around in harmony.
</p>

<div style="display: inline-block; width: 100%;" class="lighten center">
	<a href=https://discord.gg/x78rKen" target="_blank"><img src="../images/squares/discord.jpg" class="frame"><br>
	<div class="button" style="background-image: url(<?php echo $site_root; ?>images/push_button.png);">Discord server</div></a>
</div>
</div>

<iframe src="https://discordapp.com/widget?id=154868963132571649&theme=dark" id="discord" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>
<br>
<br>
<div class="center" id="action" style="text-align: left;">
	<div style="display: inline-block;" class="lighten">
		<a href="http://reddit.com/r/AncientBeast" target="_blank"><img src="../images/squares/reddit.jpg" class="frame"><br>
		<div class="button" style="background-image: url(<?php echo $site_root; ?>images/push_button.png);">Reddit: Join Forum</div></a>
	</div>
	<div style="display: inline-block;" class="lighten">
		<a href="https://github.com/FreezingMoon/AncientBeast" target="_blank"><img src="../images/squares/github.jpg" class="frame"><br>
		<div class="button" style="background-image: url(<?php echo $site_root; ?>images/push_button.png); ;">GitHub: Fork Project</div></a>
	</div>
	<div style="display: inline-block;" class="lighten">
		<a href="http://ancient-beast.deviantart.com" target="_blank"><img src="../images/squares/deviantart.jpg" class="frame"><br>
		<div class="button" style="background-image: url(<?php echo $site_root; ?>images/push_button.png);">deviantArt: Submit Art</div></a>
	</div>
</div>

<?php
disqus();
include('../footer.php'); ?>

<!-- Focus on content when clicking the navigation button again -->
<script>document.getElementById("<?php echo $page_title; ?>").href += "#focus";</script>
