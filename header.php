<!DOCTYPE html>
<html>
	<head>
		<title>Status</title>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.0-beta.15/angular.min.js"></script>
		<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="lib/peity/jquery.peity.min.js"></script>
	</head>
	<script>
		$.fn.peity.defaults.pie = {
		  delimiter: null,
		  diameter: 32,
		  fill: ["#ff9900", "#fff4dd", "#ffd592"],
		  height: null,
		  width: null
		}

		$.fn.peity.defaults.line = {
		  delimiter: ",",
		  fill: "#c6d9fd",
		  height: 32,
		  max: null,
		  min: 0,
		  stroke: "#4d89f9",
		  strokeWidth: 1,
		  width: 64
		}

		$.fn.peity.defaults.bar = {
		  delimiter: ",",
		  fill: ["#4d89f9"],
		  gap: 1,
		  height: 32,
		  max: null,
		  min: 0,
		  width: 64
		}
	</script>
<body>
