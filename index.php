
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

<!-- Announcement -->
<!-- <div class="center important"><b>Summoners, we need your help! Please donate $1+ to our <a href="https://explorer.gitcoin.co/#/round/42161/608/31" target="_blank"><u>Gitcoin campaign</u>, thanks!</a></b></div> -->

<!-- Ad - 7-14 Nov -->
<div class="center important" style="border-color: grey !important;">
<a href="https://dogswap.xyz" target="_blank"><b><u>DogSwap.xyz</u></b></a> - the best MintMe DeFi there is! You can stake tokens for rewards! 🦴🍖🍗
</div>


<div class="center">
	<iframe id="game" name="game" src="https://play.AncientBeast.com" style="border: 4px ridge; border-color: grey; width: 934px; height: 525px;" seamless sandbox="allow-same-origin allow-forms allow-scripts allow-popups" webkitAllowFullScreen mozAllowFullScreen allowFullScreen></iframe>
</div>

<?php
include 'supporters.php';
include 'footer.php';
?>
