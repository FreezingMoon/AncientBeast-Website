
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
#screenshots { display: inline-block; position: relative; vertical-align: top; margin: 10px; width: 390px; }
#screenshots img { position: absolute; margin-left: -200px; border-color: grey !important; }
.slide1, .slide2, .slide3 { border-color: grey !important; }
.slide1 { animation: fade1 12s infinite; } 
.slide2 { animation: fade2 12s infinite; }
.slide3 { animation: fade3 12s infinite; }
@keyframes fade1
 {
	0% { opacity: 1 }
	33.333% { opacity: 0 }
	66.666% { opacity: 0 }
	100% { opacity: 1 }
}
@keyframes fade2
{
	0% { opacity: 0 }
	33.333% { opacity: 1 }
	66.666% { opacity: 0 }
	100% { opacity: 0 }
}
@keyframes fade3
{
	0% { opacity: 0 }
	33.333% { opacity: 0 }
	66.666% { opacity: 1 }
	100% { opacity: 0 }
}
';
$stylesheet = 'features.css';

require_once 'header.php';
?>

<div class="center">
	<!-- Featured blog article -->
	<div style="display: inline-block;" class="lighten">
		<a href="./blog/2017-03-15/">
			<img src="blog/2017-03-15/thumb.jpg" alt="News" class="frame frame-top">
			<div class="frame frame-bottom">Version 0.3 Released</div>
		</a>
	</div>
	<div style="display: inline-block;" class="lighten">
		<a href="https://play.AncientBeast.com"><img src="images/squares/play.jpg" alt="Play" class="frame frame-top">
		<div class="frame frame-bottom">Play the Game for Free</div></a>
	</div>
	<div style="display: inline-block;" class="lighten">
		<a href="./contribute/"><img src="images/squares/contribute.jpg" alt="Contribute" class="frame frame-top">
		<div class="frame frame-bottom">Make Your Contribution</div></a>
	</div>
</div>

<div class="div center" id="intro">
	<div style="width: 475px; text-align: justify; display: inline-block;">
		<h3 class="indexheader"><a href="#intro">Intro</a></h3>
		<p><b>Ancient Beast</b> is a turn based strategy indie game project, played against other people (or bots) in hotseat or online modes, featuring a wide variety of units to acquire and put to good use in order to defeat all your opponents in battle.<br>
		This project was carefully designed to be easy to learn, fun to play and hard to master. We hope you'll enjoy it as well!</p>
		<div class="center">
			<a href="https://discord.me/AncientBeast" target="_blank" rel="noopener">
				<div class="button" style="background-image: url(images/push_button.png);">
					Join Discord Server
				</div>
			</a>
		</div>
	</div>

	<div class="lighten" id="screenshots">
		<a href="media/?type=screenshots#id=0">
			<images>
				<img src="images/thumbs/screenie1.png" class="slide1 image frame" alt="Screenshot_1" width="400" height="225">
				<img src="images/thumbs/screenie2.png" class="slide2 image frame" alt="Screenshot_2" width="400" height="225">
				<img src="images/thumbs/screenie3.png" class="slide3 image frame" alt="Screenshot_3" width="400" height="225">
			</images>
			<div class="center" style="padding-top: 240px;">
				<b>Check out some screenshots!</b>
			</div>
		</a>
	</div>
</div>

<?php include 'features.php'; ?>

<div class="div" id="plot" style="display: flex;">
	<div style="text-align: justify;">
		<h3 class="indexheader">
			<a href="#plot">Plot</a>
		</h3>
		<p>
		It's the year 2653. In the last few centuries, technology advanced exponentially and everyone had a fair chance of playing God. With help from the <a href="https://reprap.org" target="_blank" rel="noopener"><b>RepRap</b></a> project, a free desktop 3d printer, which gave anyone power to build their own weapon factory or genetic laboratory on their own property. Mechanic parts or genetic modifications turned from a fashion option into a requirement for daily survival.
		</p>
		<p>
			Despite their combined efforts, the world's governments couldn't prevent the world from plunging into chaos. The Earth has become a battlefield, split between 7 factions fighting for dominion over the ravaged landscape. The apocalypse is here and only the strong ones will surpass it.
		</p>
		<div class="center">
			<audio id="narration" controls src="plot.ogg" width="475"></audio>
		</div>
		<br>
	</div>
	<div width="400">
		<img src="images/hand.png" width="400" height="387" class="image lighten" title="Click to play narrative" alt="hand" onClick="toggleSound();">
	</div>
</div>

<?php
include 'blog/subscribe.php';
include 'footer.php';
?>

<script>
// Toggle plot narration
function toggleSound() {
	var audioElem = document.getElementById('narration');
	if (audioElem.paused) audioElem.play();
	else audioElem.pause();
}
</script>
