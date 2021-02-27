<?php

/**
 *  Render frequent components
 *  Store in "widgets" folder
 *
 **/
if (!function_exists('Widget')) {
    function Widget($widget, $data = array()) {
        foreach ($data as $key => $value) {
            $$key = $value;
        };

        /* Check if widgets exists */
        $widgetPath = WIDGETS_PATH . "{$widget}.php";

        if (file_exists($widgetPath)) {
            return require(WIDGETS_PATH . "{$widget}.php");
        } else {
            die(require_once(ERROR_PATH . "500.php"));
        };
    }
} 

/**
 *  Render the include views
 *  Store in "layouts" folder
 *  ex: head, header, footer, menu, ...
 **/
if (!function_exists('Render')) {
    function Render($include, $data = array()) {
        foreach ($data as $key => $value) {
            $$key = $value;
        };

        /* 2 options layouts */
            /**
             *  Theme: ./theme/{platform}/layouts
             *  Module view: ./application/modules/view/{platform}/layouts
             **/
            $themePath = THEME_PATH . PLATFORM . DS . "layouts" . DS . "{$include}.php";
            $viewPath = LAYOUTS_PATH . "{$include}.php";

        // Check if theme view exists
        if (file_exists($themePath)) {
            return require($themePath);
        } else {
            // Load the default view
            return require($viewPath);
        }
    }
}

?>