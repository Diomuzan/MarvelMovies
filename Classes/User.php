<?php

class User
{
    public $id;
    public $fname;
    public $lname;
    public $email;
    public $password;
    public $role;

    public function __construct()
    {
        settype($this->id, 'integer');
    }
}
