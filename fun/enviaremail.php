<?php
header('Content-Type: text/html; charset=iso-8859-1');
$para = "tmboy@tmboyexpressos.com.br";
$nome = $_POST['nome'];
$email = $_POST['mail'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];
$server = $_SERVER[HTTP_HOST];

$texto = "Enviado por :".$nome." \r\n E-mail :".$email." \r\n Mensagem :".$mensagem;

if($nome == NULL || $email == NULL ||$mensagem == NULL || $assunto == NULL ){
    header("Location:../index.php?msg=1");
}else{


        $mensagemHTML = nl2br($texto);

		// O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
		// O return-path deve ser ser o mesmo e-mail do remetente.
		$headers .= "From: " .$server." \r\n"; // remetente
		$headers .= "Return-Path: " .$server." \r\n"; // return-path
		$headers .= "Reply-To: " .$server." \r\n"; // Endereço (devidamente validado) que o seu usuário informou no contato

		$envio = mail($para, $assunto, $mensagemHTML);

		 if($envio){
			header("location:../index.php?msg=2");  // Página que será redirecionada
		}else{
			header("location:../index.php?msg=3");
		}





}
//header("Location:../pgs/contato.php?msg=4");

?>
