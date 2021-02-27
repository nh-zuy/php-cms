<?php

/**
 *	Module Home
 *	Back-end part
 **/


class AdminController extends Controller {

	/**
	 *	Dashboard
	 *
	 **/
	public function index() {
		$title = CONTROLLER . " -> " . ACTION;

		return $this->render("index", [
			'title' => $title
		]);
	}

	/**
	 *
	 *
	 **/
	public function login() {
		$message = '';

		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			if (!isset($_POST['un'])) {
				$message = "Username can't be empty !";
			} else if (!isset($_POST['pw'])) {
				$message = "Password can't be empty !";
			}
			 else {
				$username = validation($_POST['un']);
				$password = validation($_POST['pw']);

				/* Authenticate */
				if ($username != "admin") {
					$message = "The email address or phone number that you've entered doesn't match any account.";
				} else if ($password != "123") {
					$message = "The password that you've entered is incorrect.";
				} else {
					// Login successfully
					$_SESSION['admin'] = true;
					
					return $this->redirect($GLOBALS['config']['base_url'] . DS . MODULE . DS . PLATFORM);
				}
			};
		};

		return $this->render("login", [
			'message' => $message
		]);
	}

	/**
	 *
	 *
	 **/
	public function forgot() {
		die(__METHOD__);
	}
}