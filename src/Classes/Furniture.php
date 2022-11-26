<?php

class Furniture extends Product
{
    public function __construct($post)
    {
        $this->SKU = $post['SKU'];
        $this->name = $post['name'];
        $this->price = $post['price'];
        $this->type = 'Furniture';
        $this->value = $post['Furniture1'] . 'x' . $post['Furniture2'] . 'x' . $post['Furniture3'];
    }
}
