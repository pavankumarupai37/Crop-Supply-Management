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


<body  background="images\7.jpg">
<center>
<?php								 
    
    $dbh = mysqli_connect('localhost', 'root', '') or die(mysqli_error($dbh));
    mysqli_select_db($dbh,'crops') or die(mysqli_error($dbh));
        $merchant_name = $_REQUEST['merchant_name'];
     


    $query = "DELETE FROM merchant WHERE merchant_name='$merchant_name'";
    $result = mysqli_query($dbh,$query) or die(mysqli_error($dbh));

      $var=mysqli_query($dbh,"SELECT * FROM merchant");

  echo"<table border size=1>";
  echo"<tr><th>MERCHANT NAME</th> <th>PHONE NUMBER</th> <th>ADDRESS</th></tr>";
  while ($arr=mysqli_fetch_row($var))
   {
   echo"<tr><td>$arr[0]</td><td>$arr[1]</td> <td>$arr[2]</td> </tr>";
   }
   echo"</table>";
?>
<center><a href="sbm3.html" class="button"><span>HOME</span></a></center></html>
</body>