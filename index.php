<?php

 $asin = $_GET['sku'];

$keyword = $_GET['key'];


$qid = time();

$url = "https://www.amazon.in/{$keyword}/s?k={$keyword}&rh=p_78%3A{$asin}&qid={$qid}&";

// $url = "https://www.amazon.in/dp/{$asin}/?keywords=".urlencode($keyword)."&qid={$qid}";
header("location: {$url}"); 

?>

<!--<form action="index.php" method="get" target="_blank">-->

<!--<input type="text" name="sku" />-->

<!--<input type="text" name="key"  />-->

<!--<input type="submit" name="submit" />-->
<!--</form> -->