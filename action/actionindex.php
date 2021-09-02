<?php
$db = mysqli_connect('localhost', 'root', '', 'haythem');


$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['surname'];
$adresse=$_POST['adresse'];
$city=$_POST['city'];
$tel=$_POST['tel'];
$cin=$_POST['cin'];
$zip=$_POST['zip'];



mysqli_query($db, "INSERT INTO `user`(`nom`, `prenom`, `adresse`, `email`, `cin`, `city`, `tel`, `zip`) VALUES ('$nom', '$prenom', '$adresse', '$email', '$cin', '$city', '$tel', '$zip');"); 
        header('location: ../qrcode.php?cin='.$cin);

?>