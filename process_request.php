<?php

include "send_mail.php";

$friendliness = $_POST['friendliness'];
$orderProcessing = $_POST['orderProcessing'];
$productKnowledge = $_POST['productKnowledge'];
$qualityOfAdvice = $_POST['qualityOfAdvice'];
$staffResponsiveness = $_POST['staffResponsiveness'];
$complainProcessing = $_POST['complainProcessing'];
$trainingQuality = $_POST['trainingQuality'];
$qualityOfProducts = $_POST['qualityOfProducts'];
$overallQuality = $_POST['overallQuality'];

echo "Waiting to send email please wait..";

$to = "coolmarch.net@gmail.com";
$nameto = "Coolmarch";
$subject = "\nSurvey Results - ".date("yyyy-mm-dd");
$message = "\nFriendliness: ".$friendliness;
$message+= "\nOrder Processing: ".$orderProcessing;
$message+= "\nProduct Knowledge: ".$productKnowledge;
$message+= "\nQuality of Advice: ".$qualityOfAdvice;
$message+= "\nStaff Responsiveness: ".$staffResponsiveness;
$message+= "\nComplain Processing: ".$complainProcessing;
$message+= "\nTraining Quality: ".$trainingQuality;
$message+= "\nQuality of Products: ".$qualityOfProducts;
$message+= "\nOverall Quality: ".$overallQuality;

$altmess="You cannot view this";

sendmail($to, $nameto, $subject, $message, $altmess);
echo "Email Sent";

?>