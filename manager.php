<?php
	require 'init.php';
	$list=$app->layout->add('CRUD');
	$list->setModel(new client($db));
	