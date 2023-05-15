<?php
$dom=new DomDocument();
$dom->load("movie.xml");
echo "<b>movies title</b><br>";
$t=$dom->getElementsByTagName("title");
foreach($t as $node)
{
	print $node->textContent;
	echo "<br>";
}
echo "<b>actor name</b><br>";
$t1=$dom->getElementsByTagName("actor");
foreach($t1 as $node)
{
	print $node->textContent;
	echo "<br>";
}
?>