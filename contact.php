
<?php

$eposta = strip_tags($_POST['eposta']);
$konu = strip_tags($_POST['konu']);
$mesaj = strip_tags($_POST['mesaj']);
$human = intval($_POST['human']);

if ($human == 3) {
if (isset($_GET['islem'])) {
	
	if ($_POST['eposta']<>'' && $_POST['konu']<>'' && $_POST['mesaj']<>'') {

	require_once("class.phpmailer.php");

	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->CharSet = 'UTF-8';
	$mail->ContentType="text/html";
	$mail->Host = "mail.fatihyildizli.com";
	$mail->Port = 587;
	$mail->SMTPAuth = true;
	$mail->Username = "admin@fatihyildizli.com";
	$mail->Password = "######";
	$mail->From = "admin@fatihyildizli.com";
	$mail->Fromname = $_POST['isim'];
	$mail->AddAddress("admin@fatihyildizli.com","Mail gönderimi");
	$mail->Subject = $_POST['konu'];
	$mail->Body ="<b>Gönderen Email: </b>" . $_POST['eposta'] . "</br><b><center>Mesaj İçeriği</center></b></br>" .$_POST['mesaj'];
  
    

	if(!$mail->Send())
	{   
	   echo '<font color="#F62217"><b>Gönderim Hatası: ' . $mail->ErrorInfo . '</b></font>';
	   exit;
	}
	

		echo "	<script type=\"text/javascript\">\n";
echo "setTimeout(\"window.location = 'http://www.fatihyildizli.com/'\", 0);\n";
echo "alert(\"Mesajınız Gönderildi...\");\n";
echo "</script>";

	}
	}   else if($human !== 3) { 
		echo "	<script type=\"text/javascript\">\n";echo "setTimeout(\"window.location = 'http://www.fatihyildizli.com'\", 0);\n";echo "alert(\"Lütfen Tüm Alanları Doldurunuz.\");\n";echo "</script>";
	}
}
?>
