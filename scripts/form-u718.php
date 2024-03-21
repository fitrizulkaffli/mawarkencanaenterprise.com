<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2018.1.1.386
*/

require_once('form_process.php');

$form = array(
	'subject' => 'E-mel Web Penyerahan',
	'heading' => 'Penyerahan Borang Baru',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Disemak',
		'checkbox_unchecked' => 'Tidak disemak',
		'submitted_from' => 'Borang diserahkan daripada laman web: %s',
		'submitted_by' => 'Alamat IP Pelawat: %s',
		'too_many_submissions' => 'Terlalu banyak penyerahan terkini daripada IP ini',
		'failed_to_send_email' => 'Gagal menghantar e-mel',
		'invalid_reCAPTCHA_private_key' => 'Kunci peribadi reCAPTCHA tidak sah.',
		'invalid_reCAPTCHA2_private_key' => 'Invalid reCAPTCHA 2.0 private key.',
		'invalid_reCAPTCHA2_server_response' => 'Invalid reCAPTCHA 2.0 server response.',
		'invalid_field_type' => 'Jenis medan tidak diketahui \'%s\'.',
		'invalid_form_config' => 'Medan \'%s\' mempunyai konfigurasi yang tidak sah.',
		'unknown_method' => 'Kaedah permintaan pelayan tidak diketahui'
	),
	'email' => array(
		'from' => 'dummy@email.web',
		'to' => 'dummy@email.web'
	),
	'recaptcha2' => array(
		'private_key' => '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe'
	),
	'fields' => array(
		'custom_U731' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Name',
			'required' => true,
			'errors' => array(
				'required' => 'Medan \'Name\' diperlukan.'
			)
		),
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'EMAIL',
			'required' => true,
			'errors' => array(
				'required' => 'Medan \'EMAIL\' diperlukan.',
				'format' => 'Medan \'EMAIL\' mempunyai e-mel yang tidak sah.'
			)
		),
		'custom_U735' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'MESSAGE',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U727' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'CELL PHONE',
			'required' => false,
			'errors' => array(
			)
		),
		'g-recaptcha-response' => array(
			'order' => 5,
			'type' => 'recaptcha2',
			'label' => 'Pengesahan Imej',
			'required' => true,
			'errors' => array(
				'required' => 'Medan \'Pengesahan Imej\' diperlukan.',
				'format' => 'Incorrect reCAPTCHA 2.0 value.'
			)
		)
	)
);

process_form($form);
?>
