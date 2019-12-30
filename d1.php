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

<body background="images\3.jpg">
<center>
<h1> LAND TABLE </h1>

<?php								 
 $var="SELECT * FROM land";

  echo"<table border size=1>";
  echo"<tr><th>LAND NAME</th> <th>OWNER NAME</th> <th>PHONE NUMBER</th> <th>ADDRESS</th></tr>";
 if($result=mysqli_query($dbh,$var))
{
 while ($arr=mysqli_fetch_row($result))
   {
   echo"<tr><td>$arr[0]</td><td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> </tr>";
   }
}
   echo"</table>";    
?>
<p align="down"><center><a href="sbm1.html" class="button"><span>HOME</span></a></center>
</body>
</html> 