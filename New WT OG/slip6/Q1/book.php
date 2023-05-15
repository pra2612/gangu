<?php
$xml=simplexml_load_file('book.xml') or die("can not load");
echo"BOOK DETAILS<br>";
echo"<table border='1'>";
echo"<tr><th>bid</th><th>bname</th><th>author</th><th>publication</th><th>price</th></tr>";
foreach($xml->Book as $a)
{
echo "<tr>";
echo"<td>".$a['bid']."</td>";
echo "<td>".$a->bname."</td>";
echo "<td>".$a->author."</td>";
echo "<td>".$a->publication."</td>";
echo"<td>".$a->price."</td></tr>";
}
echo"</table>";


?>
