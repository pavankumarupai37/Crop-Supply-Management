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

<body  background="images\12.jpg">
<center>
<?php								 
    
    $dbh = mysqli_connect('localhost', 'root', '') or die(mysqli_error($dbh));
    mysqli_select_db($dbh,'crops') or die(mysqli_error($dbh));
             


    $query = "DELETE FROM godown ";
    $result = mysqli_query($dbh,$query) or die(mysqli_error($dbh));

      $var=mysqli_query($dbh,"SELECT * FROM godown");

  echo"<table border size=1>";
  echo"<tr><th>CROP NAME</th> <th>MERCHANT NAME</th> <th>QUANTITY STORED</th> <th>RENT PAID</th></tr>";
  while ($arr=mysqli_fetch_row($var))
   {
   echo"<tr><td>$arr[0]</td><td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> </tr>";
   }
   echo"</table>";
?>
<center><a href="sbm4.html" class="button"><span>HOME</span></a></center></html>
</body>