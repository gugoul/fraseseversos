<?php
	$config = array(
		'frases' => array(array(
			'field' => 'frase',
			'label' => 'Frase',
			'rules' => 'required|trim|xss_clean')//,
			/*array(
			'field' => '',
			'label' => '',
			'rules' => ''),
			array(
			'field' => '',
			'label' => '',
			'rules' => '')*/),
		'versos' => array(array(
			'field' => 'verso',
			'label' => 'Verso',
			'rules' => 'required|trim|xss_clean'))
	);