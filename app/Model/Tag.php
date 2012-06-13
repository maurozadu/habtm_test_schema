<?php

class Tag extends AppModel {

	public $hasAndBelongsToMany = array('Post');


	public function getAll() {
		return $this->find('all');
	}

}
