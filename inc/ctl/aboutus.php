
<?php
class aboutus extends controller
{
    public static function doSomething()
    {
        print_r(self::query("SELECT * FROM users"));
    }
}