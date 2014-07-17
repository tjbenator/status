<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Status</title>
		<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
		<meta charset="utf-8">

		<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<style>
			body {
				padding-top: 60px;
			}
		</style>

		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.0-beta.15/angular.min.js"></script>
		<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
		<script src="lib/peity/jquery.peity.min.js"></script>
		<script src="js/controllers.js"></script>
	</head>
	<script>
		$.fn.peity.defaults.pie = {
		  delimiter: null,
		  diameter: 16,
		  fill: ["#ff9900", "#fff4dd", "#ffd592"],
		  height: null,
		  width: null
		}

		$.fn.peity.defaults.line = {
		  delimiter: ",",
		  fill: "#c6d9fd",
		  height: 16,
		  max: null,
		  min: 0,
		  stroke: "#4d89f9",
		  strokeWidth: 1,
		  width: 32
		}

		$.fn.peity.defaults.bar = {
		  delimiter: ",",
		  fill: ["#4d89f9"],
		  gap: 1,
		  height: 16,
		  max: null,
		  min: 0,
		  width: 32
		}
	</script>
<body>
<a href="https://github.com/tjbenator"><img style="position: fixed; top: 0; right: 0; border: 0; z-index: 10000;" src="https://camo.githubusercontent.com/a6677b08c955af8400f44c6298f40e7d19cc5b2d/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f677261795f3664366436642e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_gray_6d6d6d.png"></a>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#"><span class="bar">2,5,3,6,2,1</span>Status</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
<div class="container">
