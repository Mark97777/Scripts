<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	
	
    <title>Hello, world!</title>
  </head>

	<body onmousemove="reset_interval()" onclick="reset_interval()" onkeypress="reset_interval()" onscroll="reset_interval()">

	
	<h2>Session expiry system</h2>
	<p class = "lead">Powered by JavaScript</p>
	
	
	<script type="text/javascript">
	function set_interval(){
	  //the interval 'timer' is set as soon as the page loads
	  window.myInterval = setInterval("auto_logout()",10000);
	  
	  // the figure '10000' above indicates how many milliseconds the timer be set to.
	  //Eg: to set it to 5 mins, calculate 5min= 5x60=300 sec = 300,000 millisec.So set it to 3000000
	}
	
	// calling the set_interval timer first
	set_interval();

	function reset_interval(){
	  //resets the timer. The timer is reset on each of the below events:
	  // 1. mousemove   2. mouseclick   3. key press 4. scroliing
	  //first step: clear the existing timer
	  clearInterval(window.myInterval);
	  //second step: implement the timer again
	 setInterval("set_interval()",10000);
	  //completed the reset of the timer
	  clearInterval(window.myInterval);
	}

	function auto_logout(){
	  //this function will redirect the user to the logout script
	  window.location="logout-page.html";
	}
	</script>
	
	
	</body>
	
	</html>