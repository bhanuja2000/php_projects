<?php 
include("db.php");


$pagename="Make your home smart";
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";
echo "<title>".$pagename."</title>";
echo "<body>";
include ("headfile.html");
echo "<h4>".$pagename."</h4>";

$SQL="select prodId, prodName,prodDescripShort, prodPicNameSmall,prodPrice from Product";

$exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error($conn));

echo "<table style='border: 0px'>";

while ($arrayp=mysqli_fetch_array($exeSQL)){
    echo "<tr>";
    echo "<td style='border: 0px'>";
    echo "<a href=prodbuy.php?u_prod_id=".$arrayp['prodId'].">";
    echo "<img src=images/".$arrayp['prodPicNameSmall']." height=200 width=200>";
    echo "</a>";
    echo "</td>";
    echo "<td style='border: 0px'>";
    echo "<p><h5>".$arrayp['prodName']."</h5>";
    echo "<p><h5>".$arrayp['prodDescripShort']."</h5>";
    echo "<p><h5>$".$arrayp['prodPrice']."</h5>";
    echo "</td>";

    echo "</tr>";

}
echo "</table>";
include ("footfile.html");
echo "</body>";

?>