<?php
class client extends \atk4\data\Model {
	public $table = 'client';	
	function init() {
		parent::init();
		$this->addFields(['name','surname','email','destination']);
	}
}