<?php
	// Set timezone and get current time
	date_default_timezone_set('Europe/Berlin');
	$currentTime = array(
		'hours' => date(g),
		'minutes' => date(i),
		'seconds' => date(s)
	);

	// set degrees for timevalues to position handles
	$degreeHours = 360/12;
	$degreeMinutes = 360/60;
	$degreeSeconds = 360/60;

	// set handles to display current time
	$handHours = $degreeHours * $currentTime[hours];
	$handMinutes = $degreeMinutes * $currentTime[minutes];
	$handSeconds = $degreeSeconds * $currentTime[seconds];

	// TODO: Sync minutes amd seconds
	// TODO: improve initial-position of hour-hand
?>

<!DOCTYPE html>
<html dir="ltr" lang="de">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Fragments / Clock</title>
	<meta name="description" content="Clock - an analog clock built with PHP/CSS" />
	<meta name="keywords" content="clock, php, css" />
	<?php require_once 'modules/framework/head-meta.php'; ?>

	<style media="screen">
		body { text-align: center; }

		@keyframes rotate {
			100% { transform: rotateZ(360deg); }
		}

		.hand {
			background-color: #000;
			position: absolute;
			transform-origin: 0 0;
			top: 50%;
			left: 50%;
		}
		.hand-container {
			height: 100%;
			width: 100%;
			position: absolute;
		}

		.hand-container.seconds { animation: rotate 60s		infinite steps(60); }
		.hand-container.minutes { animation: rotate 3600s 	infinite steps(60); }
		.hand-container.hours   { animation: rotate 43200s	infinite linear; }

		#hand-hours {
			height: 33%;
			width: 2%;
			<?php echo 'transform: rotate('.$handHours.'deg) translate(-50%,-100%)'; ?>
		}
		#hand-minutes {
			height: 45%;
			width: 2%;
			<?php echo 'transform: rotate('.$handMinutes.'deg) translate(-50%,-100%)'; ?>
		}
		#hand-seconds {
			height: 45%;
			min-width: 1px;
			width: .4%;
			<?php echo 'transform: rotate('.$handSeconds.'deg) translate(-50%,-100%)'; ?>
		}

		#clockface {
			background-color: #f7f4f4;
			background-image: url("assets/images/clockface.svg");
			border-radius: 99em;
			margin: auto;
			position: relative;
			height: 300px;
			width: 300px;
		}
	</style>
</head>

<body id="index">
	<div class="wrapper">
		<?php require_once 'modules/framework/header.php'; ?>

		<div class="inner">

			<main role="content">
				<h1>Clock</h1>


				<div id="clock-analog">
					<div id="clockface">
						<div class="hand-container hours">
							<div class="hand" id="hand-hours"></div>
						</div>
						<div class="hand-container minutes">
							<div class="hand" id="hand-minutes"></div>
						</div>
						<div class="hand-container seconds">
							<div class="hand" id="hand-seconds"></div>
						</div>
					</div>
				</div>

				<div id="clock-digital">
					<h2>current time</h2>
					<?php
						echo $currentTime[hours].':'.$currentTime[minutes].':'.$currentTime[seconds];
					?>
				</div>
			</main>
		</div>

		<?php require_once 'modules/framework/footer.php'; ?>
	</div><!-- /.wrapper -->

	<?php require_once 'modules/framework/javascript.php'; ?>
</body>
</html>
