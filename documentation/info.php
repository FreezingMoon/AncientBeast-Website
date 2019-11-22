<?php include 'features.php'; ?>

<div class="div">
<div id="info"><a href="#info"><h3 class="center">Info</h3></a></div><br>
<p><b>Ancient Beast</b> is a turn based strategy indie game project, played against other people (or bots) in hot-seat or online modes, featuring a wide variety of units to acquire and put to good use in order to defeat all your opponents in battle. This project was carefully designed to be easy to learn, fun to play and hard to master.</p>
<p>This article is meant to provide a detailed view on the project by providing information about the game design elements along with thoughts regarding various design decissions and at times even technical information.<br>You can think of it as the game's manual. It can serve both players who want to know more in-depth details about the game's mechanics or possible contributors who wish to better understand the whole mindset.</p>
</div>

<div class="div">
<div id="vision"><a href="#vision"><h3 class="center">Vision</h3></a></div><br>
<p>Some might argue that the chess of the future is... chess, but I think it's been around for too long and besides having a lot of design flaws, it doesn't do too well with current trends anymore and things will get even worse. I want Ancient Beast to spread like a virus and be the chess of the future: basically the default way of battling someone virtually by using strategy while not having to deal with any chance based factors or game elements.</p>
<p>The perfect esport. The game is very accessible and playable for free, without enforcing any Pay-to-Play or Pay-to-Win elements, as I personally hate such shovelware games that try to milk whales while also making all the common players feel handicaped. The video game industry is in a very dark place at the moment and I want to break the mold. Development takes a huge about of time and requires wearing lots of hats, so I can't do it alone.</p>

<p>The code and the assets are open source and even if you can't draw or program, there are lots of other ways you can contribute, like donating money, providing feedback or simply spreading out the word especially considering that marketing is damn expensive and we don't have a real budget.
I'm also not too happy with the free graphical resources you can find online, so we're generating high quality content that can be used in other projects, Ancient Beast basically being the reverse of Super Smash Bros Brawl, having lots of original characters that are constantly showing up in other cool games, some which might hopefully be even yours.</p>
</div>

<div class="div">
<div id="synopsis"><a href="#synopsis"><h3 class="center">Synopsis</h3></a></div><br>
Everything has a duality. I'm not a religious person but I believe in Him and I came to the conclussion that God and the Devil are the same person, two sides of the same coin. And it is said that He created us in His image, meaning we're capable of both good and evil. And the same goes for everything we make as well. Every single invention that benefit the human kind also lead to suffering and massacres. Now we face a new era, the 3rd industrial revolution, thanks to 3d printers, which allow us to make pretty much anything we can image, house hold objects, action figures, chess pieces, weapons, vehicles, buildings, organs and now even living creatures. We are living in a fantasy world where anything is possible. The average person has a lot of power in his hands, but not enough wisdom to put it to good use. Not a very comfortable thought for a good night's sleep, is it?
</div>

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
		<img src="../images/hand.png" width="400" height="387" class="image lighten" title="Ancient Beast to the fullest!" alt="hand">
	</div>
</div>

<div class="div">
<div id="combat"><a href="#combat"><h3 class="center">Combat</h3></a></div><br>

<p>
<b>Units</b><br>
<!-- TODO: remove the adventure map and Dread Knight references -->
There are 7 realms based on the 7 Deadly Sins, each one having 7 level of units that come in 3 different sizes, small (1 hexagon), medium (2 hexagons) and large (3 hexagons), usually the lower level ones being cuter and smaller, while gradually becoming larger and creepier to the higher end of the spectre. Each player is represented on the combat field by a special unit called the Dark Priest, that is able to make use of a scarce resource called plasma, using it to shield himself from harm and to materialize units in order to defeat all others who oppose him. Each materialized unit has a plasma cost, which is equal to this formula: unit level + unit size = plasma cost. There are no unit stacks and each unit is unique, only being materialized once by every player during a battle. The number under an unit depicts its remaining health if within a rectangle or the remaining shield if within an capsule, representing a number of hits the specific unit can take before actually being vulnerable.
Killed units drop specific items that occupy their first hexagon, restoring health and or energy to other units that pick them; you can see the efficiency of a drop by hovering it and looking at the current unit's life and energy bar. Each unit has 4 abilities: a passive which can't be triggered manually, but might be in effect permanently or when certain conditions are met, a basic attack which is usually melee and affects a single adjacent hexagon, sometimes even having a special effect, a basic ability and an ultimate ability which is usually very powerful and can change the outcome of the battle. Active abilities usually require energy and sometimes even health. Each can be used once per round, with exceptions. Materialized units suffer from sickness, meaning they don't act the 1st turn and can't recover health or energy. There is no magic so there aren't any spell books, but thanks to their abilities, units can be used as spell pages, thought everything they're capable of doing can be explained by science, their bodies or the gear they may use.
</p>
</div>

<div class="div">
<div id="stats"><a href="#stats"><h3 class="center">Stats</h3></a></div><br>

<p>
Each unit has 9 statistics, being some of the main traits that define it's role on the combat field, for reference they're each explained when hovered the unit cards, but I'll explain them over here as well in way more detail.
</p>
<p>
<u>Health</u> - the amount of hitpoints an unit currently has, it's displayed under each unit in a rectangle; if an unit drops under 1, it dies, dropping an item if setting enabled. Corpses don't actually remain on the combat field.
</p>
<p>
<u>Regrowth</u> - after taking damage, units are able to heal themselves more or less each round provided they're not fatigued. Some units don't last very long in the line of fire, requiring constant breaks in order to refill.
</p>
<p>
<u>Endurance</u> - each round an unit can take a limited amount of damage and still be able to regenerate health and energy. The remaining amount is displayed in the interface, under the avatars of the queued units.
</p>
<p>
<u>Energy</u> - pretty much all abilities require some energy in order to be performed, the specific amount can be seen when hovering an ability or simply by selecting one provided it's usable from the current location and all its other requirements are met, the amount the ability will drain being indicated in the energy bar.
</p>
<p>
<u>Meditation</u> - an unit can recover some energy points as well each round, provided it's not fatigued. Even though most abilities can be used only once per turn, it's not very likely that all abilities can be used every turn, especially if the unit constantly gets fatigued. Make sure to shield your marksman units with tankier ones.
</p>
<p>
<u>Initiative</u> - this defines the position of the unit in the queue, higher level units being able to act faster during a round. Units that didn't act can choose to delay turn, being able to act at the end of the around along with the other units that delayed. The slowest unit can't delay if no other unit delayed before. When it comes to units with identical initiative stats, the older units gets to act first. Heroes tend to act based on player number at first, unless delaying, skipping or being influced by buffs or debuffs when their turn to act comes.
</p>
<p>
<u>Offense</u> - influences the output damage. If an ability performs area of effect damage and it hits multiple hexagons of a medium or large unit, then the damage will be higher, but not doubled or trippled.
</p>
<p>
<u>Defense</u> - is responsible for damage reduction. Larger units can take amplified damage from abilities that have an area of effect, by basically having a percentage of their defense being ignored, so be aware of this.
</p>
<p>
<u>Movement</u> - each unit can move a certain amount of hexagons every turn. It can do so in multiple actions performed and even before, in between and after using abilities. There are also abilities that can affect the mobility of the unit without requiring movement points, so make sure you use them to position strategically.
</p>
</div>

<div class="div">
<div id="masteries"><a href="#masteries"><h3 class="center">Masteries</h3></a></div><br>
<p>
There are 9 common types of damages that can be either reduced or amplified, provided the specific unit has one or more abilities involving that mastery: pierce, slash, crush, shock, burn, frost, poison, sonic and mental.
</p>
<p>
The defense and offense stats are generic when it comes to reduction or amplifications, like the following formula shows: ability damage + attack damage * (offense stat of the attacker - defense stat of the attacked unit / number of hexagons hit + source stat of attacker - source stat of defender) / 100. Minimum damage is 1.
</p>
<p>
There is also a rare type of Pure damage that can't be reduced. Both stats and masteries can be affected by abilities, hovering on each one in the unit cards ingame will display a list of the buffs and debuffs affecting it.
</p>
</div>

<!-- TODO: talk about winning, dark priests (?), pick-ups and score modifiers -->
</div>

<div class="div">
<div id="references"><a href="#references"><h3 class="center">References</h3></a></div><br>
I've always preferred multiplayer games that have high replayability rather then playing a lot of games that only revolve around the single player modes. I don't really bother playing the latest and "greatest" AAA titles out there, but I constantly research game design and study a lot of game titles in various ways, like watching Let's Plays, watching buddies play them or reading / watching reviews. I've played quite a bit of turn based strategy games, mobas, beat'em'ups, shooters and real time strategies over the years. Even if my favorite platform was essentially the NES, these types of games except beat'em'ups and tbs' don't really cut it on it (or being played with game pads), but I kinda felt that some of them lacked a bit of soul since they were less about bringing people physically together, to play face-to-face, except for Chess, which on the other hand, feels rather dull and outdated when being played on a device, even a missuse of modern hardware if you ask me, which applies to a lot of Collectible / Trading Card Games (CCG/TCG), usually played by old people in parks, while online you tend to not even see your opponent's face, chances being you're actually not playing against a real person, but a bot pretending to be one.
HoMM3, Disciples 2, Dota, Age of Wonders 2, League of Legends, Heroes of Newerth, Chess
</div>

<div class="div">
<div id="input"><a href="#input"><h3 class="center">Input</h3></a></div><br>
The goal is to have the game run smoothly on as many devices as possible, regardless of hardware and operating system, by keeping it lightweight and cross-platform. It's designed to work right from any modern web-browser, <a href="http://www.google.com/chrome/" target="_blank"><b>Google Chrome</b></a> being the recommended choice. Ancient Beast is developed using only native languages and web technologies, totally avoiding the need of installing any binaries or plug-ins. Also, every single asset of the website and of the game itself is carefully optimized in order to save time, bandwidth, disk space and memory.<br>
However, there will be binaries available for android / iOS devices in order to save bandwidth and speed up the game when we're talking slow internet speed, but also allowing for offline play as well.
</div>
//casual (touch screen) vs hardcore (mouse + keyboard), no time limit or long turns vs very short / fast turns<br>
<div class="div">
<div id="input"><a href="#input"><h3 class="center">Input</h3></a></div><br>
The game was carefully designed to be playable with pretty much any modern or future device / controller.<br>

//explain why it's nicely design<br>
//and how each input device works<br>
Implemented<br>
mouse - you don't even need to click any of the UI in order to play fast<br>
keyboard - the game is fully playable with just hotkeys, even if lacking a mouse<br>
(combination) - when playing from a desktop PC, it's ideal to have a mouse + keyboard combo<br>
gamepad - one having a d-pad ideally, since it will help a lot targeting stuff on the hex grid<br>
touchscreen (monitor, smart TV, Microsoft Surface) - the game was designed with them in mind, so the interface is very touch friendly, same goes for the gameplay<br>
smartphone - mainly being used as a controller (in the future, for playing AB directly as well, requires optimizations, panning/zooming, bigger screen/phablet = better, also resolution tweaks, gameplay somewhat too long for phone compared to casual games) for when playing on a smart TV in Arcade mode, especially along with other people, as it makes it easy to log-in all the players if having the controller app preinstalled<br>
tablet<br>
<br>
Brainstorm<br>
voice commands - easy targeting because of the grid coordinate system, similar to chess, if the desktop or smart TV is missing a microphone, this input method could be executed from the smartphone app<br>
hand gestures - there are already smart TVs that replaced the remote as the main interaction mode, removing it completely, so that you won't have to remember where you put it anymore<br>
mind control - control the game in a similar fashion to how Dark Priests control their unit using their Psyhelmets, by using a mind control helmet that reads certain brain waves and associates them to specific in-game actions<br>
Augmented Reality (seeing the units in front of you and moving them with your hands)<br>
Virtual Reality (being on the combat field yourself)
</div>
