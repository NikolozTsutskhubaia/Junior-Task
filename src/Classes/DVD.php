<?php

class DVD extends Product
{
    public function __construct($post)
    {
        $this->SKU = $post['SKU'];
        $this->name = $post['name'];
        $this->price = $post['price'];
        $this->type = 'DVD';
        $this->value = $post['DVD'];
    }
}
