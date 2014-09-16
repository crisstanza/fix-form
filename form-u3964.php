<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2014.1.375
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Contato Formulário envio',
	'heading' => 'Envio de novo formulário',
	'success_redirect' => '',
	'email' => array(
		'from' => 'sac@multimoneycorretora.com.br',
		'to' => 'sac@multimoneycorretora.com.br'
	),
	'fields' => array(
		'custom_U3971' => array(
			'type' => 'string',
			'label' => 'Nome',
			'required' => true,
			'errors' => array(
				'required' => 'O campo \"Nome\" é obrigatório.'
			)
		),
		'Email' => array(
			'type' => 'email',
			'label' => 'Email',
			'required' => true,
			'errors' => array(
				'required' => 'O campo \"Email\" é obrigatório.',
				'format' => 'O campo \"Email\" possui um email inválido.'
			)
		),
		'custom_U3967' => array(
			'type' => 'string',
			'label' => 'Empresa',
			'required' => true,
			'errors' => array(
				'required' => 'O campo \"Empresa\" é obrigatório.'
			)
		),
		'custom_U3976' => array(
			'type' => 'string',
			'label' => 'Cidade',
			'required' => true,
			'errors' => array(
				'required' => 'O campo \"Cidade\" é obrigatório.'
			)
		),
		'custom_U3980' => array(
			'type' => 'string',
			'label' => 'Mensagem',
			'required' => true,
			'errors' => array(
				'required' => 'O campo \"Mensagem\" é obrigatório.'
			)
		)
	)
);

process_form($form);
?>
