<?php
	require 'init.php';
	require 'lib\client.php';
	$form=$app->layout->add('Form');
	$form->setModel(new client($db));
	$form->onSubmit(function($form) {
		$form->model->save();
		return $form->success('Have a great vacation!');
			
	});
