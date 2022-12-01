<?php

class DVD extends Product
{
    public static $field = 'Size';
    public static $unit  = 'MB';

    public function __construct($post)
    {
        $this->SKU = $post['SKU'];
        $this->name = $post['Name'];
        $this->price = $post['Price'];
        $this->type = 'DVD';
        $this->value = $post['DVD'];
    }
}
