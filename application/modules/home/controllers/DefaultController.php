<?php

/**
 * Module Home
 * Front-end part
 **/
class DefaultController extends Controller {
	
	/**
	 *
	 *
	 **/
	public function index() {
		$title = CONTROLLER . " -> " . ACTION;

		return $this->render("index");
	}
}