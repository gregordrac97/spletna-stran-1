<!DOCTYPE html>
<html>
<head>
<title>GD PROJECTS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<style>
* {
	box-sizing: border-box;
}

/* Style the body */
body {
	font-family: arial;
	margin: 0;
	padding: 0;
}

/* Style the screens */
@media screen and (max-width: 992px) {
	body {
		background-color: blue;
		color: black;
	}
}

@media screen and (max-width: 600px) {
	body {
		background-color: olive;
		color: black;
	}
}

/* Head/logo Title */
.header {
	padding: 60px;
	text-align: center;
	background: #1abc9c;
	color: white;
}

/* Style the top navigation bar */
.navbar {
	display: flex;
	background-color: #333;
}

/* Style the navigation bar links */
.navbar a {
	color: white;
	padding: 14px 20px;
	text-decoration: none;
	text-align: center;
	display: block;
	overflow: hidden;
	border-right: 1px solid white;
}

/*Change color on hover */
.navbar a:hover {
	background-color: black;
	color: white;
}

/*Style the socialmedia icons */
.navbar i {
	color: white;
	font-size: 20px;
}

/* Column container */
.row {
	display: flex;
	flex-wrap: wrap;
}

/* Create two unequal colums that sits next to each other */
/* Sibedar/left column */
.side {
	flex: 30%;
	background-color: #f1f1f1;
	padding: 20px;
}

/* Main column */
.main {
	flex: 70%;
	background-color: white;
	padding: 20px;
}

/* Fake image, jusrt for this example */
.fakeimg {
	background-color: #aaa;
	width: 100%;
	background: #ddd;
}

/*STYLE FOR NEWS */
.news {
	background-color: red;
	overflow: hidden;
	list-style-type: none;
	margin: 0;
	padding: 0;
}

.news a {
	display: block;
	padding: 14px 20px;
	text-decoration: none;
	color: yellow;
}

.news a:hower {
	background-color: black;
	color: white;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
	.row, .navbar {
		flex-direction: column;
	}
}
</style>
</head>
<body>

<!-- Header -->
<div class="header">
	<h1><a>GD PROJECTS</a></h1>
</div>


<!-- Navigation bar -->
<div class="navbar">
	<a href="htmltest_miha.php"><i class="fas fa-home"></i></a>
	<a href="about-me.html">About me</a>
	<a href="portfolio.html">Portfolio</a>
	<a href="projects.html">Projects</a>
	<a href="https://www.facebook.com/gregor.drac.1"><i class="fab fa-facebook-square"></i></a>
	<a href="https://www.instagram.com/gregordrac97/"><i class="fab fa-instagram"></i></a>
</div>


<!-- The flexible grid (content) -->
<div class="row">
	<div class="side">
		<h2>News</h2>
		<div class="news"><a href="https://www.devex.com/news">DEVEX</a></div>
		<hr>

		<hr>

		</div>
		<div class="main">
		<h2>WELCOME</h2>

		<p>Welcome to my website.</p>
		<br>
		<h2>HOME</h2>
		<h5>Title description, jan 30, 2019</h5>
		</div>
	</div>


</div>

</body>
</html>