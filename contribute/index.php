<?php
/* Ancient Beast - Free Open Source Online PvP TBS: card game meets chess, with creatures.
 * Copyright (C) 2007-2014 Valentin Anastase (a.k.a. Dread Knight)
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
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 *
 * https://www.AncientBeast.com
 * https://github.com/FreezingMoon/AncientBeast
 * DreadKnight@FreezingMoon.org
 */

$page_title = 'Contribute';
$style = '
.contributeCard .ability .wrapper { display: flex !important; align-items: center; }
.abilities .ability .wrapper { height: 104px !important; padding-left: 107px !important; }
.abilities .icon, .contour { width: 104px !important; height: 104px !important; }
.donate { color: #FFE873 !important; }
.artwork { color: #FC8585 !important; }
.coding { color: #6EDD64 !important; }
.audio { color: #AFC8FF !important; }
.image { margin-left: 10px; width: 400px; height: 250px; }
.scale { transform: scale(-1, 1); }
';
$stylesheet = '../units/cards.css';

require_once('../header.php');
?>

<!-- Contribution Widget -->
<div class="div center" id="contribute">
	<!-- Left Side -->
	<div class="center" style="display: inline-block; vertical-align: top;">
		<div class="card sideA" style="background-image: url(<?php echo $site_root; ?>images/cards/margin.png), url(<?php echo $site_root; ?>images/teamwork.jpg);">
			<!-- Card Anchor -->
			<a href="#donate" title="Let's make things happen!"><div style="height: 100%;"></div></a>

			<!-- Display unit info -->
			<a href="#donate" class="name" style="color: white;">
				<div class="section info sinL">
					Contribute to this project today!
				</div>
			</a>
		</div>
	</div>

	<!-- Right Side -->
	<div class="card sideB" style="background-image: url(<?php echo $site_root; ?>images/cards/margin.png), url(<?php echo $site_root; ?>images/cards/G.jpg);">
	  	<!-- Display main ways to contribute -->
		<div class="section abilities contributeCard">

			<div class="ability">
				<a href="#donate">
				<div id="first_icon" class="icon" style="background-image: url(<?php echo $site_root; ?>images/contribute/donate.svg);">
					<div class="contour"></div>
				</div>
				<div class="wrapper">
					<div class="info">
						<h3 id="first_title" class="underline">Donate</h3>
						<span class="desc" id="desc">You can make one time donations to the project or monthly recurring ones, which will be put to various great uses.</span>
					</div>
				</div>
				</a>
			</div>

			<div class="ability">
				<a href="#artwork">
				<div id="second_icon" class="icon" style="background-image: url(<?php echo $site_root; ?>images/contribute/artwork.svg);">
					<div class="contour"></div>
				</div>
                <div class="wrapper">
					<div class="info">
						<h3 id="second_title" class="underline">Artwork</h3>
						<span class="desc" id="desc">You can donate existing artwork that you think it could nicely fit the project or offer your skills to create new stuff.</span>
					</div>
				</div>
				</a>
			</div>

			<div class="ability">
				<a href="#coding">
				<div id="third_icon" class="icon" style="background-image: url(<?php echo $site_root; ?>images/contribute/coding.svg);">
					<div class="contour"></div>
				</div>
                <div class="wrapper">
					<div class="info">
						<h3 id="third_title" class="underline">Coding</h3>
						<span class="desc" id="desc">We can always use an extra coding hand adding new functionality to the game or website and to squash bugs.</span>
					</div>
				</div>
				</a>
			</div>

			<div class="ability">
				<a href="#audio">
				<div id="fourth_icon" class="icon" style="background-image: url(<?php echo $site_root; ?>images/contribute/audio.svg);">
					<div class="contour"></div>
				</div>
                <div class="wrapper">
					<div class="info">
						<h3 id="fourth_title" class="underline">Audio</h3>
						<span class="desc" id="desc">Fast paced epic tracks can really set players in the mood for combat, while sound effects can empower abilities.</span>
					</div>
				</div>
				</a>
			</div>

			<div class="ability">
				<a href="#support">
				<div id="fifth_icon" class="icon" style="background-image: url(<?php echo $site_root; ?>images/contribute/writing.svg);">
					<div class="contour"></div>
				</div>
                <div class="wrapper">
					<div class="info">
						<h3 id="fifth_title" class="underline">Support</h3>
						<span class="desc" id="desc">If none of the options above suit you but you still want to contribute to the project, there are many ways to do so!</span>
					</div>
				</div>
				</a>
			</div>

		</div>
	</div>
</div>

<div class="div" id="donate">
<div style="width: 475px; text-align: justify; display:inline-block;">
<h3 class="indexheader"><a href="#donate">Donate</a></h3>
<p>
We strongly believe in open source software development, but to run a successful project, you still require quite a bit of money in order to have at least few people work part-time on the project and deal with the stuff nobody else wants to ever actually do and there are also services and hardware requirements that must be satisfied which tend to add up.
</p><p>
We would appreciate it if you would become our <a href="https://patreon.com/AncientBeast" target="_blank"><b>Patreon</b></a> or donate via <a href="https://opencollective.com/AncientBeast" target="_blank"><b>OpenCollective</b></a> and receive cool rewards.
If you wish to become a sponsor, get in touch with us via an <a href="mailto:DreadKnight@FreezingMoon.org?Subject=I want to Sponsor the Project" target="_blank"><b>email</b></a>.
<p>
Please consider donating <b>Ethereum</b> or any <b>ERC20 tokens</b> (ideally better known ones) to the following wallet address:
</p>
<p class="center" style="margin: 0px;">
<a href=""><img src="<?php echo $site_root; ?>contribute/ERC-20.png"><br>
<div style="background-color: rgba(0, 0, 0, 0.8); border-radius: 5px; padding: 10px 20px;" class="center">0x21f53DB4D2eAcde70a2E4F0407D073C971eC1A33</div></a>
</p><p>
<a href="https://paypal.me/AncientBeast" target="_blank" rel="noopener"><img src="https://img.shields.io/badge/Donate-PayPal-yellow.svg" class="lighten"></a>
<a href="0x21f53DB4D2eAcde70a2E4F0407D073C971eC1A33" target="_blank"><img src="https://img.shields.io/badge/Donate-Ethereum-darkgrey.svg" class="lighten"></a>
<a href="https://patreon.com/AncientBeast" target="_blank" rel="noopener"><img src="https://img.shields.io/badge/Donate-Patreon-red.svg" class="lighten"></a>
<a href="https://opencollective.com/ancientbeast#section-contribute" target="_blank" rel="noopener"><img src="https://img.shields.io/badge/Donate-OpenCollective-blue.svg" class="lighten"></a>
</p>
</div>

<div style="display: inline-block; vertical-align: top;" class="center">
<table style="width: 400px;"><tr><td><b>Top Donors via PayPal</b></td><td><b>$</b></td></tr>
<tr><td><a href="https://FreezingMoon.org" target="_blank" rel="noopener" class="lighten donate"><img src="./yellow.png"> Anastase family <img src="./yellow.png" class="scale"></a></td><td>9402</td></tr>
<tr><td><a href="https://harumorii.deviantart.com" target="_blank" rel="noopener" class="lighten donate"><img src="./yellow.png"> Haru <img src="./yellow.png" class="scale"></a></td><td>2500</td></tr>
<tr><td><a href="https://fiverr.com/dreadknight" target="_blank" rel="noopener" class="lighten donate"><img src="./yellow.png"> Dread Knight <img src="./yellow.png" class="scale"></a></td><td>1350</td></tr>
<tr><td><a href="https://ugnis.com" target="_blank" rel="noopener" class="lighten donate"><img src="./yellow.png"> Karolis Masiulis  <img src="./yellow.png" class="scale"></a></td><td>300</td></tr>
<tr><td><a href="https://www.patreon.com/user?u=55200" target="_blank" rel="noopener" class="lighten donate"><img src="./yellow.png"> Rob <img src="./yellow.png" class="scale"></td><td>170</td></tr>
<tr><td><a href="https://github.com/unhammer" target="_blank" rel="noopener" class="lighten donate"><img src="./yellow.png"> Kevin Brubeck Unhammer <img src="./yellow.png" class="scale"></a></td><td>50</td></tr>
<tr><td><a href="https://teogreengage.blogspot.com" target="_blank" rel="noopener" class="lighten donate"><img src="./yellow.png"> Teo Cazghir <img src="./yellow.png" class="scale"></td><td>50</td></tr>
<tr><td><a href="https://bountysource.com" target="_blank" rel="noopener" class="lighten donate"><img src="./yellow.png"> David Rappo <img src="./yellow.png" class="scale"></a></td><td>50</td></tr>
<tr><td><a href="https://facebook.com/silvernessa" target="_blank" rel="noopener" class="lighten donate"><img src="./yellow.png"> Vanessa Young <img src="./yellow.png" class="scale"></a></td><td>46</td></tr>
<tr><td><a href="https://github.com/hpvb" target="_blank" rel="noopener" class="lighten donate"><img src="./yellow.png"> Hein-Pieter van Braam <img src="./yellow.png" class="scale"></a></td><td>40</td></tr>
<tr><td><a href="https://qubodup.net" target="_blank" rel="noopener" class="lighten donate"><img src="./yellow.png"> Iwan Gabovitch <img src="./yellow.png" class="scale"></a></td><td>25</td></tr>
<tr><td><a href="https://facebook.com/akumdara" target="_blank" rel="noopener" class="lighten donate"><img src="./yellow.png"> Adam Dalton <img src="./yellow.png" class="scale"></a></td><td>20</td></tr>
<tr><td><a href="https://twitter.com/alexandredes" target="_blank" rel="noopener" class="lighten donate"><img src="./yellow.png"> Alexandre Deschamps <img src="./yellow.png" class="scale"></a></td><td>20</td></tr>
<tr><td><a href="" target="_blank" class="lighten donate"><img src="./yellow.png"> Vincent Bermel <img src="./yellow.png" class="scale"></a></td><td>15</td></tr>
<tr><td><a href="https://brunocasino.fr" target="_blank" rel="noopener" class="lighten donate"><img src="./yellow.png"> Brunocasino.fr <img src="./yellow.png" class="scale"></td><td>11</td></tr>
<tr><td><a href="https://cryptoleo.fr" target="_blank" rel="noopener" class="lighten donate"><img src="./yellow.png"> Cryptoleo.fr <img src="./yellow.png" class="scale"></td><td>11</td></tr>
<tr><td><a href="https://win.expert" target="_blank" rel="noopener" class="lighten donate"><img src="./yellow.png"> Win.expert <img src="./yellow.png" class="scale"></td><td>11</td></tr>
<tr><td><a href="https://Mafija.lv" target="_blank" rel="noopener" class="lighten donate"><img src="./yellow.png"> Mafija.lv <img src="./yellow.png" class="scale"></td><td>10</td></tr>
<tr><td><a href="https://binaryoptionstradingtips.com/no/bdswiss-erfaringer" target="_blank" rel="noopener" class="lighten donate"><img src="./yellow.png"> BDSwiss <img src="./yellow.png" class="scale"></td><td>10</td></tr>
<tr><td><a href="https://facebook.com/leifhl" target="_blank" rel="noopener" class="lighten donate"><img src="./yellow.png"> Leif Larsen <img src="./yellow.png" class="scale"></td><td>10</td></tr>
<tr><td><a href="https://mrfaemir.deviantart.com" target="_blank" rel="noopener" class="lighten donate"><img src="./yellow.png"> Daniel Cohen <img src="./yellow.png" class="scale"></a></td><td>5</td></tr>
<tr><td><a href="" target="_blank" class="lighten donate"><img src="./yellow.png"> gamesandspace <img src="./yellow.png" class="scale"></a></td><td>3</td></tr>
<tr><td><a href="" target="_blank" class="lighten donate"><img src="./yellow.png"> Markus Eliassen <img src="./yellow.png" class="scale"></a></td><td>3</td></tr>
<tr><td><a href="" target="_blank" class="lighten donate"><img src="./yellow.png"> Pandu Aji Wirawan <img src="./yellow.png" class="scale"></a></td><td>2</td></tr>
<tr><td><a href="" target="_blank" class="lighten donate"><img src="./yellow.png"> Caleb Smith <img src="./yellow.png" class="scale"></a></td><td>1.23</td></tr>
<tr><td><a href="" target="_blank" class="lighten donate"><img src="./yellow.png"> Max Mazon <img src="./yellow.png" class="scale"></a></td><td>1</td></tr>
<tr><td>Your Name</td><td>?</td></tr>
</table></div>
</div>

<div class="div" id="artwork">
<div style="width: 475px; text-align: justify; display: inline-block;">
<h3 class="indexheader"><a href="#artwork">Artwork</a></h3>
<p>
Perhaps it's not money you want to contribute, but rather spend some time and energy while putting your pen and brush to some good use in order to create more visual content for the project or simply having fun drawing fan art of already existing creatures? If you have something lying around and you think it could nicely fit the game while under the same <a href="http://creativecommons.org/licenses/by-sa/4.0/" target="_blank" rel="noopener"><b>CC-BY-SA 4.0</b></a> license, feel free to send it our way!<br>
If you want a task assigned, simply drop by our <a href="https://discord.me/AncientBeast" target="_blank" rel="noopener"><b>Discord chat</b></a> and poke <i>DreadKnight</i>, the project's founder, he'll brief you.
</p><p>
Several ways you can help out using with your artistic skills:<br>
<p><b>Draw playable creatures or characters</b><br>
All new units should be rather original, so no typically known fantasy monsters, also their negative shape should stand out when next to the ones of the other ingame <a href="../units"><b>units</b></a>.</p>

<p><b>Make fanart of existing creatures</b><br>
We always love seeing the current game <a href="../units"><b>characters</b></a> in new poses and doing new things or interacting with each other. If you can come up with a small comic strip, then awesome!</p>

<p><b>3d model or animate creatures</b><br>
All the in-game units are being made into 3d and animated using <a href="https://blender.org" target="_blank" rel="noopener"><b>Blender</b></a> package, then rendered as <a href="../viewer/"><b>sprite sheets</b></a> using our <a href="https://github.com/Fweeb/blender_spritify" target="_blank" rel="noopener"><b>Spritify</b></a> add-on (requires <a href="http://ImageMagick.org" target="_blank" rel="noopener"><b>ImageMagick</b></a> installed).
</p>

<p><b>Create more combat locations</b><br>
Each location can be themed to fit any of the game <a href="../units/?view=dwellings"><b>realms</b></a>. Only the two lower thirds of the height are for unit walking. The background has to be 1920 by 1080 pixels, png format.
</p>

<p><b>Prototype better ability icons</b><br>
White icon over black background, svg format, 512 by 512 pixels, similar style to the ones from <a href="https://game-icons.net" target="_blank" rel="noopener"><b>www.game-icons.net</b></a><br>
The <a href="https://inkscape.org" target="_blank" rel="noopener"><b>Inkscape</b></a> vector graphics editor is the right tool for this.</p>

<p><b>Design various promotional items</b><br>
We can always use some more desktop <a href="../media/?type=wallpapers"><b>wallpapers</b></a>, 1920 by 1080 pixels and more merchandise for our online shop, such as <b>miniatures</b>, <b>plushies</b>, <b>T-shirts</b>, <b>posters</b> & <b>stickers</b>.
</p>
<a href="https://creativecommons.org/licenses/by-sa/4.0/" target="_blank" rel="noopener"><img src="https://img.shields.io/badge/license-CC--BY--SA%204.0-green.svg" class="lighten"></a>
<a href="https://mega.co.nz/#F!GAJAjAzL!AhBUayQndZbH_j2IL2B-nA" target="_blank" rel="noopener"><img src="https://img.shields.io/badge/repository-MEGA-red.svg" class="lighten"></a>
<a href="https://ancient-beast.deviantart.com" target="_blank" rel="noopener"><img src="https://img.shields.io/badge/group-deviantArt-green.svg" class="lighten"></a>
<a href="https://discord.me/AncientBeast" target="_blank" rel="noopener"><img src="https://img.shields.io/badge/join-Discord-9cf.svg" class="lighten"></a>
</div>

<?php $i = 0; ?>
<div style="display: inline-block; vertical-align: top;" class="center">
<table style="width: 400px;"><tr><td><b>Top Art Contributors</b></td><td><b>#</b></td></tr>
<tr><td><a href="https://sythgara.deviantart.com" target="_blank" rel="noopener" class="lighten artwork"><img src="./red.png"> Katarzyna Zalecka <img src="./red.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://velvetcat.deviantart.com" target="_blank" rel="noopener" class="lighten artwork"><img src="./red.png"> Indre Lelertaviciute <img src="./red.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://ashirox.deviantart.com" target="_blank" rel="noopener" class="lighten artwork"><img src="./red.png"> Ashirox <img src="./red.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://turjuque.deviantart.com" target="_blank" rel="noopener" class="lighten artwork"><img src="./red.png"> Clement Foucault <img src="./red.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://n-pigeon.deviantart.com" target="_blank" rel="noopener" class="lighten artwork"><img src="./red.png"> n-pigeon <img src="./red.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://gabriel-verdon.deviantart.com" target="_blank" rel="noopener" class="lighten artwork"><img src="./red.png"> Gabriel Verdon <img src="./red.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://youtube.com/user/Jeepster3D" target="_blank" rel="noopener" class="lighten artwork"><img src="./red.png"> Jeepster3D <img src="./red.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://seekerofawe.deviantart.com" target="_blank" rel="noopener" class="lighten artwork"><img src="./red.png"> Mihai Walther <img src="./red.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://game-icons.net" target="_blank" rel="noopener" class="lighten artwork"><img src="./red.png"> Game Icons <img src="./red.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://dreadknight666.deviantart.com" target="_blank" rel="noopener" class="lighten artwork"><img src="./red.png"> Dread Knight <img src="./red.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://opengameart.org/users/piacenti" target="_blank" rel="noopener" class="lighten artwork"><img src="./red.png"> piacenti <img src="./red.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://youtube.com/user/thisroomthatIkeep" target="_blank" rel="noopener" class="lighten artwork"><img src="./red.png"> Roberto Roch <img src="./red.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://opengameart.org/users/5hiroi" target="_blank" rel="noopener" class="lighten artwork"><img src="./red.png"> shiroikuro <img src="./red.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://undeadkitty13.deviantart.com" target="_blank" rel="noopener" class="lighten artwork"><img src="./red.png"> UndeadKitty13 <img src="./red.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://theshock.deviantart.com" target="_blank" rel="noopener" class="lighten artwork"><img src="./red.png"> Ramon Miranda <img src="./red.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://deevad.deviantart.com" target="_blank" rel="noopener" class="lighten artwork"><img src="./red.png"> David Revoy <img src="./red.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="" target="_blank" class="lighten artwork"><img src="./red.png"> GetBacon <img src="./red.png" class="scale"></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://slyth3rin.deviantart.com" target="_blank" rel="noopener" class="lighten artwork"><img src="./red.png"> Bri Arwiie <img src="./red.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://rougespark.deviantart.com" target="_blank" rel="noopener" class="lighten artwork"><img src="./red.png"> Rogue Spark <img src="./red.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://monsterjavaguns.com" target="_blank" rel="noopener" class="lighten artwork"><img src="./red.png"> Fweeb <img src="./red.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://betasector.deviantart.com" target="_blank" rel="noopener" class="lighten artwork"><img src="./red.png"> BetaSector <img src="./red.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://nynn.contact.free.fr" target="_blank" rel="noopener" class="lighten artwork"><img src="./red.png"> Nynn <img src="./red.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://facebook.com/All.Things.Rotten.Maggotmaster" target="_blank" rel="noopener" class="lighten artwork"><img src="./red.png"> Maggot Master <img src="./red.png" class="scale"></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://random223.deviantart.com" target="_blank" rel="noopener" class="lighten artwork"><img src="./red.png"> random223 <img src="./red.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://onirke.deviantart.com" target="_blank" rel="noopener" class="lighten artwork"><img src="./red.png"> Oliwia Grambo <img src="./red.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://opengameart.org/users/stumpystrust" target="_blank" rel="noopener" class="lighten artwork"><img src="./red.png"> StumpyStrust <img src="./red.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td>Your Name</td><td>?</td></tr>
</table><br>
<div style="display: inline-block;" class="center"><img src="gumble.png" class="image"></div>
</div>
</div>

<div class="div" id="coding">
<div style="width: 475px; text-align: justify; display:inline-block;">
<h3 class="indexheader"><a href="#coding">Coding</a></h3>
<p>
We can always use an extra hand or two when it comes to polishing and adding new functionality to the website and to the game itself of course. All the coding languages used are web based, such as HTML, CSS, PHP, Javascript and Node.js. The project uses the great <a href="http://phaser.io" target="_blank" rel="noopener"><b>Phaser</b></a> game engine, having a neat <a href="http://html5gamedevs.com/forum/14-phaser" target="_blank" rel="noopener"><b>community</b></a>, <a href="https://photonstorm.github.io/phaser-ce" target="_blank" rel="noopener"><b>documentation</b></a> and <a href="http://phaser.io/examples" target="_blank" rel="noopener"><b>examples</b></a>.
It is also open source, you can find the repository on <a href="https://github.com/photonstorm/phaser" target="_blank" rel="noopener"><b>Github</b></a>.
</p><p>
Check out this <a href="https://github.com/FreezingMoon/AncientBeast/blob/master/CONTRIBUTING.md#readme" target="_blank" rel="noopener"><b>guide</b></a> about how to set up the project locally.
If you want a task assigned, simply drop by our <a href="https://discord.me/AncientBeast" target="_blank" rel="noopener"><b>Discord chat</b></a> and poke <i>DreadKnight</i>, the project's founder, he'll brief you.<br>
Sometimes even reviewing or talking code can greatly help.
</p>
<a href="https://www.gnu.org/licenses/agpl-3.0.html" target="_blank" rel="noopener"><img src="https://img.shields.io/badge/license-AGPL3.0-green.svg" class="lighten"></a>
<a href="https://github.com/FreezingMoon/AncientBeast/issues" target="_blank" rel="noopener"><img src="https://img.shields.io/github/issues/FreezingMoon/AncientBeast.svg" class="lighten"></a>
</div>

<?php $i = 0; ?>
<div style="display: inline-block; vertical-align: top;" class="center">
<table style="width: 400px;"><tr><td><b><a href="https://github.com/FreezingMoon/AncientBeast/graphs/contributors" target="_blank" rel="noopener">Top Code Contributors</a></b></td><td><b>#</b></td></tr>
<tr><td><a href="https://github.com/Hypersomniac" target="_blank" rel="noopener" class="lighten coding"><img src="./green.png"> Clement Turjuque <img src="./green.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://fiverr.com/dreadknight" target="_blank" rel="noopener" class="lighten coding"><img src="./green.png"> Dread Knight <img src="./green.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://github.com/Fweeb" target="_blank" rel="noopener" class="lighten coding"><img src="./green.png"> Fweeb <img src="./green.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://github.com/seand88" target="_blank" rel="noopener" class="lighten coding"><img src="./green.png"> seand88 <img src="./green.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://github.com/Spencer-Zhang" target="_blank" rel="noopener" class="lighten coding"><img src="./green.png"> Spencer-Zhang <img src="./green.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://cxong.github.io" target="_blank" rel="noopener" class="lighten coding"><img src="./green.png"> congusbongus <img src="./green.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://github.com/tukkek" target="_blank" rel="noopener" class="lighten coding"><img src="./green.png"> tukkek <img src="./green.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://github.com/Dobz" target="_blank" rel="noopener" class="lighten coding"><img src="./green.png"> Dobz <img src="./green.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://github.com/SlimeTP" target="_blank" rel="noopener" class="lighten coding"><img src="./green.png"> SlimeTP <img src="./green.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://github.com/Nehmulos" target="_blank" rel="noopener" class="lighten coding"><img src="./green.png"> Nehmulos <img src="./green.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://github.com/Archiboldian" target="_blank" rel="noopener" class="lighten coding"><img src="./green.png"> Archiboldian <img src="./green.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://github.com/snollygolly" target="_blank" rel="noopener" class="lighten coding"><img src="./green.png"> Matt Horning <img src="./green.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://github.com/s-lugo" target="_blank" rel="noopener" class="lighten coding"><img src="./green.png"> Sebastian Lugo <img src="./green.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://github.com/hjaarnio" target="_blank" rel="noopener" class="lighten coding"><img src="./green.png"> hjaarnio <img src="./green.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://github.com/Uhkis" target="_blank" rel="noopener" class="lighten coding"><img src="./green.png"> Uhkis <img src="./green.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://github.com/randompast" target="_blank" rel="noopener" class="lighten coding"><img src="./green.png"> randompast <img src="./green.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td>Your Name</td><td>?</td></tr>
</table></div>
</div>

<div class="div" id="audio">
<div style="width: 475px; text-align: justify; display:inline-block;">
<h3 class="indexheader"><a href="#audio">Audio</a></h3>
<p>
If composing is more of your expertise, we can always use more tracks of epic genre, as example you can check out the existing tracks and also some from related games, such as the Heroes of Might and Magic 3's combat tracks and the OST from the King's Bounty games. I consider sound effects a very important part that can make or break gameplay, meaning that they should not be annoying and repetitive while nicely complementing and reinforcing various actions.
</p><p>
The ideal track for the combat mode would be around 3:30 lenght, non-loopable, epic style, rather dark and fast paced.<br>
All tracks and SFX need to be under <a href="https://creativecommons.org/licenses/by-sa/4.0/" target="_blank" rel="noopener"><b>CC-BY-SA 4.0</b></a> licensing.
</p><p>
Check out these tracks as reference, but always be original:<br>
<a href="https://AncientBeast.com/media?type=music" target="_blank"><b>Ancient Beast Official Soundtrack</b></a><br>
<a href="https://www.youtube.com/watch?v=7hbaNfHToT8" target="_blank" rel="noopener"><b>Heroes of Might and Magic 3: Combat 1</b></a><br>
<a href="https://www.youtube.com/watch?v=GSwATqPUsv0" target="_blank" rel="noopener"><b>Heroes of Might and Magic 3: Combat 2</b></a><br>
<a href="https://www.youtube.com/watch?v=ea5RiOfcF6k" target="_blank" rel="noopener"><b>Heroes of Might and Magic 3: Combat 3</b></a><br>
<a href="https://www.youtube.com/watch?v=M0ObS62Js-4" target="_blank" rel="noopener"><b>Heroes of Might and Magic 3: Combat 4</b></a><br>
</p><p>
Here are some playlists that include non-combat tracks:
<a href="https://www.youtube.com/watch?v=iKGrzdwyW-M&list=PL570FD020D275457E" target="_blank" rel="noopener"><b>Extra playlist: King's Bounty: The Legend</b></a><br>
<a href="https://www.youtube.com/watch?v=tnNowmSdP1c&list=PL5052849DDF6C95A6" target="_blank" rel="noopener"><b>Extra playlist: King's Bounty: Armored Princess</b></a><br>
</p><p>
If you make any sample tracks, it would be ideal to have them uploaded to <a href="https://SoundCloud.com" target="_blank" rel="noopener"><b>SoundCloud</b></a> and share their links in our <a href="https://discord.me/AncientBeast" target="_blank" rel="noopener"><b>Discord chat</b></a> to receive some feedback from <a href="https://github.com/DreadKnight" target="_blank" rel="noopener"><b>Dread Knight</b></a> before proceeding, making sure you are on the right track ;-)
</p>
</div>

<?php $i = 0; ?>
<div style="display: inline-block; vertical-align: top;" class="center">
<table style="width: 400px;"><tr><td><b>Top Audio Contributors</b></td><td><b>#</b></td></tr>
<tr><td><a href="https://youtube.com/user/moonthiefro" target="_blank" rel="noopener" class="lighten audio"><img src="./blue.png"> Moonthief <img src="./blue.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://twitter.com/Jenskiilstofte" target="_blank" rel="noopener" class="lighten audio"><img src="./blue.png"> Jens Kiilstofte <img src="./blue.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://soundcloud.com/agret_brisignr" target="_blank" rel="noopener" class="lighten audio"><img src="./blue.png"> Agret Brisignr <img src="./blue.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://youtube.com/Tadon" target="_blank" rel="noopener" class="lighten audio"><img src="./blue.png"> Tad Miller <img src="./blue.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://youtube.com/user/DruoxTheShredder" target="_blank" rel="noopener" class="lighten audio"><img src="./blue.png"> Dreux Ferrano <img src="./blue.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td><a href="https://opengameart.org/users/haeldb" target="_blank" rel="noopener" class="lighten audio"><img src="./blue.png"> Brandon756 <img src="./blue.png" class="scale"></a></td><td><?php echo ++$i; ?></td></tr>
<tr><td>Your Name</td><td>?</td></tr>
</table><br><br>
<div style="display: inline-block;" class="center"><img src="band.jpg" class="image"></div>
</div>
</div>

<div class="div" id="support">
<div style="width: 475px; text-align: justify; display:inline-block;">
<h3 class="indexheader"><a href="#support">Support</a></h3>
<p>
No moneys and no coding or artistic skills? No worries, you can still help out by being part of the community, testing out the game and reporting issues, brainstorming and spreading out the word as our marketing budget is pretty much non-existend, so we rely on you for that! Feedback and boosting the numbers are always nice, as they can also boost up morale and reassure us we're on the proper path.
Click on the icons below and join our various project groups. You can hang out with us in our own project's  <a href="https://discord.me/AncientBeast" target="_blank" rel="noopener"><b>Discord chat</b></a>.
</p>
</div>
<div style="display: inline-block;" class="center"><img src="together.jpg" class="image"></div>
</div>

<a href="#contribute"><img src="<?php echo $site_root; ?>images/We_Want_YOU.jpg" alt="We Want YOU" title="It's true!"></a>

<?php include('../footer.php'); ?>
