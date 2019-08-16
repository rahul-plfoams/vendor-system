<?php
class user
{
    private $name;
    private $phone;
    private $email;
    private $password;

    public function __construct($name, $phone, $email, $password)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->password = $password;
        return $this->storeUser();
    }
    public function storeUser()
    {
        $sql = "insert into users_login(name,phone,email,password) values($this->name,$this->phone,$this->email,$this->password)";
    }
}
