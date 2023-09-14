<? php
if(isset($_GET['data']))
{
$data=$_GET['data'];
echo $data;
$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}
?>

<html>
  <head>
    <title>
      done page
    </title>
  </head>
  <body>
    <h1> please login first </h1><br>
  </body>
</html>
