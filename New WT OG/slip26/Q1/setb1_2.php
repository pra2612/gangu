<?php
if(isset($_GET["n"]))
{
$q=$_GET["n"];
$host = "localhost";
$port = "5432";
$dbname = "postgres";
$user = "postgres";
$password = "pc2002";
$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");
if (!$conn)
 {
    die("Connection failed: " . pg_last_error());
}

$sql="SELECT * FROM teacher WHERE tno=$q";
$result=pg_query($conn,$sql);

echo"<table border='1'>";
echo"<tr>";
echo"<th>TNO</th>";
echo"<th>TEACHERNAME</th>";
echo"<th>QUALIFICATION</th>";
echo"<th>TEACHERSALARY</th>";
echo"</tr>";
while ($row = pg_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['tno'] . "</td>";
    echo "<td>" . $row['tname'] . "</td>";
    echo "<td>" . $row['qualification'] . "</td>";
    echo "<td>" . $row['salary'] . "</td>";
    echo "</tr>";
}
echo"</table>";
}
?>