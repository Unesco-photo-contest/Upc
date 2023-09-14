<? php.
if(isset($_POST['data']))
{
$data=$_POST['data'];
$fp = fopen('data.txt', 'a');
fwrite($fp, $data);
fclose($fp);
}
