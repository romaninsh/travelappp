<?php

require 'init.php';
$reg = $app->layout->add('Button');
$reg->set('For clients');
$reg->link('reg.php');
$manager = $app->layout->add('Button');
$manager->set('For managers');
$manager->link('manager.php');
