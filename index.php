<?php
session_start();
$cin=$_POST['cin'];
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['form_name']) && $_POST['form_name'] == 'signupform')
{
session_start();
    if($_POST['captcha']==$_SESSION['code']){
	header('Location: ?cin='.$cin);
	exit;             
          }
		  else{
	header('Location: ?err=1');
	exit;    
		  }


}



$cin1=$_GET['cin'];
$err=$_GET['err'];
if ( $err == 1 ){
	$print = "ERROR CODE !";
}
$db = mysqli_connect('localhost', 'root', '', 'haythem');
$results = mysqli_query($db, "SELECT * FROM user where cin = '$cin1'");
while ($row = mysqli_fetch_array($results)) {
$print ="<h6> Student no:".$row['nom']."<br></h6>
<h6>  Name:".$row['prenom']."<br></h6>
<h6> Surname:".$row['email']."<br></h6>
<h6> Document: ".$row['tel']."<br></h6>
<h6> Issue date:".$row['adresse']."<br></h6>
<h6>  Confirmation Code: ".$row['cin']." </h6>";

}
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CIU Document Confirm</title>
<link href="Untitled1.css" rel="stylesheet">
<link href="index.css" rel="stylesheet">
</head>
<body>
<div id="Layer1" style="position:relative;text-align:center;width:100%;height:670px;float:left;clear:left;display:block;z-index:13;">
<div id="Layer1_Container" style="width:970px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
<div id="wb_signupform" style="position:absolute;left:281px;top:42px;width:406px;height:303px;z-index:5;">
<form name="signupform" method="post" action="<?php echo basename(__FILE__); ?>" accept-charset="UTF-8" id="signupform">
<input type="hidden" name="form_name" value="signupform">
<input type="submit" id="signup" name="signup" value="Verify/Doğrula" style="position:absolute;left:140px;top:302px;width:105px;height:36px;z-index:0;">
<input type="text" id="Editbox1" style="position:absolute;left:-200px;top:84px;width:800px;height:28px;z-index:1;" name="cin" value="" spellcheck="false">
<input type="text" id="Editbox2" style="position:absolute;left:-200px;top:259px;width:800px;height:28px;z-index:2;" name="captcha" value="" spellcheck="false">
<div id="wb_Text1" style="position:absolute;left:78px;top:25px;width:254px;height:42px;z-index:3;">
<span style="color:#000000;font-family:'Bookman Old Style';font-size:17px;">CIU Document Verification<br>UKÜ Doküman Doğrulama</span></div>
<div id="wb_Captcha1" style="position:absolute;left:135px;top:137px;width:240px;height:58px;z-index:4;">
<img src="securitecode.php" alt="Click for new image" title="Click for new image" style="cursor:pointer;float:left;width:250px;height:100px; ">
<span></span></div>
</form>
</div>
<div id="wb_Text2" style="position:absolute;left:56px;top:409px;width:659px;height:22px;z-index:6;">
<span style="color:#000000;font-family:Arial;font-size:19px;"><?php echo $print; ?></span></div>

</div>
</div>

</body>
</html>