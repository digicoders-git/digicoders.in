<?php
defined('BASEPATH') or exit('No direct script access allowed');

$config['smtp_noreply'] = array(
	'protocol' => 'smtp',
	// 'smtp_host' => 'mail.digicoders.in',
	'smtp_host' => 'smtp.gmail.com',
	// 'smtp_port' => 465,
	'smtp_port' => 587,
	// 'smtp_user' => 'noreply@digicoders.in',
	// 'smtp_user' => 'saurabhkumarssp@gmail.com',
	 'smtp_user' => 'devdigicoders@gmail.com',
	// 'smtp_pass' => 'VU1*M3W5WGggqakt',
	'smtp_pass' => 'iiiolwdzarguhsui',
	// 'smtp_pass' => 'lfkbaadjwvkvfmtx',
	// 'smtp_crypto' => 'ssl',
	'smtp_crypto' => 'tls',
	'mailtype' => 'html',
	'charset' => 'utf-8',
	'newline' => "\r\n",
	'crlf' => "\r\n",
	'wordwrap' => TRUE
);
