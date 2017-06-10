<?php
	require 'init.php';
	$form=$app->layout->add('Form');
	$form->setModel(new client($db));
	$form->onSubmit(function($form) {
//		if ($form->client['name']<>NULL and $form->client['surname']<>NULL and $form->client['email']<>NULL and $form->client['destination']<>NULL) {
			$form->model->save();
			return $form->success('Have a great vacation, '.$form->model['name'].' !!!');
/*		}
		else {
			if ($form->client['name']==NULL) {
				return $form->error('name',"You must fill this field!");
			}
			if ($form->client['surname']==NULL) {
				return $form->error('surname',"You must fill this field!");
			}
			if ($form->client['email']==NULL) {
				return $form->error('email',"You must fill this field!");
			}	
			if ($form->client['destination']==NULL) {
				return $form->error('destination',"You must fill this field!");
			}
		}  */
		
	});
	
	$back=$app->layout->add('Button');
	$back->set('Back');
	$back->link('index.php');
