<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- Bootstrap Latest compiled and minified CSS -->
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>

		<!-- Optional Bootstrap theme -->
		<link type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" rel="stylesheet"/>

		<!-- LINK TO YOUR CUSTOM CSS FILES HERE -->
		<link type="text/css" href="./css/styles.css" rel="stylesheet"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script type="text/javascript" src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
		<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.12.1/additional-methods.min.js"></script>

		<!-- Latest compiled and minified Bootstrap JavaScript, all compiled plugins included -->
		<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="./js/functions.js"></script>

		<title>JavaScript Example(s)</title>
	</head>
	<body>
		<div class="container">
			<header>
				<div class="col-md-12">
					<h1>Javascript Demo</h1>
				</div>
			</header>
			<main>
				<div class="row">
					<div class="col-md-6">
						<h2>Tier II</h2>
						<ul>
							<li>
								<p>Find & Replace</p>
								<p><input id="find" type="text" name="find" value="" placeholder="find"/></p>
								<p><input id="replace" type="text" name="replace" value="" placeholder="replace"/></p>
								<p><button class="btn" onclick="findAndReplace();">Replace</button></p>
							</li>
						</ul>
						<h2>Tier III</h2>
						<ul>
							<li>
								<p>Shuffle Words</p>
								<p><button class="btn" onclick="arrayShuffle();">Shuffle</button></p>
							</li>
						</ul>
						<h2>Tier IV</h2>
						<ul>
							<li>
								<p>Angular User Selection</p>
								<p><input type="text" name="angularSearch" placeholder="VOID"/></p>
								<p><button class="btn" onclick="#">Select</button></p>
							</li>
						</ul>
					</div>
					<div class="col-md-6">
						<p id="demoText">
							Clavius, one of the moon's largest craters, was home to a base on the moon that could independently
							support human life. Many of the technologies developed during the cold war had been harnessed to
							create this technologically advanced environment. When Floyd reaches the Base, he is greeted by
							Ralph Halvorson, the man who oversees this area of the moon. They defer heading immediately to the
							briefing room in order to chat in his office. Halvorson explains that the moon dwellers are troubled
							by the secrecy surrounding TMA-1. They then head off to the briefing, Floyd eager to find out more
							about TMA-1.
							<br />
							<br />
							Floyd conveys the president's thanks to the staff for their hard work and emphasizes the importance
							of secrecy until the facts are ascertained. Dr. Michaels begins his demonstration, showing a
							picture of Tycho, another moon crater. He then explains that in conducting a magnetic survey of
							the area, they discovered a disturbance there, Tycho Magnetic Anomoly One (TMA-1). A team of
							excavators was sent to the area and eventually unearthed a large, smoothly cut, black slab. At
							first, Michaels explains, it was thought that this might be related to the Chinese. But, he
							continues, they have now learned that this slab predates humans. It is three million years old
							and the first known sign of intelligent life.
						</p>
					</div>
				</div>
			</main>
			<footer>

			</footer>
		</div>
	</body>
</html>