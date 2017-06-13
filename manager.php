<?php

require 'init.php';
$list = $app->layout->add('CRUD');
$list->setModel(new client($db));
$list->addColumn('name', new \atk4\ui\TableColumn\Link('reg.php?id={$id}'));
