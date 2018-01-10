<?php


	$resp = new stdclass();
	require 'phpmailer/class.phpmailer.php';
	require 'phpmailer/class.smtp.php';
	require 'lib/Request.php';
try {

	$contato = new stdclass();
	$nome = $_POST['nome'];
	if ($nome=='') throw new Exception("Por favor, informe seu nome.");
	$contato->nome = $nome;

	$email = $_POST['email'];
	if ($email=='') throw new Exception("Por favor, informe seu e-mail.");
	if (!PHPMailer::ValidateAddress($email)) {
		throw new Exception("Por favor, informe seu e-mail corretamente.");
	}
	$contato->email = $email;

	$mensagem = Request::post('mensagem','');
	if ($mensagem=='') throw new Exception("Por favor, preencha a mensagem.");
	$contato->mensagem = $mensagem;

	$mail = new PHPMailer;
	$mail->isHTML(true);
	$mail->CharSet = 'utf-8';
	$mail->Subject = "Obrigado pelo contato {$nome} | DoubleWeb IT";
	$mail->Sender  = "contato@doubleweb.com.br";
	$mail->SetFrom("contato@doubleweb.com.br","DoubleWeb IT");
	$mail->AddAddress($email,$nome);

	$body = "
			<strong>Nome: </strong>{$contato->nome} <br />
			<strong>E-mail: </strong>{$contato->email} <br />
			<strong>Mensagem: </strong><br />
			".nl2br($contato->mensagem);

			$mail->MsgHTML($body);
			$mail->Send();

			
			$admin = new PHPMailer;
			$admin->IsHTML(true);
			$admin->CharSet = 'utf-8';
			$AdminEmail = 'contato@doubleweb.com.br';
			$AdminName = 'DoubleWeb IT';
			$admin->Sender  = "{$email}";
			$admin->SetFrom($email,$nome);
			$admin->AddAddress($AdminEmail, $AdminName);
			$admin->Subject  = "Contato pelo Site | DoubleWeb IT";
			
			$body = "<strong>Nome: </strong>{$contato->nome} <br />
			<strong>E-mail: </strong>{$contato->email} <br />
 			<strong>Mensagem: </strong><br />
			".nl2br($contato->mensagem);
			
			$admin->Body = $body;
			$admin->MsgHTML($body);
			$admin->Send();
			
	$resp->success = true;
	$resp->msg = "Formulário enviado com sucesso.";

} catch (Exception $e) {
	$resp->success = false;
	$resp->msg = $e->getMessage();
	$resp->line = $e->getLine();
}

echo json_encode($resp,JSON_HEX_QUOT);