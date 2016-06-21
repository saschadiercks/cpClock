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
?>

<!DOCTYPE html>
<html dir="ltr" lang="de">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>__Inpu Title__</title>
	<meta name="description" content="description" />
	<meta name="keywords" content="keywords" />
	<?php require_once 'modules/framework/head-meta.php'; ?>

	<style media="screen">
	.hand {
		background-color: #000;
		position: absolute;
		transform-origin: 50% 0;
		top: 50%;
		left: 50%;
	}
	#hand-hours {
		height: 120px;
		width: 10px;
		<?php echo 'transform: rotate('.$handHours.'deg) translateY(-100%)'; ?>
	}
	#hand-minutes {
		height: 240px;
		width: 10px;
		<?php echo 'transform: rotate('.$handMinutes.'deg) translateY(-100%)'; ?>
	}
	#hand-seconds {
		height: 240px;
		width: 2px;
		<?php echo 'transform: rotate('.$handSeconds.'deg) translateY(-100%)'; ?>
	}

	#clockface {
		border: 1px solid #ccc;
		border-radius: 99em;
		margin: auto;
		position: relative;
		height: 500px;
		width: 500px;
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
						<div class="hand" id="hand-hours"></div>
						<div class="hand" id="hand-minutes"></div>
						<div class="hand" id="hand-seconds"></div>
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
