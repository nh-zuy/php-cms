<?php

/**
 *	Loading another component
 *	Libraries / Helpers
 **/
class Loader {
	public function library($lib) {
		return include(LIB_PATH . "{$lib}.php");
	}

	public function helper($file) {
		return include(HELPER_PATH . "{$file}.php");
	}
}