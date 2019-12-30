<?php								 
    
    $dbh = mysqli_connect('localhost', 'root', '') or die(mysqli_error($dbh));
    mysqli_select_db($dbh,'crops') or die(mysqli_error($dbh));
?>
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
<h1> CROP TABLE </h1>

<?php								 
 $var="SELECT * FROM crop";

  echo"<table border size=1>";
  echo"<tr><th>CROP NAME</th> <th>LAND NAME</th> <th>QUANTITY GROWN</th></tr>";
 if($result=mysqli_query($dbh,$var))
{
 while ($arr=mysqli_fetch_row($result))
   {
    echo"<tr><td>$arr[0]</td><td>$arr[1]</td> <td>$arr[2]</td> </tr>";   }
}
   echo"</table>";    
?>
<p align="down"><center><a href="sbm2.html" class="button"><span>HOME</span></a></center>
</body>
</html> 