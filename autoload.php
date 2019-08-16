<?php
spl_autoload_register('load');
function load($class)
{
    include_once "./inc/classes/$class.class.php";
}
