<!DOCTYPE html>

<head>

<title> Analytics </title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>

</head>

<body>

<h3><b><center> Analytics Service </h3></b></center>

<div class="container">
<div class="row">

  <div class="column"> 
 
  <table id="ttt">
	<tr>
	<th class = "tab"> Celsius </th>
	</tr>

  <?php

$conn = mysqli_connect("mysql","root","root","temps");

if($conn-> connect_error){
  die("Failed Connection: " . $conn-> connect_error); 
 }
 
$sql = "SELECT * from temperatures";
$result = $conn-> query($sql);

if($result-> num_rows > 0){
  while($row = $result-> fetch_assoc()){
    echo "<tr><td>". $row["celsius"]. "</td></tr>";
  }
  echo "</table>";
}
else{
   echo "0 result";
}

$conn-> close();
?>

<script>
            var table = document.getElementById("ttt"), minVal;
            for (var i=1; i<table.rows.length; i++)
            {
                if(i ===1) {minVal = table.rows[i].cells[0].innerHTML;}
                else if(minVal > table.rows[i].cells[0].innerHTML)
                {
                    minVal = table.rows[i].cells[0].innerHTML;
                }
            }
            console.log(minVal);
         
        </script>


  </div>
</div>
</div>

</body>

</html>