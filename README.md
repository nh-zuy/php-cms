* This's a very simple framework built completely by PHP, based on MVC pattern.
* This project's different from normal MVC, it's HMVC.
* This project's built in a lot of modules.

Folder structure:
** application:
	- config: contains the manual configuration.
	- controllers: contains all the controllers.
	- models: contains all the models.
	- modules: contains all the modules.
	- views: contains all the views of the application.

** framework:
	- core: contains the component base. Ex: controller, model, loader, ...
	- database: working with Database, mySQL.
	- helpers: contains utility functions.
	- libraries: contains external libraries.

** public:
	- css
	- images
	- js
	- userfiles: images, PDF, PPTX, ..., user's uploaded files.
	- plugin: external application. Ex: TinyMCE, fileuploader, ...
	
** themes:
	- admin: Admin view.
	- default: Default view.
	- error

URL pattern: www.abc.com/{module}/{controller}/{action}/{params...}
	* Front-end: /{module}/{action}/{params...}
		** Auto DefaultController.
	* Back-end: /{module}/admin/{action}/{params...}
		** Auto AdminController.

Application contains:
	* Front-end: Default controller.
	* Back-end: Admin controller.

Main functions of application:
	* HVMC architecture.
	* Manage application by modules.
	* Cart products.
	* CRUD products.
	* Login, register account, forgot password.
	* CRUD user.

