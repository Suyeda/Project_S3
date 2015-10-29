<?php ?>
<!DOCTYPE html>
	<html>
		<head>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
			<link rel="stylesheet" href="/assets/stylesheets/landr.css">
			<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
			<script src="/assets/javascripts/landr.js"></script>
		</head>
		<body>
			<header>
				<a href="#page-top">Project S3</a>
				<div class="navs">
					 <a href="/welcome/go_mainpage">Home</a>
					 <a href="/welcome/go_success">Success</a>
				</div>
			</header>
			<div class="panel">
				<h1>Team Name</h1>
				<img id="teampic" src="assets/images/portfolio/team1.jpg" class="img-responsive" alt="">
				<h2>Recent Games</h2>
				<div id="recentgames">
					<table id="recenttable">
						<tbody>
						</tbody>
					</table>
				</div>
				<h2>Roster</h2>
				<div id="roster">
							<table id="statstable">
						<thead>
							<tr>
								<td>First Name</td>
								<td>Last Name</td>
								<td>W/L Ratio</td>
								<td>Games Played</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
						</tbody>
					</table>
				</div>
				<h2>Stats</h2>
				<div id="stats">
					<table id="statstable">
						<thead>
							<tr>
								<td>Wins</td>
								<td>Loses</td>
								<td>W/L Ratio</td>
								<td>Games Played</td>
							</tr>
						</thead>
						<tbody>
						</tbody>
					</table>
				</div>
				<button id="challenge-button">Challenge Team</button>
			</div>
		</body>
	</html>