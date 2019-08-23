<?php
class controller extends db
{
    protected function doSomething()
    {

    }
    public function CreateView($viewName)
    {
        require_once "./inc/views/$viewName.php";
        $this->doSomething();
    }

}
