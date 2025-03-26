<?php


// function send(object $data){
//     $to = 'souolucas2009@gmail.com.br';
//     $subject = 'teste';
//     $message = 'mensagem teste';
//     $headers = "From: {$data->email}" . "\r\n" .
//     'Reply-To: contato@devclass.com.br' . "\r\n" .
//     'X-Mailer: PHP/' . phpversion();

//     return mail($to, $subject, $message, $headers);
// }

function send(array $data) {
	$email = new PHPMailer\PHPMailer\PHPMailer;
	$email->CharSet = 'UTF-8';
	$email->SMTPSecure = 'ssl';
	$email->isSMTP();
	$email->Host = 'smtp.mailtrap.io';
	$email->Port = 465;
	$email->SMTPAuth = true;
	$email->Username = '512bf67bbc891e';
	$email->Password = 'e9591bd8a9c5cd';
	$email->isHTML(true);
	$email->setFrom('souolucas2009@gmail.com');
	$email->FromName = 'Nome';
	$email->addAddress($data['para']);
	$email->Body = $data['mensagem'];
	$email->Subject = $data['assunto'];
	$email->AltBody = 'Para ver esse email tenha certeza de estar vendo em um programa que aceita ver HTML';
	$email->MsgHTML($data['mensagem']);

	return $email->send();
}