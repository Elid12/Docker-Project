<DOCTYPE! html>

<html>

<head>
	<title> Enter Data - Web App </title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

<style>
	body
	{
		background-color: #FAF0E6;
	}

	forTable
	{
		margin-left:425;
	}
</style>

</head>

<body>

<!-- link to analytics service site--->
<nav class="navbar navbar-expand-lg">
<ul class="navbar-nav ml-auto">
<li class="nav-item active">
	<a class="nav-link" href="analytics.php"> Analytics Service </a>
</li>
</ul>
</nav>

	<div class="container">
	<p>

	<b><h3><center> Enter Data - Web App </b></h3></center>
	<p>

	<div class="table text-center">

	<i><h5> Insert as many temperatures you want in Celsius </i></h5>
	<p>

	<form class = "form-inline" action = "enterCelsius.php" method = "POST">
	<div class="form-group">

	<forTable>
	<input type="number" class="form-control" placeholder="C" name="celsius">
	<button type="submit" class="btn btn-primary">  Submit </button>
        </forTable>

	</form>
	</div>
	</div>
	</div>	  
</body>

</html>