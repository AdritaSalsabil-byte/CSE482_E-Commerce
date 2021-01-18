<?php
function conectionStart()
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecom_site";
$connection = mysqli_connect($servername, $username, $password,$dbname);
return $connection;
}
function conectionEnd($value)
{
mysqli_close($value);
}
function fetch($value=' ')
{
$connection = conectionStart();
$sql = "SELECT * FROM products WHERE product_title LIKE '%".$value."%' OR
product_img LIKE '%".$value."%' OR product_price LIKE '%".$value."% '";
$result = mysqli_query($connection, $sql);
if($result) {

echo "<table border=1>";
echo "<tr>";
echo "<th>product_id</th>";
echo "<th> product_title</th>";
echo "<th> product_price</th>";
echo "</tr>";
while ($row = mysqlI_fetch_assoc($result)) {
echo "<tr>";
echo "<td>".$row['product_id']."</td>";
echo "<td>".$row['product_title']." </td>";
echo "<td>".$row['product_price']."</td>";
echo "</tr>";
}
echo "</table>";
} else {
echo "Error :".$sql."<br>".mysqli_error($connection);
}
conectionEnd($connection);
}
if (isset($_GET['search'])) {
fetch($_GET['search']);
}

?>
