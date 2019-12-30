<html><head>
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


<body background="images\10.jpg">
<center>
<?php								 
    
    $dbh = mysqli_connect('localhost', 'root', '') or die(mysqli_error($dbh));
    mysqli_select_db($dbh,'crops') or die(mysqli_error($dbh));

	$number = $_REQUEST['vehicle_number'];
        $crop_name = $_REQUEST['crop_name'];
        $loaded = $_REQUEST['quantity_loaded'];
        $d_o_l = $_REQUEST['d_o_l'];
        $d_o_u = $_REQUEST['d_o_u'];
    $query = "INSERT INTO transport VALUES ('$number', '$crop_name', '$loaded', '$d_o_l','$d_o_u')";
    $result = mysqli_query($dbh,$query) or die(mysqli_error($dbh));
    echo "Transport Data Inserted Successfully!!!";




   $var=mysqli_query($dbh,"SELECT * FROM transport");
  
echo"<table border size=1>";
  echo"<tr><th>VEHICLE NUMBER</th> <th>CROP NAME</th> <th>QUANTITY LOADED</th> <th>DATE OF LOADING</th> <th>DATE OF UNLOADING</th></tr>";
  while ($arr=mysqli_fetch_row($var))
   {
   echo"<tr><td>$arr[0]</td><td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td></tr>";
   }
   echo"</table>";
?>
<center><a href="sbm5.html" class="button"><span>HOME</span></a></center></body></html>
