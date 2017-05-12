<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 1);

	date_default_timezone_set('America/Sao_Paulo');
	require($_SERVER['DOCUMENT_ROOT'].'/encanto/wp-load.php');
	$base = get_site_url();
	$emaildestinatario = 'vendas@catalogoencanto.com.br';

	if (isset($_POST)) {
		if (isset($_GET['action'])) {
			$base = $base . '/seja-consultora/';

			$data['name'] = $_POST['name'];
			$data['email'] = $_POST['email'];
			$data['phone'] = $_POST['telefone'];
			$data['pageFrom'] = $_GET['pageFrom'];
			$data['pageFrom'] =  str_replace("'","",$data['pageFrom']);
			$data['pageFrom'] =  str_replace("/","",$data['pageFrom']);
			$data['pageFrom'] =  str_replace("\\","",$data['pageFrom']);
			$data['subject'] = "Contato via formulário " . $data['pageFrom'];
			$data['subject'] = utf8_decode($data['subject']);		
			$remetente = $data['email'];

			$data['messageHTML'] = "<body style='font-family: Helvetica, Arial, Sans-Serif;color: #484848;padding: 0;margin: 0;box-sizing: border-box;'><div style='background-color: #fff;background: #fff;width: 100%;margin: 0 auto;'><div style='border-bottom: 1px solid #ddd;background-color: #111;background: #111;width: 100%;color: #fff;padding: 15px;text-align: center;margin-bottom: 10px;'><h1 style='font-size: 1.8rem;'>Contato via formulário " . $data['pageFrom'] . "</h1></div><div style='padding: 15px;font-size: 1.5rem;border-bottom: 1px solid #ccc;'><b>Nome:</b>" . $data['name'] . "</div><div style='padding: 15px;font-size: 1.5rem;border-bottom: 1px solid #ccc;'><b>Email:</b> " . $data['email'] . "</div><div style='padding: 15px;font-size: 1.5rem'><p><b>Telefone:</b> " . $data['phone'] . "</p></div></div></body>";

			$data['messageHTML'] = $data['messageHTML'];

			$headers   =   "MIME-Version: 1.1\r\n";
			$headers  .=   "Content-type: text/html; charset=utf-8\r\n";
			$headers  .=   "From: vendas@catalogoencanto.com.br\r\n";
			$headers  .=   "Return-Path: $remetente \r\n"; 
			$envio   =  mail($emaildestinatario, $data['subject'], $data['messageHTML'], $headers);

			if($envio) {
				$to = $base . '?successform';
				header('Location: ' . $to);
			} else {
				$to = $base . '?errorform';
				header('Location: ' . $to);
			}
		} else {
			$data['name'] = $_POST['name'];
			$data['email'] = $_POST['email'];
			$data['pageFrom'] = $_GET['pageFrom'];
			$data['pageFrom'] =  str_replace("'","",$data['pageFrom']);
			$data['pageFrom'] =  str_replace("/","",$data['pageFrom']);
			$data['pageFrom'] =  str_replace("\\","",$data['pageFrom']);
			$data['message'] = $_POST['message'];
			$data['subject'] = "Contato via formulário " . $data['pageFrom'];
			$data['subject'] = utf8_decode($data['subject']);		
			$remetente = $data['email'];

			$data['messageHTML'] = "<body style='font-family: Helvetica, Arial, Sans-Serif;color: #484848;padding: 0;margin: 0;box-sizing: border-box;'><div style='background-color: #fff;background: #fff;width: 100%;margin: 0 auto;'><div style='border-bottom: 1px solid #ddd;background-color: #111;background: #111;width: 100%;color: #fff;padding: 15px;text-align: center;margin-bottom: 10px;'><h1 style='font-size: 1.8rem;'>Contato via formulário " . $data['pageFrom'] . "</h1></div><div style='padding: 15px;font-size: 1.5rem;border-bottom: 1px solid #ccc;'><b>Nome:</b>" . $data['name'] . "</div><div style='padding: 15px;font-size: 1.5rem;border-bottom: 1px solid #ccc;'><b>Email:</b> " . $data['email'] . "</div><div style='padding: 15px;font-size: 1.5rem'><p><b>Mensagem:</b> " . $data['message'] . "</p></div></div></body>";

			$data['messageHTML'] = $data['messageHTML'];

			$headers   =   "MIME-Version: 1.1\r\n";
			$headers  .=   "Content-type: text/html; charset=utf-8\r\n";
			$headers  .=   "From: vendas@catalogoencanto.com.br\r\n";
			$headers  .=   "Return-Path: $remetente \r\n"; 
			$envio   =  mail($emaildestinatario, $data['subject'], $data['messageHTML'], $headers);

			if($envio) {
				$to = $base . '?successform';
				header('Location: ' . $to);
			} else {
				$to = $base . '?errorform';
				header('Location: ' . $to);
			}
		}
} else {
	$to = $base . '?errorform';
	header('Location: ' . $to);
}
?>