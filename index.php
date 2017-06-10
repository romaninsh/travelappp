<?php
	require 'init.php';
	$form=$app->layout->add('Form');
	$form->setModel(new client($db));
	$form->onSubmit(function($form) {
		if ($form->client['name']<>'') and ($form->['surname']<>'') and ($form->['email']<>'') and ($form->['vacation']<>'') {
		$form->model->save();
		return $form->success('Have a great vacation, '.$form->model['name'].' !!!');
		}
		else return $form->error('You must fill all the fields!');
			
	});
