<?php


class Category
{
    public $id;
    public $name;
    public $description;

    public function __construct()
    {
        settype($this->id, 'integer');
    }
}