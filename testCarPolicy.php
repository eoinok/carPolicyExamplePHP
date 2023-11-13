<?php
date_default_timezone_set('Europe/Dublin');
include("CarPolicy.php");

$myCarpolicy = new CarPolicy("XM123456", 450);

$myCarpolicy->setDateOfLastClaim("2015-10-10");

echo "years no claims: " . $myCarpolicy->getTotalYearsNoClaims();


?>