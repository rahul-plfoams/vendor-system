<?php
class checklogin extends controller
{
    public static function doSomething()
    {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $_POST['email'] == 'admin' && $_POST['password'] ? header('location:admin') : header('location:vendor');
        };
    }
}
