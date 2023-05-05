<DOCTYPE! html>

<html>

<head>

<title>Log In</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

<div class="container">
<div class="row">

<div class="col-sm-4">
<div class="left-col"></div>
</div>

<div class="col-sm-4">
<div class="table text-center">

<form action = "enterData.php" method = "POST">
<div class="form-group">
<input type="text" class="form-control" placeholder="Email" name="email">
</div>

<div class="form-group">
<input type="password" class="form-control" placeholder="Password" name="password">
</div>

<button type="submit" class="btn btn-primary btn-block"> Σύνδεση</button>

</form>

</div>

</div>


</div>
</div>

</body>

</html>