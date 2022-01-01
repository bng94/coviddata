<?php

    $file="githubnyc-covid19-data.csv";
    file_put_contents( $file, 
    file_get_contents('https://raw.githubusercontent.com/nychealth/coronavirus-data/master/totals/by-boro.csv'));
    
    $csv= file_get_contents($file);
    $array = array_map("str_getcsv", explode("\n", $csv));
    $json = json_encode($array);
    print_r($json);

?>