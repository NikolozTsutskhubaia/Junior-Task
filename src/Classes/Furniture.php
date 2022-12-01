<?php

class Furniture extends Product
{
    public static $field = 'Dimensions';
    public static $unit  = '';

    public function __construct($post)
    {
        $this->SKU = $post['SKU'];
        $this->name = $post['Name'];
        $this->price = $post['Price'];
        $this->type = 'Furniture';
        $this->value = $post['Furniture1'] . 'x' . $post['Furniture2'] . 'x' . $post['Furniture3'];
    }
}
