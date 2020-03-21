  if($getsprice == "" && $getprice != ""){
    if ($currency == in_array($currency, $cekindo['indo'])) {
      $waprice = $_price." : *" . $currency . " " . number_format($getprice, 0, ",", ".") . "* %0A";
    } else {
      $waprice = $_price . " : *" . $currency . " " . number_format($getprice) . "* %0A";
    }
    $btprice = $getprice;
  }else if($getsprice != ""){
    if ($currency == in_array($currency, $cekindo['indo'])) {
      $waprice = $_price." : *" . $currency . " " . number_format($getsprice, 0, ",", ".") . "* %0A";
    } else {
      $waprice = $_price . " : *" . $currency . " " . number_format($getsprice) . "* %0A";
    }
    $btprice = $getsprice;
  }else if ($getsprice == "") {
    $waprice = "";
    $btprice = "";
  }






    if ($getprice == 0) {
  } else {        
  if ($currency == in_array($currency, $cekindo['indo'])) 
  { echo $currency . " " . number_format($getprice, 0, ",", ".");}
  else 
  { echo $currency . " " . number_format($getprice);}




    if ($uuptime > 00) {
      $exp = date ('m');
        if ($exp == "01") { $expired = "Februari"; }
        if ($exp == "02") { $expired = "Maret"; }
        if ($exp == "03") { $expired = "April"; }
        if ($exp == "04") { $expired = "Mei"; }
        if ($exp == "05") { $expired = "Juni"; }
        if ($exp == "06") { $expired = "Juli"; }
        if ($exp == "07") { $expired = "Agustus"; }
        if ($exp == "08") { $expired = "September"; }
        if ($exp == "09") { $expired = "Oktober"; }
        if ($exp == "10") { $expired = "November"; }
        if ($exp == "11") { $expired = "Desember"; }
        if ($exp == "12") { $expired = "Januari"; }
       $waexp = "Expired: " . date ('d') . "." . $expired . "." . date ('Y') . "-" . $adcomment;
     } else {
      $waexp = "Expired: " . " " . $uuptime;
     }



  if ($uuptime > 00) {
      $exp = date ('m');
        if ($exp == "01") { $expired = "Februari"; }
        if ($exp == "02") { $expired = "Maret"; }
        if ($exp == "03") { $expired = "April"; }
        if ($exp == "04") { $expired = "Mei"; }
        if ($exp == "05") { $expired = "Juni"; }
        if ($exp == "06") { $expired = "Juli"; }
        if ($exp == "07") { $expired = "Agustus"; }
        if ($exp == "08") { $expired = "September"; }
        if ($exp == "09") { $expired = "Oktober"; }
        if ($exp == "10") { $expired = "November"; }
        if ($exp == "11") { $expired = "Desember"; }
        if ($exp == "12") { $expired = "Januari"; }
       $waexp = "Expired: " . "." . $expired . "." . date ('Y') . "-" . $adcomment;
     } else {
      $waexp = "Expired: " . " " . $uuptime;
     }