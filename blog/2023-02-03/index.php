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

$page_title = "Version 0.4 Released";
require_once("../../header.php");
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.7/css/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<div class="div" id="intro">
<h2 class="indexheader"><a href="#intro">Version 0.4 - released on 2nd February (2023)</a></h2>

<p>Hello to all sinners!
Version 0.4 of Ancient Beast has finally been released on GitHub, and it marks another meaningful step forward for the project. This build closes
out a long stretch of work with more creatures, more polish, better multiplayer support, and a cleaner development pipeline for what comes next.
</p>
<p>
This is still pre-alpha, but it pushes the game toward a more complete and stable state. A lot of this progress is visible in matches, while another
part of it is foundational work that makes future versions easier to build and ship.
</p>
<p>
The scale of this milestone is hard to overstate: it spans about 5 years and 11 months between v0.3 and v0.4, touched 2,229 files, and changed
40,251 lines added against 244,371 lines removed. 118 people contributed code along the way.
</p>
</div>


<div class="div" id="changes">
<h2 class="indexheader"><a href="changes">Game changes</a></h2>

<p>
The v0.4 release added 3 new playable creatures: <b>Stomper</b>, <b>Vehemoth</b>, and <b>Golden Wyrm</b>.
</p>
<p>
Alongside those additions, this cycle delivered heavy ability implementation and follow-up refinement across multiple creatures and combat
interactions.
</p>
<a rel="pop" href="release.png"><img class="shadow artwork" width=100% src="release.png" title="New playable creatures" alt="creatures"></a>
</div>

<div class="div" id="stomper">
<h3 class="indexheader"><a href="stomper">Stomper</a></h3>
<p>
Stomper fills a very specific battlefield role: durable tempo control in midrange lanes. Its entire kit is built around disrupting enemy action order
rather than racing to kill.
</p>
<p>
<b>Tankish Build</b> (passive) stacks +1 defense every round, +2 if it took no damage that turn, capping at 40. The longer Stomper survives, the harder it
becomes to trade into — which punishes opponents who fail to commit to killing it early. <b>Seismic Stomp</b> is a directional ground strike reaching
three hexes out, delaying the target. <b>Earth Shaker</b> expands that into board-wide timing control: it delays every creature caught in a large front
and-back arc, and hitting a creature that already carries the Earth Shaker debuff makes it Dizzy, skipping its turn entirely. <b>Stone Grinder</b> is the
high-risk closer — a stampede down a full row that damages everything in its path, including your own units, so it rewards setting up clear lanes
first.
</p>
<p>
Stat-wise, Stomper is the tankiest level 3 in the roster by a wide margin: #1 endurance (100) and #1 defense (16) among its peers, with solid health
and movement. The tradeoff is initiative — at 10 it is the slowest level 3 unit, so it plays best as a front-line anchor that absorbs pressure and
opens better turns for faster allies behind it.
</p>
</div>

<div class="div" id="vehemoth">
<h3 class="indexheader"><a href="vehemoth">Vehemoth</a></h3>
<p>
Vehemoth is a high-mass control bruiser that converts positioning into kill pressure, built around a specific window: it can only freeze enemies
that are already fatigued, meaning it forces you to play around the endurance system rather than brute-forcing a target.
</p>
<p>
<b>Lamellar Body</b> (passive) scales its defense and frost resistance with the number of Sloth-realm allies alive: +2 defense and +2 frost per Sloth
unit on the field, rewarding Sloth-heavy drafts. <b>Flake Convertor</b> is the setup move: a ranged frost shot that locks fatigued enemies frozen and
skips their turn. <b>Flat Frons</b> is the payoff: a charge that shatters any frozen target below 50 health outright, no damage roll, just gone — and
upgraded it can charge from range to knock targets back. <b>Falling Arrow</b> covers the rest: a wide cone attack that scales bonus frost damage from
the level gap between Vehemoth and its target, punishing weaker creatures disproportionately.
</p>
<p>
Among level 7 units, Vehemoth leads in both health (245) and endurance (90) by a large margin, making it nearly impossible to burst down. The
cost is initiative (35, lowest in its tier) and energy — it plays best as a methodical space-holder that forces favorable trades rather than a fast
initiator.
</p>
</div>

<div class="div" id="golden-wyrm">
<h3 class="indexheader"><a href="golden-wyrm">Golden Wyrm</a></h3>
<p>
Golden Wyrm is a premium finisher-support hybrid that is dangerous to both ignore and engage. It can threaten executes, reposition
aggressively, and keep allies alive in the same loadout.
</p>
<p>
<b>Battle Cry</b> (passive) is a retaliation tool: if Golden Wyrm took damage last round, it opens its next turn with a 30 sonic burst hitting everything
adjacent — walking up to trade into it costs you. <b>Executioner Axe</b> deals standard slash damage but instantly kills any target at 45 health or below;
upgraded, a successful execution resets the ability for another use that same turn. <b>Dragon Flight</b> lets it leap up to 10 hexes ignoring all obstacles
and units, with no movement cost; upgraded, landing adds a +25 offense buff for the next Executioner Axe strike, turning a repositioning move
into a dive-and-execute opener. <b>Visible Stigmata</b> closes the loop: it transfers up to 50 health from Golden Wyrm to an adjacent ally; upgraded,
each use also permanently grants +10 regrowth, so a Golden Wyrm that keeps healing becomes progressively harder to grind down.
</p>
<p>
Stat-wise, Golden Wyrm is the most offensively loaded of the level 7 group: #1 offense (25) and #1 defense (24) in its tier, with high energy and
second-highest initiative. Its clear weakness is endurance (25, lowest of the three), so optimal play is burst-and-reposition rather than prolonged
attrition.
</p>
</div>


<div class="div" id="unit-roles">
<h3 class="indexheader"><a href="unit-roles">Unit roles at a glance</a></h3>
<p>
<ul>
<li>Stomper: Frontline tempo anchor — delays, disrupts action order, and gets tougher to crack every round.</li>
<li>Vehemoth: High-durability control bruiser — starves enemies of endurance, freezes them, then shatters them.</li>
<li>Golden Wyrm: Aggressive finisher-support hybrid — executes weakened targets, repositions fast, and sustains allies at its own expense.</li>
</ul>
</p>
</div>

<div class="div" id="dragon-bones">
<h3 class="indexheader"><a href="dragon-bones">Dragon Bones</a></h3>
<p>
A new combat location has been carefully crafted so that we now have an even nicer variety of places to duel your opponents!
</p>
<a rel="pop" href="DragonBones.png"><img class="shadow artwork" width=100% src="DragonBones.png" title="New location: Dragon Bones" alt="location"></a>
</div>

<div class="div" id="revamps">
<h3 class="indexheader"><a href="revamps">Big revamps and fixes to existing units</a></h3>
<p>
v0.4 also spent serious effort on improving older units and inherited mechanics:
</p>
<p>
<b>Nutcase - Tentacle Bush</b> — behavior was redesigned to only trigger at end of phase instead of immediately, and stacking on the attacker was blocked: -
Before: could stack on the same creature mid-sequence, causing unreliable damage spikes. - After: consistent timing, predictable counterplay.
</p>
<p>
<b>Nutcase — War Horn</b> damage was fixed for both players, with corrected charge targeting direction for the Blue side. Nutcase was also made
immobile while inactive. Additionally, Nutcase and Cycloper were swapped in the unit progression order.
</p>
<p>
<b>Snow Bunny — Bunny Hop</b> received the new “Evading” status and a “Cryostasis” interaction effect: - Before: ability interactions in edge cases were
inconsistent and status feedback was unclear. - After: cleaner state tracking and legible status icons.
</p>
<p>
<b>Headless — Whip Move</b> received targeting and range indicator fixes that had been affecting accuracy feedback.
Seismic Stomp — upgraded-form path-trigger bugs and point-blank dual-damage issues were fixed across all units that use it, including Magma
Spawn.
</p>
<p>
The battle interface also became easier to read and use. The scoreboard was split out and polished, the turn queue received better behavior, and
hover and action feedback were improved so it is easier to follow what is happening during a match.
</p>
<p>
Gameplay presentation saw additional updates too, including clearer combat feedback, hotkey improvements, and better handling for mobile and
fullscreen play.
</p>
</div>

<div class="div" id="changes">
<h3 class="indexheader"><a href="changes">Visual and audio changes</a></h3>
<p>
Several presentation upgrades landed alongside the gameplay work. We added new ability sprites and icons, improved some upgrade sounds,
and continued reworking music support with a more useful player and refreshed track layout.
<img src="player.png" alt="player" title="Refined audio view">
</p>

<p>
Interface buttons are now way more intuitive regarding when abilities are usable or have already been used, making things way easier at a glance.
<img src="UI.jpg" alt="interface" title="Interface">
</p>

</p>
<p>
The score and portrait feedback was also made clearer, helping matches feel easier to read at a glance.
<img src="score.jpg" alt="score" title="Score screen">
</p>
</div>

<div class="div" id="multiplayer">
<h3 class="indexheader"><a href="multiplayer">Multiplayer and platform changes</a></h3>
<p>
Online multiplayer was enabled and hardened during this release cycle, with lobby and match-presence fixes helping the flow feel more
dependable.
</p>
<p>
There were also practical platform improvements, including manifest, favicon, webpack, dotenv, lint, and TypeScript maintenance. The release tag
itself, v0.4, points to a webpack watch fix that helped prevent unnecessary root-folder watching.
</p>
</div>

<div class="div" id="notable">
<h3 class="indexheader"><a href="notable">Notable issues and PR highlights</a></h3>
<p>
The v0.4 cycle closed a very large number of tracked items (over 480 according to the release notes), with major progress across gameplay, UI,
multiplayer, and tooling.
</p>
<p>
Some higher-signal examples include:
<ul>
<li>New playable creature ability delivery: Stomper abilities (PR #1718), Vehemoth basic/passive/ultimate work (PRs #1794, #1813, #1984), and
Golden Wyrm passive/ability work (PRs #1822, #1959, #1972, #1975).</li>
<li>Important ability stability fixes such as Seismic Stomp and Whip Move improvements (PRs #2075, #2080, #2099, #2121, #2097).</li>
<li>Mobile and fullscreen improvements, including prematch/scoreboard and fullscreen behavior fixes (Issue #1753 with PRs #1755 and #1767,
plus PRs #1684 and #1751).</li>
<li>Tooling and pipeline upgrades, including workflow modernization and build updates (PR #1309), webpack update for faster builds and live
rebuild support (PR #1328), and dotenv dependency updates (PR #2048).</li>
</ul>

<div class="div" id="issues">
<h3 class="indexheader"><a href="issues">Known issues</a></h3>
<p>
Ancient Beast is still a pre-alpha project, so there are rough edges and unfinished systems. If you spot bugs, broken interactions, or anything that
feels off, please report it so it can be tracked and fixed.
</p>

<p>
We beta-tested online multiplayer feature (Issue #1616, plus Nakama PRs #1765 and #1785) but it had a major bug that didn't get fixed in time, so we won't be releasing like EA did with FIFA: bug caused movement related abilities to desyncronized between players.
</p>

<p>
Over 480 issues closed, you can see list over here:
https://github.com/FreezingMoon/AncientBeast/milestone/4?closed=1
</p>
</div>

<div class="div" id="support">
<h3 class="indexheader"><a href="support">Support needed</a></h3>
<p>
This project keeps moving because of people who contribute time, feedback, artwork, code, testing, or financial support. If you want to help
Ancient Beast keep growing, please consider contributing in whatever way fits you best.
</p>
<p>
The project had about 1,162 stars on GitHub at the time of this release. If you haven’t starred it yet, now is a great time — it helps more people
find the game.
</p>
</div>

<div class="div" id="thanks">
<h3 class="indexheader"><a href="thanks">Special thanks</a></h3>
<p>
Thanks to everyone who tested, contributed, reported issues, or helped keep the project alive. Releases like this one are a mix of visible game
improvements and less visible groundwork, and both matter.
</p>
</div>

<div class="div" id="sponsors">
<h3 class="indexheader"><a href="sponsors">Thanks to our Sponsors:</a></h3>
<p><ul>
<li>https://writersperhour.com/write-my-paper</li>
<li>https://raj.bet</li>
<li>https://inkedin.com</li>
<li>https://bloodgrail.com</li>
<li>https://ebay.co.uk/usr/dreadknight666</li>
</ul></p>
Become one over here: https://opencollective.com/ancientbeast/contribute/sponsor-8022
</div>

<div class="div" id="backers">
<h3 class="indexheader"><a href="backers">Thanks to our Backers:</a></h3>
Thanks to our Backers:
<p><ul>
<li>https://zh.casinoshunter.com/online-casinos</li>
<li>https://slotsempire.com</li>
<li>https://reddogcasino.com</li>
<li>https://casino-professor.com</li>
<li>https://goread.io/buy-instagram-followers</li>
<li>https://www.igamblingsites.com</li>
<li>https://likewave.io/buy-instagram-likes</li>
<li>https://aviatorgame.guru</li>
<li>https://crash-gambling-game.com</li>
<li>https://twicsy.com/buy-instagram-likes</li>
<li>https://www.casinocanada.me</li>
<li>https://inkedin.com</li>
</ul></p>
Become one over here: https://opencollective.com/ancientbeast/contribute/backer-8021
</div>

<?php
disqus();
include('../../footer.php'); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.7/js/jquery.fancybox.min.js"></script>

<script type="text/javascript">
// Change URL to viewed image
$(document).ready(function() {
	var basePage = window.location.href.replace(/#.*/, "");
	$("a[rel=pop]").fancybox({
		'overlayColor'  : 'black',
		'openEffect'	: 'elastic',
		'closeEffect'	: 'elastic',
		'nextEffect'  : 'fade',
		'prevEffect'  : 'fade',
		'onComplete'	: function(array, index) {
			history.replaceState("", "", basePage + "#id=" + index);
		},
		'onClosed'		: function() {
			history.replaceState("", "", basePage);
		}
	});

	if (/[\#&]id=(\d+)/.test(location.hash))
		$("#img" + RegExp.$1).trigger("click");
});
</script>
