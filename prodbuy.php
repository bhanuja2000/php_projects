<?php

include('db.php');

$Pagename="Buy Product";
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";
echo "<title>".$pagename."</title>";
echo "<body>";
echo "<h4>".$pagename."</h4>";
$productid=$_GET['u_prod_id'];
$SQL="select prodId, prodName,prodDescripShort, prodPicNameSmall,prodPrice from Product where prodId='$productid'";

$exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error($conn));

$arrayp=mysqli_fetch_array($exeSQL);

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
    echo "<button type='button' style='background-color: #4CAF50; color: white; padding: 10px 20px; border: none; border-radius: 8px; cursor: pointer;'>Buy</button>";

    echo "</td>";

    echo "</tr>";

?>