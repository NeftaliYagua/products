<?php

namespace LaravelSchema\Products;

class Products
{
    public function holamundo(String $sName)
    {
        return 'Hi ' . $sName . '! How are you doing today?';
    }
}