<?php 
header('Content-Type: image/jpeg');
require __DIR__ . '/vendor/autoload.php';
use Endroid\QrCode\QrCode;
$qrCode = new QrCode($_GET['text']);
$qrCode->setSize(200);
echo $qrCode->writeString();
die;
?>