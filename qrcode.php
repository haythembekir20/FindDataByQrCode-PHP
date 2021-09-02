<?php
$cin=$_GET['cin'];
require_once 'phpqrcode/qrlib.php';
$path='images/qrcode/';
$file = $path.uniqid().".png";
$text .="http://sis-ciu-edu.com//index.php?cin=";
$text .= $cin;
QRcode::png($text,$file);
$image="<img src='".$file."' id='Image1' alt='' >";

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Validation</title>
<link href="Untitled1.css" rel="stylesheet">
<link href="qrcode.css" rel="stylesheet">
</head>
<body>
<div id="wb_Image1" style="position:absolute;left:325px;top:132px;width:320px;height:320px;z-index:0;">
<?php echo $image; ?></body>
</html>