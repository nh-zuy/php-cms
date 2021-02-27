<?php 

class Framework {
	/* The core of my own framework */
	public static function run() {
		self::init();
		self::autoload();
		self::dispatch();
	}

	/**
	 * Configure global variables
	**/
	private static function init() {

		/* Initialize SESSION */
		session_start();

		define("DS", DIRECTORY_SEPARATOR);
		
		/* Hmm it's bad but it work, so OK =)) */
		define("ROOT", getcwd() . DS . ".." . DS );

		// Root folder
			/**
			 *	- application
			 *	- framework
			 *	- public
			 *	- themes
			 **/
			define("APP_PATH", ROOT . 'application' . DS );
			define("FRAMEWORK_PATH", ROOT . "framework" . DS);
			define("PUBLIC_PATH", ROOT . "public" . DS);
			define("THEME_PATH", ROOT . "themes" .DS);
		
		// "Application" folder
			/**
			 *	- config
			 *	- controllers
			 *	- models
			 *	- modules
			 *	- views
			 *	- helpers
			 **/
			define("CONFIG_PATH", APP_PATH . "config" . DS);
			define("CONTROLLER_PATH", APP_PATH . "controllers" . DS);
			define("MODEL_PATH", APP_PATH . "models" . DS);
			define("MODULE_PATH", APP_PATH . "modules" . DS);
			define("VIEW_PATH", APP_PATH . "views" . DS);
			define("WIDGETS_PATH", APP_PATH . "widgets" . DS);

		// "Framework" folder
			/**
			 *	- core
			 *	- database: mySQL
			 *	- libraries
			 *	- helpers
			 **/
			define("CORE_PATH", FRAMEWORK_PATH . "core" . DS);
			define('DB_PATH', FRAMEWORK_PATH . "database" . DS);
			define("LIB_PATH", FRAMEWORK_PATH . "libraries" . DS);
			define("HELPER_PATH", FRAMEWORK_PATH . "helpers" . DS);

		// "Public" folder
			/**
			 *	userfiles
			 *	plugin
			 **/
			define("UPLOAD_PATH", "\public\userfiles" . DS);
			define("PLUGIN_PATH", PUBLIC_PATH . "plugin" . DS);

		/* Routing */
			/* Handle request */
			/** 
			 * Pattern: {module}/{controller}/{action}/{params...}
			 * Front-end: {module}/{action}/{params...}
			 * Back-end: {module}/admin/{action}/{params...}
			 **/

			/* Parse URL */
			if(isset($_GET['url'])){
	        	$url = rtrim($_GET['url'], '/');
	        	$url = filter_var($url, FILTER_SANITIZE_URL);
	        	$url = explode('/', $url);
	        };

	        /* Handle request */
	        	// Back-end: {module}/admin/{action}/{params...}
	        	// Front-end: {module}/{action}/{params...}

	        	// Admin dashboard: /admin/

        	$module = 'home';
        	$controller = 'Default';
        	$action = 'index';
        	$params = null;

        	if (isset($url[0])) {
        		if ($url[0] === 'admin') {
        			/* Admin dashboard */
        			$module = 'home';
        			$controller = 'Admin';
        		} else {
        			$module = $url[0];

        			$platform = array('admin', 'default');

        			if (isset($url[1]) && in_array($url[1], $platform)) {
        				// {module}/admin/{action}/{params...}
        				$controller = ucfirst($url[1]);
        				$action = (isset($url[2])) ? $url[2] : 'index';
        				$params = (isset($url[3])) ? $url[3] : null;
        			} else {
        				// {module}/{action}/{params...}
        				$controller = 'Default';
        				$action = (isset($url[1])) ? $url[1] : 'index';
        				$params = (isset($url[2])) ? $url[2] : null;
        			}
        		}
        	};

        	/* Login */
        	if ($controller === 'Admin' && !isset($_SESSION['admin'])) {
        		$module = 'home';
        		$action = 'login';
        		$params = null;
        	};

        	//debug
        	// echo 'Module: ' . $module;
        	// echo '<pre>Controller: ' . $controller . '</pre>';
        	// echo '<pre>Action: ' . $action . '</pre>';
        	// echo $params;
        	// die;

			define("MODULE", $module);
			define("CONTROLLER", $controller);
			define("PLATFORM", (CONTROLLER == "Default") ? "default" : "admin");
			define("ACTION", $action);
			define("PARAMS", $params);

		/* Working directory */
			/**
			 *	modules
			 *		- controllers
			 *		- models
			 *		- views
			 **/
			define("CURR_MODULE_PATH", MODULE_PATH . MODULE . DS);
			define("CURR_CONTROLLER_PATH", CURR_MODULE_PATH . DS . "controllers" . DS);
			define("CURR_MODEL_PATH", CURR_MODULE_PATH . DS . "models" . DS);

		/** View
		 * Depend on Theme exists. 
		 * If the theme view doesn't exist, use the default view.
		 *	view
		 *		- admin\layouts
		 *		- default\layouts
		 *		- error		
		 **/
		define("CURR_VIEW_PATH", CURR_MODULE_PATH . "views" . DS . PLATFORM . DS);
		define("LAYOUTS_PATH", VIEW_PATH . PLATFORM . DS . "layouts" . DS);
		define("ERROR_PATH", VIEW_PATH . "error" . DS);
		
		/* Loading base components */
			/**
			 *	Base Controller
			 *	Base Model
			 *	Base Helper
			 *	Base Database
			 **/
			require(CORE_PATH . "Controller.php");
			require(CORE_PATH . "Loader.php");
			require(DB_PATH . "Mysql.php");
			require(CORE_PATH . "Model.php");
			require(HELPER_PATH . "Common.php");

		/* Loading optional components */
			// helpers
			$helperPath = APP_PATH . "helpers/Common.php";
			if (file_exists($helperPath)) {
				require_once($helperPath);
			};

		/* Configure parameters */
		$GLOBALS['config'] = include_once(CONFIG_PATH . "config.php");

	}

	/**
	 * Auto loading
	 * Controler and action
	**/
	private static function autoload() {
		spl_autoload_register(array(__CLASS__,'load'));
	}
	/**
	 * Auto loading utility function
	**/
	private static function load($className) {
		/* Loading the expert controller/model */
		if (substr($className, -10) == "Controller") {
			// application/module/controllers
			$controllerPath = CURR_CONTROLLER_PATH . "{$className}.php";

			// Check if controller exists
			if (file_exists($controllerPath)) {
				require_once($controllerPath);	
			} else {
				die(require_once(ERROR_PATH . "404.php"));
			};
		} else if (substr($className, -5) == "Model") {
			// application/module/model
			$modelPath = CURR_MODEL_PATH . "{$className}.php";

			// Check if model exists
			if (file_exists($modelPath)) {
				require_once($modelPath);	
			} else {
				die(require_once(ERROR_PATH . "404.php"));
			};
		};
	}
	
	/** 
	 * Dispatching to Controller -> action
	 **/
	private static function dispatch(){
		$controllerName = CONTROLLER . "Controller";
		$action = ACTION;
		$params = PARAMS;

		// Check if method exists
		if (method_exists($controllerName, $action)) {
			$controller = new $controllerName;
		
			$controller->$action($params);
		} else {
			die(require_once(ERROR_PATH . "404.php"));
		}
	}
}