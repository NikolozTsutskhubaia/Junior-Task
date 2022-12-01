<?php

class Book extends Product
{
    public static $field = 'Weight';
    public static $unit  = 'KG';

    public function __construct($post)
    {
        $this->SKU = $post['SKU'];
        $this->name = $post['Name'];
        $this->price = $post['Price'];
        $this->type = 'Book';
        $this->value = $post['Value'];
    }
}
