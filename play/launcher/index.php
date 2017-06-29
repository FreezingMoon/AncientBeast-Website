<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width">

		<title>Ancient Beast</title>
		<meta name="description" content="Ancient Beast is a turn based strategy indie game project.">

		<style>
		html, body {
			width: 100%;
			height: 100%;
			margin: 0;
			padding: 0;
			overflow: hidden;
			border: 0;
		}
		#bar {
			background: black;
			text-align: center;
			width: 100%;
			height: 25px;
			position: relative;
			padding-top: 7px;
			z-index: 2;
			user-select: none;
		}

		a {
			text-decoration: none;
			font-weight: bold !important;
			font-family: Verdana, Arial, sans-serif;
			font-size: .9em !important;
			padding: 2px 7px !important;
			cursor: pointer;
			border-radius: 4px;
			border: 1px solid #d3d3d3;
			color: #555555;
			background: linear-gradient(to bottom, rgba(255, 255, 255, 1) 0%, rgba(241, 241, 241, 1) 50%, rgba(225, 225, 225, 1) 51%, rgba(246, 246, 246, 1) 100%);

		}
		a:hover { background: white; color: black; }

		iframe {
			width: 100%;
			height: 100%;
			box-sizing: border-box;
			border: 0;
			padding-top: 32px;
			position: absolute;
			z-index: 1;
			display: block;
			top: 0;
		}
		</style>
	</head>
	<body>
		<div id="bar">
			<a href="https://AncientBeast.com" target="_blank">AncientBeast.com</a>
			<a href="https://www.facebook.com/AncientBeast" target="_blank">Facebook</a>
			<a href="https://www.twitter.com/AncientBeast" target="_blank">Twitter</a>
			<a href="https://www.paypal.me/AncientBeast" target="_blank">Donate</a>
			<a onclick="if(confirm('Reset Game?')) var ifr=document.getElementsByName('game')[0]; ifr.src=ifr.src;">Reset</a>
			<a onclick="requestFullScreen()">Fullscreen</a>
		</div>
		<iframe id="game" name="game" src="https://play.AncientBeast.com" seamless allowFullScreen></iframe>
	</body>
</html>

<script src="fullscreen.js"></script>
