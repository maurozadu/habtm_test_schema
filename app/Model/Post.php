<?php

class Post extends AppModel {

	public $hasAndBelongsToMany = array('Tag');


	public function getAll() {
		return $this->find('all');
	}

}