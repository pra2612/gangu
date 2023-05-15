  <?php
session_start();
if(isset($_SESSION['cnt']))
{
  $_SESSION['cnt']+=1;
}
else
{
$_SESSION['cnt']=1;
}
echo "you have visited the page".$_SESSION['cnt']."times";
echo "<a href=a5_a1.php> click here</a>";
?>
