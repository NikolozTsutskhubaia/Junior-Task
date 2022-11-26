<?php

class Book extends Product
{
    public function __construct($post)
    {
        $this->SKU = $post['SKU'];
        $this->name = $post['name'];
        $this->price = $post['price'];
        $this->type = 'Book';
        $this->value = $post['Book'];
    }
}
