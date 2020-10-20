<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Gifi & Titi">
	
	<title>Guillaume et Eugénie</title>

	<link rel="shortcut icon" href="assets/images/E_G.png">
	
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/all.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<body class="home" <style = "background-color: ##d2d5d5">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.html"><img src="assets/images/EGrose.png" height="40px" alt="Progressus HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a>Merci pour votre message</a></li>
				</ul>
			</div>
			
		</div>
	</div> 
	<!-- /.navbar -->
    
<?php
if(isset($_POST['email'])) {
    $email_to = "g.menou90+contact_mariage@gmail.com";
    $email_subject = "Reponse presence";
    $name = $_POST['nom']; // required
    $email_from = $_POST['mail']; // required
    $comewith = $_POST['accompagnants'];
    $mess = $_POST['message'];

    function clean_string($string) {
    $bad = array("content-type","bcc:","to:","cc:","href");
    return str_replace($bad,"",$string);
    }

    $email_message = "Reponse de presence.\n\n";
    $email_message .= "Nom: ".clean_string($name)."\n";
    $email_message .= "Accompagnants: ".clean_string($comewith)."\n\n";
    $email_message .= "Message: ".clean_string($mess)."\n";

// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($email_to, $email_subject, $email_message, $headers);

$mail_f = fopen('retour.txt', 'a+');
fwrite ($mail_f, "New:\r");
fwrite ($mail_f, $name);
fwrite ($mail_f, "\r");
fwrite ($mail_f, $comewith);
fwrite ($mail_f, "\r");
fwrite ($mail_f, $mess);
fwrite ($mail_f, "\r");
fwrite ($mail_f, $email_from);
fwrite ($mail_f, "\r");
fwrite ($mail_f, "\r");
fclose('mail.txt');
?>
  <!-- include your own success html here -->

  <div class="container text-center"><h2><br><br><br><br>Merci pour votre réponse, à très bientôt.</h2>
  <p><a class="btn btn-default btn-lg" role="button" href="index.html">Retour à la page d'accueil</a></p></div>

	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
    
</body>
</html>
<?php
}
?>
