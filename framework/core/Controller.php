<?php

/**
 *	Base controller
 *	Another controller enxtends base controller
 *	Loader / Render view 
 **/
class Controller {
	protected $loader;

	public function __construct() {
		$this->loader = new Loader;
	}

	public function render($view, $data = array()) {
		foreach ($data as $key => $value) {
			$$key = $value;
		};

		/* 2 options view */
			/**
			 *	Theme: ./theme/{platform}
			 *	Module view: ./application/modules/view/{platform}
			 **/

		// Theme view -:- Default view
		$themePath = THEME_PATH . PLATFORM . DS . MODULE . DS . "{$view}.php";
		$viewPath = CURR_VIEW_PATH . "{$view}.php";

		// Check if theme view exists
		if (file_exists($themePath)) {
			return require($themePath);
		} else {
			// Load the default view
			return require($viewPath);
		}
		
	}

	public function redirect($url, $message, $wait = 0) {
		/* Redirect to another page */
		if ($wait == 0) {
			header("Location:{$url}");
		} else {
			include(CURR_VIEW_PATH . "message.html");
		};

		/* If can't redirect, stop the application */
		session_end();
		exit();
	}
}