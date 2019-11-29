<?php
$goed = 0;
$fout = 0;
echo " De Hoofdsteden Quiz ";
echo PHP_EOL;
$Quiz = array(" Japan" =>"Tokyo",
"Mexico" => "Mexico City",
"USA"  => "Washington D.C",
"India" => "New Delhi",
"Zuid-Korea" => "Seoul",
"China" => "Peking",
"Nigeria" => "Abuja",
"Argentina" => "Buenos Aires",
"Egypt" => "Cairo");

foreach ($Quiz as $key => $value) {

  $ant = readline( " Wat is de Hoofdstad van " . $key . PHP_EOL );
  $a = readline ();


    if($a === $value){
    echo PHP_EOL;
    echo " Correct ";
    $goed += 1;
}

    else {
    echo PHP_EOL;
    echo " Incorrect ";
    $fout += 1;
    }
}
echo PHP_EOL;
echo " Je hebt er " . $fout . " geraden fout (⌣̩̩́_⌣̩̩̀) en " . $goed . " goed geraden! ξ\(´▽`)/ξ ";
 ?>
