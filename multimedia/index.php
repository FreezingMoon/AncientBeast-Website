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

// Display default or selected page
$id = isset($_GET['id']) ? $_GET['id'] : 'Multimedia';
$style = '
.bigger { font-size: 28px; color: #e6e6e6; }
.artwork { height: 200px; margin: 5px; }
.screenies { width: 285px; margin: 5px; }
.wallpapers { width: 435px; margin: 5px; }
';
require_once "../header.php";

// Display list of subpages
$sections = array(
	'artwork',
	'models',
	'screenshots',
	'wallpapers',
	'videos',
	'tracks'
);

if ($id != 'Multimedia') { ?>
	<nav class="div center" id="navigation">
		<ul class="sections">
		<?php
		foreach ($sections as &$sectionItem) {
			echo '<li style="display: inline;"><a href="?id=' . $sectionItem . '"  id="' . $sectionItem . '" style="padding:2em;">' . ucfirst($sectionItem) . '</a></li>';
		}
	}
	?>
	</ul>
</nav>

<script>
// Set page title
document.title = "Ancient Beast - <?php echo ucfirst($id); ?>";

// Hightlight page
document.getElementById("Media").className += " active";
</script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.7/css/jquery.fancybox.min.css" media="screen">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<?php
switch($id) {
	default:
		?>
		<div class="center">
			<div style="display: inline-block;" class="lighten">
				<a href="?id=artwork"><img src="<?php echo $site_root; ?>images/squares/artwork.jpg" class="frame frame-top">
				<div class="frame frame-bottom">Browse Artwork</div></a>
			</div>
			<div style="display: inline-block;" class="lighten">
				<a href="?id=models"><img src="<?php echo $site_root; ?>images/squares/models.jpg" class="frame frame-top">
				<div class="frame frame-bottom">Unit Models</div></a>
			</div>
			<div style="display: inline-block;" class="lighten">
				<a href="?id=screenshots"><img src="<?php echo $site_root; ?>images/squares/screenshots.jpg" class="frame frame-top">
				<div class="frame frame-bottom">Gameplay Screenshots</div></a>
			</div>
			<div style="display: inline-block;" class="lighten">
				<a href="?id=wallpapers"><img src="<?php echo $site_root; ?>images/squares/wallpapers.jpg" class="frame frame-top">
				<div class="frame frame-bottom">Desktop Wallpapers</div></a>
			</div>
			<div style="display: inline-block;" class="lighten">
				<a href="?id=videos"><img src="<?php echo $site_root; ?>images/squares/videos.jpg" class="frame frame-top">
				<div class="frame frame-bottom">Project Videos</div></a>
			</div>
			<div style="display: inline-block;" class="lighten">
				<a href="?id=tracks"><img src="<?php echo $site_root; ?>images/squares/tracks.jpg" class="frame frame-top">
				<div class="frame frame-bottom">Sound Tracks</div></a>
			</div>
		</div>
		<?php
		break;

	case 'artwork':
		$images = scandir("artwork");
		natsort($images);
		$i = 0;
		echo '<div class="div center">';
		foreach($images as $image) {
			if($image == "." || $image == "..") continue;
			$title = substr($image, 0, -4);
			$title = str_replace('_', ' ', $title);
			echo '<a id="img' . $i . '" rel="pop" href="artwork/' . $image . '" title="' . $title . '"><img class="shadow artwork" src="artwork/' . $image . '" title="' . $title . '" alt="' . $image . '"></a>';
			$i++;
		}
		echo '</div>';

		$images = scandir("fanart");
		natsort($images);
		$i = 0;
		echo '<div class="div center">';
		foreach($images as $image) {
			if($image == "." || $image == "..") continue;
			$title = substr($image, 0, -4);
			$title = str_replace('_', ' ', $title);
			echo '<a id="img' . $i . '" rel="pop" href="fanart/' . $image . '" title="' . $title . '"><img class="shadow artwork" src="fanart/' . $image . '" title="' . $title . '" alt="' . $image . '"></a>';
			$i++;
		}
		echo '</div><div class="div center">Post your fan art in the <a href="#comments"><b>comments</b></a> section or upload it to the <a href="http://Ancient-Beast.deviantArt.com" target="_blank"><b>deviantArt</b></a> group. The best works will be featured!</div>';
		disqus();
		break;

	case 'models':
		?>
		<!-- Sketchfab embedded folder -->
		<div class="div center">
			<iframe width="890" height="995" src="https://sketchfab.com/playlists/embed?folder=3629b9ff802d45f09771ec13a7d25c75" frameborder="0" allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" onmousewheel=""></iframe>
		</div>
		<?php
		disqus();
		break;

	case 'screenshots':
		echo '<div class="div center">';
		$images = scandir("screenshots");
		natsort($images);
		$images = array_reverse($images);
		$i = 0;
		foreach($images as $image) {
			if($image == "." || $image == "..") continue;
			$title = substr($image, 0, -4);
			echo '<a id="img' . $i . '" rel="pop" href="screenshots/' . $image . '" title="' . $title . '"><img class="shadow screenies" src="screenshots/' . $image . '" title="' . $title . '" alt="' . $image . '"></a>';
			$i++;
		}
		echo '</div>';
		disqus();
		break;

	case 'wallpapers':
		echo '<div class="div center">';
		$images = scandir("wallpapers");
		natsort($images);
		$i = 0;
		foreach($images as $image) {
			if($image == "." || $image == "..") continue;
			$title = substr($image, 0, -4);
			echo '<a id="img' . $i . '" rel="pop" href="wallpapers/' . $image . '" title="' . $title . '"><img class="shadow wallpapers" src="wallpapers/' . $image . '" title="' . $title . '" alt="' . $image . '"></a>';
			$i++;
		}
		echo '</div>';
		disqus();
		break;

	case 'videos':
		?>
		<div class="div center">
		<iframe frame-top width="880" height="495" src="http://www.youtube.com/embed/videoseries?list=PLC179DAED0274E304" frame frame-topborder="0" allowfullscreen></iframe frame-top></div>
		<div class="div center" id="gameplay">
		<iframe frame-top width="880" height="495" src="http://www.youtube.com/embed/videoseries?list=PLADfTwuzK0YQG6rKWImoeKlpVZy9dj_XI" frame frame-topborder="0" allowfullscreen></iframe frame-top></div>
		<div class="div center" id="clips">
		<iframe frame-top width="880" height="495" src="//www.youtube.com/embed/videoseries?list=PLADfTwuzK0YR-qoT0Dy6o3AGAoNCq1Y3R" frame frame-topborder="0" allowfullscreen></iframe frame-top></div>
		<?php break;

	case 'tracks':
		?><div class="div center"><img src="band.jpg"><?php
		$folders = array('..', '.');
		$media = array_values(array_diff(scandir("../game/deploy/music"), $folders));
		natsort($media);
		$i = 0;
		$error = 'Your browser does not support the audio element.';

		echo '<audio id="audio" preload="auto" controls="" style="width:890px;"><source src="' . $site_root . 'game/deploy/music/' . $media[0] . '"> '. $error
			.'</audio><a style="cursor: pointer;" id="mp_shuffle">Shuffle</a><ul id="playlist" style="list-style-type:none; padding-left:0px;">';

		foreach($media as $file){
			$title = substr($file, 0, -4);
			$file = str_replace(' ', '%20', $file);
			if($title!="") echo '<li><a href="' . $site_root . 'game/deploy/music/' . $file . '">' . $title . '</a></li>';
			$i++;
		} ?>
		</ul>
		</div><div class="div center">Click on a track to start playing it. Let us know which are your favorite ones by leaving a comment bellow.</div>
		<?php disqus(); ?>
		<script type="text/javascript" src="../game/src/music.js"></script>
<?php
}
echo "</div></div>";
include('../footer.php'); ?>

<!-- Highlight active subpage -->
<script>document.getElementById("<?php echo $id; ?>").className += " active";</script>

<!-- Focus on content when clicking subpage again -->
<script>document.getElementById("<?php echo $id; ?>").href += "#focus";</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.7/js/jquery.fancybox.min.js"></script>

<script type="text/javascript">
// Change URL to viewed image
$(document).ready(function() {
	var basePage = window.location.href.replace(/#.*/, "");
	$("a[rel=pop]").fancybox({
		'overlayColor'  : 'black',
		'openEffect'	: 'elastic',
 		'closeEffect'	: 'elastic',
 		'nextEffect'	: 'fade',
 		'prevEffect'	: 'fade',
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
