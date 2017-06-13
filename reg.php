<?php

require 'init.php';

$id = $app->stickyGet('id');
if (!$id) {
    $message = $app->layout->add('Message');
    $message->set('Please use link from manager.php');
    $message->addClass('error');
    exit;
}

$model = new Client($db);
$model->load($app->stickyGet('id'));

$message = $app->layout->add('Message');
$message->set('Please provide your feedback, '.$model['name']);

$form = $app->layout->add('Form');
$form->setModel($model, ['destination']); // TODO use feedback field here
$form->onSubmit(function ($form) {
    $form->model->save();

    return $form->success('Did you like your cruise, '.$form->model['name'].' ? Enter feedback in the field below.');
});

$back = $form->add('Button');
$back->set('Back');
$back->link('index.php');
