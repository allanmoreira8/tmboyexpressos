<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="iso-8859-1">
	<title>Teste de email</title>
</head>
<body>
<?php
  header('Content-Type: text/html; charset=iso-8859-1');
	$server = $_SERVER[HTTP_HOST];
	if (isset($_REQUEST['to'])) {
		$to = $_REQUEST['to'];
		$subject = "Teste de email";
		$message = "Esta mensagem indica o funcionamento do teste de email.";
		$headers = 'From: Enviado da conta: ' . $server . "\r\n" .
		'Reply-To: reply-to@' . $server . "\r\n";
		mail($to, $subject, $message);
		echo "A mensagem foi enviada para $to com sucesso.";
	} else {
?>
<h1>Teste de email de <?php echo $server ?></h1>
<section>
	<form method="post" action ="<?php basename(__FILE__) ?>">
		<label for="to">Endereço de email</label>
		<input name="to" type="email" placeholder="seu@email.aqui" size="30" required>
		<button type="submit" name="php-submit">Testar</button>
	</form>
</section>
<p>O email pode levar <em>alguns minutos</em> para chegar na sua caixa de entrada,<br> verifique também no <strong>lixo eletrônico/spam</strong>.</p>
<?php } ?>
</body>
</html>