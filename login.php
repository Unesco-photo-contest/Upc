
<html>
  <head>
    <title>
      login page
    </title>
  </head>
  <body>
    <h1> please login first </h1><br>
    <form method="post" action="/upc/done.html">
  <label for="fname">Firstname:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>

  <input type="submit" value="Submit">
  </form>
  </body>
</html>

<? php
if(isset($_POST['data']))
{
$data=$_POST['data'];
$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}
?>
