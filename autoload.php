<?php
spl_autoload_register('load');
function load($class)
{

    if (file_exists("./inc/classes/$class.class.php")) {
        require_once "./inc/classes/$class.class.php";
    } else if (file_exists("./inc/ctl/$class.php")) {
        require_once "./inc/ctl/$class.php";
    }
}
