<?php
$ch = curl_init();
// curl_setopt($ch,CURLOPT_URL, "http://www.muster.tech/users.php");
curl_setopt($ch,CURLOPT_URL, "http://localhost/includes/users.php");

curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$productList =  json_decode(curl_exec($ch),true);
echo count($productList);

//print_r($productList);

echo "<h2>Muster Users</h2>";
echo "<table class=\"table table-striped\">
  <thead>
    <tr>
     
      <th scope=\"col\">First Name</th>
      <th scope=\"col\">Last Name</th>
      
    </tr>
  </thead>
  <tbody>";

foreach ($productList as $product){

   echo "<tr><td>$product[0]</td><td>$product[1]</td></tr>";
   /* foreach ($product as $item){

        echo $item."\t";
    }*/
}

echo "</tbody> </table> </div>";
//echo $productList[1];
?>