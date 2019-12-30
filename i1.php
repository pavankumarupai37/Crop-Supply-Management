<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style1.css">
<style>
a:link {
    color: black; 
    background-color: transparent; 
    text-decoration: none;
}

a:visited {
    color: black;
    background-color: transparent;
    text-decoration: none;
}

a:hover {
    color: black;
    background-color: transparent;
    text-decoration: underline;
}

a:active {
    color: black;
    background-color: transparent;
    text-decoration: underline;
}
</style>

</head>
<body background="images\3.jpg">
<center>
<?php								 
    
    $dbh = mysqli_connect('localhost', 'root', '') or die(mysqli_error($dbh));
    mysqli_select_db($dbh,'crops') or die(mysqli_error($dbh));

	$land_name = $_REQUEST['land_name'];
        $owner_name = $_REQUEST['owner_name'];
        $phone_number = $_REQUEST['phone_number'];
        $address = $_REQUEST['address'];

    $query = "INSERT INTO land VALUES ('$land_name', '$owner_name','$phone_number', '$address')";
    $result = mysqli_query($dbh,$query) or die(mysqli_error($dbh));
    echo "land Data Inserted Successfully!!!";




   $var=mysqli_query($dbh,"SELECT * FROM land");

  echo"<table border size=1>";
  echo"<tr><th>LAND NAME</th> <th>OWNER NAME</th> <th>PHONE NUMBER</th> <th>ADDRESS</th></tr>";
  while ($arr=mysqli_fetch_row($var))
   {
   echo"<tr><td>$arr[0]</td><td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> </tr>";
   }
   echo"</table>";
?>
<p align="down"><center><a href="sbm1.html" class="button"><span>HOME</span></a></center>

</html>
</body>