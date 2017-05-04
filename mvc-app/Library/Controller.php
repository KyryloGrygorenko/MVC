<?php

abstract class Controller
{
    // todo: make as public static function
    public function render($view)
    {
        $dir = str_replace('Controller', '', get_class($this));
        $file = VIEW_DIR . $dir . DS . $view;
        
        if (!file_exists($file)) {
            throw new Exception("{$file} not found!!");
        }
        
        ob_start();
        require $file;
        return ob_get_clean();
    }
}