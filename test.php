<?php
    require_once ("FunctionsSession.php");
    $Session = new FunctionsSession();
    if (!empty($Session->select("userCountry"))) {
         $country=$Session->select("userCountry");
    }
    else {
        $country='default';
    }
?>
<div>Страна:<?php echo $country?></div>
<a href="index.php">назад</a>
