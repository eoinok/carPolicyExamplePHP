<?php
include "CarPolicy.php";
//the following line instantiates a new CarPolicy object using the values from the Form
$thisPolicy = new CarPolicy($_POST['policyNumber'],$_POST['yearlyPremium']);
//call the setDateOfLastClaim method on the CarPolicy object to set the date of the last claim
$thisPolicy->setDateOfLastCalim($_POST['dateOfLastClaim']);
//Add in a line here to call the getDiscountedPremium() method on the $thisPolicy object and output the result to the screen using echo

?>
