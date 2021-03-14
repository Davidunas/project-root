<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>GUPISTAR</title>
	<link rel="stylesheet" href="<?= base_url('assets/countdown/style.css') ?>">
	<link rel="icon" href="<?= base_url('assets/countdown/Gupi Star V 1.0.png') ?>" sizes="16x16">
</head>

<body>
	<div id="clock">
		<img src="<?= base_url('assets/countdown/Gupi Star V 1.0.png') ?>" alt="gupi" width="150px" height="150px"">
        <P class=" guppi">WWW.GUPISTAR.COM</P>
		<p class="guppi">13 March 2021, 10.00 WIB</p>
		<p class="time" id="time"></p>
		<p class="text" id="text">COMMING SOON ...</p>
	</div>
	<script>
		// Set the date we're counting down to
		var countDownDate = new Date("March 13, 2021 10:00:00").getTime();
		// Update the count down every 1 second
		var x = setInterval(function() {

			// Get today's date and time
			var now = new Date().getTime();

			// Find the distance between now and the count down date
			var distance = countDownDate - now;

			// Time calculations for days, hours, minutes and seconds
			var days = Math.floor(distance / (1000 * 60 * 60 * 24));
			var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			var seconds = Math.floor((distance % (1000 * 60)) / 1000);

			// Display the result in the element with id="time"
			document.getElementById("time").innerHTML = days + "d " + hours + "h " +
				minutes + "m " + seconds + "s ";

			// If the count down is finished, write some text
			if (distance < 0) {
				clearInterval(x);
				setTimeout(() => {
					window.location.href = "<?= base_url('homepage'); ?>";
				}, 1500);

				// document.getElementById("time").innerHTML = "IS COMING";
				// document.getElementsByName("text").style.display = "block";
				document.getElementById("time").innerHTML = "IS COMING";
				document.getElementById("text").innerHTML = "";
				// setTimeout(function(){ window.location.href = "index2.html"; }, 5000);
			}
		}, 1000);
	</script>

</body>

</html>