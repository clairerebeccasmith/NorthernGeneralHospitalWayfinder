<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--<link rel = "stylesheet" type="text/css" href="css/StyleSheet.css">-->
	<!--<link href="css/tablet.css" media="only screen and (min-width:700px) and (max-width:1199px)" rel= "stylesheet" type="text/css">
	<link href="css/desktop.css" media="only screen and (min-width:1200px)" rel="stylesheet" type="text/css">-->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link href="css/custom.css" rel="stylesheet" type="text/css">
	<title> NHS WayFinder </title>
</head>

<body>
<header>
	<img src="images/nhs_logo.jpg" alt="nhs logo"><a href="https://www.nhs.uk/pages/home.aspx"></a>
<div class="headerText">
	<h1>Northern General Hospital</h1>
</div>
	<form>
		<input type= "text" name = "location" value="">
		<input type="submit" value="Search">
	</form>

</header>

		<!--<input type = "text" id = "inputbox" value = "">
		<button onclick = "getName()"> Find Name</button>

		<br>
		<br>
		<br>
	  -->
		<div class="container-fluid">
		<div class = "row">
			<div class = "col-sm-3">
				<div class="box">
		<h2>Select your starting location:</h2>
		<div class = "dropDown">
		<select name = "dropdownboxstart" id= "dropdownboxstart"></select>
	</div>
	</div>
	</div>
		<div class = "col-sm-3">
		<h2>Select your destination:</h2>
		<div class = "dropDown">
		<select name = "dropdownboxend" id = "dropdownboxend"></select>
	</div>
	</div>

<<<<<<< HEAD
<div class="col-sm-3">
=======
	<br>
		<div class = "box">
		<form action="">
		<h2>Would you like to avoid staircases?</h2> <input type="checkbox" name = "disabled" checked=false>
		</form>
		</div>

<div class="box">

>>>>>>> 97bdffbeb4e4a10c05e1dbd8ab7edac5f1551e89
<div class="findPath">
		<form action="directions.html">
			<input id="start" name="start" type="hidden" value="" />
			<input id="end" name="end" type="hidden" value="" />
			<input id="disabled" name="disabled" type="hidden" value=""/>
<<<<<<< HEAD
</div>
		<!--<button class = "button" onclick = "setValuesForBoxes()"> Find Path </button>-->
<div class="col-md-4">
		<button class = "button" onclick = "findPath()"> Find Path </button>
=======

		<button class = "button" onclick = "setValuesForBoxes()"> Find Path </button>

		<!--<button class = "button" onclick = "findPath()"> Find Path </button>-->
>>>>>>> 97bdffbeb4e4a10c05e1dbd8ab7edac5f1551e89
		</form>
		</div>
	</div>
</div>
</div>
</div>
</body>

<script src="Script.js"></script>

</html>
