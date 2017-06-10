<?php
	require 'init.php';
	$form=$app->layout->add('Form');
	$form->setModel(new client($db));
	$form->onSubmit(function($form) {
		if ($form->client['name']<>'') and ($form->['surname']<>'') and ($form->['email']<>'') and ($form->['destination']<>'') {
		$form->model->save();
		return $form->success('Have a great vacation, '.$form->model['name'].' !!!');
		}
		else {
			if ($form->client['name']=='') {
				return $form->error('name','You must fill this field!');
			}
			if ($form->client['surname']=='') {
				return $form->error('surname','You must fill this field!');
			}
			if ($form->client['email']=='') {
				return $form->error('email','You must fill this field!');
			}	
			if ($form->client['destination']=='') {
				return $form->error('destination','You must fill this field!');
			}
		}
	});
