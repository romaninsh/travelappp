<?php

class Client extends \atk4\data\Model
{
    public $table = 'client';

    public function init()
    {
        parent::init();
        $this->addFields(['name', 'surname', 'email', 'destination']);
    }
}
