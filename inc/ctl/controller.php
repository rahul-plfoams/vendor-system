<?php
class controller extends db
{

    public static function CreateView($viewName)
    {
        require_once "./inc/views/$viewName.php";
        // static::doSomething();
    }
}
