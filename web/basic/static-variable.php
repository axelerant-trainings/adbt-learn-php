<?php

// Static variable.


function getTotalProducts() {

  static $complexcalculation = FALSE;
  if ($complexcalculation == FALSE) {
    $complexcalculation = count(fetchExternalProducts());
  }

  echo "Total products: $complexcalculation<br />";
}


function fetchExternalProducts(){
  echo __FUNCTION__ . " called..<br />";

  // $api_key = 'AXEL7890123456';
  // On an average say callToExternalApi() takes 0.5 seconds to respond.
  // $products = callToExternalApi($api_key);
  $fetched_products = [
    'a',
    'b',
    'c',
    'd',
    'n',
  ];

  return $fetched_products;
}




echo getTotalProducts();
echo getTotalProducts();
echo getTotalProducts();
echo getTotalProducts();
