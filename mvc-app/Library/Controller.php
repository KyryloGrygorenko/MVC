<?php

abstract class Controller
{
    // todo: make as public static function
    public static $dir;
    public static $file;

    public static function render($view,$route)
    {
        self::$dir=ucfirst($route[0]);
        self::$file = VIEW_DIR . self::$dir . DS . $view;

        ob_start();
        require self::$file;
        return ob_get_clean();
    }
    //TODO DONE
    
    
    // public function render($view)
    // {
    //     $dir = str_replace('Controller', '', get_class($this));
    //     $file = VIEW_DIR . $dir . DS . $view;
        
    //     if (!file_exists($file)) {
    //         throw new Exception("{$file} not found!!");
    //     }
        
    //     ob_start();
    //     require $file;
    //     return ob_get_clean();
    // }
}