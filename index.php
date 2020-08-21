
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

require_once 'header.php';
?>

<div class="center">
	<iframe id="game" name="game" src="https://www.freezingmoon.org/AncientBeast/" style="border: 4px ridge; border-color: grey; width: 934px; height: 525px;" seamless webkitAllowFullScreen mozAllowFullScreen allowFullScreen></iframe>
</div>

<div id="sponsors" class="center">
		<a href="https://Raj.bet" target="_blank" title="Rajbet - Online Casino India"><img src="<?php echo $site_root; ?>images/sponsors/Rajbet.svg" alt="Rajbet"></a>
	</div>

<?php
include 'footer.php';
?>