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

require_once('global.php'); ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=960">
<link rel="stylesheet" href="<?php echo $site_root; ?>stylesheet.css">
<link rel="icon" type="image/png" href="<?php echo $site_root; ?>favicon.png">
<meta name="google-site-verification" content="uNVUkWjGPKwXaFK-BkOowVezLve8a8rjbM_ew1UHiZg">
<meta name="description" content="3d print your squad of creatures with unique abilities in order to defeat your enemies.">
<meta name="keywords" content="ancientbeast, ancient, beast, game, online, multiplayer, strategy, bitcoin, bets, combat, arena, chess, cards, creatures, free, open source, foss">
<meta name="author" content="Dread Knight">
<meta name="monetization" content="$pay.stronghold.co/1a15c4d9d46cdd64f9e9094a7c4f04240dc">

<?php
if (isset($style)) echo '<style type="text/css">' . $style . '</style>';
if (isset($stylesheet)) echo '<link rel="stylesheet" href="' . $stylesheet . '">';
?>

<!-- Set page title -->
<title>
<?php
$title = "Ancient Beast - ";
if (isset($page_title)) echo $title . $page_title;
else echo $title . "Turn Based Strategy Game";
?>
</title>

<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://google-analytics.com/analytics.js','ga');
ga('create', 'UA-2840181-5', 'ancientbeast.com');
ga('require', 'displayfeatures');
ga('send', 'pageview');
</script>
</head>

<body>
<!-- Title Banner -->
<header id="header">
<a href="<?php echo $site_root; ?>"><img src="<?php echo $site_root; ?>images/AncientBeast.png" height="125" width="555" alt="Ancient Beast" class="lighten"></a>

<!-- Navigation Menu -->
<nav>

<?php
// Display list of pages
$menu = array('documentation', 'multimedia', 'contribute');
echo '<nav class="center">';
foreach ($menu as &$menuItem) {
	echo '<div id='. ucfirst($menuItem) . ' style="display: inline-block;" class="lighten"><a href="/' . $menuItem . '/"><div class="button" style="background-image: url(' . $site_root . 'images/push_button.png);">' . ucfirst($menuItem) . '</div></a></div>';
}
echo '</nav>';

// This div serves as an anchor
echo '<div id="focus"></div>';
?>

<!-- Focus on content when clicking subpage again -->

</nav>
</header>

<!-- Main Area -->
<div id="scroll"><a href="#"><img src="<?php echo $site_root; ?>images/AB.gif" height="32" width="32" alt="top" style="padding-bottom: 4px;"></a></div>
<div id="wrapper">