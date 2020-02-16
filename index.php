<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>KAMI</title>
	<link rel="stylesheet" href="themes/aa.min.css" />
	<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
	<link rel="stylesheet" href="themes/jquery.mobile.structure-1.4.5.min.css" />
	<script src="themes/jquery-1.11.1.min.js"></script>
	<script src="themes/jquery.mobile-1.4.5.min.js"></script>
</head>

<body>
	<div data-role="page" data-theme="a">
		<div data-role="header" data-position="inline">
			<h1>KAMI</h1>
		</div>
		<div data-role="content" data-theme="a">
			<center>
				<h3>KAMI <small>Kampus Sukabumi</small></h3>
				<small>Username : admin Password : admin</small>
			</center>
		</div>

		<div data-role="main" class="ui-content">
			<form method="post" action="kontrol/pros-login.php" data-ajax="false">


				<label for="username">Username : <span>*</span></label>
				<input type="text" name="username" id="username" placeholder="Username...">

				<label for="password">Password: <span>*</span></label>
				<input type="text" id="password" name="password" placeholder="Password..." />

				<button type="submit">Login</button>
				<!-- <input type="submit" data-inline="true" value="Login" data-theme="b"> -->

			</form>
		</div>

	</div>
</body>

</html>