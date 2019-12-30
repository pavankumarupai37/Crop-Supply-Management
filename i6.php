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


<body background="images\12.jpg">
<center>
<?php								 
    
    $dbh = mysqli_connect('localhost', 'root', '') or die(mysqli_error($dbh));
    mysqli_select_db($dbh,'crops') or die(mysqli_error($dbh));

	$name = $_REQUEST['shop'];
        $address = $_REQUEST['quantity'];
        $crop = $_REQUEST['crop'];
        $quantity = $_REQUEST['quantity'];
        $payment = $_REQUEST['payment'];

    $query = "INSERT INTO shop VALUES ('$name', '$address', '$crop', '$quantity','$payment')";
    $result = mysqli_query($dbh,$query) or die(mysqli_error($dbh));
    echo "Shop Data Inserted Successfully!!!";




   $var=mysqli_query($dbh,"SELECT * FROM shop");

  echo"<table border size=1>";
  echo"<tr><th>SHOP NAME</th> <th>ADDRESS</th> <th>CROP NAME</th> <th>QUANTITY</th> <th>PAYMENT RECEIVED</th></tr>";
  while ($arr=mysqli_fetch_row($var))
   {
   echo"<tr><td>$arr[0]</td><td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td></tr>";
   }
   echo"</table>";
?>
<center><a href="sbm6.html" class="button"><span>HOME</span></a></center></body></html>
