<?php

class ProblematicBehavior extends ModelBehavior {

	public function setup($Model, $settings) {
		$schema = $Model->schema();
	}

}