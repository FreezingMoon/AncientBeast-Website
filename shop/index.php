<?php
$page_title = "Shop";
$style = "
.small { display: inline-block; width: 128px; height: 128px; }
.title { font-weight: bold; }
.extra { display: inline-block; float: right; vertical-align: font-weight: bold; }
.description { display: inline-block; vertical-align: top; margin-left: 10px; width: 745px; text-align: justify;}
";
require_once("../header.php"); ?>

<!-- Hightlight active page -->
<script>document.getElementById("<?php echo $page_title; ?>").className += " active";</script>

<div class="div">
	<h3 class="center">Coming Soon</h3>
This game has no pay-to-win elements and it will stay like this. From this shop you will be able to soon purchase various items in order to support the project, such as physical merchandise, access to extra content (which will not give you any advantages over other opponents), training sessions and tickets to the monthly tournaments.
</div>

<div class="center" id="focus">
	<div style="display: inline-block;" class="lighten">
		<a href=""><img src="stickers.jpg" class="frame frame-top">
		<div class="frame frame-bottom">Stickers</div></a>
	</div>
	<div style="display: inline-block;" class="lighten">
		<a href=""><img src="t-shirts.jpg" class="frame frame-top">
		<div class="frame frame-bottom">T-Shirts</div></a>
	</div>
	<div style="display: inline-block;" class="lighten">
		<a href=""><img src="plushies.jpg" class="frame frame-top">
		<div class="frame frame-bottom">Plushies</div></a>
	</div>
	</div>
</div>

<?php include("../footer.php"); ?>
