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

<body background="images\4.jpg">
<center>
<?php								 
    
    $dbh = mysqli_connect('localhost', 'root', '') or die(mysqli_error($dbh));
    mysqli_select_db($dbh,'crops') or die(mysqli_error($dbh));
        $crop_name = $_REQUEST['crops_name'];
        $land_name = $_REQUEST['land_name'];
        $quantity_grown = $_REQUEST['quantity'];
        

    $query = "UPDATE crop SET land_name='$land_name',quantity_grown='$quantity_grown' WHERE crop_name='$crop_name'";
    $result = mysqli_query($dbh,$query) or die(mysqli_error($dbh));

   $var=mysqli_query($dbh,"SELECT * FROM crop");

  echo"<table border size=1>";
  echo"<tr><th>CROP NAME</th> <th>LAND NAME</th> <th>QUANTITY GROWN</th></tr>";
  while ($arr=mysqli_fetch_row($var))
   {
   echo"<tr><td>$arr[0]</td><td>$arr[1]</td> <td>$arr[2]</td> </tr>";
   }
   echo"</table>";
?>
<p align="down"><center><a href="sbm2.html" class="button"><span>HOME</span></a></center>
</html>
</body>